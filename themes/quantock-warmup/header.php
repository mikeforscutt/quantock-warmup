<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
  <div class="site-header__inner">
  <?php if (has_custom_logo()) : ?>
    <div class="site-logo">
      <?php echo get_custom_logo(); ?>
    </div>
  <?php else : ?>
    <a class="site-logo site-logo--text" href="<?php echo esc_url(home_url('/')); ?>">
      <?php bloginfo('name'); ?>
    </a>
  <?php endif; ?>

  <nav class="site-nav" aria-label="Primary">
    <?php
    wp_nav_menu([
      'theme_location' => 'primary',
      'container'      => false,
      'menu_class'     => 'site-nav__list',
      'fallback_cb'    => false,
    ]);
    ?>
  </nav>

  <button class="burger" type="button" aria-controls="mobile-menu" aria-expanded="false">
    <span class="sr-only">Open menu</span>
    <span class="burger__lines" aria-hidden="true"></span>
  </button>
</div>


  <nav id="mobile-menu" class="mobile-menu" aria-hidden="true">
    <div class="mobile-menu__inner">
      <?php
      wp_nav_menu([
        'theme_location' => 'primary',
        'container'      => false,
        'menu_class'     => 'mobile-menu__list',
        'fallback_cb'    => false,
      ]);
      ?>
    </div>
  </nav>

  <div class="mobile-menu-backdrop" hidden></div>
</header>
