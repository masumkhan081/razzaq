<?php
if (!defined('ABSPATH')) {
    exit;
}
$assets = get_stylesheet_directory_uri();
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="bootstrap-nav" dir="ltr">

  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo esc_url($assets); ?>/assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo esc_url($assets); ?>/assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo esc_url($assets); ?>/assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo esc_url($assets); ?>/assets/img/favicons/favicon.ico">
    <link rel="manifest" href="<?php echo esc_url($assets); ?>/assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="<?php echo esc_url($assets); ?>/assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">

    <link rel="preconnect" href="https://fonts.gstatic.com">

    <?php wp_head(); ?>
  </head>


  <body <?php body_class('overflow-hidden-x'); ?>>
    <?php wp_body_open(); ?>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar-sparrow">
      <div class="container"><a class="navbar-brand fs-4 fw-bold text-white font-primary" href="<?php echo esc_url(home_url('/')); ?>" style="letter-spacing:.02em;">Razzaq <em class="text-danger fst-italic fw-normal">&amp;</em> Co.</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown1" aria-controls="navbarNavDropdown1" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown1">
          <ul class="navbar-nav ms-auto align-items-lg-center">
            <li class="nav-item"><a class="nav-link" href="<?php echo esc_url(home_url('/services/')); ?>">Services</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo esc_url(home_url('/sectors/')); ?>">Sectors</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo esc_url(home_url('/about/')); ?>">About</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo esc_url(home_url('/insights/')); ?>">Insights</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo esc_url(home_url('/#digitalContact')); ?>">Get in Touch</a></li>
          </ul>
        </div>
      </div>
    </nav>
