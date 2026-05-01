<?php
if (!defined('ABSPATH')) {
    exit;
}
get_header();
?>
    <main class="main min-vh-100" id="top">

      <?php
      get_template_part('template-parts/sub-hero', null, [
          'id'         => 'serviceTaxAdvisoryHero',
          'breadcrumb' => [
              ['label' => 'Home',         'url' => home_url('/')],
              ['label' => 'Services',     'url' => home_url('/services/')],
              ['label' => 'Tax Advisory'],
          ],
          'eyebrow' => 'Service 05',
          'title'   => 'Tax <em>Advisory</em>',
          'sub'     => 'Proactive planning that sits alongside compliance &mdash; profit extraction, group reorganisation, business sale planning, inheritance tax mitigation and HMRC enquiry representation.',
      ]);
      ?>


      <section>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-10">
              <div class="ls text-uppercase fw-bold fs-10 text-danger mb-2">Overview</div>
              <h2 class="mb-4">Planning that is <em>grounded.</em></h2>
              <p class="font-secondary mb-3">Tax advisory at Razzaq &amp; Co. is practical, technical and conservative. We do not sell schemes or push marketed arrangements. Instead, we work with the reliefs and structures that exist in the statute &mdash; making sure our clients use them properly, at the right time, with the right documentation.</p>
              <p class="font-secondary mb-4">Because our advisory team works alongside the compliance team, planning opportunities are raised as they arise from the accounts and returns we prepare. Clients do not have to ask &mdash; we tell them.</p>

              <h3 class="mt-5 mb-3">What we handle</h3>
              <ul class="font-secondary">
                <li class="mb-2"><strong>Profit extraction</strong> &mdash; salary/dividend/pension mix, director loans, timing strategies</li>
                <li class="mb-2"><strong>Business sale planning</strong> &mdash; Business Asset Disposal Relief qualification, earn-out structures, share-vs-asset sale</li>
                <li class="mb-2"><strong>Group reorganisation</strong> &mdash; holding company insertion, group relief, intra-group transfers, demerger</li>
                <li class="mb-2"><strong>Inheritance tax</strong> &mdash; seven-year rules, Business Property Relief, Agricultural Property Relief, trusts, lifetime gifts</li>
                <li class="mb-2"><strong>Capital gains planning</strong> &mdash; timing of disposals, rebasing, rollover and holdover reliefs, principal private residence</li>
                <li class="mb-2"><strong>Pension annual allowance</strong> &mdash; tapered allowance, scheme pays, carry-forward strategy</li>
                <li class="mb-2"><strong>HMRC enquiries</strong> &mdash; opening letters, information notices, closure notices, appeals and alternative dispute resolution</li>
                <li class="mb-2"><strong>Voluntary disclosures</strong> &mdash; Worldwide Disclosure Facility, Let Property Campaign, contractual disclosure facility</li>
              </ul>
            </div>
          </div>
        </div>
      </section>


      <?php
      get_template_part('template-parts/cta', null, [
          'title' => 'Have a <em>specific</em> tax question?',
          'desc'  => 'Book an advisory session &mdash; we will tell you what is possible, what is sensible, and what it will cost.',
          'btns'  => [
              ['label' => 'Request Advisory', 'url' => home_url('/contact/'), 'class' => 'btn-danger'],
          ],
      ]);
      ?>


    </main>

<?php get_footer();
