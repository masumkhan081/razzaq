<?php
if (!defined('ABSPATH')) {
    exit;
}
get_header();
?>
    <main class="main min-vh-100" id="top">

      <?php
      get_template_part('template-parts/sub-hero', null, [
          'id'         => 'servicePropertyTaxHero',
          'breadcrumb' => [
              ['label' => 'Home',         'url' => home_url('/')],
              ['label' => 'Services',     'url' => home_url('/services/')],
              ['label' => 'Property Tax'],
          ],
          'eyebrow' => 'Service 06',
          'title'   => 'Property <em>Tax</em>',
          'sub'     => 'Holding structure advice, Section 24 mortgage interest restrictions, capital gains on disposal, SDLT and incorporation relief for personal landlords and investors using limited companies.',
      ]);
      ?>


      <section class="py-7 py-md-8">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-10">
              <div class="ls text-uppercase fw-bold fs-10 text-danger mb-2">Overview</div>
              <h2 class="mb-4">Specialist advice <em>for landlords.</em></h2>
              <p class="font-secondary mb-3">Property tax has become one of the most complex areas of UK personal tax. Section 24 restricts mortgage interest relief for individual landlords. SDLT includes a 3% surcharge on additional dwellings, with further rules around multiple dwellings relief and mixed-use transactions. Capital gains on residential property must now be reported and paid within 60 days of completion.</p>
              <p class="font-secondary mb-4">We advise landlords with one property through to investors with substantial portfolios &mdash; on how to hold the properties, whether to incorporate, how to structure acquisitions efficiently, and how to exit when the time comes.</p>

              <h3 class="mt-5 mb-3">What we handle</h3>
              <ul class="font-secondary">
                <li class="mb-2"><strong>Holding structures</strong> &mdash; personal, joint, LLP, limited company, hybrid &mdash; advised on the numbers, not the theory</li>
                <li class="mb-2"><strong>Incorporation</strong> &mdash; Section 162 incorporation relief, SDLT reliefs for LLPs to Ltd Co, partnership formation before incorporation</li>
                <li class="mb-2"><strong>Section 24 analysis</strong> &mdash; impact modelling and mitigation strategies for higher-rate taxpayers</li>
                <li class="mb-2"><strong>SDLT</strong> &mdash; 3% surcharge, multiple dwellings relief, mixed-use, chain rules, sub-sale relief</li>
                <li class="mb-2"><strong>CGT on disposal</strong> &mdash; 60-day reporting, PPR relief, lettings relief, transfers between spouses</li>
                <li class="mb-2"><strong>Non-resident landlords</strong> &mdash; NRL scheme, Self Assessment, NRCGT returns for UK property disposals</li>
                <li class="mb-2"><strong>Property companies (SPVs)</strong> &mdash; setup, accounts, corporation tax, ATED where applicable</li>
                <li class="mb-2"><strong>Furnished holiday lettings</strong> &mdash; qualifying conditions, capital allowances, current legislative position</li>
              </ul>

              <h3 class="mt-5 mb-3">Who this is for</h3>
              <p class="font-secondary mb-0">Accidental landlords, buy-to-let investors, portfolio landlords, HMO operators, property developers, and investors considering their first acquisition.</p>
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
                  ['q' => 'Should I hold my properties in a limited company?', 'a' => 'It depends on your rate of tax, your financing arrangements, your time horizon, and whether you are acquiring new or transferring existing properties. Incorporation can produce significant CGT and SDLT charges, so the case for it must be made on specific numbers &mdash; not general advice. We run the models before recommending.'],
                  ['q' => 'What is Section 24 and does it affect me?',         'a' => 'Section 24 restricts mortgage interest relief to a basic-rate tax reducer for individual residential landlords. If you are a higher-rate or additional-rate taxpayer with mortgaged rental property, you pay tax on the gross rent and receive only basic-rate relief on the interest &mdash; effectively paying tax on money you never received. The impact is most severe on highly leveraged portfolios.'],
                  ['q' => 'What is the 60-day CGT reporting rule?',           'a' => 'Since April 2020, UK residents disposing of UK residential property must report the gain and pay the tax within 60 days of completion. A separate Self Assessment entry is still required later. Penalties for late filing begin at &pound;100. We handle these reports routinely for property clients.'],
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


      <?php
      get_template_part('template-parts/cta', null, [
          'title' => 'Thinking about <em>your portfolio?</em>',
          'desc'  => 'Whether it is a single property or a multi-entity portfolio, we can help you structure it properly.',
          'btns'  => [
              ['label' => 'Book a Consultation', 'url' => home_url('/contact/'), 'class' => 'btn-danger'],
          ],
      ]);
      ?>


    </main>

<?php get_footer();
