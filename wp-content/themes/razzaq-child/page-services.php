<?php
if (!defined('ABSPATH')) {
    exit;
}
get_header();
?>
    <main class="main min-vh-100" id="top">

      <?php
      get_template_part('template-parts/sub-hero', null, [
          'id'         => 'servicesHero',
          'breadcrumb' => [
              ['label' => 'Home',     'url' => home_url('/')],
              ['label' => 'Services'],
          ],
          'eyebrow'  => 'Services',
          'title'    => 'Areas of <em>practice.</em>',
          'sub'      => 'We handle personal and business tax compliance across a wide range of matters, alongside advisory work on more complex planning questions. Select a service below to explore in detail.',
          'bg_image' => 'https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?w=1800&q=80',
      ]);
      ?>


      <!-- Services grid -->
      <section class="py-7 py-md-8" id="servicesGrid">
        <div class="container">
          <div class="row gy-4">
            <?php
            $services = [
                ['num' => '01', 'name' => 'Self Assessment',     'desc' => 'Personal tax returns for sole traders, locums, landlords, high earners and individuals with multiple income sources. Covers pension allowance, capital gains and trusts.', 'url' => home_url('/services/self-assessment/')],
                ['num' => '02', 'name' => 'Limited Companies',   'desc' => 'Statutory accounts, corporation tax returns and Companies House compliance for UK limited companies across all sizes and industries.',                                       'url' => home_url('/services/limited-companies/')],
                ['num' => '03', 'name' => 'PAYE &amp; Payroll',  'desc' => 'End-to-end payroll processing and PAYE compliance &mdash; RTI, P60s, P11Ds, auto-enrolment, statutory payments and director payroll.',                                      'url' => home_url('/services/paye-payroll/')],
                ['num' => '04', 'name' => 'VAT',                  'desc' => 'Registration, quarterly returns and MTD-compliant submissions. Scheme selection, partial exemption, the construction domestic reverse charge and property transactions.', 'url' => home_url('/services/vat/')],
                ['num' => '05', 'name' => 'Tax Advisory',         'desc' => 'Profit extraction, group reorganisation, business sale planning, Business Asset Disposal Relief, inheritance tax mitigation and HMRC enquiry representation.',           'url' => home_url('/services/tax-advisory/')],
                ['num' => '06', 'name' => 'Property Tax',         'desc' => 'Holding structure advice, Section 24 mortgage interest restrictions, capital gains on disposal, SDLT and incorporation relief for landlords and investors.',             'url' => home_url('/services/property-tax/')],
            ];
            foreach ($services as $s) : ?>
              <div class="col-md-6 col-lg-4">
                <a class="d-block text-decoration-none p-4 p-md-5 bg-light h-100 border" href="<?php echo esc_url($s['url']); ?>">
                  <div class="display-5 text-danger mb-3 font-primary"><?php echo esc_html($s['num']); ?></div>
                  <h4 class="mb-3"><?php echo wp_kses_post($s['name']); ?></h4>
                  <p class="font-secondary text-body mb-3"><?php echo wp_kses_post($s['desc']); ?></p>
                  <span class="ls text-uppercase fw-bold fs-10 text-danger font-secondary">Explore &nearr;</span>
                </a>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </section>


      <!-- Approach (4 steps) -->
      <section class="border-top bg-light py-7 py-md-8" id="servicesApproach">
        <div class="container">
          <div class="row justify-content-center text-center mb-6">
            <div class="col-lg-9">
              <div class="ls text-uppercase fw-bold fs-10 text-danger mb-2">Our Approach</div>
              <h2>How every engagement works</h2>
              <p class="lead mb-0">Whether the work is compliance-led or advisory-led, our process is the same &mdash; understand the position, build the strategy, deliver with precision.</p>
            </div>
          </div>

          <div class="row gy-5">
            <?php
            $steps = [
                ['num' => '01', 'icon' => '&#9678;', 'title' => 'Discovery call',    'desc' => 'A no-obligation conversation to understand your position, tax history and objectives &mdash; and to confirm we are the right fit.'],
                ['num' => '02', 'icon' => '&#8862;', 'title' => 'Engagement plan',   'desc' => 'We set out a clear scope of work, fees, deliverables and timelines. No surprises and no hourly rates for compliance work.'],
                ['num' => '03', 'icon' => '&#9672;', 'title' => 'Active delivery',   'desc' => 'Returns, accounts and advisory work delivered ahead of deadlines with clear communication at every stage.'],
                ['num' => '04', 'icon' => '&#9680;', 'title' => 'Year-round support','desc' => 'We remain available throughout the year for questions, planning and HMRC correspondence &mdash; not just at filing time.'],
            ];
            foreach ($steps as $s) : ?>
              <div class="col-md-6 col-lg-3">
                <div class="d-flex align-items-start font-secondary">
                  <div class="me-3 text-danger d-flex align-items-center justify-content-center flex-shrink-0" style="font-size:3rem; line-height:1; width:3rem; height:3rem;"><?php echo $s['icon']; ?></div>
                  <div class="flex-1">
                    <div class="ls text-uppercase fw-bold fs-10 text-body-secondary mb-1">Step <?php echo esc_html($s['num']); ?></div>
                    <h5 class="mb-2"><?php echo esc_html($s['title']); ?></h5>
                    <p class="mb-0"><?php echo wp_kses_post($s['desc']); ?></p>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </section>


      <?php
      get_template_part('template-parts/cta', null, [
          'title' => 'Not sure which service <em>you need?</em>',
          'desc'  => 'Start with a discovery call. Tell us your position and we will confirm whether we are the right fit &mdash; with no obligation.',
          'btns'  => [
              ['label' => 'Request a Call',  'url' => home_url('/#digitalContact'), 'class' => 'btn-danger'],
              ['label' => 'View Our Sectors', 'url' => home_url('/sectors/'),       'class' => 'btn-outline-danger'],
          ],
      ]);
      ?>


    </main>

<?php get_footer();
