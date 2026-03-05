<?php get_header(); ?>

<div>
  <a href="">
    Débutant
  </a>

  <a href="">
    Intermédiaire
  </a>

  <a href="">
    Expert
  </a>

  <a href="">
    Débutant
  </a>
</div>

<?php if (have_posts()) : while (have_posts()): the_post(); ?>
  <div>
    <?= get_the_title(); ?>
    <?= get_the_excerpt(); ?>
  </div>
<?php endwhile; else: ?>
  <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
