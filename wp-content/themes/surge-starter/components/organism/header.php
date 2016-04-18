<header class="banner">
  <div class="container">
    <?php addComponent([
          'template' => 'atom/brand',
          'vars' => []
      ]); ?>

    <?php addComponent([
        'template' => 'molecule/social-contact',
        'vars' => []
    ]); ?>
    <nav class="nav-primary">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
      endif;
      ?>
    </nav>
  </div>
</header>
