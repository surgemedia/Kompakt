<section class="owlCarousel">
	<div class="owl-carousel">
	  <?php for ($i=0; $i < 6 ; $i++) { ?>
	  	
	  		<?php 
			    get_component([
			        'template' => 'molecule/general-box',
			        'remove_tags' => ["h1"],
			        'vars' => [
			                    "slider-item text-center", //class    
			                    "http://kompakt.local/wp-content/uploads/2016/04/Between-Accommodation-Units2.jpg",
			                    NULL,
			                    "Custumised Product",
			                    "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam ab, itaque aliquam quas reiciendis eligendi."
			                  ]
			    ]); 
			    
			    ?>
	  	
	  <?php } ?>
	</div>
	<!-- <div class="owl-prev">prev</div>
	<div class="owl-next">next</div> -->
</section>