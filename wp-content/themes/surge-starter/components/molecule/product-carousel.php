<?php 
  $vars['class'] = $vars[0];
  
 ?>

<div class="<?php echo $vars['class'];?>">
	<div class="owl-carousel hide-print">

	  <?php 

	  	for ($i=0; $i < 3 ; $i++) { ?>
	  	
	  		<?php 
			    get_component([
			        'template' => 'molecule/general-box',
			        'remove_tags' => ["h1","h2","p"],
			        'vars' => [
			                    "active slider-item text-center", //class    
			                    "http://kompakt.surgehost.com.au/wp-content/uploads/2016/04/Aberdeen-Amenities-Building.jpg",
			                    NULL,
			                    NULL,
			                    NULL
			                  ]
			    ]); 
			    
			    ?>
	  	<?php 
			    get_component([
			        'template' => 'molecule/general-box',
			        'remove_tags' => ["h1","h2","p"],
			        'vars' => [
			                    "slider-item text-center", //class    
			                    "http://kompakt.surgehost.com.au/wp-content/uploads/2016/04/2-Bed-Conversion-Lounge.jpg",
			                    NULL,
			                    NULL,
			                    NULL
			                  ]
			    ]); 
			    
			    ?>
	  <?php } ?>
	</div>
</div>