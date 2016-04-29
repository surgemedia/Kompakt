<?php 
  $var['class'] = $vars[0];

 ?>

<section class="<?php echo $var['class'] ?>" >
	
	<div class="wrapper">
        <!-- contact-us gravity form -->
        <?php echo do_shortcode('[gravityform id=2 title=true description=true]'); ?>
    </div>
	  
</section>