<?php
if (!defined('ABSPATH')) {
    exit;
}
get_header();
?>
    <main class="main min-vh-100" id="top">

      <?php
      get_template_part('template-parts/sub-hero', null, [
          'id'         => 'serviceVatHero',
          'breadcrumb' => [
              ['label' => 'Home',     'url' => home_url('/')],
              ['label' => 'Services', 'url' => home_url('/services/')],
              ['label' => 'VAT'],
          ],
          'eyebrow' => 'Service 04',
          'title'   => '<em>VAT</em>',
          'sub'     => 'Registration, quarterly returns and MTD-compliant submissions. Scheme selection, partial exemption, the construction domestic reverse charge and VAT on property transactions.',
      ]);
      ?>


      <section class="py-7 py-md-8">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-10">
              <div class="ls text-uppercase fw-bold fs-10 text-danger mb-2">Overview</div>
              <h2 class="mb-4">VAT done <em>correctly.</em></h2>
              <p class="font-secondary mb-4">VAT is one of the most rules-heavy taxes in the UK system, with rate distinctions, reliefs, exemptions and schemes that change frequently. We handle the quarterly cycle for clients across construction, professional services, healthcare, retail and property &mdash; and advise on the harder questions: scheme choice, partial exemption, international supplies and the peculiarities of the construction domestic reverse charge.</p>

              <h3 class="mt-5 mb-3">What we handle</h3>
              <ul class="font-secondary">
                <li class="mb-2"><strong>Registration</strong> &mdash; voluntary or mandatory, including retrospective and group registrations</li>
                <li class="mb-2"><strong>Quarterly VAT returns</strong> &mdash; MTD-compliant, submitted on time, with full reconciliations</li>
                <li class="mb-2"><strong>Scheme selection</strong> &mdash; standard, flat rate, cash accounting, annual accounting, margin scheme</li>
                <li class="mb-2"><strong>Partial exemption</strong> &mdash; standard and special methods, de minimis review, annual adjustments</li>
                <li class="mb-2"><strong>Construction DRC</strong> &mdash; domestic reverse charge for construction services (CIS-registered supplies)</li>
                <li class="mb-2"><strong>Property transactions</strong> &mdash; option to tax, transfer of going concern (TOGC), residential/commercial distinction</li>
                <li class="mb-2"><strong>International supplies</strong> &mdash; place of supply rules, reverse charge, OSS/IOSS where applicable</li>
                <li class="mb-2"><strong>HMRC enquiries &amp; assessments</strong> &mdash; full representation and dispute resolution</li>
              </ul>
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
                  ['q' => 'When do I need to register for VAT?',           'a' => 'Registration is mandatory once your taxable turnover exceeds the VAT registration threshold over any rolling 12-month period. Voluntary registration can make sense earlier where your customers are VAT-registered businesses. Late registration carries penalties, so monitoring turnover is important &mdash; we do this as part of our bookkeeping engagements.'],
                  ['q' => 'Should I use the Flat Rate Scheme?',            'a' => 'For many service businesses it used to offer a modest saving, but since the introduction of the limited cost trader rules most consultancy and contractor businesses now pay the higher 16.5% rate, which is rarely beneficial. We run a comparison before recommending scheme choice.'],
                  ['q' => 'What is the domestic reverse charge?',          'a' => 'The DRC applies to most supplies of construction services between VAT-registered businesses in the CIS. The customer accounts for the VAT rather than the supplier. It affects invoicing, cash flow and the contents of the VAT return. We handle this routinely for construction clients.'],
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
          'title' => 'Need help with <em>VAT?</em>',
          'desc'  => 'Whether it is routine compliance or a specific question, we are here to help.',
          'btns'  => [
              ['label' => 'Get in Touch', 'url' => home_url('/contact/'), 'class' => 'btn-danger'],
          ],
      ]);
      ?>


    </main>

<?php get_footer();
