<?php
if (!defined('ABSPATH')) {
    exit;
}
get_header();
?>
    <main class="main min-vh-100" id="top">

      <?php
      get_template_part('template-parts/sub-hero', null, [
          'id'         => 'sectorsHero',
          'breadcrumb' => [
              ['label' => 'Home',    'url' => home_url('/')],
              ['label' => 'Sectors'],
          ],
          'eyebrow'  => 'Sectors',
          'title'    => 'Who we <em>work with.</em>',
          'sub'      => 'While we advise clients across a wide range of industries, three sectors form the core of our specialist practice. In each, we have more than a decade of concentrated expertise.',
          'bg_image' => 'https://images.unsplash.com/photo-1577962917302-cd874c4e31d2?w=1800&q=80',
      ]);
      ?>


      <!-- Sectors grid -->
      <section class="py-7 py-md-8" id="sectorsGrid">
        <div class="container">
          <div class="row gy-4">
            <?php
            $sectors = [
                ['tag' => 'Sector 01', 'name' => 'Healthcare &amp;<br>Medical',          'desc' => 'NHS consultants, GPs, dentists, locums and medical partnerships. Pension tax charges, practice structures and HMRC compliance.', 'img' => 'https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?w=800&q=80', 'url' => home_url('/sectors/healthcare/')],
                ['tag' => 'Sector 02', 'name' => 'Construction &amp;<br>Contractors',    'desc' => 'Specialist knowledge of CIS, domestic reverse charge and contractor structures.',                                                'img' => 'https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=800&q=80', 'url' => home_url('/sectors/construction/')],
                ['tag' => 'Sector 03', 'name' => 'Property &amp;<br>Investment',         'desc' => 'Buy-to-let landlords, investors, developers. Section 24, SDLT, incorporation and CGT advice.',                                  'img' => 'https://images.unsplash.com/photo-1582407947304-fd86f028f716?w=800&q=80', 'url' => home_url('/sectors/property/')],
            ];
            foreach ($sectors as $s) : ?>
              <div class="col-md-6 col-lg-4">
                <a class="d-block text-decoration-none position-relative overflow-hidden" href="<?php echo esc_url($s['url']); ?>" style="aspect-ratio: 4/5;">
                  <img class="w-100 h-100" style="object-fit:cover;" src="<?php echo esc_url($s['img']); ?>" alt="" loading="lazy">
                  <div class="position-absolute" style="inset:0; background: linear-gradient(180deg, rgba(14,14,13,0.10) 0%, rgba(14,14,13,0.85) 100%);"></div>
                  <div class="position-absolute p-4 p-md-5 text-white" style="bottom:0; left:0; right:0;">
                    <p class="ls text-uppercase fw-bold fs-10 text-danger mb-2 font-secondary"><?php echo esc_html($s['tag']); ?></p>
                    <h3 class="text-white mb-2"><?php echo wp_kses_post($s['name']); ?></h3>
                    <p class="text-white text-opacity-85 font-secondary mb-0"><?php echo wp_kses_post($s['desc']); ?></p>
                  </div>
                </a>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </section>


      <!-- Sector stats banner -->
      <section class="bg-black text-white py-6 py-md-7" id="sectorsStats">
        <div class="container">
          <div class="row text-center gy-5">
            <div class="col-6 col-md-4 col-lg">
              <div class="display-4 text-white mb-1"><span class="text-danger">150</span><sup class="fs-7">+</sup></div>
              <p class="ls text-uppercase fw-bold fs-10 text-white text-opacity-75 mb-0 font-secondary">Healthcare Clients</p>
            </div>
            <div class="col-6 col-md-4 col-lg">
              <div class="display-4 text-white mb-1"><span class="text-danger">120</span><sup class="fs-7">+</sup></div>
              <p class="ls text-uppercase fw-bold fs-10 text-white text-opacity-75 mb-0 font-secondary">Construction Clients</p>
            </div>
            <div class="col-6 col-md-4 col-lg">
              <div class="display-4 text-white mb-1"><span class="text-danger">180</span><sup class="fs-7">+</sup></div>
              <p class="ls text-uppercase fw-bold fs-10 text-white text-opacity-75 mb-0 font-secondary">Property Clients</p>
            </div>
            <div class="col-6 col-md-4 col-lg">
              <div class="display-4 text-white mb-1"><span class="text-danger">10</span><sup class="fs-7">+</sup></div>
              <p class="ls text-uppercase fw-bold fs-10 text-white text-opacity-75 mb-0 font-secondary">Years Sector Focus</p>
            </div>
            <div class="col-12 col-md-12 col-lg">
              <div class="display-4 text-white mb-1"><span class="text-danger">98</span><sup class="fs-7">%</sup></div>
              <p class="ls text-uppercase fw-bold fs-10 text-white text-opacity-75 mb-0 font-secondary">Client Retention</p>
            </div>
          </div>
        </div>
      </section>


      <?php
      get_template_part('template-parts/cta', null, [
          'title' => 'Work outside these sectors? <em>We still want to hear from you.</em>',
          'desc'  => 'While these three sectors form our core expertise, we act for clients across many industries. Tell us your position and we will be honest about fit.',
          'btns'  => [
              ['label' => 'Get in Touch', 'url' => home_url('/contact/'), 'class' => 'btn-danger'],
          ],
      ]);
      ?>


    </main>

<?php get_footer();
