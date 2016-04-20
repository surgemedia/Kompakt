<?php
/**
 * Template Name: Custom
 */
?>

<?php while (have_posts()) : the_post(); ?>
 <?php 
   if (has_post_thumbnail()) { 
      $image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); 
   } else{$image="";}
 	get_component([
        'template' => 'molecule/general-box',
        'remove_tags' => ["h2","p"],
        'vars' => [
				"jumbotron text-center", //class		 
				$image,		               //image bg
				"kompakt<br> Custom Solutions.", //element1
				]
    ]); ?>

	<?php get_component([
        'template' => 'molecule/general-box',
        'remove_tags' => ["h1","h2"],
        'vars' => [
				"content-text text-center", //class		 
				Null,		               //image bg
                Null,
                NULL,
				"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus aspernatur officia tenetur distinctio suscipit accusamus iure, a ab ullam incidunt dignissimos nemo debitis laudantium voluptate aut asperiores deserunt accusantium est?", //element1
				]
    ]); ?>
    
 <?php 
    get_component([
        'template' => 'organism/gallery',
        'remove_tags' => [],
        'vars' => [
                    "gallery text-center", //class    
                    "Find out more about our Custom Solution for both Kompakt Cabins and Kompakt Commercial."
                  ]
    ]); 
    
    ?>   


<?php 
    get_component([
        'template' => 'molecule/contact-us',
        'remove_tags' => [],
        'vars' => [
                    "contact-us text-center", //class    
                    'http://kompakt.local/wp-content/uploads/2016/04/Aberdeen-Amenities-Building.jpg', //image 
                  ]
    ]); 
    
    ?>


<?php 
    get_component([
        'template' => 'organism/slider',
        'remove_tags' => [],
        'vars' => [
                    "slider text-center", //class    
                  
                  ]
    ]); 
    
    ?>


<?php endwhile; ?>
