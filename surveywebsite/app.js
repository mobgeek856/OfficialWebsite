const SUBMIT_ENC =
  "GANDG15XTRYdGFUMSAgJFxcOXxhIHxRcAllUBEBCEUADA1IGAh4XSwYSRRICHhdbHB5aAlk=";

function decodeSubmitUrl() {
  const kb = new Uint8Array([0x70, 0x77, 0x37, 0x6b, 0x2d, 0x6d, 0x62, 0x39]);
  const bin = atob(SUBMIT_ENC);
  const n = bin.length;
  const raw = new Uint8Array(n);
  for (let i = 0; i < n; i++) {
    raw[i] = bin.charCodeAt(i) ^ kb[i % kb.length];
  }
  return new TextDecoder().decode(raw);
}

const EMAIL_RE = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
const SUBMIT_MIN_WAIT_MS = 1000;

const FIELD_LIMIT = {
  name: 20,
  phoneNumber: 16,
  companyTitleEmailTeams: 64,
  industry: 256,
};

async function ensureMinWaitSince(startedAt) {
  const left = SUBMIT_MIN_WAIT_MS - (Date.now() - startedAt);
  if (left > 0) await new Promise((r) => setTimeout(r, left));
}

const form = document.getElementById("survey-form");
const formAlert = document.getElementById("form-alert");
const successPanel = document.getElementById("success-panel");
const submitBtn = document.getElementById("submit-btn");
const resultDialog = document.getElementById("result-dialog");
const resultDialogTitle = document.getElementById("result-dialog-title");
const resultDialogMsg = document.getElementById("result-dialog-msg");
const resultDialogMeta = document.getElementById("result-dialog-meta");
const resultDialogClose = document.getElementById("result-dialog-close");
const formSubmitting = document.getElementById("form-submitting");

let resultDialogOnClose = null;

function setSubmitting(isSubmitting) {
  formSubmitting.hidden = !isSubmitting;
  formSubmitting.setAttribute("aria-hidden", isSubmitting ? "false" : "true");
  form.setAttribute("aria-busy", isSubmitting ? "true" : "false");
  if (isSubmitting) form.setAttribute("inert", "");
  else form.removeAttribute("inert");
}
const industryOtherWrap = document.getElementById("industry-other-wrap");
const industryOtherInput = document.getElementById("industryOther");

const fields = {
  companyName: document.getElementById("companyName"),
  name: document.getElementById("name"),
  title: document.getElementById("title"),
  email: document.getElementById("email"),
  phone: document.getElementById("phone"),
  phoneCountry: document.getElementById("phoneCountry"),
  teams: document.getElementById("teams"),
};

function syncPhoneNationalMaxLength() {
  const code = fields.phoneCountry.value;
  const maxDigits = Math.max(0, FIELD_LIMIT.phoneNumber - code.length);
  fields.phone.maxLength = maxDigits > 0 ? maxDigits : 1;
  const digits = fields.phone.value.replace(/\D/g, "");
  if (digits.length > maxDigits) {
    fields.phone.value = digits.slice(0, maxDigits);
  }
}

fields.phoneCountry.addEventListener("change", syncPhoneNationalMaxLength);

function setError(id, message) {
  const el = document.getElementById(`err-${id}`);
  if (el) el.textContent = message || "";

  if (id === "phone") {
    const national = fields.phone;
    const code = fields.phoneCountry;
    if (message) {
      national?.classList.add("field__input--invalid");
      code?.classList.add("field__input--invalid");
    } else {
      national?.classList.remove("field__input--invalid");
      code?.classList.remove("field__input--invalid");
    }
    return;
  }

  const input =
    id === "industry"
      ? null
      : id === "industryOther"
        ? industryOtherInput
        : fields[id];
  if (input && message) input.classList.add("field__input--invalid");
  else if (input && !message) input.classList.remove("field__input--invalid");
}

function clearErrors() {
  formAlert.hidden = true;
  formAlert.textContent = "";
  ["companyName", "name", "title", "email", "phone", "teams", "industry", "industryOther"].forEach(
    (id) => setError(id, "")
  );
}

