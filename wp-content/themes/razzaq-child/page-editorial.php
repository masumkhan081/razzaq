<?php
/**
 * Template Name: Editorial Home (Tailwind)
 *
 * Standalone Tailwind-based landing page. Does NOT load the Bootstrap/HBUI
 * stack used by the rest of the theme — Sparrow/HBUI styles & scripts are
 * dequeued before they print, and this template builds its own <head>/<body>.
 */

if (!defined('ABSPATH')) { exit; }

// Strip the Bootstrap/HBUI/Sparrow stack on this template only.
add_action('wp_print_styles', function () {
    foreach (['swiper', 'loaders', 'razzaq-theme', 'razzaq-hbui', 'razzaq-brand'] as $h) {
        wp_dequeue_style($h);
        wp_deregister_style($h);
    }
}, 100);
add_action('wp_print_scripts', function () {
    foreach ([
        'hummingbird','anchorjs','is','swiper-js','fontawesome','lodash',
        'imagesloaded','gsap','gsap-customease','gsap-drawsvg','razzaq-theme-js',
    ] as $h) {
        wp_dequeue_script($h);
        wp_deregister_script($h);
    }
}, 100);

$assets = get_stylesheet_directory_uri();
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fustat:wght@400;500;700;800&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

<script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>
<script>
  tailwind.config = {
    theme: {
      extend: {
        colors: {
          'rz-green':       '#1B5E3B',
          'rz-green-deep':  '#0E573C',
          'rz-green-ink':   '#21422F',
          'rz-sage':        '#7A9E7E',
          'rz-gold':        '#D4A017',
          'rz-gold-soft':   '#C0890C',
          'rz-charcoal':    '#2C2C2C',
          'rz-ink':         '#0C0C0C',
          'rz-ink-2':       '#030F0F',
          'rz-muted':       '#999999',
          'rz-cream':       '#F7F5F0',
          'rz-cream-2':     '#FAFAF7',
          'rz-hair':        'rgba(3,15,15,0.10)',
          'rz-hair-2':      'rgba(3,15,15,0.06)',
        },
        fontFamily: {
          sans:  ['"Helvetica Neue"', 'Helvetica', 'Arial', 'sans-serif'],
          brand: ['"Fustat"', '"Helvetica Neue"', 'sans-serif'],
          label: ['"Inter"', '"Helvetica Neue"', 'sans-serif'],
        },
        maxWidth: { 'page': '1440px' },
      },
    },
  };
</script>

