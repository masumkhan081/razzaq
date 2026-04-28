<?php
if (!defined('ABSPATH')) {
    exit;
}
get_header();

$paged = max(1, get_query_var('paged'), get_query_var('page'));

$insights_query = new WP_Query([
    'post_type'           => 'post',
    'category_name'       => 'insights',
    'posts_per_page'      => 9,
    'paged'               => $paged,
    'ignore_sticky_posts' => true,
]);

if (!$insights_query->have_posts()) {
    $insights_query = new WP_Query([
        'post_type'      => 'post',
        'posts_per_page' => 9,
        'paged'          => $paged,
    ]);
}
?>
    <main class="main min-vh-100" id="top">

      <?php
      get_template_part('template-parts/sub-hero', null, [
          'id'         => 'insightsHero',
          'breadcrumb' => [
              ['label' => 'Home', 'url' => home_url('/')],
              ['label' => 'Insights'],
          ],
          'eyebrow'  => 'Insights',
          'title'    => 'From the <em>practice.</em>',
          'sub'      => 'Practical guidance on tax, compliance and planning &mdash; written for business owners, landlords, medical professionals and individuals. Direct, technical, and genuinely useful.',
          'bg_image' => 'https://images.unsplash.com/photo-1507842217343-583bb7270b66?w=1800&q=80',
      ]);
      ?>


      <section class="py-7 py-md-8" id="insightsGrid">
        <div class="container">
          <?php if ($insights_query->have_posts()) : ?>
            <div class="row gy-4">
              <?php while ($insights_query->have_posts()) : $insights_query->the_post();
                  $cats     = get_the_category();
                  $cat_name = '';
                  foreach ($cats as $c) {
                      if (strtolower($c->slug) !== 'insights') { $cat_name = $c->name; break; }
                  }
                  if (!$cat_name && !empty($cats)) { $cat_name = $cats[0]->name; }
                  $thumb = get_the_post_thumbnail_url(get_the_ID(), 'large');
                  if (!$thumb) {
                      $thumb = 'https://images.unsplash.com/photo-1554224155-6726b3ff858f?w=800&q=80';
                  }
              ?>
                <div class="col-md-6 col-lg-4">
                  <a class="d-block text-decoration-none bg-light h-100 border razzaq-insight-card" href="<?php the_permalink(); ?>">
                    <div class="razzaq-insight-img" style="background-image: url('<?php echo esc_url($thumb); ?>');"></div>
                    <div class="p-4 p-md-4">
                      <div class="d-flex justify-content-between align-items-center mb-3 ls text-uppercase fw-bold fs-10 font-secondary">
                        <?php if ($cat_name) : ?>
                          <span class="text-danger"><?php echo esc_html($cat_name); ?></span>
                        <?php else : ?>
                          <span class="text-danger">Insights</span>
                        <?php endif; ?>
                        <span class="text-body-secondary"><?php echo esc_html(get_the_date('M Y')); ?></span>
                      </div>
                      <h5 class="mb-3"><?php the_title(); ?></h5>
                      <p class="font-secondary text-body mb-3"><?php echo esc_html(wp_trim_words(get_the_excerpt(), 26, '&hellip;')); ?></p>
                      <span class="ls text-uppercase fw-bold fs-10 text-danger font-secondary">Read Article &nearr;</span>
                    </div>
                  </a>
                </div>
              <?php endwhile; ?>
            </div>

            <?php
            $total = (int) $insights_query->max_num_pages;
            if ($total > 1) :
              $links = paginate_links([
                  'total'     => $total,
                  'current'   => $paged,
                  'prev_text' => '&larr; Previous',
                  'next_text' => 'Next &rarr;',
                  'type'      => 'array',
              ]);
              if (!empty($links)) : ?>
                <nav class="mt-7" aria-label="Insights pagination">
                  <ul class="d-flex flex-wrap gap-2 justify-content-center list-unstyled mb-0 font-secondary">
                    <?php foreach ($links as $link) : ?>
                      <li><?php echo $link; ?></li>
                    <?php endforeach; ?>
                  </ul>
                </nav>
              <?php endif;
            endif; ?>
          <?php else : ?>
            <div class="row justify-content-center">
              <div class="col-lg-8 text-center py-6">
                <h3 class="mb-3">No articles yet</h3>
                <p class="font-secondary mb-0">New insights will appear here. Check back soon &mdash; or get in touch with a specific question.</p>
              </div>
            </div>
          <?php endif; wp_reset_postdata(); ?>
        </div>
      </section>


      <?php
      get_template_part('template-parts/cta', null, [
          'title' => 'Want to discuss <em>your position?</em>',
          'desc'  => 'Our articles cover general principles &mdash; but every tax question has specific facts. If any of these resonate with you, get in touch.',
          'btns'  => [
              ['label' => 'Get in Touch',     'url' => home_url('/#digitalContact'), 'class' => 'btn-danger'],
              ['label' => 'Explore Services', 'url' => home_url('/services/'),       'class' => 'btn-outline-danger'],
          ],
      ]);
      ?>


    </main>

<?php get_footer();
