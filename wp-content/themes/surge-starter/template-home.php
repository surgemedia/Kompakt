<?php
/**
 * Template Name: Custom Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
 <?php 
   if (has_post_thumbnail()) { 
      $image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); 
   } else{$image="";}
 				addComponent([
        'template' => 'molecule/general-box',
        'vars' => [
										"jumbotron text-center", //class		 
										$image,		               //image bg
										"kompakt Cabins.<br> Housing Modular Solutions.", //element1
										]
    ]); ?>

	<?php addComponent([
        'template' => 'molecule/general-box',
        'vars' => [
										"content-text text-center", //class		 
										Null,		               //image bg
										"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus aspernatur officia tenetur distinctio suscipit accusamus iure, a ab ullam incidunt dignissimos nemo debitis laudantium voluptate aut asperiores deserunt accusantium est?", //element1
										]
    ]); ?>
    
    <?php addComponent([
        'template' => 'organism/search',
        'vars' => []
    ]); ?>

 <?php get_template_part('components/content', 'page'); ?>
<?php endwhile; ?>
