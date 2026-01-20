<?php

add_action('wp_enqueue_scripts', function () {
  wp_enqueue_style(
    'quantock-warmup',
    get_stylesheet_uri(),
    [],
    filemtime(get_stylesheet_directory() . '/style.css')
  );
});

add_action('after_setup_theme', function () {
  add_theme_support('custom-logo');
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');

  register_nav_menus([
    'primary' => __('Primary Menu', 'quantock-warmup'),
  ]);
});

add_action('wp_enqueue_scripts', function () {
  wp_enqueue_script(
    'quantock-header',
    get_template_directory_uri() . '/assets/header.js',
    [],
    null,
    true
  );
});

add_filter('upload_mimes', function ($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
});