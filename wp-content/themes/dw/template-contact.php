<?php
/*
* Template Name: Contact
*/
?>
<?php get_header(); ?>

<?php get_template_part('templates/components/stage/stage'); ?>

<section>
  <h2>
    Formulaire de contact
  </h2>
  <form action="<?= esc_url(admin_url('admin-post.php')); ?>" method="post">
    <div>
      <label for="name">Nom complet *</label>
      <input type="text" id="name" name="name" placeholder="Ex: John Doe">
    </div>

    <div>
      <label for="email">Email *</label>
      <input type="email" id="email" name="email" placeholder="Ex: johndoe@example.com">
    </div>

    <div>
      <label for="object">Objet</label>
      <input type="text" id="object" name="object" placeholder="Ex: Mon objet">
    </div>

    <div>
      <label for="message">Message *</label>
      <textarea id="message" name="message" placeholder="Ex: Salut ça va ?"></textarea>
    </div>

    <input type="hidden" name="action" value="hepl_contact_form"/>
    <input type="hidden" name="contact_nonce" value="<?= wp_create_nonce('hepl_contact_form'); ?>"
    <button type="submit">Soumettre le formulaire</button>
  </form>
</section>


<?php get_template_part('templates/components/cta/cta'); ?>

<?php get_footer(); ?>
