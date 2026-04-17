<?php
$title = get_field('tm_title');
$text = get_field('tm_text');
$link = get_field('tm_link');
?>

<section class="text-media">
  <div class="text-media__container">
    <div class="text-media__content">
      <?php if (!empty($title)): ?>
        <h2 class="text-media__title"><?= $title; ?></h2>
      <?php endif; ?>

      <?php if (!empty($text)): ?>
        <div class="text-media__text">
          <?= $text; ?>
        </div>
      <?php endif; ?>

      <?php if (!empty($link)): ?>
        <a
                class="text-media__button"
                title="<?= esc_attr($link['title']); ?>"
                target="<?= esc_attr($link['target']); ?>"
                href="<?= esc_url($link['url']); ?>"
        >
          <?= esc_html($link['title']); ?>
        </a>
      <?php endif; ?>
    </div>
  </div>
</section>
