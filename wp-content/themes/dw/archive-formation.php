<?php
// On récupère le paramètre filter dans l'URL, si il est présent
$taxonomy = isset($_GET['filter']) ? sanitize_text_field($_GET['filter']) : '';

// Je viens définir mon tableau d'arguments pour constituer ma QUERY
$args = [
        'post_type' => 'formation',
];

// Si la taxonomy n'est pas vide, je vais venir effectuer une requête en DB via tax_query pour filtrer en fonction de mon filter
if ($taxonomy !== '') {
  $args['tax_query'] = [
          [
                  'taxonomy' => 'difficulty',
                  'field' => 'slug',
                  'terms' => $taxonomy,
          ]

  ];
}

$formations = new WP_Query($args);
?>

<?php get_header(); ?>

<div>
  <a href="/formations/">
    Tout
  </a>

  <a href="/formations/?filter=debutant">
    Débutant
  </a>

  <a href="/formations/?filter=intermediaire">
    Intermédiaire
  </a>

  <a href="/formations/?filter=expert">
    Expert
  </a>
</div>

<?php if ($formations->have_posts()) : while ($formations->have_posts()): $formations->the_post(); ?>
  <div>
    <?= get_the_title(); ?>
    <?= get_the_excerpt(); ?>
  </div>
<?php endwhile; else: ?>
  <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
