<?php
if (!defined('ABSPATH')) {
    exit;
}
get_header();
?>
    <main class="main min-vh-100" id="top">

      <?php
      get_template_part('template-parts/sub-hero', null, [
          'id'         => 'serviceLimitedCompaniesHero',
          'breadcrumb' => [
              ['label' => 'Home',              'url' => home_url('/')],
              ['label' => 'Services',          'url' => home_url('/services/')],
              ['label' => 'Limited Companies'],
          ],
          'eyebrow' => 'Service 02',
          'title'   => 'Limited <em>Companies</em>',
          'sub'     => 'Full statutory compliance for UK limited companies &mdash; accounts, corporation tax, Companies House filings and the planning work that sits alongside them.',
      ]);
      ?>


      <section class="py-7 py-md-8">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-10">
              <div class="ls text-uppercase fw-bold fs-10 text-danger mb-2">Overview</div>
              <h2 class="mb-4">Company compliance, <em>end to end.</em></h2>
              <p class="font-secondary mb-3">We prepare annual accounts under FRS 102 Section 1A or FRS 105 depending on company size, file corporation tax returns (CT600) with HMRC, and handle Companies House filings including confirmation statements and director changes. We act for single-director contractor companies through to multi-entity groups with substantial trading operations.</p>
              <p class="font-secondary mb-4">Our work is not limited to producing documents. We review the numbers alongside you, flag opportunities &mdash; from R&amp;D relief to director loan planning to the timing of dividend declarations &mdash; and ensure that the company's tax position is aligned with your personal circumstances as shareholder-director.</p>

              <h3 class="mt-5 mb-3">What we handle</h3>
              <ul class="font-secondary">
                <li class="mb-2"><strong>Statutory accounts</strong> &mdash; FRS 102 1A, FRS 105, abridged and full accounts as required</li>
                <li class="mb-2"><strong>Corporation tax</strong> &mdash; CT600 preparation, computations, associated company review, marginal rate planning</li>
                <li class="mb-2"><strong>Companies House filings</strong> &mdash; confirmation statements, director and PSC changes, company formations</li>
                <li class="mb-2"><strong>R&amp;D tax relief</strong> &mdash; claim preparation and supporting technical narratives under the merged scheme</li>
                <li class="mb-2"><strong>Director planning</strong> &mdash; salary/dividend mix, director loan accounts, benefits in kind, pension contributions</li>
                <li class="mb-2"><strong>IR35 review</strong> &mdash; contract and working-practice assessment, off-payroll working compliance</li>
                <li class="mb-2"><strong>Group structures</strong> &mdash; holding company formation, group relief, consortium relief, transfer pricing basics</li>
                <li class="mb-2"><strong>Exit planning</strong> &mdash; share sale preparation, Business Asset Disposal Relief, MBO structures</li>
              </ul>

              <h3 class="mt-5 mb-3">Who this is for</h3>
              <p class="font-secondary mb-0">Contractor companies, professional services firms, medical and dental practices operating as limited companies, construction businesses, property investment companies (SPVs), and established SMEs across healthcare, technology and professional sectors.</p>
            </div>
          </div>
        </div>
      </section>


      <section class="border-top bg-light py-7 py-md-8">
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
                  ['q' => 'What is the current corporation tax rate?',            'a' => 'The main rate is 25% for profits above &pound;250,000, with a small profits rate of 19% for profits up to &pound;50,000. Marginal relief applies between those thresholds, producing an effective rate of 26.5% on profits in the middle band. Associated company rules can compress these thresholds where a director controls multiple companies &mdash; we review this as part of every engagement.'],
                  ['q' => 'When are corporation tax and accounts due?',           'a' => 'Corporation tax is due nine months and one day after the company\'s accounting period end. Statutory accounts must be filed at Companies House within nine months. Corporation tax returns must be filed with HMRC within twelve months. We work to well in advance of these deadlines, so there is time to review and plan.'],
                  ['q' => 'Should I take salary, dividends, or a combination?',  'a' => 'For most owner-managed companies the optimal mix is a small salary up to the NIC secondary threshold, with the balance as dividends &mdash; but the position has tightened as dividend allowances have been reduced and corporation tax rates increased. Pension contributions, spousal involvement and director loan repayments all change the picture. We model this for every client annually.'],
                  ['q' => 'Do you handle R&amp;D claims?',                       'a' => 'Yes. We prepare claims under the merged scheme for qualifying activities, including the technical narrative required under HMRC\'s current scrutiny. We take a cautious, evidence-first approach &mdash; we will tell you if we do not believe a claim is defensible, rather than push questionable claims.'],
              ];
              foreach ($faqs as $faq) : ?>
                <details class="bg-white border p-4 mb-3">
                  <summary class="fw-bold font-primary fs-7" style="cursor:pointer; list-style: none;"><?php echo wp_kses_post($faq['q']); ?></summary>
                  <p class="font-secondary mt-3 mb-0"><?php echo wp_kses_post($faq['a']); ?></p>
                </details>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </section>


      <section class="py-7 py-md-8">
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
                ['num' => '03 &middot; PAYE &amp; Payroll', 'title' => 'Director &amp; staff payroll',  'desc' => 'RTI submissions, P11Ds, auto-enrolment and director-only payroll schemes.',                  'url' => home_url('/services/paye-payroll/')],
                ['num' => '04 &middot; VAT',                'title' => 'Quarterly returns &amp; schemes', 'desc' => 'MTD-compliant VAT returns, scheme selection and registration thresholds.',                  'url' => home_url('/services/vat/')],
                ['num' => '05 &middot; Tax Advisory',       'title' => 'Planning &amp; exit strategy',   'desc' => 'Group restructuring, share schemes, Business Asset Disposal Relief on exit.',               'url' => home_url('/services/tax-advisory/')],
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
          'title' => 'Looking for a <em>proper</em> company accountant?',
          'desc'  => 'Tell us about your company and we will quote a fixed annual fee covering accounts, corporation tax and Companies House &mdash; with no surprises.',
          'btns'  => [
              ['label' => 'Request a Quote', 'url' => home_url('/contact/'), 'class' => 'btn-danger'],
          ],
      ]);
      ?>


    </main>

<?php get_footer();
