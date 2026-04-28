<?php
if (!defined('ABSPATH')) {
    exit;
}
get_header();
?>
    <main class="main min-vh-100" id="top">

      <?php
      get_template_part('template-parts/sub-hero', null, [
          'id'         => 'sectorConstructionHero',
          'breadcrumb' => [
              ['label' => 'Home',         'url' => home_url('/')],
              ['label' => 'Sectors',      'url' => home_url('/sectors/')],
              ['label' => 'Construction'],
          ],
          'eyebrow'  => 'Sector 02',
          'title'    => 'Construction &amp; <em>Contractors</em>',
          'sub'      => 'Specialist knowledge of CIS, the domestic reverse charge, and the structural choices that affect construction businesses &mdash; from sole-trader subcontractors to established main contractors.',
          'bg_image' => 'https://images.unsplash.com/photo-1590496794008-383c8070b257?w=1800&q=80',
      ]);
      ?>


      <!-- Overview -->
      <section class="py-7 py-md-8">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-10">
              <div class="ls text-uppercase fw-bold fs-10 text-danger mb-2">02 &middot; Overview</div>
              <h2 class="mb-4">Construction-specific <em>expertise.</em></h2>
              <p class="font-secondary mb-4">The Construction Industry Scheme (CIS), the VAT domestic reverse charge, and the perennial question of employment status make construction one of the most compliance-intensive sectors to operate in. We act for subcontractors, main contractors, labour-only firms and property developers &mdash; handling the whole stack.</p>

              <h3 class="mt-5 mb-3">The specific issues we handle</h3>
              <ul class="font-secondary">
                <li class="mb-2"><strong>CIS compliance</strong> &mdash; contractor registration, monthly returns, verification of subcontractors, gross payment status applications</li>
                <li class="mb-2"><strong>Domestic reverse charge</strong> &mdash; VAT treatment of CIS supplies, invoice wording, cash-flow planning, interaction with retention payments</li>
                <li class="mb-2"><strong>Employment status</strong> &mdash; genuine self-employment vs deemed employment, IR35 for contractors trading through limited companies</li>
                <li class="mb-2"><strong>CIS refund claims</strong> &mdash; for subcontractor companies with overpaid tax deducted at source, via offset or repayment</li>
                <li class="mb-2"><strong>Retentions and work in progress</strong> &mdash; proper accounting treatment for long-running contracts</li>
                <li class="mb-2"><strong>Property development</strong> &mdash; the trading/investment distinction, VAT on new build, option to tax on commercial</li>
                <li class="mb-2"><strong>Joint ventures and SPVs</strong> &mdash; partnership, LLP or company structures for individual projects</li>
                <li class="mb-2"><strong>HMRC enquiries</strong> &mdash; CIS compliance reviews, status disputes, PAYE visits</li>
              </ul>

              <p class="font-secondary mb-0 mt-4">We act for clients ranging from single-handed subcontractors through to construction groups with multiple trading entities, and our team stays current with CITB levies, CIS rate changes, and the ongoing evolution of the domestic reverse charge.</p>
            </div>
          </div>
        </div>
      </section>


      <?php
      get_template_part('template-parts/cta', null, [
          'title' => 'Construction accountant <em>that gets it?</em>',
          'desc'  => 'Tell us about your business. We will explain exactly what your CIS, VAT and corporate compliance position should look like.',
          'btns'  => [
              ['label' => 'Book a Call', 'url' => home_url('/contact/'), 'class' => 'btn-danger'],
          ],
      ]);
      ?>


    </main>

<?php get_footer();
