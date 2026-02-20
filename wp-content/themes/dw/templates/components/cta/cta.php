<?php
$cta_title = get_field('cta_title');
$cta_text = get_field('cta_text');
$cta_link = get_field('cta_link');
$cta_image = get_field('cta_image');
?>

<section class="cta">
  <h2 class="cta__title">
    <?= $cta_title ?>
  </h2>
  <p class="cta__text">
    <?= $cta_text ?>
  </p>
  <a class="cta__link"
     href="<?= $cta_link['url'] ?>"
     target="<?= $cta_link['target'] ?>"
     title="<?= $cta_link['title'] ?>">
    <?= $cta_link['title'] ?>
  </a>
  <img class="cta__image"
       src="<?= $cta_image['sizes']['medium'] ?>"
       alt=""
       height="<?= $cta_image['sizes']['medium-height'] ?>"
       width="<?= $cta_image['sizes']['medium-width'] ?>">
</section>
