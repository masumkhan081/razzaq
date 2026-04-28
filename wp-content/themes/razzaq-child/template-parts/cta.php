<?php
if (!defined('ABSPATH')) {
    exit;
}
$title = $args['title'] ?? '';
$desc  = $args['desc'] ?? '';
$btns  = $args['btns'] ?? [];
$bg    = $args['bg'] ?? 'bg-light';
?>
<section class="border-top <?php echo esc_attr($bg); ?> py-7 py-md-8">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-7 mb-4 mb-lg-0">
        <?php if ($title) : ?><h2 class="mb-3"><?php echo wp_kses_post($title); ?></h2><?php endif; ?>
        <?php if ($desc) : ?><p class="lead mb-0"><?php echo wp_kses_post($desc); ?></p><?php endif; ?>
      </div>
      <div class="col-lg-5 text-lg-end">
        <?php foreach ($btns as $btn) :
          $cls = $btn['class'] ?? 'btn-danger';
        ?>
          <a class="btn <?php echo esc_attr($cls); ?> rounded-pill me-2 mb-2" href="<?php echo esc_url($btn['url']); ?>"><?php echo esc_html($btn['label']); ?> &rarr;</a>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>
