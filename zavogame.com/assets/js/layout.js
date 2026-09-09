
function syncLangSelects() {
  let lang = localStorage.getItem('lang') || 'en';
  const selects = [document.getElementById('lang-switch'), document.getElementById('drawer-lang-switch')].filter(Boolean);
  selects.forEach(sel => { sel.value = lang; });
  selects.forEach(sel => {
    sel.onchange = function() {
      lang = this.value;
      localStorage.setItem('lang', lang);
      location.reload();
    };
  });
}
function setupDrawerMenu() {
  const burger = document.getElementById('burger-menu');
  const drawer = document.getElementById('mobile-drawer');
  const closeBtn = document.getElementById('drawer-close');
  const mask = drawer ? drawer.querySelector('.drawer-mask') : null;
  const content = drawer ? drawer.querySelector('.drawer-content') : null;
  if (!burger || !drawer || !closeBtn || !content) return;
  burger.onclick = () => {
    content.classList.remove('drawerOut');
    content.classList.add('drawerIn');
    drawer.classList.add('open');
    document.body.classList.add('drawer-open');
  };
  function closeDrawer() {
    content.classList.remove('drawerIn');
    content.classList.add('drawerOut');
    setTimeout(() => {
      drawer.classList.remove('open');
      document.body.classList.remove('drawer-open');
    }, 210);
  }
  closeBtn.onclick = closeDrawer;
  if (mask) mask.onclick = closeDrawer;
  syncLangSelects();
}
document.addEventListener('DOMContentLoaded', setupDrawerMenu);
