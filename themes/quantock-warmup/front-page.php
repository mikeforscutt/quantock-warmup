<?php get_header(); ?>

<main class="site-main">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article <?php post_class('page'); ?>>
      <div class="entry-content">
        <?php the_content(); ?>
      </div>
    </article>
  <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>
