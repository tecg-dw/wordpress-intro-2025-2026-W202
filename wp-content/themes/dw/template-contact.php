<?php
/*
* Template Name: Contact
*/
?>
<?php get_header(); ?>

<?php get_template_part('templates/components/stage/stage'); ?>

<?= do_shortcode('[contact-form-7 id="f5b1144" title="Contact form 1"]'); ?>

<?php
$feedback = hepl_session_get('hepl_contact_form_feedback') ?? false;
$errors = hepl_session_get('hepl_contact_form_errors') ?? [];
?>

<section>
  <h2>
    Formulaire de contact
  </h2>

  <?php if ($feedback): ?>
    <p>Merci ! Votre message a bien été envoyé.</p>
  <?php endif; ?>

  <?php if ($errors): ?>
    <p>Attention ! Merci de corriger les erreurs du formulaire.</p>
  <?php endif; ?>

  <form action="<?= esc_url(admin_url('admin-post.php')); ?>" method="post">
    <div>
      <label for="name">Nom complet *</label>
      <input type="text" id="name" name="name" placeholder="Ex: John Doe">
      <?php if ($errors['name'] ?? null) : ?>
        <p><?= $errors['name']; ?></p>
      <?php endif; ?>
    </div>

    <div>
      <label for="email">Email *</label>
      <input type="email" id="email" name="email" placeholder="Ex: johndoe@example.com">
      <?php if ($errors['email'] ?? null) : ?>
        <p><?= $errors['email']; ?></p>
      <?php endif; ?>
    </div>

    <div>
      <label for="object">Objet</label>
      <input type="text" id="object" name="object" placeholder="Ex: Mon objet">
      <?php if ($errors['object'] ?? null) : ?>
        <p><?= $errors['object']; ?></p>
      <?php endif; ?>
    </div>

    <div>
      <label for="message">Message *</label>
      <textarea id="message" name="message" placeholder="Ex: Salut ça va ?"></textarea>
      <?php if ($errors['message'] ?? null) : ?>
        <p><?= $errors['message']; ?></p>
      <?php endif; ?>
    </div>

    <input type="hidden" name="action" value="hepl_contact_form"/>
    <input type="hidden" name="contact_nonce" value="<?= wp_create_nonce('hepl_contact_form'); ?>"/>
    <button type="submit">Soumettre le formulaire</button>
  </form>
</section>


<?php get_template_part('templates/components/cta/cta'); ?>

<?php get_footer(); ?>
