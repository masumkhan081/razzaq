<?php
if (!defined('ABSPATH')) {
    exit;
}
get_header();
?>
    <main class="main min-vh-100" id="top">

      <?php
      get_template_part('template-parts/sub-hero', null, [
          'id'         => 'serviceSelfAssessmentHero',
          'breadcrumb' => [
              ['label' => 'Home',           'url' => home_url('/')],
              ['label' => 'Services',       'url' => home_url('/services/')],
              ['label' => 'Self Assessment'],
          ],
          'eyebrow' => 'Service 01',
          'title'   => 'Self <em>Assessment</em>',
          'sub'     => 'Personal tax returns for individuals with complex or multiple income sources &mdash; prepared accurately, filed on time, and reviewed with you before submission.',
      ]);
      ?>


      <!-- Overview -->
      <section>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-10">
              <div class="ls text-uppercase fw-bold fs-10 text-danger mb-2">Overview</div>
              <h2 class="mb-4">Personal tax, done <em>properly.</em></h2>
              <p class="font-secondary mb-3">We prepare Self Assessment tax returns for sole traders, company directors, locum professionals, landlords, high earners and individuals with foreign income, capital gains or trust interests. Whether your affairs are straightforward or genuinely complex, we treat every return with the same technical rigour &mdash; and we speak to you about what it shows before anything is filed.</p>
              <p class="font-secondary mb-4">Many clients come to us because a previous accountant filed a return that was simply wrong, or because HMRC has opened an enquiry. Others have grown out of a DIY approach and need a practice that can handle pension tax charges, Section 24 restrictions, crypto disposals, or the High Income Child Benefit Charge without treating them as edge cases.</p>

              <h3 class="mt-5 mb-3">What we handle</h3>
              <ul class="font-secondary">
                <li class="mb-2"><strong>Sole trader returns</strong> &mdash; profit calculations, allowable expenses, Class 2 and Class 4 NIC, trading allowance considerations</li>
                <li class="mb-2"><strong>Multiple income sources</strong> &mdash; employment, self-employment, dividends, property, interest, foreign income, capital gains on a single return</li>
                <li class="mb-2"><strong>Landlord returns</strong> &mdash; rental accounts, Section 24 restriction, CGT on disposal, non-resident landlord scheme where relevant</li>
                <li class="mb-2"><strong>High earners</strong> &mdash; tapered personal allowance, pension annual allowance charge, High Income Child Benefit Charge</li>
                <li class="mb-2"><strong>Capital gains</strong> &mdash; shares, crypto, residential property (60-day reporting), business asset disposal</li>
                <li class="mb-2"><strong>Pension planning</strong> &mdash; annual allowance, tapered annual allowance, money purchase annual allowance, scheme pays elections</li>
                <li class="mb-2"><strong>Trusts and estates</strong> &mdash; income from trusts, life interest entitlements, beneficiary reporting</li>
                <li class="mb-2"><strong>HMRC enquiries</strong> &mdash; full representation from opening letter to closure, including penalty mitigation</li>
              </ul>

              <h3 class="mt-5 mb-3">Who this is for</h3>
              <p class="font-secondary mb-0">Consultants and locum doctors, GPs, dentists, company directors, contractors, landlords, investors, and anyone whose affairs have become too complex for automated software. We also act for individuals who simply want a tax adviser they can pick up the phone to during the year.</p>
            </div>
          </div>
        </div>
      </section>


      <!-- FAQ -->
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
                  ['q' => 'When is the Self Assessment deadline?',         'a' => 'Paper returns are due by 31 October; online returns and any tax due are payable by 31 January following the end of the tax year (5 April). Late filing penalties begin at &pound;100 and escalate quickly. We aim to have client returns finalised well before December to avoid any last-minute issues.'],
                  ['q' => 'What records do I need to provide?',            'a' => 'Typically: P60s, P11Ds, dividend vouchers, bank interest statements, rental income summaries with expense receipts, CGT disposal details, pension contribution certificates, and any other documents evidencing income or deductible expenses. We provide each client with a clear checklist before the return is prepared.'],
                  ['q' => 'What if my previous returns were incorrect?',   'a' => 'We can review previous returns and, where required, submit amendments or make a voluntary disclosure to HMRC. Acting early &mdash; before HMRC opens an enquiry &mdash; almost always reduces penalties and improves the outcome. This is a core part of our remedial work.'],
                  ['q' => 'How are your fees structured?',                 'a' => 'We quote a fixed fee for each return at the outset, based on the complexity and scope &mdash; not on hourly billing. Advisory work (such as specific planning questions) is quoted separately. You will always know the fee before work begins.'],
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


      <!-- Related services -->
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
                ['num' => '05 &middot; Tax Advisory',      'title' => 'Planning alongside compliance', 'desc' => 'Pension planning, capital gains strategy, inheritance tax mitigation &mdash; raised alongside your return as questions arise.', 'url' => home_url('/services/tax-advisory/')],
                ['num' => '06 &middot; Property Tax',      'title' => 'For landlords and investors',   'desc' => 'Section 24, SDLT, capital gains reporting and holding structure advice for portfolio landlords and investors.',               'url' => home_url('/services/property-tax/')],
                ['num' => '02 &middot; Limited Companies', 'title' => 'If you trade through a company','desc' => 'Statutory accounts, corporation tax and Companies House compliance &mdash; alongside your personal Self Assessment.',           'url' => home_url('/services/limited-companies/')],
            ];
            foreach ($related as $r) : ?>
              <div class="col-md-6 col-lg-4">
                <a class="d-block text-decoration-none p-4 p-md-5 bg-light h-100 border" href="<?php echo esc_url($r['url']); ?>">
                  <p class="ls text-uppercase fw-bold fs-10 text-danger mb-2 font-secondary"><?php echo wp_kses_post($r['num']); ?></p>
                  <h5 class="mb-3"><?php echo esc_html($r['title']); ?></h5>
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
          'title' => 'Ready to get your <em>tax affairs</em> in order?',
          'desc'  => 'Tell us about your position and we will confirm scope and fees &mdash; with no obligation.',
          'btns'  => [
              ['label' => 'Request a Call', 'url' => home_url('/contact/'), 'class' => 'btn-danger'],
          ],
      ]);
      ?>


    </main>

<?php get_footer();
