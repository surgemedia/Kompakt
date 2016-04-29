<?php
/**
 * Template Name: Home
 */
?>

<?php while (have_posts()) : the_post(); ?>
 <?php 
   /*=============================================
                Panel Jumbotron                   
    @components
        + molecule/general-box
        
    =============================================*/


   if (has_post_thumbnail()) { 
      $image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); 
   } else{$image="";}
 	get_component([
        'template' => 'molecule/general-box',
        'remove_tags' => ["h2","p"],
        'vars' => [
                "jumbotron text-center", //class         
                $image,                    //image bg
                "kompakt Cabins.<br> Housing Modular Solutions.", //element1
                ]
    ]);
    			?>

	<?php get_component([
        'template' => 'molecule/general-box',
        'remove_tags' => ["h1","h2"],
        'vars' => [
                "content-text text-center", //class      
                Null,                      //image bg
                Null,
                NULL,
                "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus aspernatur officia tenetur distinctio suscipit accusamus iure, a ab ullam incidunt dignissimos nemo debitis laudantium voluptate aut asperiores deserunt accusantium est?", //element1
                ]
    ]); ?>


    <?php addComponent([
        'template' => 'organism/search',
        'vars' => ["search"]
    ]); ?>

<section class="search-result">
<?php for ($i=0; $i <2 ; $i++) { 
    get_component([
        'template' => 'molecule/product-article',
        'remove_tags' => [],
        'vars' => [
                    "product-article text-center col-md-4", //class    
                    'http://kompakt.surgehost.com.au/wp-content/uploads/2016/04/Aberdeen-Amenities-Building.jpg', //image 
                    "Product Name",//element1
                    "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, cupiditate.",
                    get_component([
                        'template' => 'atom/button-link',
                        'return_string' => true,
                        'vars' => [
                                    "link text-center", //class    
                                    "find out more",       //text
                                     "/",//link
                                    ]
                    ]),
                  ]
    ]); 
        get_component([
        'template' => 'molecule/product-article',
        'remove_tags' => [],
        'vars' => [
                    "product-article text-center col-md-4", //class    
                    'http://kompakt.surgehost.com.au/wp-content/uploads/2016/04/Conversion-Internal-Render-1.jpg', //image 
                    "Product Name",//element1
                    "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, cupiditate.",
                    get_component([
                        'template' => 'atom/button-link',
                        'return_string' => true,
                        'vars' => [
                                    "link text-center", //class    
                                    "find out more",       //text
                                     "/",//link
                                    ]
                    ]),
                  ]
    ]); 
        get_component([
        'template' => 'molecule/product-article',
        'remove_tags' => [],
        'vars' => [
                    "product-article text-center col-md-4", //class    
                    'http://kompakt.surgehost.com.au/wp-content/uploads/2016/04/Daisy-Hill-8.jpg', //image 
                    "Product Name",//element1
                    "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, cupiditate.",
                    get_component([
                        'template' => 'atom/button-link',
                        'return_string' => true,
                        'vars' => [
                                    "link text-center", //class    
                                    "find out more",       //text
                                     "/",//link
                                    ]
                    ]),
                  ]
    ]); 
    
}
    ?>
</section>

<?php 
    get_component([
        'template' => 'molecule/contact-us',
        'remove_tags' => [],
        'vars' => [
                    "contact-us text-center", //class    
                    'http://kompakt.surgehost.com.au/wp-content/uploads/2016/04/Aberdeen-Amenities-Building.jpg', //image 
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