<style>
  :root {
    --c-green:#1B5E3B; --c-gold:#D4A017; --c-charcoal:#2C2C2C;
    --c-ink-2:#030F0F; --c-cream:#F7F5F0; --c-sage:#7A9E7E;
    --c-hair:rgba(3,15,15,0.10);
    --page-pad: clamp(24px, 5vw, 80px);
  }
  html, body { margin:0; padding:0; }
  body {
    font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
    color: var(--c-ink-2); background: var(--c-cream);
    -webkit-font-smoothing: antialiased; text-rendering: optimizeLegibility;
    font-size: 16px; line-height: 1.55;
  }
  img { display:block; max-width:100%; }
  a { color: inherit; text-decoration: none; }

  .ed-page-pad { padding-left: var(--page-pad); padding-right: var(--page-pad); }
  .ed-kicker { font-family: "Inter", "Helvetica Neue", sans-serif; font-weight:500; font-size:13px; letter-spacing:.14em; text-transform:uppercase; color:var(--c-green); }
  .ed-kicker--gold  { color:#C0890C; }
  .ed-kicker--light { color:rgba(255,255,255,0.6); }
  .ed-amp { font-family:"Fustat", "Helvetica Neue", sans-serif; font-style:italic; color:var(--c-gold); font-feature-settings:"swsh" 1, "salt" 1; }

  .ed-btn { display:inline-flex; align-items:center; gap:12px; padding:16px 22px; font-family:"Inter", sans-serif; font-weight:600; font-size:13px; letter-spacing:.14em; text-transform:uppercase; border:1px solid transparent; border-radius:2px; cursor:pointer; transition: background .2s, color .2s, border-color .2s; }
  .ed-btn--primary { background:var(--c-green); color:#fff; }
  .ed-btn--primary:hover { background:var(--c-ink-2); }
  .ed-btn--ghost { background:transparent; color:var(--c-ink-2); border-color:var(--c-hair); }
  .ed-btn--ghost:hover { border-color:var(--c-ink-2); }

  /* Top bar */
  .ed-topbar { position:sticky; top:0; z-index:50; background:rgba(247,245,240,.86); backdrop-filter:blur(14px) saturate(140%); -webkit-backdrop-filter:blur(14px) saturate(140%); border-bottom:1px solid rgba(3,15,15,0.06); }
  .ed-nav a { font-family:"Inter", sans-serif; font-weight:500; font-size:14px; color:var(--c-charcoal); position:relative; }
  .ed-nav a:hover { color:var(--c-green); }
  .ed-nav a.is-active::before { content:""; position:absolute; left:-10px; top:50%; width:4px; height:4px; border-radius:50%; background:var(--c-gold); transform:translateY(-50%); }

  /* Hero */
  .ed-hero-title { font-weight:700; font-size:clamp(64px,10vw,168px); letter-spacing:-0.04em; line-height:.95; color:var(--c-ink-2); }
  .ed-hero-title .amp { font-family:"Fustat", sans-serif; font-style:italic; font-weight:400; color:var(--c-gold); padding:0 .05em; }
  .ed-lede { font-weight:400; font-size:clamp(17px,1.3vw,20px); line-height:1.55; color:var(--c-charcoal); max-width:52ch; }

  /* Marquee */
  .ed-marquee { border-top:1px solid var(--c-hair); border-bottom:1px solid var(--c-hair); overflow:hidden; background:var(--c-cream); }
  .ed-marquee-track { display:flex; gap:80px; padding:22px 0; animation: ed-marquee 60s linear infinite; white-space:nowrap; width:max-content; }
  .ed-marquee-item { font-family:"Inter", sans-serif; font-size:12px; letter-spacing:.2em; text-transform:uppercase; color:var(--c-charcoal); display:inline-flex; align-items:center; gap:80px; }
  .ed-marquee-item::after { content:""; display:inline-block; width:6px; height:6px; background:var(--c-gold); transform:rotate(45deg); }
  @keyframes ed-marquee { from{transform:translateX(0)} to{transform:translateX(-50%)} }

  /* Stats */
  .ed-stat-num { font-weight:700; font-size:clamp(48px,5vw,76px); letter-spacing:-0.04em; line-height:1; color:var(--c-ink-2); display:flex; align-items:baseline; gap:4px; }
  .ed-stat-num sup { font-family:"Fustat", sans-serif; color:var(--c-gold); font-size:.42em; position:relative; top:-0.6em; font-weight:400; }
  .ed-stat--dark .ed-stat-num { color:#fff; }

  /* Practice (dark) */
  .ed-practice-title { font-weight:700; font-size:clamp(44px,6vw,96px); letter-spacing:-0.035em; line-height:.98; color:#fff; margin:18px 0 0; }
  .ed-practice-title em { font-family:"Fustat", sans-serif; font-style:italic; font-weight:400; color:var(--c-sage); }
  .ed-service { padding:40px 28px 48px; border-right:1px solid rgba(255,255,255,.08); border-bottom:1px solid rgba(255,255,255,.08); position:relative; transition:background .25s ease; cursor:pointer; min-height:320px; display:flex; flex-direction:column; }
  .ed-service:hover { background:rgba(212,160,23,.06); }
  .ed-service:hover .ed-service-arr { opacity:1; transform:translateX(4px); color:var(--c-gold); }
  .ed-service-num { font-family:"Fustat", sans-serif; font-weight:500; font-size:13px; letter-spacing:.08em; color:var(--c-gold); margin-bottom:48px; }
  .ed-service-name { font-weight:700; font-size:22px; letter-spacing:-0.01em; color:#fff; margin:0 0 16px; line-height:1.15; }
  .ed-service-desc { color:rgba(255,255,255,.55); font-size:14px; line-height:1.55; flex:1; }
  .ed-service-arr { margin-top:24px; opacity:.4; transition:opacity .2s, transform .25s ease; }

  /* Principles */
  .ed-principles-h2 { font-weight:700; font-size:clamp(36px,4vw,56px); letter-spacing:-0.03em; line-height:1; margin:12px 0 24px; }
  .ed-principles-h2 em { font-family:"Fustat", sans-serif; font-style:italic; font-weight:400; color:var(--c-green); }
  .ed-principle h3 { font-size:26px; font-weight:700; letter-spacing:-0.015em; margin:0 0 10px; color:var(--c-ink-2); }
  .ed-principle__idx { font-family:"Fustat", sans-serif; font-weight:500; font-size:13px; color:var(--c-gold); padding-top:10px; letter-spacing:.06em; }

  /* Pull quote */
  .ed-pullquote { background:var(--c-green); color:#fff; padding: clamp(64px,8vw,140px) var(--page-pad); position:relative; overflow:hidden; }
  .ed-pullquote-mark { position:absolute; left:4%; top:-40px; font-family:"Fustat", sans-serif; font-size:clamp(200px,28vw,420px); color:rgba(255,255,255,.08); line-height:1; font-style:italic; pointer-events:none; z-index:1; }
  .ed-pullquote blockquote { margin:0; font-weight:400; font-style:italic; font-size:clamp(28px,3.8vw,56px); letter-spacing:-0.01em; line-height:1.25; color:#fff; max-width:22ch; }

  /* About */
  .ed-about-title { font-weight:700; font-size:clamp(40px,4.5vw,72px); letter-spacing:-0.035em; line-height:1.02; margin:16px 0 28px; }
  .ed-about-title em { font-family:"Fustat", sans-serif; font-style:italic; font-weight:400; color:var(--c-green); }
  .ed-about-photo { aspect-ratio:4/5; background:var(--c-cream); overflow:hidden; position:relative; }
  .ed-about-photo img { width:100%; height:100%; object-fit:cover; position:absolute; inset:0; }
  .ed-about-photo::after { content:""; position:absolute; left:-16px; bottom:-16px; width:96px; height:96px; background:var(--c-gold); z-index:1; }

  /* CTA */
  .ed-cta-title { font-weight:700; font-size:clamp(48px,6.5vw,112px); letter-spacing:-0.04em; line-height:.98; margin:12px 0 0; }
  .ed-cta-title em { font-family:"Fustat", sans-serif; font-style:italic; font-weight:400; color:var(--c-gold); }

  /* Footer */
  .ed-wordmark { font-weight:700; font-size:18vw; letter-spacing:-0.05em; line-height:.9; color:rgba(255,255,255,.06); text-align:center; width:100%; margin:56px 0 24px; user-select:none; }
  .ed-wordmark em { font-family:"Fustat", sans-serif; font-style:italic; color:rgba(212,160,23,.18); font-weight:400; }

  /* Responsive overrides for grid pieces Tailwind handles loosely */
  @media (max-width: 960px) {
    .ed-services-grid { grid-template-columns: repeat(2, 1fr) !important; }
    .ed-service:nth-child(6n) { border-right:1px solid rgba(255,255,255,.08); }
    .ed-service:nth-child(2n) { border-right:none; }
  }
  @media (max-width: 520px) {
    .ed-services-grid { grid-template-columns: 1fr !important; }
    .ed-service { border-right:none !important; }
  }
</style>

<?php wp_head(); ?>
</head>
<body <?php body_class('font-sans bg-rz-cream text-rz-ink-2 antialiased'); ?>>

  <!-- ===== Top bar ===== -->
  <header class="ed-topbar">
    <div class="max-w-page mx-auto ed-page-pad py-[18px] grid items-center gap-12" style="grid-template-columns: auto 1fr auto;">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="inline-flex items-center gap-[14px] text-rz-green" aria-label="Razzaq &amp; Co home">
        <span class="block w-[34px] h-[36px] text-rz-green" aria-hidden="true">
          <svg viewBox="0 0 94 99" xmlns="http://www.w3.org/2000/svg" fill="none" class="w-full h-full block">
            <path d="M 46.067 51.83 L 92.015 97.827 L 92.062 97.873 L 91.996 97.877 L 72.916 99 L 72.903 99.001 L 72.894 98.991 L 27.322 52.548 L 27.275 52.501 L 27.343 52.498 L 46.045 51.821 L 46.059 51.82 L 46.067 51.83 Z M 62.051 0 C 85.914 0 101.434 26.39 90.353 46.104 C 81.489 61.874 67.575 62.904 62.049 62.609 L 62.037 62.609 L 62.028 62.601 L 51.928 51.519 L 51.883 51.47 L 51.949 51.47 C 55.68 51.475 61.014 50.784 65.82 48.933 C 70.628 47.081 74.903 44.07 76.528 39.438 C 78.559 33.649 78.623 28.301 76.34 24.001 C 74.057 19.702 69.423 16.445 62.044 14.844 C 56.139 13.563 46.587 13.09 37.043 13.02 C 27.5 12.949 17.968 13.281 12.105 13.609 L 12.092 13.61 L 12.082 13.6 L 0.043 0.049 L 0 0 L 62.051 0 Z" fill="currentColor"/>
          </svg>
        </span>
        <span class="block">
          <span class="block font-bold text-[22px] tracking-tight text-rz-green leading-none">Razzaq <span class="ed-amp text-[24px]">&amp;</span> Co.</span>
          <span class="block font-medium text-[10px] tracking-[.18em] uppercase text-rz-sage mt-[3px]">Chartered Certified Accountants</span>
        </span>
      </a>

      <nav class="ed-nav justify-self-center hidden md:flex gap-9" aria-label="Primary">
        <a href="#" class="is-active">Home</a>
        <a href="#practice">Practice</a>
        <a href="#about">About</a>
        <a href="#insights">Insights</a>
        <a href="#contact">Contact</a>
      </nav>

      <a href="#contact" class="ed-btn ed-btn--primary">Get in touch
        <svg width="12" height="10" viewBox="0 0 12 10" fill="none"><path d="M1 5h10m0 0L7 1m4 4L7 9" stroke="currentColor" stroke-width="1.4" stroke-linecap="square"/></svg>
      </a>
    </div>
  </header>

  <!-- ===== Hero ===== -->
  <section class="relative max-w-page mx-auto ed-page-pad pt-[clamp(48px,8vw,120px)] pb-[clamp(32px,5vw,72px)]">
    <div class="grid gap-[clamp(32px,6vw,96px)] items-end grid-cols-1 lg:[grid-template-columns:1.1fr_0.9fr]">
      <div>
        <div class="flex items-center gap-[14px] mb-10">
          <span class="w-[6px] h-[6px] rounded-full bg-rz-gold"></span>
          <span class="ed-kicker">Tax &amp; Accounting Advisers — United Kingdom</span>
        </div>
        <h1 class="ed-hero-title">
          Razzaq<br/>
          <span class="amp">&amp;</span> Co.
        </h1>
      </div>

      <div class="flex flex-col gap-7 pb-2">
        <p class="ed-lede m-0">
          We provide specialist tax and accounting services to individuals,
          medical professionals, business owners and investors. Our work is
          grounded in technical accuracy and a clear understanding of our
          clients' circumstances.
        </p>

        <div class="flex gap-12 mt-6 pt-6 border-t border-rz-hair flex-wrap">
          <div>
            <div class="font-label text-[11px] tracking-[.16em] uppercase text-rz-muted mb-[6px]">Established</div>
            <div class="text-[15px] font-medium text-rz-ink-2">2015 · London</div>
          </div>
          <div>
            <div class="font-label text-[11px] tracking-[.16em] uppercase text-rz-muted mb-[6px]">Regulation</div>
            <div class="text-[15px] font-medium text-rz-ink-2">ACCA · HMRC</div>
          </div>
          <div>
            <div class="font-label text-[11px] tracking-[.16em] uppercase text-rz-muted mb-[6px]">Practice</div>
            <div class="text-[15px] font-medium text-rz-ink-2">Tax &amp; Advisory</div>
          </div>
        </div>

        <div class="flex gap-3 mt-8 flex-wrap">
          <a class="ed-btn ed-btn--primary" href="#contact">Book a consultation
            <svg width="12" height="10" viewBox="0 0 12 10" fill="none"><path d="M1 5h10m0 0L7 1m4 4L7 9" stroke="currentColor" stroke-width="1.4" stroke-linecap="square"/></svg>
          </a>
          <a class="ed-btn ed-btn--ghost" href="#practice">Explore services</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Marquee -->
  <div class="ed-marquee mt-[clamp(40px,5vw,64px)]" aria-hidden="true">
    <div class="ed-marquee-track">
      <span class="ed-marquee-item">Doctors &amp; Dentists</span>
      <span class="ed-marquee-item">Construction Contractors</span>
      <span class="ed-marquee-item">Limited Companies</span>
      <span class="ed-marquee-item">Property Investors</span>
      <span class="ed-marquee-item">High Earners</span>
      <span class="ed-marquee-item">Sole Traders</span>
      <span class="ed-marquee-item">Doctors &amp; Dentists</span>
      <span class="ed-marquee-item">Construction Contractors</span>
      <span class="ed-marquee-item">Limited Companies</span>
      <span class="ed-marquee-item">Property Investors</span>
      <span class="ed-marquee-item">High Earners</span>
      <span class="ed-marquee-item">Sole Traders</span>
    </div>
  </div>

  <!-- ===== Stats ===== -->
  <section aria-label="Practice highlights" class="max-w-page mx-auto ed-page-pad py-[clamp(48px,6vw,88px)]">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-px bg-rz-hair border border-rz-hair">
      <div class="bg-rz-cream p-[36px_28px_32px] flex flex-col gap-[14px]">
        <div class="ed-stat-num">10<sup>+</sup></div>
        <div class="font-label text-[12px] tracking-[.18em] uppercase text-rz-muted leading-[1.5]">Years<br/>in practice</div>
      </div>
      <div class="ed-stat--dark bg-rz-ink-2 text-white p-[36px_28px_32px] flex flex-col gap-[14px]">
        <div class="ed-stat-num">500<sup>+</sup></div>
        <div class="font-label text-[12px] tracking-[.18em] uppercase text-white/50 leading-[1.5]">Active<br/>clients</div>
      </div>
      <div class="bg-rz-cream p-[36px_28px_32px] flex flex-col gap-[14px]">
        <div class="ed-stat-num">£42m<sup>+</sup></div>
        <div class="font-label text-[12px] tracking-[.18em] uppercase text-rz-muted leading-[1.5]">Client tax<br/>reviewed in 2025</div>
      </div>
      <div class="ed-stat--dark bg-rz-ink-2 text-white p-[36px_28px_32px] flex flex-col gap-[14px]">
        <div class="ed-stat-num">6</div>
        <div class="font-label text-[12px] tracking-[.18em] uppercase text-white/50 leading-[1.5]">Specialist<br/>sector areas</div>
      </div>
    </div>
  </section>

  <!-- ===== Practice grid (dark) ===== -->
  <section id="practice" class="bg-rz-ink-2 text-white py-[clamp(64px,8vw,128px)] relative overflow-hidden">
    <div class="max-w-page mx-auto ed-page-pad">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-end mb-[72px] pb-8 border-b border-white/10">
        <div>
          <span class="ed-kicker text-rz-gold">Services</span>
          <h2 class="ed-practice-title">Areas of <em>practice</em></h2>
        </div>
        <p class="text-white/70 max-w-[46ch] text-[17px] leading-[1.6]">
          We handle personal and business tax compliance across a wide range of
          matters, alongside advisory work on more complex planning questions.
          Select a service for a full description.
        </p>
      </div>

      <div class="ed-services-grid grid border-t border-white/10" style="grid-template-columns: repeat(6, 1fr);">
        <article class="ed-service">
          <div class="ed-service-num">01</div>
          <h3 class="ed-service-name">Self Assessment</h3>
          <p class="ed-service-desc">Personal tax returns for sole traders, locums, landlords, high earners and individuals with multiple income sources. Pension annual allowance, capital gains, trusts and HICBC.</p>
          <svg class="ed-service-arr" width="16" height="10" viewBox="0 0 12 10" fill="none"><path d="M1 5h10m0 0L7 1m4 4L7 9" stroke="currentColor" stroke-width="1.2" stroke-linecap="square"/></svg>
        </article>
        <article class="ed-service">
          <div class="ed-service-num">02</div>
          <h3 class="ed-service-name">Limited Companies</h3>
          <p class="ed-service-desc">Statutory accounts, corporation tax returns and Companies House compliance for UK limited companies across all sizes and industries.</p>
          <svg class="ed-service-arr" width="16" height="10" viewBox="0 0 12 10" fill="none"><path d="M1 5h10m0 0L7 1m4 4L7 9" stroke="currentColor" stroke-width="1.2" stroke-linecap="square"/></svg>
        </article>
        <article class="ed-service">
          <div class="ed-service-num">03</div>
          <h3 class="ed-service-name">PAYE &amp; Payroll</h3>
          <p class="ed-service-desc">End-to-end payroll processing and PAYE compliance — RTI submissions, P60s, P11Ds, auto-enrolment, statutory payments and director payroll.</p>
          <svg class="ed-service-arr" width="16" height="10" viewBox="0 0 12 10" fill="none"><path d="M1 5h10m0 0L7 1m4 4L7 9" stroke="currentColor" stroke-width="1.2" stroke-linecap="square"/></svg>
        </article>
        <article class="ed-service">
          <div class="ed-service-num">04</div>
          <h3 class="ed-service-name">VAT</h3>
          <p class="ed-service-desc">Registration, quarterly returns and MTD-compliant submissions. Scheme selection, partial exemption, the construction domestic reverse charge and VAT on property transactions.</p>
          <svg class="ed-service-arr" width="16" height="10" viewBox="0 0 12 10" fill="none"><path d="M1 5h10m0 0L7 1m4 4L7 9" stroke="currentColor" stroke-width="1.2" stroke-linecap="square"/></svg>
        </article>
        <article class="ed-service">
          <div class="ed-service-num">05</div>
          <h3 class="ed-service-name">Tax Advisory</h3>
          <p class="ed-service-desc">Profit extraction, group reorganisation, business sale planning, Business Asset Disposal Relief, inheritance tax mitigation and HMRC enquiry representation.</p>
          <svg class="ed-service-arr" width="16" height="10" viewBox="0 0 12 10" fill="none"><path d="M1 5h10m0 0L7 1m4 4L7 9" stroke="currentColor" stroke-width="1.2" stroke-linecap="square"/></svg>
        </article>
        <article class="ed-service" style="border-right:none;">
          <div class="ed-service-num">06</div>
          <h3 class="ed-service-name">Property Tax</h3>
          <p class="ed-service-desc">Holding structure advice, Section 24 mortgage interest restrictions, capital gains on disposal, SDLT and incorporation relief for personal landlords and investors.</p>
          <svg class="ed-service-arr" width="16" height="10" viewBox="0 0 12 10" fill="none"><path d="M1 5h10m0 0L7 1m4 4L7 9" stroke="currentColor" stroke-width="1.2" stroke-linecap="square"/></svg>
        </article>
      </div>
    </div>
  </section>

  <!-- ===== Principles ===== -->
  <section id="principles" class="max-w-page mx-auto ed-page-pad py-[clamp(64px,8vw,128px)] grid grid-cols-1 lg:[grid-template-columns:360px_1fr] gap-[clamp(40px,6vw,96px)]">
    <aside class="lg:sticky lg:top-[120px] self-start">
      <span class="ed-kicker">Our approach</span>
      <h2 class="ed-principles-h2">How we <em>work</em></h2>
      <p class="text-rz-charcoal max-w-[32ch]">A practical, technical approach built on accuracy, judgement and plain language — consistent regardless of the client or the size of the matter.</p>
    </aside>

    <div class="flex flex-col">
      <div class="ed-principle border-t border-rz-hair py-8 grid gap-6 items-start" style="grid-template-columns: 48px 1fr;">
        <div class="ed-principle__idx">— 01</div>
        <div>
          <h3>Sector knowledge</h3>
          <p class="m-0 text-rz-charcoal max-w-[58ch] leading-[1.6]">Working consistently with doctors, dentists, locums and construction contractors gives us a detailed understanding of the specific rules and compliance requirements in those sectors.</p>
        </div>
      </div>
      <div class="ed-principle border-t border-rz-hair py-8 grid gap-6 items-start" style="grid-template-columns: 48px 1fr;">
        <div class="ed-principle__idx">— 02</div>
        <div>
          <h3>Compliance and planning together</h3>
          <p class="m-0 text-rz-charcoal max-w-[58ch] leading-[1.6]">We do not treat compliance and advisory work as separate functions. Where planning questions arise from the accounts or returns we prepare, we raise them as part of our standard service.</p>
        </div>
      </div>
      <div class="ed-principle border-t border-rz-hair py-8 grid gap-6 items-start" style="grid-template-columns: 48px 1fr;">
        <div class="ed-principle__idx">— 03</div>
        <div>
          <h3>Clear communication</h3>
          <p class="m-0 text-rz-charcoal max-w-[58ch] leading-[1.6]">We give clients a straightforward account of their obligations, the options available to them and any deadlines that apply. We do not use unnecessary jargon.</p>
        </div>
      </div>
      <div class="ed-principle border-y border-rz-hair py-8 grid gap-6 items-start" style="grid-template-columns: 48px 1fr;">
        <div class="ed-principle__idx">— 04</div>
        <div>
          <h3>Continuity of relationship</h3>
          <p class="m-0 text-rz-charcoal max-w-[58ch] leading-[1.6]">You work with the same adviser across the year — not a rotating support desk. That means less re-explaining, better judgement and faster answers when something changes.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== Pull quote ===== -->
  <section class="ed-pullquote">
    <span class="ed-pullquote-mark">&amp;</span>
    <div class="max-w-[1100px] mx-auto relative z-[2]">
      <blockquote>
        We do not treat compliance and planning as separate functions.
      </blockquote>
      <div class="mt-12 flex gap-4 items-center">
        <div class="w-12 h-12 rounded-full bg-rz-gold text-rz-green grid place-items-center font-bold text-[16px]">RR</div>
        <div class="font-label text-[13px] leading-[1.4] text-white/75">
          <strong class="text-white font-semibold block tracking-[.04em]">Razzaq &amp; Co.</strong>
          Founding principles — 2015
        </div>
      </div>
    </div>
  </section>

  <!-- ===== About ===== -->
  <section id="about" class="max-w-page mx-auto ed-page-pad py-[clamp(64px,8vw,128px)] grid grid-cols-1 lg:grid-cols-2 gap-[clamp(32px,5vw,96px)] items-center">
    <div class="ed-about-photo">
      <img src="<?php echo esc_url($assets); ?>/assets/img/editorial/brand-photo.jpg" alt="Razzaq &amp; Co. partner" loading="lazy" />
    </div>
    <div>
      <span class="ed-kicker">About the practice</span>
      <h2 class="ed-about-title">Razzaq &amp; Co. <em>in brief</em></h2>
      <p class="text-rz-charcoal text-[17px] leading-[1.65] max-w-[52ch]">
        We have been advising individuals and businesses on their tax affairs
        for over a decade. Our client base spans sole traders through to
        multi-entity groups, with a particular concentration in healthcare,
        construction and property.
      </p>
      <p class="text-rz-charcoal text-[17px] leading-[1.65] max-w-[52ch] mt-[18px]">
        The practice is led by a small group of chartered certified accountants
        and tax specialists. Every engagement is partner-reviewed.
      </p>

      <dl class="mt-10 grid grid-cols-2 gap-8 pt-8 border-t border-rz-hair">
        <div>
          <dt class="font-label text-[11px] tracking-[.16em] uppercase text-rz-muted mb-[6px]">Founded</dt>
          <dd class="text-[16px] font-medium m-0 text-rz-ink-2">2015</dd>
        </div>
        <div>
          <dt class="font-label text-[11px] tracking-[.16em] uppercase text-rz-muted mb-[6px]">Coverage</dt>
          <dd class="text-[16px] font-medium m-0 text-rz-ink-2">United Kingdom</dd>
        </div>
        <div>
          <dt class="font-label text-[11px] tracking-[.16em] uppercase text-rz-muted mb-[6px]">Regulated by</dt>
          <dd class="text-[16px] font-medium m-0 text-rz-ink-2">ACCA</dd>
        </div>
        <div>
          <dt class="font-label text-[11px] tracking-[.16em] uppercase text-rz-muted mb-[6px]">Partner-led</dt>
          <dd class="text-[16px] font-medium m-0 text-rz-ink-2">Every engagement</dd>
        </div>
      </dl>
    </div>
  </section>

  <!-- ===== Contact CTA ===== -->
  <section id="contact" class="bg-rz-cream-2 border-t border-rz-hair py-[clamp(64px,8vw,128px)] ed-page-pad">
    <div class="max-w-page mx-auto grid grid-cols-1 lg:[grid-template-columns:1.2fr_0.8fr] gap-[clamp(32px,5vw,96px)] items-end">
      <div>
        <span class="ed-kicker ed-kicker--gold">Contact</span>
        <h2 class="ed-cta-title">Get in <em>touch</em></h2>
        <p class="ed-lede mt-7">
          We welcome enquiries from individuals and businesses at any stage —
          whether you are looking for a new accountant, have a specific
          question, or need advice on a particular matter.
        </p>
        <div class="mt-10">
          <a class="ed-btn ed-btn--primary" href="mailto:info@razzaqco.co.uk">Submit enquiry
            <svg width="12" height="10" viewBox="0 0 12 10" fill="none"><path d="M1 5h10m0 0L7 1m4 4L7 9" stroke="currentColor" stroke-width="1.4" stroke-linecap="square"/></svg>
          </a>
        </div>
      </div>

      <dl class="flex flex-col gap-[18px] pb-3">
        <div class="grid grid-cols-[100px_1fr] gap-4 py-4 border-b border-rz-hair items-baseline">
          <dt class="font-label text-[11px] tracking-[.18em] uppercase text-rz-muted">Email</dt>
          <dd class="m-0 text-[17px] text-rz-ink-2 font-medium">info@razzaqco.co.uk</dd>
        </div>
        <div class="grid grid-cols-[100px_1fr] gap-4 py-4 border-b border-rz-hair items-baseline">
          <dt class="font-label text-[11px] tracking-[.18em] uppercase text-rz-muted">Telephone</dt>
          <dd class="m-0 text-[17px] text-rz-ink-2 font-medium">+44 (0) 1234 567 890</dd>
        </div>
        <div class="grid grid-cols-[100px_1fr] gap-4 py-4 border-b border-rz-hair items-baseline">
          <dt class="font-label text-[11px] tracking-[.18em] uppercase text-rz-muted">Hours</dt>
          <dd class="m-0 text-[17px] text-rz-ink-2 font-medium">Mon – Fri · 9:00 am – 6:00 pm</dd>
        </div>
        <div class="grid grid-cols-[100px_1fr] gap-4 py-4 border-b border-rz-hair items-baseline">
          <dt class="font-label text-[11px] tracking-[.18em] uppercase text-rz-muted">Clients</dt>
          <dd class="m-0 text-[17px] text-rz-ink-2 font-medium">Throughout the UK</dd>
        </div>
      </dl>
    </div>
  </section>

  <!-- ===== Footer ===== -->
  <footer class="bg-rz-ink-2 text-white pt-[clamp(48px,6vw,88px)] pb-8 ed-page-pad">
    <div class="max-w-page mx-auto grid grid-cols-1 md:grid-cols-2 lg:[grid-template-columns:1.4fr_1fr_1fr_1fr] gap-12 pb-16 border-b border-white/10">
      <div>
        <a href="<?php echo esc_url(home_url('/')); ?>" class="inline-flex items-center gap-[14px] text-white" aria-label="Razzaq &amp; Co">
          <span class="block w-[34px] h-[36px] text-rz-gold" aria-hidden="true">
            <svg viewBox="0 0 94 99" xmlns="http://www.w3.org/2000/svg" fill="none" class="w-full h-full block">
              <path d="M 46.067 51.83 L 92.015 97.827 L 92.062 97.873 L 91.996 97.877 L 72.916 99 L 72.903 99.001 L 72.894 98.991 L 27.322 52.548 L 27.275 52.501 L 27.343 52.498 L 46.045 51.821 L 46.059 51.82 L 46.067 51.83 Z M 62.051 0 C 85.914 0 101.434 26.39 90.353 46.104 C 81.489 61.874 67.575 62.904 62.049 62.609 L 62.037 62.609 L 62.028 62.601 L 51.928 51.519 L 51.883 51.47 L 51.949 51.47 C 55.68 51.475 61.014 50.784 65.82 48.933 C 70.628 47.081 74.903 44.07 76.528 39.438 C 78.559 33.649 78.623 28.301 76.34 24.001 C 74.057 19.702 69.423 16.445 62.044 14.844 C 56.139 13.563 46.587 13.09 37.043 13.02 C 27.5 12.949 17.968 13.281 12.105 13.609 L 12.092 13.61 L 12.082 13.6 L 0.043 0.049 L 0 0 L 62.051 0 Z" fill="currentColor"/>
              </svg>
          </span>
          <span class="block">
            <span class="block font-bold text-[22px] tracking-tight text-white leading-none">Razzaq <span class="ed-amp text-[24px]">&amp;</span> Co.</span>
            <span class="block font-medium text-[10px] tracking-[.18em] uppercase text-white/40 mt-[3px]">Chartered Certified Accountants</span>
          </span>
        </a>
        <p class="text-white/60 max-w-[36ch] mt-6 text-[15px] leading-[1.6]">Specialist tax and accounting advisers to individuals and businesses across the United Kingdom.</p>
      </div>

      <div>
        <h4 class="font-label font-medium text-[11px] tracking-[.18em] uppercase text-white/40 mb-5">Practice</h4>
        <ul class="list-none p-0 m-0 space-y-3 text-[15px]">
          <li><a href="#" class="text-white/85 hover:text-rz-gold">Self Assessment</a></li>
          <li><a href="#" class="text-white/85 hover:text-rz-gold">Limited Companies</a></li>
          <li><a href="#" class="text-white/85 hover:text-rz-gold">PAYE &amp; Payroll</a></li>
          <li><a href="#" class="text-white/85 hover:text-rz-gold">VAT</a></li>
          <li><a href="#" class="text-white/85 hover:text-rz-gold">Tax Advisory</a></li>
          <li><a href="#" class="text-white/85 hover:text-rz-gold">Property Tax</a></li>
        </ul>
      </div>

      <div>
        <h4 class="font-label font-medium text-[11px] tracking-[.18em] uppercase text-white/40 mb-5">Firm</h4>
        <ul class="list-none p-0 m-0 space-y-3 text-[15px]">
          <li><a href="#about" class="text-white/85 hover:text-rz-gold">About</a></li>
          <li><a href="#" class="text-white/85 hover:text-rz-gold">Our team</a></li>
          <li><a href="#" class="text-white/85 hover:text-rz-gold">Careers</a></li>
          <li><a href="#" class="text-white/85 hover:text-rz-gold">Insights</a></li>
        </ul>
      </div>

      <div>
        <h4 class="font-label font-medium text-[11px] tracking-[.18em] uppercase text-white/40 mb-5">Contact</h4>
        <ul class="list-none p-0 m-0 space-y-3 text-[15px]">
          <li><a href="mailto:info@razzaqco.co.uk" class="text-white/85 hover:text-rz-gold">info@razzaqco.co.uk</a></li>
          <li><a href="tel:+441234567890" class="text-white/85 hover:text-rz-gold">+44 (0) 1234 567 890</a></li>
          <li class="text-white/60">Mon – Fri · 9–6</li>
        </ul>
      </div>
    </div>

    <div class="ed-wordmark" aria-hidden="true">
      Razzaq <em>&amp;</em> Co.
    </div>

    <div class="max-w-page mx-auto mt-8 flex justify-between items-center font-label text-[12px] text-white/40 tracking-[.06em]">
      <span>&copy; <?php echo esc_html(date('Y')); ?> Razzaq &amp; Co. All rights reserved.</span>
      <span>ACCA regulated · UK</span>
    </div>
  </footer>

  <?php wp_footer(); ?>
</body>
</html>
