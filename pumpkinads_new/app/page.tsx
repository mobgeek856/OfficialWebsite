"use client";

import Image from "next/image";

const ASSEST = "/assest/page_res";

function scrollTo(id: string) {
  const el = document.getElementById(id);
  if (el) el.scrollIntoView({ behavior: "smooth", block: "start" });
}

export default function HomePage() {

  return (
    <>
      {/* ========== 1. Hero ========== */}
      <section
        id="home"
        className="relative flex min-h-[calc(100vh-70px)] items-center pt-20"
      >
        <div
          className="absolute inset-0 bg-cover bg-center bg-no-repeat"
          style={{ backgroundImage: `url('${ASSEST}/1/1-1 Home-kv.png')` }}
        />
        <div className="absolute inset-0 bg-gradient-to-b from-[#1a1a2e]/80 to-[#1a1a2e]" />
        <div className="container-custom relative z-10 flex flex-col gap-8 py-16">
          <div className="flex items-center gap-4">
            <Image
              src={`${ASSEST}/1/1-2 Home-icon.svg`}
              alt=""
              width={48}
              height={48}
              className="h-12 w-auto"
            />
            <span className="rounded-full border border-primary/30 bg-primary/10 px-6 py-2 text-sm font-semibold uppercase tracking-wide text-primary">
              Cutting-Edge Ad Tech Solutions
            </span>
          </div>
          <h1 className="max-w-3xl text-4xl font-bold leading-tight md:text-5xl">
            Powering Digital Advertising
            <br />
            <span className="text-primary">Innovating the Future</span>
          </h1>
          <p className="max-w-2xl text-lg text-white/80">
            Programmatic platform, display & video, HTML5 games, PPK SDK—seamless monetization across web, mobile & CTV.
          </p>
          <div className="flex flex-wrap gap-4">
            <button
              onClick={() => scrollTo("solutions")}
              className="rounded-lg bg-primary px-6 py-3 font-semibold text-white transition hover:bg-primary-dark"
            >
              Explore Solutions
            </button>
            <button
              onClick={() => scrollTo("contact")}
              className="rounded-lg border border-white/30 px-6 py-3 font-semibold transition hover:bg-white/10"
            >
              Contact Us
            </button>
          </div>
        </div>
      </section>

      {/* ========== 2. Core Business ========== */}
      <section className="section-padding bg-[#16162a]">
        <div className="container-custom">
          <h2 className="mb-4 text-3xl font-bold md:text-4xl">Core Business</h2>
          <p className="mb-12 max-w-2xl text-white/80">
            Three core technology platforms, building a complete programmatic advertising ecosystem.
          </p>
          <div className="grid gap-8 md:grid-cols-3">
            <div className="group relative overflow-hidden rounded-xl border border-white/10 bg-dark/50 p-6 transition hover:border-primary/30">
              <div className="absolute inset-0 bg-cover bg-center opacity-20 group-hover:opacity-30" style={{ backgroundImage: `url('${ASSEST}/1/1-3 Home-corebusiness-RTB.png')` }} />
              <div className="relative">
                <h3 className="mb-4 text-xl font-semibold text-primary">Solutions-RTB</h3>
                <ul className="mb-4 space-y-2 text-sm text-white/80">
                  <li>• Millisecond-level response</li>
                  <li>• Intelligent algorithm optimization</li>
                  <li>• Data analytics and reporting</li>
                  <li>• Dynamic budget allocation</li>
                </ul>
                <div className="flex flex-wrap gap-3 text-xs">
                  <span className="rounded bg-primary/20 px-2 py-1 text-primary">10B+ daily bidding</span>
                  <span className="rounded bg-primary/20 px-2 py-1 text-primary">&lt;50ms response</span>
                  <span className="rounded bg-primary/20 px-2 py-1 text-primary">98.5% delivery accuracy</span>
                </div>
              </div>
            </div>
            <div className="group relative overflow-hidden rounded-xl border border-white/10 bg-dark/50 p-6 transition hover:border-primary/30">
              <div className="absolute inset-0 bg-cover bg-center opacity-20 group-hover:opacity-30" style={{ backgroundImage: `url('${ASSEST}/1/1-4 Home-corebusiness-html5 games.png')` }} />
              <div className="relative">
                <h3 className="mb-4 text-xl font-semibold text-primary">HTML5 Games</h3>
                <ul className="mb-4 space-y-2 text-sm text-white/80">
                  <li>• Higher engagement</li>
                  <li>• Cross-device and platform compatibility</li>
                  <li>• Faster creative deployment and iteration</li>
                </ul>
                <div className="flex flex-wrap gap-3 text-xs">
                  <span className="rounded bg-primary/20 px-2 py-1 text-primary">1000+ media</span>
                  <span className="rounded bg-primary/20 px-2 py-1 text-primary">95%+ fill rate</span>
                  <span className="rounded bg-primary/20 px-2 py-1 text-primary">5B+ daily traffic</span>
                </div>
              </div>
            </div>
            <div className="group relative overflow-hidden rounded-xl border border-white/10 bg-dark/50 p-6 transition hover:border-primary/30">
              <div className="absolute inset-0 bg-cover bg-center opacity-20 group-hover:opacity-30" style={{ backgroundImage: `url('${ASSEST}/1/1-5 Home-corebusiness-sdk solution.png')` }} />
              <div className="relative">
                <h3 className="mb-4 text-xl font-semibold text-primary">SDK Solution</h3>
                <ul className="mb-4 space-y-2 text-sm text-white/80">
                  <li>• Lightweight SDK design</li>
                  <li>• Support for multiple ad formats</li>
                  <li>• Clean API interfaces</li>
                  <li>• Continuous version updates</li>
                </ul>
                <div className="flex flex-wrap gap-3 text-xs">
                  <span className="rounded bg-primary/20 px-2 py-1 text-primary">1000+ apps</span>
                  <span className="rounded bg-primary/20 px-2 py-1 text-primary">&lt;2MB SDK</span>
                  <span className="rounded bg-primary/20 px-2 py-1 text-primary">&lt;0.01% crash rate</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* ========== 3. Multi-format / Multi-screen ========== */}
      <section className="section-padding">
        <div className="container-custom">
          <h2 className="mb-12 text-center text-2xl font-bold md:text-3xl">
            Maximize the value of your advertising across every format, on any screen
          </h2>
          <div className="relative flex justify-center">
            <Image
              src={`${ASSEST}/2/2-1 solutions-for publisher-anyformat.png`}
              alt="Formats and screens"
              width={900}
              height={400}
              className="w-full max-w-4xl object-contain"
            />
          </div>
          <div className="mt-8 flex flex-wrap justify-center gap-4 text-sm text-white/80">
            {["Display", "Native", "Video", "Reward", "Phone", "Laptop", "Desktop", "CTV", "Web", "App", "Mini program"].map((label) => (
              <span key={label} className="rounded-full border border-white/20 px-4 py-2">{label}</span>
            ))}
          </div>
        </div>
      </section>

      {/* ========== 4. Publisher Value Proposition ========== */}
      <section className="section-padding bg-[#16162a]">
        <div className="container-custom">
          <div className="mb-12 flex justify-center">
            <Image
              src={`${ASSEST}/2/2-2 solutions-for publisher-divider.jpeg`}
              alt=""
              width={800}
              height={200}
              className="max-h-40 w-full object-contain"
            />
          </div>
          <p className="mx-auto mb-12 max-w-3xl text-center text-white/90">
            Your audience, data, and content are your greatest assets—and you should retain full control over how they&apos;re managed. If your focus is on maximizing yield and streamlining operational efficiency, you&apos;re in the right place.
          </p>
          <ul className="mx-auto grid max-w-4xl gap-4 md:grid-cols-2">
            {[
              "Maximize eCPM via real-time bidding",
              "Access massive demand sources to boost fill rates",
              "Data-driven targeting improves relevance and engagement",
              "Real-time analytics, floor pricing & brand safety controls",
              "Auto-scale with traffic; diversified demand stabilizes revenue",
              "Unified management for web, app & mini-program traffic",
            ].map((text, i) => (
              <li key={i} className="flex items-start gap-3 rounded-lg border border-white/10 bg-dark/30 p-4">
                <span className="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-primary/20 text-sm font-bold text-primary">{i + 1}</span>
                <span className="text-white/90">{text}</span>
              </li>
            ))}
          </ul>
        </div>
      </section>

      {/* ========== 5. RTB Partner Steps (preview, full in solutions-rtb) ========== */}
      <section className="section-padding">
        <div className="container-custom">
          <h2 className="mb-8 text-center text-2xl font-bold md:text-3xl">5 steps to become a RTB partner</h2>
          <div className="flex flex-wrap justify-center gap-6">
            {["Ad Request", "Real-Time Auction", "Bid Evaluation", "Ad Delivery", "Reporting & Optimization"].map((step, i) => (
              <div key={i} className="flex flex-col items-center gap-2">
                <span className="flex h-12 w-12 items-center justify-center rounded-full bg-primary text-lg font-bold">{i + 1}</span>
                <span className="text-sm font-medium">{step}</span>
              </div>
            ))}
          </div>
          <div className="mt-8 flex justify-center">
            <Image src={`${ASSEST}/2/2-3 solutions-for publisher-5steps.png`} alt="5 steps" width={700} height={200} className="max-w-full object-contain" />
          </div>
          <div className="mt-8 flex justify-center">
            <button onClick={() => scrollTo("contact")} className="rounded-lg bg-primary px-6 py-3 font-semibold text-white transition hover:bg-primary-dark">
              Monetize Your Traffic
            </button>
          </div>
        </div>
      </section>

      {/* ========== 6. Our RTB Partners ========== */}
      <section className="section-padding bg-[#16162a]">
        <div className="container-custom">
          <h2 className="mb-12 text-center text-2xl font-bold">Our RTB Partners</h2>
          <div className="flex flex-wrap items-center justify-center gap-8">
            {[1, 2, 3, 4, 5, 6, 7, 8, 9].map((n) => (
              <div key={n} className="h-14 w-28 rounded-lg border border-white/10 bg-white/5 p-2 transition hover:border-primary/30 hover:bg-white/10">
                <Image
                  src={`${ASSEST}/2/2-4 solutions-for publisher-logo-${n}.png`}
                  alt={`Partner ${n}`}
                  width={100}
                  height={40}
                  className="h-full w-full object-contain"
                />
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* ========== 7. Advertiser Intro ========== */}
      <section className="section-padding">
        <div className="container-custom flex flex-col items-center gap-12 md:flex-row md:items-center">
          <div className="flex-1">
            <Image
              src={`${ASSEST}/3/3-1 solutions-for advertisers-maximizeyourreach.png`}
              alt="Maximize your reach"
              width={500}
              height={350}
              className="w-full max-w-md object-contain"
            />
          </div>
          <div className="flex-1">
            <h2 className="mb-6 text-2xl font-bold md:text-3xl">Maximize your reach. Optimize every channel.</h2>
            <ul className="mb-8 space-y-3 text-white/90">
              <li>• Premium inventory & partnerships with large media owners</li>
              <li>• Scalable platform & auction efficiency</li>
              <li>• Transparency across the supply chain</li>
            </ul>
            <button onClick={() => scrollTo("contact")} className="rounded-lg bg-primary px-6 py-3 font-semibold text-white transition hover:bg-primary-dark">
              Start a Campaign
            </button>
          </div>
        </div>
      </section>

      {/* ========== 8. Solutions Overview ========== */}
      <section id="solutions" className="section-padding bg-[#16162a] scroll-mt-20">
        <div className="container-custom">
          <h2 className="mb-4 text-3xl font-bold md:text-4xl">Our Solutions</h2>
          <p className="mb-12 max-w-2xl text-white/80">
            Built for advertisers and publishers across the programmatic ecosystem.
          </p>
          <div className="grid gap-6 md:grid-cols-2 lg:grid-cols-4">
            {[
              { id: "solutions-rtb", title: "RTB Solution", desc: "Real-time bidding monetization for publishers. Higher fill rate, eCPM, and transparency." },
              { id: "solutions-advertiser", title: "Advertiser Solution", desc: "All formats, all channels. Premium inventory, addressability, and full-service support." },
              { id: "solutions-html5", title: "HTML5 Ads Solution", desc: "High-engagement interactive HTML5 campaigns and ad exchange for advertisers." },
              { id: "solutions-sdk", title: "SDK Monetization", desc: "Lightweight SDK for publishers. Fast integration, multiple ad formats, stable performance." },
            ].map((card) => (
              <div key={card.id} className="rounded-xl border border-white/10 bg-dark/50 p-6 transition hover:border-primary/30">
                <h3 className="mb-3 text-lg font-semibold text-primary">{card.title}</h3>
                <p className="mb-4 text-sm text-white/80">{card.desc}</p>
                <button onClick={() => scrollTo(card.id)} className="text-sm font-medium text-primary hover:underline">Learn More →</button>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* ========== 9. RTB Solution Section ========== */}
      <section id="solutions-rtb" className="section-padding scroll-mt-20">
        <div className="container-custom">
          <h2 className="mb-4 text-3xl font-bold">RTB Solution for Publishers</h2>
          <p className="mb-8 max-w-2xl text-white/80">
            Help publishers improve fill rate, eCPM, revenue stability, and transparency.
          </p>
          <ul className="mb-10 grid gap-3 md:grid-cols-2">
            {["Real-time bidding monetization", "Access to global demand", "Better yield management", "Brand safety & pricing controls", "Unified traffic management across web/app/mini program", "Real-time reporting"].map((item, i) => (
              <li key={i} className="flex items-center gap-2 text-white/90">
                <span className="h-2 w-2 rounded-full bg-primary" />{item}
              </li>
            ))}
          </ul>
          <div className="flex justify-center">
            <button onClick={() => scrollTo("contact")} className="rounded-lg bg-primary px-6 py-3 font-semibold text-white transition hover:bg-primary-dark">
              Monetize Your Traffic
            </button>
          </div>
        </div>
      </section>

      {/* ========== 10. Advertiser Solution Section ========== */}
      <section id="solutions-advertiser" className="section-padding bg-[#16162a] scroll-mt-20">
        <div className="container-custom">
          <div className="mb-12 flex justify-center">
            <Image src={`${ASSEST}/3/3-2 solutions-for advertisers-divider.png`} alt="" width={800} height={120} className="max-h-24 w-full object-contain" />
          </div>
          <div className="space-y-10">
            {[
              { icon: "3-3 solutions-for advertisers-icon1.png", title: "All formats, all channels.", text: "Through a single, unified platform, we deliver direct access to premium display, video, streaming TV, mobile, and native ad inventory from reputable media owners." },
              { icon: "3-3 solutions-for advertisers-icon2.png", title: "Addressability", text: "Connect with the right audiences at the right time. Our addressability solutions deliver the flexibility and control to scale audience-focused campaigns efficiently." },
              { icon: "3-3 solutions-for advertisers-icon3.png", title: "Services and support", text: "Our dedicated team of experts is here to drive your success. Combining strategic consulting and ongoing support, we work alongside you to scale effectively, boost performance, and deliver strong ROI." },
              { icon: "3-3 solutions-for advertisers-icon4.png", title: "Transact on your terms", text: "Transact on your own terms with tailored buying solutions for every campaign. From direct deals and curated marketplaces to the open exchange, we offer streamlined access to inventory and flexible purchasing capabilities." },
              { icon: "3-3 solutions-for advertisers-icon5.png", title: "Data and analytics", text: "Turn insights into action with comprehensive analytics and tailored reporting to optimize campaign performance. Achieve full visibility into ad spend with transparent impression-level reporting via our Client Audit Logs, delivering a verified record for every transaction." },
            ].map((block, i) => (
              <div key={i} className="flex gap-6">
                <Image src={`${ASSEST}/3/${block.icon}`} alt="" width={56} height={56} className="h-14 w-14 shrink-0 object-contain" />
                <div>
                  <h3 className="mb-2 text-xl font-semibold text-primary">{block.title}</h3>
                  <p className="text-white/85">{block.text}</p>
                </div>
              </div>
            ))}
          </div>
          <div className="mt-12 flex justify-center">
            <button onClick={() => scrollTo("contact")} className="rounded-lg bg-primary px-6 py-3 font-semibold text-white transition hover:bg-primary-dark">
              Start a Campaign
            </button>
          </div>
        </div>
      </section>

      {/* ========== 11. HTML5 Ads Solution Section ========== */}
      <section id="solutions-html5" className="section-padding scroll-mt-20">
        <div className="container-custom flex flex-col gap-12 md:flex-row md:items-center">
          <div className="flex-1">
            <h2 className="mb-4 text-2xl font-bold md:text-3xl">ADX · High-Engagement HTML5 Advertising</h2>
            <p className="mb-6 text-white/85">
              A performance-focused ad exchange built for advertisers to run interactive HTML5 campaigns.
            </p>
            <button onClick={() => scrollTo("contact")} className="rounded-lg bg-primary px-6 py-3 font-semibold text-white transition hover:bg-primary-dark">
              Start a Campaign
            </button>
          </div>
          <div className="flex-1">
            <Image src={`${ASSEST}/4/4-1 solutions-html5 games-1.png`} alt="HTML5 Ads" width={500} height={320} className="w-full object-contain" />
          </div>
        </div>
        <div className="container-custom mt-16 flex flex-col gap-12 md:flex-row md:items-center">
          <div className="flex-1">
            <Image src={`${ASSEST}/4/4-2 solutions-html5 games-2.png`} alt="Ad delivery" width={450} height={300} className="w-full object-contain" />
          </div>
          <div className="flex-1">
            <h3 className="mb-6 text-xl font-bold">Leverage the most advanced ad delivery technology to maximize revenue.</h3>
            <p className="mb-6 text-white/80">Unlock multiple formats and delivery methods to maximize your revenue with minimal changes to your existing systems.</p>
            <ul className="space-y-4">
              {["Support for Rich Media Ad Formats", "Header Bidding", "Support for Special Implementations", "Smart SDK"].map((item, i) => (
                <li key={i} className="flex items-center gap-3">
                  <Image src={`${ASSEST}/4/4-3 solutions-html5 games-icon.png`} alt="" width={24} height={24} />
                  <span className="text-white/90">{item}</span>
                </li>
              ))}
            </ul>
          </div>
        </div>
        <div className="container-custom mt-16">
          <div className="mb-8 flex justify-center">
            <Image src={`${ASSEST}/4/4-4 solutions-html5 games-divider.png`} alt="" width={700} height={80} className="max-h-20 w-full object-contain" />
          </div>
          <div className="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
            {[
              { icon: "4-5 solutions-html5 games-icon1.png", title: "Cross-platform", text: "Based on web technology, H5 ads display smoothly on mobile, PC, tablet, APP, and mini-programs. One production enables full-network placement." },
              { icon: "4-5 solutions-html5 games-icon2.png", title: "Better Interaction", text: "Supports sliding, clicking, animation, forms, games. It turns passive ads into active interaction, significantly improving CTR and dwell time." },
              { icon: "4-5 solutions-html5 games-icon3.png", title: "Fast Update", text: "No download or re-review required. Supports real-time edits of copy, assets, and rules, quickly responding to trends and data." },
              { icon: "4-5 solutions-html5 games-icon4.png", title: "Data Visible", text: "Accurately tracks exposure, clicks, conversions, dwell time, shares. Supports real-time monitoring and attribution." },
              { icon: "4-5 solutions-html5 games-icon5.png", title: "Programmatic Ready", text: "Fully compatible with ADX, RTB, DSP, and programmatic ecosystems. Supports precise targeting, batch placement, and smart bidding." },
            ].map((item, i) => (
              <div key={i} className="rounded-xl border border-white/10 bg-dark/30 p-6">
                <Image src={`${ASSEST}/4/${item.icon}`} alt="" width={48} height={48} className="mb-3" />
                <h4 className="mb-2 font-semibold text-primary">{item.title}</h4>
                <p className="text-sm text-white/80">{item.text}</p>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* ========== 12. SDK Monetization Section ========== */}
      <section id="solutions-sdk" className="section-padding bg-[#16162a] scroll-mt-20">
        <div className="container-custom flex flex-col gap-12 md:flex-row md:items-center">
          <div className="flex-1">
            <h2 className="mb-4 text-2xl font-bold md:text-3xl">SDK Monetization · Built for Publishers</h2>
            <p className="mb-6 text-white/85">
              A lightweight monetization SDK designed to help publishers turn traffic into sustainable revenue.
            </p>
            <button onClick={() => scrollTo("contact")} className="rounded-lg bg-primary px-6 py-3 font-semibold text-white transition hover:bg-primary-dark">
              Monetize Your Traffic
            </button>
          </div>
          <div className="flex-1">
            <Image src={`${ASSEST}/5/5-1 solutions-sdk-1.png`} alt="SDK" width={500} height={300} className="w-full object-contain" />
          </div>
        </div>
        <div className="container-custom mt-16">
          <div className="mb-12 flex justify-center">
            <Image src={`${ASSEST}/5/5-2 solutions-sdk-divider.png`} alt="" width={800} height={100} className="max-h-24 w-full object-contain" />
          </div>
          <div className="grid gap-8 md:grid-cols-2 lg:grid-cols-4">
            {[
              { icon: "5-3 solutions-sdk-icon1.png", title: "Lightweight Size, Fast Integration", text: "Minimal SDK size drastically reduces integration and review time for quick monetization launch." },
              { icon: "5-3 solutions-sdk-icon2.png", title: "Stable Compatibility, Wide Adaptation", text: "Compatible with multiple OS versions and devices, reducing crashes and compatibility issues." },
              { icon: "5-3 solutions-sdk-icon3.png", title: "Low Resource, No Performance Worries", text: "Minimal CPU, memory, and battery consumption ensures no impact on app fluidity and user experience." },
              { icon: "5-3 solutions-sdk-icon4.png", title: "Flexible Expansion, Efficient Monetization", text: "Supports one-click access to multiple ad sources and header bidding, boosting revenue without extra development." },
            ].map((item, i) => (
              <div key={i} className="rounded-xl border border-white/10 bg-dark/30 p-6 text-center">
                <Image src={`${ASSEST}/5/${item.icon}`} alt="" width={64} height={64} className="mx-auto mb-4" />
                <h4 className="mb-2 font-semibold text-primary">{item.title}</h4>
                <p className="text-sm text-white/80">{item.text}</p>
              </div>
            ))}
          </div>
          <div className="mt-16">
            <h3 className="mb-8 text-center text-xl font-bold">4 Easy Steps to Monetize Your Products</h3>
            <div className="relative flex justify-center">
              <Image src={`${ASSEST}/5/5-4 solutions-sdk.png`} alt="4 steps" width={800} height={250} className="w-full max-w-4xl object-contain" />
            </div>
            <div className="mt-6 flex flex-wrap justify-center gap-6 text-sm font-medium">
              {["Integrate the SDK", "Configure Placements", "Handle Delivery", "Monitor Performance"].map((step, i) => (
                <span key={i}>{i + 1}. {step}</span>
              ))}
            </div>
          </div>
        </div>
      </section>

      {/* ========== 13. Blog ========== */}
      <section id="blog" className="section-padding scroll-mt-20">
        <div className="container-custom">
          <h2 className="mb-8 text-3xl font-bold">Blog</h2>
          <div className="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
            {[
              "Programmatic Advertising Trends",
              "RTB Optimization",
              "HTML5 Interactive Ads",
              "CTV Monetization",
              "SDK Monetization Tips",
              "Publisher Revenue Growth",
            ].map((title, i) => (
              <article key={i} className="rounded-xl border border-white/10 bg-dark/30 p-6 transition hover:border-primary/20">
                <div className="mb-4 h-40 rounded-lg bg-white/5" />
                <span className="text-xs uppercase text-primary">Article</span>
                <h3 className="mt-2 font-semibold">{title}</h3>
                <p className="mt-2 text-sm text-white/70">Explore insights and best practices for ad tech and monetization.</p>
                <span className="mt-4 block text-xs text-white/50">Read More →</span>
              </article>
            ))}
          </div>
        </div>
      </section>

      {/* ========== 14. Contact ========== */}
      <section id="contact" className="section-padding bg-[#16162a] scroll-mt-20">
        <div className="container-custom max-w-2xl">
          <h2 className="mb-6 text-3xl font-bold">Contact</h2>
          <p className="mb-8 text-white/80">
            Choose your partner type and we&apos;ll get back to you.
          </p>
          <ContactForm />
        </div>
      </section>
    </>
  );
}

function ContactForm() {
  return (
    <form className="space-y-6 rounded-xl border border-white/10 bg-dark/50 p-6">
      <div>
        <label className="mb-2 block text-sm font-medium text-white/90">Partner Type</label>
        <div className="flex gap-4">
          <label className="flex cursor-pointer items-center gap-2">
            <input type="radio" name="type" value="publisher" defaultChecked className="text-primary" />
            <span>Publisher</span>
          </label>
          <label className="flex cursor-pointer items-center gap-2">
            <input type="radio" name="type" value="advertiser" className="text-primary" />
            <span>Advertiser</span>
          </label>
        </div>
      </div>
      <div className="grid gap-6 sm:grid-cols-2">
        <div>
          <label className="mb-2 block text-sm font-medium text-white/90">Contact Name *</label>
          <input type="text" required className="w-full rounded-lg border border-white/20 bg-white/5 px-4 py-3 text-white placeholder-white/40 focus:border-primary focus:outline-none" placeholder="Your name" />
        </div>
        <div>
          <label className="mb-2 block text-sm font-medium text-white/90">Work Email *</label>
          <input type="email" required className="w-full rounded-lg border border-white/20 bg-white/5 px-4 py-3 text-white placeholder-white/40 focus:border-primary focus:outline-none" placeholder="email@company.com" />
        </div>
      </div>
      <div className="grid gap-6 sm:grid-cols-2">
        <div>
          <label className="mb-2 block text-sm font-medium text-white/90">Job Title</label>
          <input type="text" className="w-full rounded-lg border border-white/20 bg-white/5 px-4 py-3 text-white placeholder-white/40 focus:border-primary focus:outline-none" placeholder="Optional" />
        </div>
        <div>
          <label className="mb-2 block text-sm font-medium text-white/90">Telegram / WhatsApp</label>
          <input type="text" className="w-full rounded-lg border border-white/20 bg-white/5 px-4 py-3 text-white placeholder-white/40 focus:border-primary focus:outline-none" placeholder="Optional" />
        </div>
      </div>
      <div>
        <label className="mb-2 block text-sm font-medium text-white/90">Company Name *</label>
        <input type="text" required className="w-full rounded-lg border border-white/20 bg-white/5 px-4 py-3 text-white placeholder-white/40 focus:border-primary focus:outline-none" placeholder="Company" />
      </div>
      <div>
        <label className="mb-2 block text-sm font-medium text-white/90">Message (optional)</label>
        <textarea rows={4} className="w-full rounded-lg border border-white/20 bg-white/5 px-4 py-3 text-white placeholder-white/40 focus:border-primary focus:outline-none" placeholder="Your message" />
      </div>
      <button type="submit" className="w-full rounded-lg bg-primary py-3 font-semibold text-white transition hover:bg-primary-dark sm:w-auto sm:px-8">
        Submit
      </button>
    </form>
  );
}
