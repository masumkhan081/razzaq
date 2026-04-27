<?php
if (!defined('ABSPATH')) {
    exit;
}

add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
});

add_action('wp_enqueue_scripts', function () {
    $base    = get_stylesheet_directory_uri();
    $version = wp_get_theme()->get('Version');

    // CSS order: vendor CSS -> theme.css -> hbui.css -> razzaq-brand.css (last, brand overrides)
    wp_enqueue_style('swiper',       $base . '/vendors/swiper/swiper-bundle.min.css', [], null);
    wp_enqueue_style('loaders',      $base . '/vendors/loaders.css/loaders.min.css', [], null);
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500;1,600&family=DM+Sans:ital,opsz,wght@0,9..40,200;0,9..40,300;0,9..40,400;0,9..40,500;1,9..40,400&display=swap', [], null);
    wp_enqueue_style('razzaq-theme', $base . '/assets/css/theme.css', ['swiper', 'loaders'], $version);
    wp_enqueue_style('razzaq-hbui',  $base . '/assets/css/hbui.css',  ['razzaq-theme'], $version);
    wp_enqueue_style('razzaq-brand', $base . '/assets/css/razzaq-brand.css', ['razzaq-hbui'], $version);

    // JS in footer, theme.js last (depends on all vendors).
    wp_enqueue_script('hummingbird',     $base . '/vendors/hummingbird/hummingbird.bundle.min.js', [], null, true);
    wp_enqueue_script('anchorjs',        $base . '/vendors/anchorjs/anchor.min.js',                [], null, true);
    wp_enqueue_script('is',              $base . '/vendors/is/is.min.js',                          [], null, true);
    wp_enqueue_script('swiper-js',       $base . '/vendors/swiper/swiper-bundle.min.js',           [], null, true);
    wp_enqueue_script('fontawesome',     $base . '/vendors/fontawesome/all.min.js',                [], null, true);
    wp_enqueue_script('lodash',          $base . '/vendors/lodash/lodash.min.js',                  [], null, true);
    wp_enqueue_script('imagesloaded',    $base . '/vendors/imagesloaded/imagesloaded.pkgd.js',     [], null, true);
    wp_enqueue_script('gsap',            $base . '/vendors/gsap/gsap.js',                          [], null, true);
    wp_enqueue_script('gsap-customease', $base . '/vendors/gsap/customEase.js',                    ['gsap'], null, true);
    wp_enqueue_script('gsap-drawsvg',    $base . '/vendors/gsap/drawSVGPlugin.js',                 ['gsap'], null, true);
    wp_enqueue_script(
        'razzaq-theme-js',
        $base . '/assets/js/theme.js',
        ['hummingbird', 'anchorjs', 'is', 'swiper-js', 'fontawesome', 'lodash', 'imagesloaded', 'gsap', 'gsap-customease', 'gsap-drawsvg'],
        $version,
        true
    );
});
