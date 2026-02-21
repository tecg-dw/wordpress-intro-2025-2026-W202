<?php
$cf_title = get_field('cf_title');
$cf_text = get_field('cf_text');
$cf_link = get_field('cf_link');

$query = new WP_Query([
        'post_type' => 'formation',
        'posts_per_page' => '4',
]);
?>

<section>
  <h2>
    <?= $cf_title ?>
  </h2>
  <p>
    <?= $cf_text ?>
  </p>
  <div>
    <?php if ($query->have_posts()) : while ($query->have_posts()): $query->the_post(); ?>
      <section>
        <h3><?= get_the_title() ?></h3>
      </section>
    <?php endwhile; else: ?>
      <p>Rien</p>
    <?php endif;
    wp_reset_postdata();
    ?>
  </div>
  <a href="<?= $cf_link['url'] ?>" title="<?= $cf_link['title'] ?>">
    <?= $cf_link['title'] ?>
  </a>
</section>
