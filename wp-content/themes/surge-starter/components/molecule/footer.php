<footer id="footer" class="content-info text-center">
  <div class="container-top">
  	<span>mobile: +61 (0)7 3290 2252 <?php //echo get_field("phone_email","option") ?></span>
  	<span>email: info@kompakt.com.au<?php //echo get_field("company_email","option") ?></span>
  </div>
  <div class="container-bottom">
		<span> <?php echo date('Y'); ?> &copy;  <?php bloginfo('name'); ?></span> 
    <?php dynamic_sidebar('sidebar-footer'); ?>
  </div>
</footer>