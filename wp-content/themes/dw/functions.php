<?php

// Gutenberg est le nouvel éditeur de contenu propre à Wordpress
// il ne nous intéresse pas pour l'utilisation du thème que nous
// allons créer. On va donc le désactiver :

// Disable Gutenberg on the back end.
add_filter('use_block_editor_for_post', '__return_false');
// Disable Gutenberg for widgets.
add_filter('use_widgets_block_editor', '__return_false');
// Disable default front-end styles.
add_action('wp_enqueue_scripts', function () {
  // Remove CSS on the front end.
  wp_dequeue_style('wp-block-library');
  // Remove Gutenberg theme.
  wp_dequeue_style('wp-block-library-theme');
  // Remove inline global CSS on the front end.
  wp_dequeue_style('global-styles');
}, 20);

add_action('init', 'init_remove_support', 100);

function init_remove_support(): void
{
  remove_post_type_support('post', 'editor');
  remove_post_type_support('page', 'editor');
  remove_post_type_support('product', 'editor');
}

function dw_asset(string $filename): string
{
  $manifest_path = get_theme_file_path('public/.vite/manifest.json');

  if (file_exists($manifest_path)) {
    $manifest = json_decode(file_get_contents($manifest_path), true);

    if (isset($manifest['wp-content/themes/dw/assets/css/styles.scss']) && $filename === 'css') {
      return get_theme_file_uri('public/' . $manifest['wp-content/themes/dw/assets/css/styles.scss']['file']);
    }

    if (isset($manifest['wp-content/themes/dw/assets/js/main.js']) && $filename === 'js') {
      return get_theme_file_uri('public/' . $manifest['wp-content/themes/dw/assets/js/main.js']['file']);
    }
  }

  return '';
}

register_post_type('formation', [
  'label' => 'Formations',
  'description' => 'Les formations présentes sur mon site web',
  'menu_position' => 2,
  'menu_icon' => 'dashicons-welcome-learn-more',
  'public' => true,
  'has_archive' => true,
  'supports' => ['title', 'excerpt', 'thumbnail'],
  'rewrite' => [
    'slug' => 'formations'
  ],
]);
