<footer id="footer" class="content-info text-center">
  <div class="container-top">
  	<?php $tel= str_replace("(0)","",get_field("main_phone","option"));
  				$tel= str_replace(" ","",$tel);
  	?>
  	<span><a href="tel:<?php echo $tel;?>">mobile: <?php echo get_field("main_phone","option") ?></a></span>
  	<span><a href="mailto:<?php the_field("company_email","option") ?>">email: <?php echo get_field("company_email","option") ?></a></span>
  </div>
  <div class="container-bottom">
		<span> <?php echo date('Y'); ?> &copy;  <?php bloginfo('name'); ?></span> 
    <?php dynamic_sidebar('sidebar-footer'); ?>
  </div>
</footer>