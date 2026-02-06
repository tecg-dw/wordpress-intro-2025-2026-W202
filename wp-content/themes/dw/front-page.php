<?php get_header(); ?>
<h1>
  <?= get_the_title(); ?>
</h1>
<div>
  <?= get_the_content(); ?>
</div>
<a href="<?= get_the_permalink(); ?>" target="_blank" title="Lien vers cette page">
  Lien vers cette page
</a>
<?php get_footer(); ?>

<?php
$title = get_field('title');
$text = get_field('text');
$image = get_field('background_image');
?>

<?php if ($title !== ''): ?>
  <p><?= $title ?></p>
<?php endif; ?>

<div><?= $text ?></div>

<img src="<?= $image['url'] ?>"
     alt="<?= $image['alt'] ?>"
     width="<?= $image['width'] ?>"
     height="<?= $image['height'] ?>">

