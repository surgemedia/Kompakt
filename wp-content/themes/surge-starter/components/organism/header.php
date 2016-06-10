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
        <?php $tel= str_replace("(0)","",get_field("main_phone","option")); $tel= str_replace(" ","",$tel); ?>
        <li>
            <a href="tel: <?php echo $tel;?> ">
            <i class="icon-telephone">
            </i>
            </a>
        </li>
        <li>
            <a href='<?php echo get_field("facebook","option"); ?>'>
                <i class="icon-facebook">
                </i>
            </a>
        </li>
        <li>
            <a href='<?php echo  get_field("instagram","option"); ?>'>
                <i class="icon-instagram">
                </i>
            </a>
        </li>
        <?php /* ?>
        <!-- <li>
            <a href='<?php //echo  get_field("pinterest","option"); ?>'>
                <i class="icon-pinterest">
                </i>
            </a>
        </li> -->
        <?php */ ?>
    </ul>
        </div>
      </nav>
    </div>
  </div>
</header>
