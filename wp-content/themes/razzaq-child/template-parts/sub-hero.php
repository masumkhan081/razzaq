<?php
if (!defined('ABSPATH')) {
    exit;
}
$breadcrumb = $args['breadcrumb'] ?? [];
$eyebrow    = $args['eyebrow'] ?? '';
$title      = $args['title'] ?? '';
$sub        = $args['sub'] ?? '';
$bg_image   = $args['bg_image'] ?? '';
$id         = $args['id'] ?? 'subHero';
?>
<section class="py-0 overflow-hidden position-relative razzaq-sub-hero" id="<?php echo esc_attr($id); ?>">
  <?php if ($bg_image) : ?>
    <div class="razzaq-sub-hero-bg" style="background-image: url('<?php echo esc_url($bg_image); ?>');"></div>
  <?php endif; ?>
  <div class="razzaq-sub-hero-overlay"></div>

  <div class="container position-relative">
    <div class="row py-7 py-md-8" style="min-height:55vh; align-items:center;">
      <div class="col-lg-9 col-xl-8">
        <?php if (!empty($breadcrumb)) : ?>
          <p class="text-white text-opacity-75 ls text-uppercase fw-bold fs-10 mb-3 font-secondary">
            <?php
            $count = count($breadcrumb);
            foreach ($breadcrumb as $i => $crumb) :
              $is_last = ($i === $count - 1);
              if ($is_last) : ?>
                <span><?php echo esc_html($crumb['label']); ?></span>
              <?php else : ?>
                <a class="text-white text-opacity-75 text-decoration-none" href="<?php echo esc_url($crumb['url']); ?>"><?php echo esc_html($crumb['label']); ?></a>
                <span class="mx-2">/</span>
              <?php endif;
            endforeach; ?>
          </p>
        <?php endif; ?>

        <?php if ($eyebrow) : ?>
          <p class="text-white text-opacity-75 ls text-uppercase fw-bold fs-9 mb-3"><?php echo esc_html($eyebrow); ?></p>
        <?php endif; ?>

        <?php if ($title) : ?>
          <h1 class="text-white display-4 mb-4"><?php echo wp_kses_post($title); ?></h1>
        <?php endif; ?>

        <?php if ($sub) : ?>
          <p class="text-white text-opacity-85 fw-normal fs-8 fs-md-7 mb-0"><?php echo wp_kses_post($sub); ?></p>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
