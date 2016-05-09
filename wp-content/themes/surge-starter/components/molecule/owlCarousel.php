<?php 
  $var['class'] = $vars[0];
  
 ?>
<section class="<?php echo $var['class'] ?>">
	<div class="owl-carousel">
	<?php 
		// WP_Query arguments
		$args = array ('post_type'              => array( 'testimonial' ),);

		// The Query
		$query = new WP_Query( $args );

		// The Loop
		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post();
				 get_component([
			        'template' => 'molecule/general-box',
			        'remove_tags' => ["h1"],
			        'vars' => [
			                    "slider-item text-center", //class    
			                    aq_resize(getFeaturedUrl(),640,476,true,true,false),
			                    NULL,
			                    get_the_title(),
			                    truncate(get_the_content(),15,'',false)
			                  ]
			    ]); 
			}
		} else {
			// no posts found
		}

		// Restore original Post Data
		wp_reset_postdata();

?>
	 
	</div>
 	<div class="owl-controls hidden-xs hidden-sm">
        <div class="owl-nav">
            <div class="owl-prev"></div>
            <div class="owl-next"></div>
        </div>
	</div>
	
</section>