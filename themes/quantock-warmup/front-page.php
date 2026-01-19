<?php get_header(); ?>

<main class="site-main">
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

      <article <?php post_class('page'); ?>>

          <?php if (get_the_title()) : ?>
            <h1 class="page-title"><?php the_title(); ?></h1>
          <?php endif; ?>

          <div class="entry-content">
            <?php the_content(); ?>
          </div>

      </article>

    <?php endwhile; ?>
  <?php endif; ?>
</main>

<?php get_footer(); ?>
