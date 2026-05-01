<?php
if (!defined('ABSPATH')) {
    exit;
}
get_header();
$assets = get_stylesheet_directory_uri();
?>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main min-vh-100" id="top">


      <!-- ============================================-->
      <!-- Preloader ==================================-->
      <div class="preloader" id="preloader">
        <div class="loader">
          <div class="line-scale-pulse-out-rapid">
            <div> </div>
            <div></div>
            <div></div>
            <div></div>
            <div> </div>
          </div>
        </div>
      </div>
      <!-- ============================================-->
      <!-- End of Preloader ===========================-->


      <!-- ============================================-->
      <!-- Hero  (razzaq R1) — Sparrow header-digital.jpg + Razzaq green overlay -->
      <section class="py-0 overflow-hidden" id="digitalHeader">

        <div class="bg-holder overlay overlay-1" style="background-image:url(https://images.unsplash.com/photo-1505761671935-60b3a7427bad?w=1800&amp;q=85);"></div>

        <div class="container position-relative">
          <div class="row min-vh-100 py-8 flex-center text-center">
            <div class="col-lg-9 col-xl-8">
              <h1 class="fs-6 fs-sm-5 fs-md-5 text-white display-5">Tax &amp; Accounting Advisers <br />United Kingdom</h1>
              <h4 class="mt-3 mt-sm-4 mt-md-5 mb-4 text-white fs-9 font-secondary">We provide specialist tax and accounting services to individuals, medical professionals, business owners and investors. Our work is grounded in technical accuracy and a clear understanding of our clients&rsquo; circumstances.</h4>
              <a class="btn btn-danger rounded-pill mt-2" href="<?php echo esc_url(home_url('/contact/')); ?>">Work With Us &rarr;</a>
            </div>
          </div>
          <a class="indicator indicator-down" href="#target-down" data-offset="60">
            <span class="indicator-arrow indicator-arrow-one"></span>
            <span class="indicator-arrow indicator-arrow-two"></span>
          </a>
        </div><!-- end of .container-->

      </section>
      <!-- Hero close -->


      <!-- ============================================-->
      <!-- Metrics bar  (razzaq R3) ===================-->
      <section class="py-5 py-md-6 bg-light border-bottom" id="razzaqMetrics">
        <div class="container">
          <div class="row text-center font-secondary g-4">
            <div class="col-6 col-md">
              <div class="display-5 fw-bold text-danger">10<sup class="fs-7">+</sup></div>
              <div class="ls text-uppercase fw-bold mt-2 fs-10">Years in Practice</div>
            </div>
            <div class="col-6 col-md">
              <div class="display-5 fw-bold text-danger">500<sup class="fs-7">+</sup></div>
              <div class="ls text-uppercase fw-bold mt-2 fs-10">Active Clients</div>
            </div>
            <div class="col-6 col-md">
              <div class="display-5 fw-bold text-danger">&pound;50M+</div>
              <div class="ls text-uppercase fw-bold mt-2 fs-10">Tax Savings Delivered</div>
            </div>
            <div class="col-6 col-md">
              <div class="display-5 fw-bold text-danger">98%</div>
              <div class="ls text-uppercase fw-bold mt-2 fs-10">Client Retention Rate</div>
            </div>
            <div class="col-6 offset-3 offset-md-0 col-md">
              <div class="display-5 fw-bold text-danger">6</div>
              <div class="ls text-uppercase fw-bold mt-2 fs-10">Areas of Practice</div>
            </div>
          </div>
        </div>
      </section>
      <!-- Metrics bar close -->


      <div id="target-down"></div>


      <!-- ============================================-->
      <!-- How we work  (razzaq R6 Approach) ==========-->
      <section id="razzaqApproach">

        <div class="container">
          <div class="row justify-content-center text-center mb-6">
            <div class="col-lg-9">
              <div class="ls text-uppercase fw-bold fs-10 text-danger mb-2">Our Approach</div>
              <h2>How We Work</h2>
              <p class="mb-0 fs-9 text-body font-secondary">A structured process built on clear communication, technical rigour and a genuine understanding of your objectives.</p>
            </div>
          </div>

          <div class="row align-items-stretch">
            <div class="col-lg-4 px-lg-5">
              <div class="d-flex align-items-start font-secondary">
                <div class="me-4 text-danger d-flex align-items-center justify-content-center flex-shrink-0" style="font-size:3.5rem; line-height:1; width:3.5rem; height:3.5rem;">&#9678;</div>
                <div class="flex-1">
                  <div class="ls text-uppercase fw-bold fs-10 text-body-secondary mb-1">Step 01</div>
                  <h4 class="fs-9 fw-semibold text-body">Understand your position</h4>
                  <p class="mb-0 fs-9 text-body">We begin every client relationship with a thorough review of your current affairs &mdash; tax history, entity structure, income sources and any outstanding HMRC obligations.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 px-lg-5 border-start-lg border-end-lg mt-5 mt-lg-0">
              <div class="d-flex align-items-start font-secondary">
                <div class="me-4 text-danger d-flex align-items-center justify-content-center flex-shrink-0" style="font-size:3.5rem; line-height:1; width:3.5rem; height:3.5rem;">&#8862;</div>
                <div class="flex-1">
                  <div class="ls text-uppercase fw-bold fs-10 text-body-secondary mb-1">Step 02</div>
                  <h4 class="fs-9 fw-semibold text-body">Build a clear strategy</h4>
                  <p class="mb-0 fs-9 text-body">Drawing on technical expertise and sector knowledge, we identify the most efficient route through your compliance requirements &mdash; and surface planning opportunities as they arise.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 px-lg-5 mt-5 mt-lg-0">
              <div class="d-flex align-items-start font-secondary">
                <div class="me-4 text-danger d-flex align-items-center justify-content-center flex-shrink-0" style="font-size:3.5rem; line-height:1; width:3.5rem; height:3.5rem;">&#9672;</div>
                <div class="flex-1">
                  <div class="ls text-uppercase fw-bold fs-10 text-body-secondary mb-1">Step 03</div>
                  <h4 class="fs-9 fw-semibold text-body">Deliver with precision</h4>
                  <p class="mb-0 fs-9 text-body">Every return, filing and advisory note is prepared accurately and delivered on time. We keep you informed at every stage, in plain language, without unnecessary jargon.</p>
                </div>
              </div>
            </div>
          </div>
        </div><!-- end of .container-->

      </section>
      <!-- How we work close -->


      <!-- ============================================-->
      <!-- About  (razzaq R7) — Sparrow #digitalWeDo layout: full-bleed image left, content right -->
      <section class="py-0 overflow-hidden" id="digitalAbout">

        <div class="container-fluid px-lg-0">
          <div class="row align-items-center">
            <div class="col-lg-6">
              <img class="img-fluid w-100 d-block" src="https://images.unsplash.com/photo-1521791136064-7986c2920216?w=1400&amp;q=85&amp;auto=format&amp;fit=crop" alt="Razzaq &amp; Co. professional team" loading="lazy" />
            </div>
            <div class="col-lg-6 px-sm-6 px-md-8 px-lg-6 px-xl-8 py-6 py-md-8 align-self-stretch bg-light position-relative">
              <div class="ls text-uppercase fw-bold fs-10 text-danger mb-2">About the Practice</div>
              <h3 class="mb-3">Razzaq &amp; Co. <em>in brief</em></h3>
              <p class="font-secondary fs-9 text-body">We have been advising individuals and businesses on their tax affairs for over a decade. Our client base spans sole traders through to multi-entity groups, with a particular concentration in healthcare, construction and property.</p>
              <p class="font-secondary fs-9 text-body">We are chartered certified accountants, operating from the United Kingdom. Our work is grounded in technical accuracy, close attention to deadlines, and a genuine understanding of each client&rsquo;s commercial position.</p>
              <a class="btn btn-razzaq-green mt-4 d-inline-flex gap-1" href="<?php echo esc_url(home_url('/about/')); ?>"><span class="icon-entity-xrarr">&xrarr; </span>Learn more about our practice</a>
            </div>
          </div>
        </div><!-- end of .container-->

      </section>
      <!-- About close -->


      <!-- ============================================-->
      <!-- Who we work with  (razzaq R5 Sectors) ======-->
      <section class="text-center font-secondary" id="digitalSectors">

        <div class="container">
          <div class="row justify-content-center mb-6">
            <div class="col-lg-9">
              <div class="ls text-uppercase fw-bold fs-10 text-danger mb-2">Sectors</div>
              <h2>Who We Work With</h2>
              <p class="mb-0 fs-9 text-body font-secondary">Deep sector expertise across the industries we serve, built over more than a decade of specialist practice.</p>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-6 col-lg-4 mb-4">
              <a class="h-100 border d-flex flex-column rounded overflow-hidden text-decoration-none text-body" href="<?php echo esc_url(home_url('/sectors/healthcare/')); ?>">
                <img class="img-fluid" src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?w=800&amp;q=80" alt="Healthcare" style="height:220px; width:100%; object-fit:cover;" />
                <div class="p-4 bg-light text-start flex-grow-1 d-flex flex-column">
                  <div class="ls text-uppercase fs-10 fw-bold text-danger mb-2">Sector 01</div>
                  <h5 class="mb-2 fs-9 fw-semibold text-body">Healthcare &amp; Medical</h5>
                  <p class="mb-3 fs-9 text-body">NHS consultants, GPs, dentists, locums and medical partnerships. Specialist advice on pension tax charges, practice structures and HMRC compliance.</p>
                  <span class="ls text-uppercase fw-bold fs-10 text-danger font-secondary mt-auto">Explore &nearr;</span>
                </div>
              </a>
            </div>
            <div class="col-sm-6 col-lg-4 mb-4">
              <a class="h-100 border d-flex flex-column rounded overflow-hidden text-decoration-none text-body" href="<?php echo esc_url(home_url('/sectors/construction/')); ?>">
                <img class="img-fluid" src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=800&amp;q=80" alt="Construction" style="height:220px; width:100%; object-fit:cover;" />
                <div class="p-4 bg-light text-start flex-grow-1 d-flex flex-column">
                  <div class="ls text-uppercase fs-10 fw-bold text-danger mb-2">Sector 02</div>
                  <h5 class="mb-2 fs-9 fw-semibold text-body">Construction &amp; Contractors</h5>
                  <p class="mb-3 fs-9 text-body">Specialist knowledge of CIS, domestic reverse charge and contractor structures. We ensure compliance while maximising legitimate reliefs.</p>
                  <span class="ls text-uppercase fw-bold fs-10 text-danger font-secondary mt-auto">Explore &nearr;</span>
                </div>
              </a>
            </div>
            <div class="col-sm-6 col-lg-4 mb-4">
              <a class="h-100 border d-flex flex-column rounded overflow-hidden text-decoration-none text-body" href="<?php echo esc_url(home_url('/sectors/property/')); ?>">
                <img class="img-fluid" src="https://images.unsplash.com/photo-1582407947304-fd86f028f716?w=800&amp;q=80" alt="Property" style="height:220px; width:100%; object-fit:cover;" />
                <div class="p-4 bg-light text-start flex-grow-1 d-flex flex-column">
                  <div class="ls text-uppercase fs-10 fw-bold text-danger mb-2">Sector 03</div>
                  <h5 class="mb-2 fs-9 fw-semibold text-body">Property &amp; Investment</h5>
                  <p class="mb-3 fs-9 text-body">Buy-to-let landlords, multi-property investors and developers. Advice on holding structures, SDLT, Section 24 and incorporation strategy.</p>
                  <span class="ls text-uppercase fw-bold fs-10 text-danger font-secondary mt-auto">Explore &nearr;</span>
                </div>
              </a>
            </div>
          </div>
        </div><!-- end of .container-->

      </section>
      <!-- Who we work with close -->


      <!-- ============================================-->
      <!-- Areas of practice  (razzaq R4 Services) — 6 numbered cards -->
      <section class="bg-light text-center font-secondary" id="digitalFeatures1">

        <div class="container">
          <div class="row justify-content-center mb-6">
            <div class="col-lg-9">
              <div class="ls text-uppercase fw-bold fs-10 text-danger mb-2">Services</div>
              <h2>Areas Of Practice</h2>
              <p class="mb-0 fs-9 text-body font-secondary">We handle personal and business tax compliance across a wide range of matters, alongside advisory work on more complex planning questions.</p>
            </div>
          </div>

          <div class="row text-start">
            <div class="col-md-6 col-lg-4 mb-4">
              <a class="h-100 d-flex flex-column p-4 p-md-5 border rounded bg-white text-decoration-none text-body" href="<?php echo esc_url(home_url('/services/self-assessment/')); ?>">
                <div class="display-4 fw-bold text-danger lh-1 mb-3">01</div>
                <h5 class="mb-3 fs-9 fw-semibold text-body">Self Assessment</h5>
                <p class="mb-3 fs-9 text-body">Personal tax returns for sole traders, locums, landlords, high earners and individuals with multiple income sources. Covers pension allowance, capital gains and trusts.</p>
                <span class="ls text-uppercase fw-bold fs-10 text-danger font-secondary mt-auto">Explore &nearr;</span>
              </a>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
              <a class="h-100 d-flex flex-column p-4 p-md-5 border rounded bg-white text-decoration-none text-body" href="<?php echo esc_url(home_url('/services/limited-companies/')); ?>">
                <div class="display-4 fw-bold text-danger lh-1 mb-3">02</div>
                <h5 class="mb-3 fs-9 fw-semibold text-body">Limited Companies</h5>
                <p class="mb-3 fs-9 text-body">Statutory accounts, corporation tax returns and Companies House compliance for UK limited companies across all sizes and industries.</p>
                <span class="ls text-uppercase fw-bold fs-10 text-danger font-secondary mt-auto">Explore &nearr;</span>
              </a>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
              <a class="h-100 d-flex flex-column p-4 p-md-5 border rounded bg-white text-decoration-none text-body" href="<?php echo esc_url(home_url('/services/paye-payroll/')); ?>">
                <div class="display-4 fw-bold text-danger lh-1 mb-3">03</div>
                <h5 class="mb-3 fs-9 fw-semibold text-body">PAYE &amp; Payroll</h5>
                <p class="mb-3 fs-9 text-body">End-to-end payroll processing and PAYE compliance &mdash; RTI submissions, P60s, P11Ds, auto-enrolment, statutory payments and director payroll.</p>
                <span class="ls text-uppercase fw-bold fs-10 text-danger font-secondary mt-auto">Explore &nearr;</span>
              </a>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
              <a class="h-100 d-flex flex-column p-4 p-md-5 border rounded bg-white text-decoration-none text-body" href="<?php echo esc_url(home_url('/services/vat/')); ?>">
                <div class="display-4 fw-bold text-danger lh-1 mb-3">04</div>
                <h5 class="mb-3 fs-9 fw-semibold text-body">VAT</h5>
                <p class="mb-3 fs-9 text-body">Registration, quarterly returns and MTD-compliant submissions. Scheme selection, partial exemption, the construction domestic reverse charge and property transactions.</p>
                <span class="ls text-uppercase fw-bold fs-10 text-danger font-secondary mt-auto">Explore &nearr;</span>
              </a>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
              <a class="h-100 d-flex flex-column p-4 p-md-5 border rounded bg-white text-decoration-none text-body" href="<?php echo esc_url(home_url('/services/tax-advisory/')); ?>">
                <div class="display-4 fw-bold text-danger lh-1 mb-3">05</div>
                <h5 class="mb-3 fs-9 fw-semibold text-body">Tax Advisory</h5>
                <p class="mb-3 fs-9 text-body">Profit extraction, group reorganisation, business sale planning, Business Asset Disposal Relief, inheritance tax mitigation and HMRC enquiry representation.</p>
                <span class="ls text-uppercase fw-bold fs-10 text-danger font-secondary mt-auto">Explore &nearr;</span>
              </a>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
              <a class="h-100 d-flex flex-column p-4 p-md-5 border rounded bg-white text-decoration-none text-body" href="<?php echo esc_url(home_url('/services/property-tax/')); ?>">
                <div class="display-4 fw-bold text-danger lh-1 mb-3">06</div>
                <h5 class="mb-3 fs-9 fw-semibold text-body">Property Tax</h5>
                <p class="mb-3 fs-9 text-body">Holding structure advice, Section 24 mortgage interest restrictions, capital gains on disposal, SDLT and incorporation relief for landlords and investors.</p>
                <span class="ls text-uppercase fw-bold fs-10 text-danger font-secondary mt-auto">Explore &nearr;</span>
              </a>
            </div>
            <div class="col-12 text-center mt-4"><a class="btn btn-danger" href="<?php echo esc_url(home_url('/services/')); ?>">View All Services &rarr;</a></div>
          </div>
        </div><!-- end of .container-->

      </section>
      <!-- Areas of practice close -->


      <!-- ============================================-->
      <!-- Why Choose Us  (razzaq R8 + R12 combined) ==-->
      <section class="bg-black text-white" id="razzaqWhy">

        <div class="container">

          <!-- Quote first (R12) -->
          <div class="row justify-content-center text-center mb-7">
            <div class="col-lg-10">
              <div class="ls text-uppercase fw-bold fs-10 text-danger mb-3">The Razzaq &amp; Co. Philosophy</div>
              <p class="display-6 fw-normal fst-italic mb-4 lh-base">&ldquo;We do not treat compliance and planning as separate functions. Where planning questions arise, we raise them &mdash; as part of our standard service.&rdquo;</p>
              <p class="ls text-uppercase fw-bold fs-10 text-body-tertiary mb-0 font-secondary">Razzaq &amp; Co. &mdash; Chartered Certified Accountants</p>
            </div>
          </div>

          <!-- Stat + heading -->
          <div class="row align-items-center mb-6">
            <div class="col-md-4 text-center text-md-start mb-4 mb-md-0">
              <div class="display-1 fw-bold text-danger lh-1">98<span class="fs-3">%</span></div>
              <div class="ls text-uppercase fw-bold fs-10 mt-2 font-secondary">Client retention rate</div>
            </div>
            <div class="col-md-8">
              <div class="ls text-uppercase fw-bold fs-10 text-danger mb-2">Why Choose Us</div>
              <h2 class="text-white mb-0">Built on trust.<br><span class="fst-italic fw-normal">Driven by results.</span></h2>
            </div>
          </div>

          <!-- 4 pillars -->
          <div class="row font-secondary">
            <div class="col-md-6 col-lg-3 mb-4">
              <div class="h-100 p-4 border border-secondary border-opacity-25 rounded">
                <h5 class="text-white mb-3 fs-9 fw-semibold">Deep sector knowledge</h5>
                <p class="mb-0 fs-9 text-white text-opacity-75">Working consistently with doctors, dentists, locums and construction contractors gives us a detailed understanding of the specific rules and compliance requirements in those sectors.</p>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
              <div class="h-100 p-4 border border-secondary border-opacity-25 rounded">
                <h5 class="text-white mb-3 fs-9 fw-semibold">Compliance and planning together</h5>
                <p class="mb-0 fs-9 text-white text-opacity-75">We do not treat compliance and advisory work as separate functions. Where planning questions arise from the accounts or returns we prepare, we raise them as part of our standard service.</p>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
              <div class="h-100 p-4 border border-secondary border-opacity-25 rounded">
                <h5 class="text-white mb-3 fs-9 fw-semibold">Clear communication</h5>
                <p class="mb-0 fs-9 text-white text-opacity-75">We give clients a straightforward account of their obligations, the options available to them and any deadlines that apply. We do not use unnecessary jargon.</p>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
              <div class="h-100 p-4 border border-secondary border-opacity-25 rounded">
                <h5 class="text-white mb-3 fs-9 fw-semibold">Proactive and responsive</h5>
                <p class="mb-0 fs-9 text-white text-opacity-75">We contact clients ahead of deadlines rather than chasing them. Queries are answered promptly and our team is accessible throughout the year &mdash; not only at year-end.</p>
              </div>
            </div>
          </div>

        </div><!-- end of .container-->

      </section>
      <!-- Why Choose Us close -->


      <!-- ============================================-->
      <!-- Testimonials  (razzaq R10) — solid bg, no image -->
      <section class="bg-light" id="digitalWeDo">

        <div class="container">
          <div class="row justify-content-center text-center mb-6">
            <div class="col-lg-9">
              <div class="ls text-uppercase fw-bold fs-10 text-danger mb-2">Client Testimonials</div>
              <h2>What Our Clients Say</h2>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-lg-10">
              <div class="swiper theme-slider position-static" data-swiper='{"autoplay":{"delay":4000},"loop":true,"effect":"slide"}'>
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="font-secondary text-center px-md-6">
                      <div class="border text-danger border-danger fw-bold px-2 fs-10 rounded d-inline-block mb-3">&starf; &starf; &starf; &starf; &starf;</div>
                      <h6 class="ls text-uppercase fw-bold mb-4">Healthcare</h6>
                      <p class="mb-4 fs-8 fst-italic">&ldquo;Razzaq &amp; Co. completely transformed how I understand my tax position as a consultant. They are thorough, responsive and genuinely proactive.&rdquo;</p>
                      <h5 class="mb-1">Dr. S. Mahmood</h5>
                      <p class="mb-0 text-body-secondary fs-9">NHS Consultant, London</p>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="font-secondary text-center px-md-6">
                      <div class="border text-danger border-danger fw-bold px-2 fs-10 rounded d-inline-block mb-3">&starf; &starf; &starf; &starf; &starf;</div>
                      <h6 class="ls text-uppercase fw-bold mb-4">Construction</h6>
                      <p class="mb-4 fs-8 fst-italic">&ldquo;Switching from our previous accountants was the best decision we made. The team understands CIS inside out and saved us significant sums on our restructure.&rdquo;</p>
                      <h5 class="mb-1">James Hartley</h5>
                      <p class="mb-0 text-body-secondary fs-9">Director, Hartley Build Ltd</p>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="font-secondary text-center px-md-6">
                      <div class="border text-danger border-danger fw-bold px-2 fs-10 rounded d-inline-block mb-3">&starf; &starf; &starf; &starf; &starf;</div>
                      <h6 class="ls text-uppercase fw-bold mb-4">Property</h6>
                      <p class="mb-4 fs-8 fst-italic">&ldquo;The property tax advice I received around my portfolio restructure was exceptional. Clear, practical and delivered without jargon. Highly recommended.&rdquo;</p>
                      <h5 class="mb-1">Priya Anand</h5>
                      <p class="mb-0 text-body-secondary fs-9">Property Investor, Manchester</p>
                    </div>
                  </div>
                </div>
                <div class="swiper-nav mt-4">
                  <div class="swiper-button-next"></div>
                  <div class="swiper-button-prev"></div>
                </div>
              </div>
            </div>
          </div>
        </div><!-- end of .container-->

      </section>
      <!-- Testimonials close -->


      <!-- ============================================-->
      <!-- Insights  (razzaq R11) — 4 blog cards ======-->
      <section id="razzaqInsights">

        <div class="container">
          <div class="row justify-content-center text-center mb-6">
            <div class="col-lg-9">
              <div class="ls text-uppercase fw-bold fs-10 text-danger mb-2">Insights</div>
              <h2>Latest From The Practice</h2>
              <p class="mb-0 fs-9 text-body font-secondary">Practical guidance on tax, compliance and planning &mdash; written for business owners and individuals.</p>
            </div>
          </div>
          <div class="row mt-5 font-secondary">
            <div class="col-sm-6 col-lg-3 mb-4">
              <article class="h-100 border rounded overflow-hidden d-flex flex-column">
                <img class="img-fluid" src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?w=800&amp;q=80" alt="" loading="lazy" style="height:200px; width:100%; object-fit:cover;" />
                <div class="p-4 bg-light flex-grow-1 d-flex flex-column">
                  <div class="d-flex justify-content-between align-items-center mb-2">
                    <span class="ls text-uppercase fs-10 fw-bold text-danger">Property Tax</span>
                    <span class="fs-10 text-body-secondary">Apr 2026</span>
                  </div>
                  <h5 class="mb-3 fs-9 fw-semibold text-body">Section 24 and the property investor: what the mortgage interest restriction means</h5>
                  <p class="fs-9 mb-3 text-body">Landlords can no longer deduct mortgage interest as a business expense. We explain the impact and structures that can help.</p>
                  <a class="ls text-uppercase fw-bold fs-10 text-danger text-decoration-none mt-auto" href="#">Read Article &rarr;</a>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4">
              <article class="h-100 border rounded overflow-hidden d-flex flex-column">
                <img class="img-fluid" src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?w=800&amp;q=80" alt="" loading="lazy" style="height:200px; width:100%; object-fit:cover;" />
                <div class="p-4 bg-light flex-grow-1 d-flex flex-column">
                  <div class="d-flex justify-content-between align-items-center mb-2">
                    <span class="ls text-uppercase fs-10 fw-bold text-danger">Self Assessment</span>
                    <span class="fs-10 text-body-secondary">Mar 2026</span>
                  </div>
                  <h5 class="mb-3 fs-9 fw-semibold text-body">High Income Child Benefit Charge: who it affects and how to manage it</h5>
                  <p class="fs-9 mb-3 text-body">If your income exceeds &pound;60,000, you may be liable. We set out the rules and options to reduce the charge.</p>
                  <a class="ls text-uppercase fw-bold fs-10 text-danger text-decoration-none mt-auto" href="#">Read Article &rarr;</a>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4">
              <article class="h-100 border rounded overflow-hidden d-flex flex-column">
                <img class="img-fluid" src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=800&amp;q=80" alt="" loading="lazy" style="height:200px; width:100%; object-fit:cover;" />
                <div class="p-4 bg-light flex-grow-1 d-flex flex-column">
                  <div class="d-flex justify-content-between align-items-center mb-2">
                    <span class="ls text-uppercase fs-10 fw-bold text-danger">VAT</span>
                    <span class="fs-10 text-body-secondary">Feb 2026</span>
                  </div>
                  <h5 class="mb-3 fs-9 fw-semibold text-body">MTD for VAT: are you fully compliant with Making Tax Digital requirements?</h5>
                  <p class="fs-9 mb-3 text-body">Many businesses still operate manual records that fall outside MTD. Here is what you need to know and change.</p>
                  <a class="ls text-uppercase fw-bold fs-10 text-danger text-decoration-none mt-auto" href="#">Read Article &rarr;</a>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4">
              <article class="h-100 border rounded overflow-hidden d-flex flex-column">
                <img class="img-fluid" src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?w=800&amp;q=80" alt="" loading="lazy" style="height:200px; width:100%; object-fit:cover;" />
                <div class="p-4 bg-light flex-grow-1 d-flex flex-column">
                  <div class="d-flex justify-content-between align-items-center mb-2">
                    <span class="ls text-uppercase fs-10 fw-bold text-danger">Limited Co.</span>
                    <span class="fs-10 text-body-secondary">Jan 2026</span>
                  </div>
                  <h5 class="mb-3 fs-9 fw-semibold text-body">Extracting profit from your limited company: salary, dividends, or a combination?</h5>
                  <p class="fs-9 mb-3 text-body">With dividend allowances reduced and NIC rates shifting, the optimal mix has changed. A practical 2026 guide.</p>
                  <a class="ls text-uppercase fw-bold fs-10 text-danger text-decoration-none mt-auto" href="#">Read Article &rarr;</a>
                </div>
              </article>
            </div>
          </div>
        </div><!-- end of .container-->

      </section>
      <!-- Insights close -->


      <!-- ============================================-->
      <!-- Contact  (razzaq R13) — DISABLED on root.   -->
      <!-- Contact form lives at /contact/ (page-contact.php). -->
      <!-- Block preserved below for reference; re-enable by removing the if(false) wrapper. -->
      <?php if (false) : // BEGIN disabled root-page contact section ?>
      <section class="text-center bg-black font-secondary" id="digitalContact">

        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-7">
              <div class="ls text-uppercase fw-bold fs-10 text-danger mb-2">Contact</div>
              <h2 class="text-white">Get in touch</h2>
              <p class="text-body-tertiary fs-9">We welcome enquiries from individuals and businesses at any stage &mdash; whether you are looking for a new accountant, have a specific question, or need advice on a particular matter.</p>
            </div>
          </div>
          <form class="text-start mt-6">
            <div class="row justify-content-center">
              <div class="col-lg-5">
                <div class="mb-4">
                  <label class="text-light text-opacity-75 fw-bold ls fs-10">First Name</label>
                  <input class="fs-9 form-control border-secondary bg-transparent" type="text" required="required" />
                </div>
              </div>
              <div class="col-lg-5">
                <div class="mb-4">
                  <label class="text-light text-opacity-75 fw-bold ls fs-10">Last Name</label>
                  <input class="fs-9 form-control border-secondary bg-transparent" type="text" required="required" />
                </div>
              </div>
              <div class="col-lg-10">
                <div class="mb-4">
                  <label class="text-light text-opacity-75 fw-bold ls fs-10">Email Address</label>
                  <input class="fs-9 form-control border-secondary bg-transparent" type="email" required="required" />
                </div>
              </div>
              <div class="col-lg-10">
                <div class="mb-4">
                  <label class="text-light text-opacity-75 fw-bold ls fs-10">Nature of Enquiry</label>
                  <select class="form-select fs-9 border-secondary bg-transparent" required="required">
                    <option value="" disabled selected>Please select</option>
                    <option>Self Assessment</option>
                    <option>Limited Company</option>
                    <option>PAYE &amp; Payroll</option>
                    <option>VAT</option>
                    <option>Tax Advisory</option>
                    <option>Property Tax</option>
                    <option>General Enquiry</option>
                  </select>
                </div>
              </div>
              <div class="col-lg-10">
                <div class="mb-4">
                  <label class="text-light text-opacity-75 fw-bold ls fs-10">Message</label>
                  <textarea class="fs-9 form-control border-secondary bg-transparent" rows="8" required="required"></textarea>
                </div>
              </div>
              <div class="col-lg-10 text-center">
                <div class="my-2"></div>
                <input class="btn btn-danger" type="submit" value="Submit Enquiry" />
              </div>
            </div>
          </form>
        </div><!-- end of .container-->

      </section>
      <?php endif; // END disabled root-page contact section ?>
      <!-- Contact close -->


      <!-- ============================================-->
      <!-- Get in touch CTA (links to /contact/) ======-->
      <section class="text-center" id="razzaqGetInTouchCta">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <h2 class="mb-4">Get In Touch</h2>
              <a class="btn btn-razzaq-green d-inline-flex gap-1" href="<?php echo esc_url(home_url('/contact/')); ?>"><span class="icon-entity-xrarr">&xrarr; </span>Visit the contact page</a>
            </div>
          </div>
        </div>
      </section>
      <!-- Get in touch CTA close -->


      <!-- ============================================-->
      <!-- Footer info  (3 cols mirroring Sparrow digitalSocials) -->
      <section class="font-secondary" id="digitalSocials">

        <div class="container">
          <div class="row">
            <div class="col-lg-3 pe-lg-5">
              <h3 class="mb-3 fs-9 fw-semibold text-body">Razzaq &amp; Co.</h3>
              <p>A UK-based firm of chartered certified accountants &mdash; specialising in tax and accounting for individuals, medical professionals, business owners and investors. Built on technical precision, close communication and long-term client relationships.</p>
            </div>
            <div class="col-md-6 col-lg-4 pe-lg-6 ms-lg-auto mt-6 mt-lg-0">
              <h4 class="mb-3 fs-9 fw-semibold text-body">Latest from the practice</h4>
              <p class="mb-2"><a class="text-body" href="<?php echo esc_url(home_url('/insights/')); ?>">Section 24 and the property investor: what the mortgage interest restriction means</a></p>
              <p class="mb-2"><a class="text-body" href="<?php echo esc_url(home_url('/insights/')); ?>">High Income Child Benefit Charge: who it affects and how to manage it</a></p>
              <p class="mb-0"><a class="text-body" href="<?php echo esc_url(home_url('/insights/')); ?>">MTD for VAT: are you fully compliant with Making Tax Digital requirements?</a></p>
              <h4 class="mb-3 mt-4 fs-9 fw-semibold text-body">Regulation</h4>
              <p class="mb-0">Regulated by the Association of Chartered Certified Accountants (ACCA). Every engagement is led by a senior member of the firm.</p>
            </div>
            <div class="col-md-6 col-lg-4 mt-6 mt-lg-0">
              <h4 class="mb-3 fs-9 fw-semibold text-body">Get in touch</h4>
              <p class="mb-0"><span class="text-black">Tel:</span> <a class="text-body" href="tel:+441234567890">+44 (0) 1234 567 890</a></p>
              <p class="mb-0"><span class="text-black">Drop us an email at:</span> <a class="text-body" href="mailto:info@razzaqco.co.uk">info@razzaqco.co.uk</a></p>
              <h4 class="mb-3 mt-4 fs-9 fw-semibold text-body">Coverage</h4>
              <address class="mb-0">Razzaq &amp; Co. &mdash; Chartered Certified Accountants<br />Clients throughout the United Kingdom<br />Monday &ndash; Friday, 9:00 am &ndash; 6:00 pm</address>
            </div>
          </div>
        </div><!-- end of .container-->

      </section>
      <!-- Footer info close -->


    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->
<?php get_footer(); ?>
