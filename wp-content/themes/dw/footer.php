<footer>
  <img>
  <nav>
    <h2 class="sro">Navigation du bas de page</h2>
    <ul class="custom">
      <?php foreach (dw_get_navigation_links('footer') as $link): ?>
        <li class="custom__li">
          <a href="<?= $link->href ?>" title="<?= $link->title ?>"><?= $link->label ?></a>
        </li>
      <?php endforeach; ?>

    </ul>
    <?php wp_nav_menu([
            'theme_location' => 'footer',
            'container' => false,
    ]); ?>
  </nav>
  <div>

  </div>
  <div>

  </div>
</footer>
</body>
</html>
