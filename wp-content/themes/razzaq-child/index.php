<?php
if (!defined('ABSPATH')) {
    exit;
}
get_header();
?>
    <main class="main min-vh-100" id="top">
      <section class="py-8">
        <div class="container">
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article <?php post_class(); ?>>
              <h1 class="mb-3"><?php the_title(); ?></h1>
              <div class="font-secondary"><?php the_content(); ?></div>
            </article>
          <?php endwhile; else : ?>
            <h1>Nothing here yet.</h1>
          <?php endif; ?>
        </div>
      </section>
    </main>
<?php get_footer(); ?>
