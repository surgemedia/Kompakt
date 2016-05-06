<?php while (have_posts()) : the_post(); ?>
<section id="product-detail" >
<?php 
	 	  get_component([
	        'template' => 'molecule/product-carousel',
	        'remove_tags' => [],
	        'vars' => [
	                    "product-carousel", //class    
	                ]
	    ]); 
	    
	  ?>

<?php 
	 	  get_component([
	        'template' => 'molecule/product-content',
	        'remove_tags' => [],
	        'vars' => [
	                    "product-content", //class 
	                    "price" => get_field('price'),
	                    "cat" => get_the_category()[0]->name,
	                    "floorplan" => get_field('floorplan'),
	                    "title" => get_the_title(),
	                    "content" => get_the_content(),

	                ]
	    ]); 
	    
	  ?>

</section>

<?php get_component([
        'template' => 'organism/enquiry',
        'remove_tags' => [],
        'vars' => [
                "enquiry hide-print", //class      
                ]
    ]); ?>

<?php get_component([
        'template' => 'organism/related',
        'remove_tags' => [],
        'vars' => [
                "related hide-print", //class      
                ]
    ]); ?>




<?php endwhile; ?>