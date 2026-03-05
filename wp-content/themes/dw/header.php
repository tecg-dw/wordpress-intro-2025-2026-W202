<!doctype html>
<html lang="<?= get_bloginfo('language'); ?>>">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?= get_the_title() . ' - ' . get_bloginfo('name') ?>></title>
  <link rel="stylesheet" type="text/css" href="<?= dw_asset('css'); ?>">
  <script src="<?= dw_asset('js') ?>" defer></script>
</head>
<body>

<h1 class="sro"><?= get_the_title() . ' - ' . get_bloginfo('name') ?></h1>

<nav>
  <h2 class="sro">Navigation principale</h2>
  <ul class="custom">
    <?php foreach (dw_get_navigation_links('header') as $link): ?>
    <li class="custom__li">
      <a href="<?= $link->href ?>" title="<?= $link->title ?>"><?= $link->label ?></a>
    </li>
    <?php endforeach; ?>

  </ul>
  <?php wp_nav_menu([
          'theme_location' => 'header',
          'container' => false,
  ]); ?>
</nav>
<?php get_search_form(); ?>
