<?php 
  $vars['class'] = $vars[0];
  $vars['form'] = $vars[1];


 ?>

<section class="<?php echo $vars['class'] ?>" >
	
	<div class="wrapper">
        <!-- contact-us gravity form -->
        <?php displayGravityForm($vars['form'])  ?>
        <?php //echo do_shortcode('[gravityform id=1 title=true description=true]'); ?>
    </div>
	  
</section>