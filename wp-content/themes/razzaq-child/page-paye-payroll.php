<?php
if (!defined('ABSPATH')) {
    exit;
}
get_header();
?>
    <main class="main min-vh-100" id="top">

      <?php
      get_template_part('template-parts/sub-hero', null, [
          'id'         => 'servicePayePayrollHero',
          'breadcrumb' => [
              ['label' => 'Home',          'url' => home_url('/')],
              ['label' => 'Services',      'url' => home_url('/services/')],
              ['label' => 'PAYE & Payroll'],
          ],
          'eyebrow' => 'Service 03',
          'title'   => 'PAYE &amp; <em>Payroll</em>',
          'sub'     => 'End-to-end payroll processing and PAYE compliance &mdash; from director-only schemes to full payrolls with multiple pay dates, statutory payments and auto-enrolment.',
      ]);
      ?>


      <section>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-10">
              <div class="ls text-uppercase fw-bold fs-10 text-danger mb-2">Overview</div>
              <h2 class="mb-4">Payroll that <em>just works.</em></h2>
              <p class="font-secondary mb-3">We run payroll for companies with a single director through to teams of fifty or more. Every pay run is processed on time, RTI submissions go to HMRC on or before payday, payslips are issued promptly, and statutory notifications (P60s at year-end, P11Ds for benefits, P45s for leavers) are prepared without prompting.</p>
              <p class="font-secondary mb-4">Beyond the mechanics, we handle the strategic questions &mdash; whether a director should be on the payroll at all, how to structure salary for NIC efficiency, how to handle benefits in kind, and how auto-enrolment pension obligations apply to the smallest employers.</p>

              <h3 class="mt-5 mb-3">What we handle</h3>
              <ul class="font-secondary">
                <li class="mb-2"><strong>Weekly, fortnightly and monthly payrolls</strong> &mdash; any pay frequency, any number of employees</li>
                <li class="mb-2"><strong>RTI submissions</strong> &mdash; Full Payment Submissions (FPS) and Employer Payment Summaries (EPS) on time, every time</li>
                <li class="mb-2"><strong>Statutory payments</strong> &mdash; SSP, SMP, SPP, SAP, SPBP calculations and recovery</li>
                <li class="mb-2"><strong>P60s, P11Ds, P45s</strong> &mdash; year-end documents and benefits-in-kind reporting</li>
                <li class="mb-2"><strong>Auto-enrolment</strong> &mdash; assessment, enrolment, ongoing contributions, re-enrolment and declaration of compliance</li>
                <li class="mb-2"><strong>Director payroll</strong> &mdash; annualised NIC calculations, director loan interactions, optimal salary levels</li>
                <li class="mb-2"><strong>Benefits in kind</strong> &mdash; company cars, medical insurance, loan benefits, payrolling of benefits</li>
                <li class="mb-2"><strong>PAYE settlement agreements</strong> &mdash; for minor, irregular or impracticable benefits</li>
              </ul>
            </div>
          </div>
        </div>
      </section>


      <section class="border-top bg-light">
        <div class="container">
          <div class="row justify-content-center text-center mb-6">
            <div class="col-lg-9">
              <div class="ls text-uppercase fw-bold fs-10 text-danger mb-2">Frequently Asked</div>
              <h2>Common questions</h2>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-lg-10">
              <?php
              $faqs = [
                  ['q' => 'How much should I pay myself as a director?', 'a' => 'The usual starting point is the NIC secondary threshold &mdash; a salary at this level means no employer or employee NIC, the salary is deductible for corporation tax, and the year counts as a qualifying year for state pension purposes. Higher salaries may be optimal where employment allowance applies or where pension contributions are significant. We model this annually.'],
                  ['q' => 'What are my auto-enrolment obligations?',     'a' => 'Every UK employer must assess their workforce, enrol eligible jobholders in a qualifying pension scheme, and make minimum contributions. The assessment is ongoing &mdash; not just at staging. Director-only companies are generally exempt, but care is needed where spouses or family members are also employed. We handle the full cycle.'],
                  ['q' => 'Can you take over mid-year?',                  'a' => 'Yes. We migrate from any payroll software or provider mid-tax-year, reconstructing year-to-date figures and ensuring continuity of RTI submissions. There is normally no disruption for employees &mdash; pay dates and payslips continue as usual.'],
              ];
              foreach ($faqs as $faq) : ?>
                <details class="bg-white border p-4 mb-3">
                  <summary class="fw-bold font-primary fs-7" style="cursor:pointer; list-style: none;"><?php echo esc_html($faq['q']); ?></summary>
                  <p class="font-secondary mt-3 mb-0"><?php echo wp_kses_post($faq['a']); ?></p>
                </details>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </section>


      <section>
        <div class="container">
          <div class="row mb-5">
            <div class="col-lg-9">
              <div class="ls text-uppercase fw-bold fs-10 text-danger mb-2">Related Services</div>
              <h2>You may also need</h2>
            </div>
          </div>
          <div class="row gy-4">
            <?php
            $related = [
                ['num' => '02 &middot; Limited Companies', 'title' => 'Statutory accounts &amp; CT', 'desc' => 'Annual accounts and corporation tax returns alongside your payroll.', 'url' => home_url('/services/limited-companies/')],
                ['num' => '05 &middot; Tax Advisory',      'title' => 'Remuneration planning',       'desc' => 'Optimal salary/dividend mix, pension strategy and benefits planning.', 'url' => home_url('/services/tax-advisory/')],
                ['num' => '01 &middot; Self Assessment',   'title' => 'Director personal tax',       'desc' => 'Self Assessment returns reflecting your company remuneration correctly.', 'url' => home_url('/services/self-assessment/')],
            ];
            foreach ($related as $r) : ?>
              <div class="col-md-6 col-lg-4">
                <a class="d-block text-decoration-none p-4 p-md-5 bg-light h-100 border" href="<?php echo esc_url($r['url']); ?>">
                  <p class="ls text-uppercase fw-bold fs-10 text-danger mb-2 font-secondary"><?php echo wp_kses_post($r['num']); ?></p>
                  <h5 class="mb-3"><?php echo wp_kses_post($r['title']); ?></h5>
                  <p class="font-secondary mb-3"><?php echo wp_kses_post($r['desc']); ?></p>
                  <span class="ls text-uppercase fw-bold fs-10 text-danger font-secondary">Explore &rarr;</span>
                </a>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </section>


      <?php
      get_template_part('template-parts/cta', null, [
          'title' => 'Need <em>reliable</em> payroll?',
          'desc'  => 'We will take over your payroll from any provider, with no disruption for your team.',
          'btns'  => [
              ['label' => 'Request a Quote', 'url' => home_url('/contact/'), 'class' => 'btn-danger'],
          ],
      ]);
      ?>


    </main>

<?php get_footer();
