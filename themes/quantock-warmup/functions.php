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

add_action('init', function () {
  register_post_type('case_study', [
    'labels' => [
      'name' => __('Case Studies', 'quantock-warmup'),
      'singular_name' => __('Case Study', 'quantock-warmup'),
      'add_new_item' => __('Add New Case Study', 'quantock-warmup'),
      'edit_item' => __('Edit Case Study', 'quantock-warmup'),
      'new_item' => __('New Case Study', 'quantock-warmup'),
      'view_item' => __('View Case Study', 'quantock-warmup'),
      'search_items' => __('Search Case Studies', 'quantock-warmup'),
    ],
    'public' => true,
    'has_archive' => true,
    'rewrite' => ['slug' => 'case-studies'],
    'menu_icon' => 'dashicons-portfolio',
    'supports' => ['title', 'editor', 'excerpt', 'thumbnail'],
    'show_in_rest' => true, // important for Gutenberg/Query Loop
  ]);
});
