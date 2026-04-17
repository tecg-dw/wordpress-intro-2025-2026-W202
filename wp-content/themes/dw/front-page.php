<?php get_header(); ?>

<?php
$falc = isset($_GET['falc']) ? sanitize_text_field($_GET['falc']) : '';

$title = $falc === 'true' ? get_field('title_falc') : get_field('title');
?>

<?php if ($falc): ?>
  <section class="text-media-falc text-media--image-<?= esc_attr($image_position); ?>">
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
<?php else: ?>
  <section class="text-media text-media--image-<?= esc_attr($image_position); ?>">
    <div class="text-media__container">
      <?php if (!empty($image)): ?>
        <div class="text-media__media">
          <img
                  class="text-media__image"
                  src="<?= esc_url($image['url']); ?>"
                  alt="<?= esc_attr($image['alt']); ?>"
                  width="<?= esc_attr($image['width']); ?>"
                  height="<?= esc_attr($image['height']); ?>"
                  loading="lazy"
          >

          <?php
          if ($image) {
            echo wp_get_attachment_image($image['ID'], 'large', false, [
                    'class' => 'text-media__image',
                    'loading' => 'lazy'
            ]);
          }
          ?>
        </div>
      <?php endif; ?>

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
<?php endif; ?>

<?php get_template_part( 'templates/components/stage/stage'); ?>
<?php get_template_part( 'templates/components/cards-formations/cards-formations'); ?>

<?php get_footer(); ?>