function getSelectedIndustry() {
  const checked = form.querySelector('input[name="industry"]:checked');
  return checked ? checked.value : "";
}

function syncIndustryOther() {
  const isOther = getSelectedIndustry() === "其它";
  industryOtherWrap.hidden = !isOther;
  if (!isOther) {
    industryOtherInput.value = "";
    setError("industryOther", "");
  }
}

form.querySelectorAll('input[name="industry"]').forEach((radio) => {
  radio.addEventListener("change", syncIndustryOther);
});

function showResultDialog({ title, message, meta, variant, onClose }) {
  resultDialog.classList.remove("result-dialog--success", "result-dialog--error");
  if (variant === "success") resultDialog.classList.add("result-dialog--success");
  if (variant === "error") resultDialog.classList.add("result-dialog--error");

  resultDialogTitle.textContent = title;
  resultDialogTitle.classList.remove("result-dialog__title--success", "result-dialog__title--error");
  if (variant === "success") resultDialogTitle.classList.add("result-dialog__title--success");
  if (variant === "error") resultDialogTitle.classList.add("result-dialog__title--error");

  resultDialogMsg.textContent = message;
  if (meta) {
    resultDialogMeta.hidden = false;
    resultDialogMeta.textContent = meta;
  } else {
    resultDialogMeta.hidden = true;
    resultDialogMeta.textContent = "";
  }

  resultDialogOnClose = typeof onClose === "function" ? onClose : null;
  resultDialog.showModal();
}

resultDialogClose.addEventListener("click", () => {
  resultDialog.close();
});

resultDialog.addEventListener("close", () => {
  const fn = resultDialogOnClose;
  resultDialogOnClose = null;
  if (fn) fn();
});

function parseApiPayload(data, res) {
  const msg = typeof data.msg === "string" ? data.msg : "";
  const code = data.code;

  if (code === 200 || code === "200") {
    return {
      ok: true,
      title: "提交成功",
      message: msg || "提交成功，感谢您的填写",
      // meta: "",
    };
  }

  if (code !== undefined && code !== null && code !== 200 && code !== "200") {
    return {
      ok: false,
      title: "提交失败",
      message: msg || "提交失败，请稍后重试",
      // meta: `code: ${code}`,
    };
  }

  if (!res.ok) {
    return {
      ok: false,
      title: "提交失败",
      message: msg || `请求失败（HTTP ${res.status}），请稍后重试`,
      meta: code !== undefined && code !== null ? `code: ${code}` : `HTTP ${res.status}`,
    };
  }

  return {
    ok: true,
    title: "提交成功",
    message: msg || "提交成功，感谢您的填写",
    meta: "",
  };
}

