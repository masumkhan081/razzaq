<?php
if (!defined('ABSPATH')) {
    exit;
}
get_header();
$assets = get_stylesheet_directory_uri();
?>
    <main class="main min-vh-100" id="top">

      <?php
      get_template_part('template-parts/sub-hero', null, [
          'id'         => 'aboutHero',
          'breadcrumb' => [
              ['label' => 'Home',  'url' => home_url('/')],
              ['label' => 'About'],
          ],
          'eyebrow' => 'About the Practice',
          'title'   => 'A decade of <em>trusted</em> counsel.',
          'sub'     => 'Razzaq &amp; Co. is a UK-based firm of chartered certified accountants. We specialise in tax and accounting for individuals, medical professionals, business owners and investors &mdash; with a reputation built on technical precision, close communication, and long-term client relationships.',
          'bg_image' => 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=1800&q=80',
      ]);
      ?>


      <!-- Our Story  (razzaq About §01) -->
      <section id="aboutStory">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-10">
              <div class="ls text-uppercase fw-bold fs-10 text-danger mb-2">01 &middot; Our Story</div>
              <h2 class="mb-4">Built on trust. <em>Driven by results.</em></h2>
              <p class="font-secondary mb-3">Razzaq &amp; Co. began over ten years ago as a specialist tax practice serving the medical and healthcare community in the UK. From a focused client base of consultants, GPs and locum doctors, the firm has grown into a broader practice covering personal and business tax compliance, advisory work, and corporate services for more than five hundred active clients.</p>
              <p class="font-secondary mb-4">Today we advise sole traders, limited companies, property investors, healthcare professionals and construction contractors across the United Kingdom. What has not changed is our approach &mdash; technical accuracy, proactive planning, and a commitment to treating every client relationship as a long-term partnership rather than a transactional engagement.</p>

              <blockquote class="border-start border-3 border-danger ps-4 my-5 fs-7 font-primary fst-italic">
                We do not treat compliance and planning as separate functions. Where planning questions arise, we raise them &mdash; as part of our standard service.
              </blockquote>

              <p class="font-secondary mb-0">We are regulated by the Association of Chartered Certified Accountants (ACCA), and our team combines practising accountants with specialist tax advisers. Every engagement is led by a senior member of the firm with direct responsibility for the work &mdash; not passed down to unsupervised juniors.</p>
            </div>
          </div>
        </div>
      </section>


      <!-- Timeline  (razzaq About §02) -->
      <section class="border-top border-bottom bg-light" id="aboutTimeline">
        <div class="container">
          <div class="row justify-content-center text-center mb-6">
            <div class="col-lg-9">
              <div class="ls text-uppercase fw-bold fs-10 text-danger mb-2">Our Journey</div>
              <h2>A decade in practice</h2>
            </div>
          </div>

          <div class="row gy-5">
            <?php
            $milestones = [
                ['year' => '2014', 'title' => 'The practice is founded',           'desc' => 'Razzaq &amp; Co. opens with a focus on personal tax for medical professionals &mdash; building relationships with NHS consultants, GPs and locum doctors across London.'],
                ['year' => '2017', 'title' => 'Corporate services launch',         'desc' => 'We extend our offering to limited company accounts, payroll and corporation tax &mdash; supporting medical practices, contractors and SMEs with full-service compliance.'],
                ['year' => '2019', 'title' => 'Construction &amp; property specialisms', 'desc' => 'We build a dedicated construction team with CIS and DRC expertise, and a property tax advisory team covering Section 24, SDLT and incorporation.'],
                ['year' => '2022', 'title' => 'Making Tax Digital transition',     'desc' => 'Full transition to MTD-compliant processes across the client base. Investment in cloud accounting platforms and digital record-keeping tools for every client.'],
                ['year' => '2024', 'title' => '500+ active clients',                'desc' => 'The practice reaches 500 active clients across the UK. Our advisory work now includes group reorganisations, share-scheme planning and estate work alongside compliance.'],
                ['year' => '2026', 'title' => 'Continuing to grow, with you',       'desc' => 'As we enter our next decade, our focus remains the same: trusted counsel, technical precision, and long-term relationships grounded in genuine client understanding.'],
            ];
            foreach ($milestones as $m) : ?>
              <div class="col-md-6 col-lg-4">
                <div class="font-secondary">
                  <div class="display-5 text-danger mb-2"><?php echo esc_html($m['year']); ?></div>
                  <h4 class="mb-3"><?php echo wp_kses_post($m['title']); ?></h4>
                  <p class="mb-0"><?php echo wp_kses_post($m['desc']); ?></p>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </section>


      <!-- The Team  (razzaq About §03) -->
      <section id="aboutTeam">
        <div class="container">
          <div class="row justify-content-center text-center mb-6">
            <div class="col-lg-9">
              <div class="ls text-uppercase fw-bold fs-10 text-danger mb-2">The Team</div>
              <h2>People you speak to directly</h2>
              <p class="lead mb-0">Every client is looked after by a senior member of the firm with direct responsibility for the work.</p>
            </div>
          </div>

          <div class="row gy-5">
            <?php
            $team = [
                ['name' => 'A. Razzaq', 'role' => 'Managing Partner &middot; ACCA', 'bio' => 'Founder of the practice. Leads tax advisory work for medical professionals, SMEs and high-net-worth individuals across the UK.', 'img' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=500&q=80'],
                ['name' => 'S. Ahmed',  'role' => 'Tax Director &middot; CTA',     'bio' => 'Leads the advisory team, specialising in property tax, group structures, capital gains and HMRC enquiry representation.',                'img' => 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=500&q=80'],
                ['name' => 'H. Khan',   'role' => 'Client Services Manager',       'bio' => 'Oversees client relationships across the practice, ensuring timely communication and coordinated delivery of every engagement.',          'img' => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=500&q=80'],
            ];
            foreach ($team as $m) : ?>
              <div class="col-md-6 col-lg-4">
                <div class="position-relative overflow-hidden mb-4" style="aspect-ratio: 4/5;">
                  <img class="w-100 h-100" style="object-fit:cover;" src="<?php echo esc_url($m['img']); ?>" alt="<?php echo esc_attr($m['name']); ?>" loading="lazy">
                </div>
                <h4 class="mb-1"><?php echo esc_html($m['name']); ?></h4>
                <p class="text-danger ls text-uppercase fw-bold fs-10 mb-2 font-secondary"><?php echo wp_kses_post($m['role']); ?></p>
                <p class="font-secondary mb-0"><?php echo wp_kses_post($m['bio']); ?></p>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </section>


      <!-- Stats banner  (razzaq About §04) -->
      <section class="bg-black text-white py-6 py-md-7" id="aboutStats">
        <div class="container">
          <div class="row text-center gy-5">
            <div class="col-6 col-md-4 col-lg">
              <div class="display-4 text-white mb-1"><span class="text-danger">10</span><sup class="fs-7">+</sup></div>
              <p class="ls text-uppercase fw-bold fs-10 text-white text-opacity-75 mb-0 font-secondary">Years in Practice</p>
            </div>
            <div class="col-6 col-md-4 col-lg">
              <div class="display-4 text-white mb-1"><span class="text-danger">500</span><sup class="fs-7">+</sup></div>
              <p class="ls text-uppercase fw-bold fs-10 text-white text-opacity-75 mb-0 font-secondary">Active Clients</p>
            </div>
            <div class="col-6 col-md-4 col-lg">
              <div class="display-4 text-white mb-1">&pound;<span class="text-danger">50</span><sup class="fs-7">M+</sup></div>
              <p class="ls text-uppercase fw-bold fs-10 text-white text-opacity-75 mb-0 font-secondary">Tax Savings</p>
            </div>
            <div class="col-6 col-md-4 col-lg">
              <div class="display-4 text-white mb-1"><span class="text-danger">98</span><sup class="fs-7">%</sup></div>
              <p class="ls text-uppercase fw-bold fs-10 text-white text-opacity-75 mb-0 font-secondary">Retention Rate</p>
            </div>
            <div class="col-12 col-md-12 col-lg">
              <div class="display-4 text-white mb-1"><span class="text-danger">6</span></div>
              <p class="ls text-uppercase fw-bold fs-10 text-white text-opacity-75 mb-0 font-secondary">Practice Areas</p>
            </div>
          </div>
        </div>
      </section>


      <?php
      get_template_part('template-parts/cta', null, [
          'title' => 'Ready to work with <em>a practice</em> that listens?',
          'desc'  => 'Whether you are looking for a new accountant, have a specific tax question, or need advice on a particular matter &mdash; we welcome the conversation.',
          'btns'  => [
              ['label' => 'Get in Touch',          'url' => home_url('/contact/'), 'class' => 'btn-danger'],
              ['label' => 'Explore Our Services', 'url' => home_url('/services/'),       'class' => 'btn-outline-danger'],
          ],
      ]);
      ?>


    </main>

<?php get_footer();
