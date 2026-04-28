<?php
if (!defined('ABSPATH')) {
    exit;
}
get_header();

while (have_posts()) : the_post();
    $cats     = get_the_category();
    $cat_name = '';
    $cat_slug = '';
    foreach ($cats as $c) {
        if (strtolower($c->slug) !== 'insights') {
            $cat_name = $c->name;
            $cat_slug = $c->slug;
            break;
        }
    }
    if (!$cat_name && !empty($cats)) {
        $cat_name = $cats[0]->name;
        $cat_slug = $cats[0]->slug;
    }

    $word_count = str_word_count(wp_strip_all_tags(get_the_content()));
    $read_time  = max(1, (int) ceil($word_count / 220));

    $hero_thumb = get_the_post_thumbnail_url(get_the_ID(), 'full');

    $insights_url = home_url('/insights/');
    $insights_page = get_page_by_path('insights');
    if (!$insights_page) {
        $insights_url = home_url('/category/insights/');
    }
?>
    <main class="main min-vh-100" id="top">

      <?php
      $breadcrumb = [
          ['label' => 'Home',     'url' => home_url('/')],
          ['label' => 'Insights', 'url' => $insights_url],
          ['label' => wp_trim_words(get_the_title(), 6, '&hellip;')],
      ];

      get_template_part('template-parts/sub-hero', null, [
          'id'         => 'articleHero-' . get_the_ID(),
          'breadcrumb' => $breadcrumb,
          'eyebrow'    => $cat_name ?: 'Insights',
          'title'      => get_the_title(),
          'sub'        => get_the_excerpt(),
      ]);
      ?>


      <section class="py-5 py-md-6">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-10">
              <div class="d-flex flex-wrap gap-3 align-items-center mb-5 ls text-uppercase fw-bold fs-10 font-secondary">
                <?php if ($cat_name) : ?>
                  <span class="text-danger"><?php echo esc_html($cat_name); ?></span>
                  <span class="text-body-secondary">&middot;</span>
                <?php endif; ?>
                <span class="text-body-secondary"><?php echo esc_html(get_the_date('F Y')); ?></span>
                <span class="text-body-secondary">&middot;</span>
                <span class="text-body-secondary"><?php echo (int) $read_time; ?> min read</span>
              </div>

              <?php if ($hero_thumb) : ?>
                <div class="mb-6">
                  <img src="<?php echo esc_url($hero_thumb); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="img-fluid w-100" />
                </div>
              <?php endif; ?>

              <article class="razzaq-article-body">
                <?php the_content(); ?>
              </article>
            </div>
          </div>
        </div>
      </section>


      <?php
      $related_args = [
          'post_type'           => 'post',
          'posts_per_page'      => 3,
          'post__not_in'        => [get_the_ID()],
          'ignore_sticky_posts' => true,
          'orderby'             => 'date',
          'order'               => 'DESC',
      ];
      if ($cat_slug) {
          $related_args['category_name'] = $cat_slug;
      }
      $related = new WP_Query($related_args);
      if (!$related->have_posts()) {
          $related = new WP_Query([
              'post_type'           => 'post',
              'posts_per_page'      => 3,
              'post__not_in'        => [get_the_ID()],
              'ignore_sticky_posts' => true,
          ]);
      }
      if ($related->have_posts()) : ?>
        <section class="border-top bg-light py-7 py-md-8">
          <div class="container">
            <div class="row mb-5">
              <div class="col-lg-9">
                <div class="ls text-uppercase fw-bold fs-10 text-danger mb-2">Continue Reading</div>
                <h2>Related articles</h2>
              </div>
            </div>
            <div class="row gy-4">
              <?php while ($related->have_posts()) : $related->the_post();
                  $r_cats = get_the_category();
                  $r_cat  = '';
                  foreach ($r_cats as $rc) {
                      if (strtolower($rc->slug) !== 'insights') { $r_cat = $rc->name; break; }
                  }
                  if (!$r_cat && !empty($r_cats)) { $r_cat = $r_cats[0]->name; }
              ?>
                <div class="col-md-6 col-lg-4">
                  <a class="d-block text-decoration-none p-4 p-md-5 bg-white h-100 border" href="<?php the_permalink(); ?>">
                    <p class="ls text-uppercase fw-bold fs-10 text-danger mb-2 font-secondary"><?php echo esc_html($r_cat ?: 'Insights'); ?></p>
                    <h5 class="mb-3"><?php the_title(); ?></h5>
                    <p class="font-secondary mb-3"><?php echo esc_html(wp_trim_words(get_the_excerpt(), 22, '&hellip;')); ?></p>
                    <span class="ls text-uppercase fw-bold fs-10 text-danger font-secondary">Read &rarr;</span>
                  </a>
                </div>
              <?php endwhile; wp_reset_postdata(); ?>
            </div>
          </div>
        </section>
      <?php endif; ?>


      <?php
      get_template_part('template-parts/cta', null, [
          'title' => 'Want to discuss <em>your position?</em>',
          'desc'  => 'Articles cover general principles &mdash; every tax question has specific facts. If this resonates, get in touch.',
          'btns'  => [
              ['label' => 'Get in Touch', 'url' => home_url('/contact/'), 'class' => 'btn-danger'],
              ['label' => 'More Insights', 'url' => $insights_url,                'class' => 'btn-outline-danger'],
          ],
      ]);
      ?>


    </main>

<?php
endwhile;
get_footer();