function validate() {
  clearErrors();
  let ok = true;

  const companyName = fields.companyName.value.trim();
  if (!companyName) {
    setError("companyName", "请输入公司名称");
    ok = false;
  } else if (companyName.length > FIELD_LIMIT.companyTitleEmailTeams) {
    setError("companyName", `公司名称最多 ${FIELD_LIMIT.companyTitleEmailTeams} 个字符`);
    ok = false;
  }

  const name = fields.name.value.trim();
  if (!name) {
    setError("name", "请输入姓名");
    ok = false;
  } else if (name.length > FIELD_LIMIT.name) {
    setError("name", `姓名最多 ${FIELD_LIMIT.name} 个字符`);
    ok = false;
  }

  const title = fields.title.value.trim();
  if (!title) {
    setError("title", "请输入职位");
    ok = false;
  } else if (title.length > FIELD_LIMIT.companyTitleEmailTeams) {
    setError("title", `职位最多 ${FIELD_LIMIT.companyTitleEmailTeams} 个字符`);
    ok = false;
  }

  const email = fields.email.value.trim();
  if (!email) {
    setError("email", "请输入邮箱");
    ok = false;
  } else if (!EMAIL_RE.test(email)) {
    setError("email", "请输入正确的邮箱格式");
    ok = false;
  } else if (email.length > FIELD_LIMIT.companyTitleEmailTeams) {
    setError("email", `邮箱最多 ${FIELD_LIMIT.companyTitleEmailTeams} 个字符`);
    ok = false;
  }

  const phoneRaw = fields.phone.value.trim();
  const phoneDigits = phoneRaw.replace(/\D/g, "");
  const phoneFull = phoneDigits ? `${fields.phoneCountry.value}${phoneDigits}` : "";
  if (!phoneRaw) {
    setError("phone", "请输入手机号码（不含国家码）");
    ok = false;
  } else if (phoneDigits.length < 6) {
    setError("phone", "号码过短，请检查是否漏填");
    ok = false;
  } else if (phoneFull.length > FIELD_LIMIT.phoneNumber) {
    setError("phone", `手机号（含国家码）最多 ${FIELD_LIMIT.phoneNumber} 个字符`);
    ok = false;
  }

  const teamsVal = fields.teams.value.trim();
  if (teamsVal.length > FIELD_LIMIT.companyTitleEmailTeams) {
    setError("teams", `Teams 最多 ${FIELD_LIMIT.companyTitleEmailTeams} 个字符`);
    ok = false;
  }

  const industry = getSelectedIndustry();
  if (!industry) {
    setError("industry", "请选择行业");
    ok = false;
  } else if (industry.length > FIELD_LIMIT.industry) {
    setError("industry", `行业内容最多 ${FIELD_LIMIT.industry} 个字符`);
    ok = false;
  }

  if (industry === "其它") {
    const other = industryOtherInput.value.trim();
    if (!other) {
      setError("industryOther", "请填写具体行业内容");
      ok = false;
    } else if (other.length > FIELD_LIMIT.industry) {
      setError("industryOther", `其它行业说明最多 ${FIELD_LIMIT.industry} 个字符`);
      ok = false;
    }
  }

  return ok;
}

function buildPayload() {
  const industry = getSelectedIndustry();
  const data = {
    companyName: fields.companyName.value.trim(),
    name: fields.name.value.trim(),
    position: fields.title.value.trim(),
    mail: fields.email.value.trim(),
    phoneNumber: (() => {
      const code = fields.phoneCountry.value;
      const digits = fields.phone.value.replace(/\D/g, "");
      return digits ? `${code}${digits}` : "";
    })(),
    teams: fields.teams.value.trim(),
    industry,
    industryOther: industry === "其它" ? industryOtherInput.value.trim() : "",
  };
  console.log("buildPayload data:", data);
  return data;
}

form.addEventListener("submit", async (e) => {
  e.preventDefault();
  if (!validate()) return;

  setSubmitting(true);
  submitBtn.disabled = true;
  const submitStartedAt = Date.now();
  const payload = buildPayload();
  const formData = new FormData();
  Object.entries(payload).forEach(([key, value]) => {
    formData.append(key, value ?? "");
  });

  for (const [key, value] of formData.entries()) {
    console.log(key, value);
  }
  try {
    const res = await fetch(decodeSubmitUrl(), {
      method: "POST",
      body: formData,
    });

    let data = {};
    try {
      const text = await res.text();
      if (text) data = JSON.parse(text);
    } catch {
      data = {};
    }

    const parsed = parseApiPayload(data, res);
    await ensureMinWaitSince(submitStartedAt);

    if (!parsed.ok) {
      showResultDialog({
        title: parsed.title,
        message: parsed.message,
        meta: parsed.meta,
        variant: "error",
      });
      return;
    }

    showResultDialog({
      title: parsed.title,
      message: parsed.message,
      meta: parsed.meta || undefined,
      variant: "success",
      onClose: () => {
        form.hidden = true;
        document.querySelector(".form-section__head").hidden = true;
        successPanel.hidden = false;
        successPanel.querySelector(".success-panel__text").textContent = parsed.message;
      },
    });
  } catch {
    await ensureMinWaitSince(submitStartedAt);
    showResultDialog({
      title: "提交失败",
      message: "网络异常，请检查连接后重试",
      variant: "error",
    });
  } finally {
    setSubmitting(false);
    submitBtn.disabled = false;
  }
});

syncIndustryOther();
syncPhoneNationalMaxLength();
