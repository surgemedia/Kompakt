<header class="banner hide-print">
  <div class="container">
    <?php addComponent([
          'template' => 'atom/brand',
          'vars' => [ 'logo' => aq_resize(get_field('brand','option'),230,40,true,true,false)]
      ]); ?>
      <?php addComponent([
          'template' => 'molecule/social-contact',
          'vars' => []
      ]); ?>
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <nav class="nav-primary">
        <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
        endif;
        ?>
        <div class="visible-xs-inline-block social-responsive">
          <ul>
            <li><i class="icon-telephone"></i></li>
            <li><i class="icon-facebook"></i></li>
            <li><i class="icon-instagram"></i></li>
            <li><i class="icon-pinterest"></i></li>
          </ul>
        </div>
      </nav>
    </div>
  </div>
</header>
