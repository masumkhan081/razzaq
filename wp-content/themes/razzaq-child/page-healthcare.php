<?php
if (!defined('ABSPATH')) {
    exit;
}
get_header();
?>
    <main class="main min-vh-100" id="top">

      <?php
      get_template_part('template-parts/sub-hero', null, [
          'id'         => 'sectorHealthcareHero',
          'breadcrumb' => [
              ['label' => 'Home',       'url' => home_url('/')],
              ['label' => 'Sectors',    'url' => home_url('/sectors/')],
              ['label' => 'Healthcare'],
          ],
          'eyebrow'  => 'Sector 01',
          'title'    => 'Healthcare &amp; <em>Medical</em>',
          'sub'      => 'The foundation of our practice. We have been advising NHS consultants, GPs, dentists, locums and medical partnerships for more than a decade &mdash; with specialist expertise in the tax issues that affect this sector.',
          'bg_image' => 'https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?w=1800&q=80',
      ]);
      ?>


      <!-- Overview -->
      <section class="py-7 py-md-8">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-10">
              <div class="ls text-uppercase fw-bold fs-10 text-danger mb-2">01 &middot; Overview</div>
              <h2 class="mb-4">Medical tax is <em>different.</em></h2>
              <p class="font-secondary mb-4">General-practice accountants often miss the specific reliefs, charges and compliance quirks that affect medical professionals. The NHS pension scheme alone carries more tax complexity than most entire engagements &mdash; and it is a routine matter for our healthcare clients.</p>

              <h3 class="mt-5 mb-3">The specific issues we handle</h3>
              <ul class="font-secondary">
                <li class="mb-2"><strong>Pension annual allowance charges</strong> &mdash; tapered allowance for high earners, scheme pays elections, carry-forward calculations</li>
                <li class="mb-2"><strong>NHS pension scheme</strong> &mdash; 1995, 2008 and 2015 scheme interaction, McCloud remedy, partial retirement</li>
                <li class="mb-2"><strong>Locum tax</strong> &mdash; employed vs self-employed status, optimal structure (sole trader vs limited company), CIS-adjacent issues</li>
                <li class="mb-2"><strong>Private practice</strong> &mdash; separating NHS and private income, billing structures, partnership arrangements</li>
                <li class="mb-2"><strong>GP partnerships</strong> &mdash; partnership accounts, drawings, capital accounts, succession planning</li>
                <li class="mb-2"><strong>Dental practice</strong> &mdash; NHS vs private mix, associate contracts, practice acquisition and sale</li>
                <li class="mb-2"><strong>Expenses</strong> &mdash; professional subscriptions, indemnity, travel, training, medical equipment &mdash; what HMRC accepts and what it challenges</li>
                <li class="mb-2"><strong>Incorporation</strong> &mdash; when it makes sense for a consultant, when it does not, and how to structure if it does</li>
              </ul>

              <blockquote class="border-start border-3 border-danger ps-4 my-5 fs-7 font-primary fst-italic">
                For most consultants, the annual allowance charge is the biggest tax issue of the year. Getting it wrong costs thousands. Getting it right is what we do.
              </blockquote>

              <p class="font-secondary mb-0">We act for consultants across specialties, full-time GPs and salaried GPs, dental associates and practice principals, locum doctors in both hospital and community settings, and medical partnerships of all sizes.</p>
            </div>
          </div>
        </div>
      </section>


      <!-- Testimonials -->
      <section class="border-top bg-light py-7 py-md-8">
        <div class="container">
          <div class="row justify-content-center text-center mb-6">
            <div class="col-lg-9">
              <div class="ls text-uppercase fw-bold fs-10 text-danger mb-2">Client Voice</div>
              <h2>From healthcare clients</h2>
            </div>
          </div>

          <div class="row gy-4">
            <?php
            $testis = [
                ['text' => '"Razzaq &amp; Co. handled my annual allowance charge properly for the first time in years. Previous accountants had simply missed the taper &mdash; and the refund position."', 'author' => 'Dr. S. Mahmood',          'role' => 'NHS Consultant'],
                ['text' => '"They structured my locum work sensibly, set up the limited company, and handled the IR35 review. Everything done properly from day one."',                                          'author' => 'Dr. F. Ali',                'role' => 'Locum GP'],
                ['text' => '"Our practice partnership accounts had been messy for years. They untangled everything and set up proper capital accounts &mdash; a huge relief."',                                  'author' => 'Hillside Dental Practice',  'role' => 'Dental Partnership'],
            ];
            foreach ($testis as $t) : ?>
              <div class="col-md-6 col-lg-4">
                <div class="bg-white p-4 p-md-5 h-100 border">
                  <p class="text-danger mb-3" style="letter-spacing:2px;">&starf;&starf;&starf;&starf;&starf;</p>
                  <p class="font-secondary mb-4"><?php echo wp_kses_post($t['text']); ?></p>
                  <hr class="my-3">
                  <p class="fw-bold mb-1"><?php echo esc_html($t['author']); ?></p>
                  <p class="text-body-secondary fs-10 ls text-uppercase mb-0 font-secondary"><?php echo esc_html($t['role']); ?></p>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </section>


      <?php
      get_template_part('template-parts/cta', null, [
          'title' => 'Looking for an accountant <em>who understands medicine?</em>',
          'desc'  => 'Book a no-obligation call. We will explain what we can help with, and what the fees would look like.',
          'btns'  => [
              ['label' => 'Book a Call', 'url' => home_url('/contact/'), 'class' => 'btn-danger'],
          ],
      ]);
      ?>


    </main>

<?php get_footer();
