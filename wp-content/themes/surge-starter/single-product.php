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
	                ]
	    ]); 
	    
	  ?>

</section>

<?php get_component([
        'template' => 'organism/enquiry',
        'remove_tags' => [],
        'vars' => [
                "enquiry", //class      
                ]
    ]); ?>

<?php get_component([
        'template' => 'organism/related',
        'remove_tags' => [],
        'vars' => [
                "related", //class      
                ]
    ]); ?>




<?php endwhile; ?>