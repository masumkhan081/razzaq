<?php
if (!defined('ABSPATH')) {
    exit;
}
get_header();
?>
    <main class="main min-vh-100" id="top">

      <?php
      get_template_part('template-parts/sub-hero', null, [
          'id'         => 'sectorPropertyHero',
          'breadcrumb' => [
              ['label' => 'Home',     'url' => home_url('/')],
              ['label' => 'Sectors',  'url' => home_url('/sectors/')],
              ['label' => 'Property'],
          ],
          'eyebrow'  => 'Sector 03',
          'title'    => 'Property &amp; <em>Investment</em>',
          'sub'      => 'Advisory and compliance for personal landlords, portfolio investors, developers and property companies &mdash; with a clear understanding of how the post-Section 24 landscape actually works.',
          'bg_image' => 'https://images.unsplash.com/photo-1560518883-ce09059eeffa?w=1800&q=80',
      ]);
      ?>


      <!-- Overview -->
      <section>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-10">
              <div class="ls text-uppercase fw-bold fs-10 text-danger mb-2">03 &middot; Overview</div>
              <h2 class="mb-4">Property tax, <em>done right.</em></h2>
              <p class="font-secondary mb-4">Since Section 24 was fully phased in, the economics of personal buy-to-let have been transformed. Many landlords are paying tax on income they never received. Others have incorporated without fully understanding what it costs, or without the right structural steps to preserve reliefs. We bring clarity to these decisions with concrete numbers, not generic advice.</p>

              <h3 class="mt-5 mb-3">The specific issues we handle</h3>
              <ul class="font-secondary">
                <li class="mb-2"><strong>Section 24 modelling</strong> &mdash; impact assessment and mitigation for individual landlords, including spousal share transfers</li>
                <li class="mb-2"><strong>Incorporation</strong> &mdash; when it makes sense, when it does not, and how to structure SDLT and CGT-efficient transfers</li>
                <li class="mb-2"><strong>SDLT planning</strong> &mdash; 3% surcharge, multiple dwellings relief, sub-sale relief, mixed-use classification</li>
                <li class="mb-2"><strong>Capital gains tax</strong> &mdash; 60-day reporting, PPR relief, lettings relief, rebasing, main-residence elections</li>
                <li class="mb-2"><strong>Property companies (SPVs)</strong> &mdash; formation, accounts, CT, director planning, ATED compliance where relevant</li>
                <li class="mb-2"><strong>Portfolio landlord mortgage planning</strong> &mdash; lender requirements, personal vs company finance, rate considerations</li>
                <li class="mb-2"><strong>Furnished holiday lets</strong> &mdash; qualifying conditions, capital allowances, and the evolving legislative position</li>
                <li class="mb-2"><strong>Non-resident landlords</strong> &mdash; NRL scheme, UK self-assessment, NRCGT returns</li>
              </ul>

              <blockquote class="border-start border-3 border-danger ps-4 my-5 fs-7 font-primary fst-italic">
                Incorporation is sometimes the answer &mdash; and sometimes a very expensive mistake. We will tell you which, with the numbers to support it.
              </blockquote>

              <p class="font-secondary mb-0">Our property team acts for accidental landlords through to investors with substantial portfolios held across personal names, partnerships, LLPs and multiple SPVs. Wherever you are in your property journey, we can help structure it properly.</p>
            </div>
          </div>
        </div>
      </section>


      <?php
      get_template_part('template-parts/cta', null, [
          'title' => 'Thinking about <em>your portfolio?</em>',
          'desc'  => 'Whether it is a single property or multi-entity portfolio, start with a proper conversation about structure.',
          'btns'  => [
              ['label' => 'Book a Consultation', 'url' => home_url('/contact/'), 'class' => 'btn-danger'],
          ],
      ]);
      ?>


    </main>

<?php get_footer();
