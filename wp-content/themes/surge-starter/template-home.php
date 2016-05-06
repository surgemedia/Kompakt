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

   
 	get_component([
        'template' => 'molecule/general-box',
        'remove_tags' => ["h2","p"],
        'vars' => [
                "jumbotron text-center", //class         
                aq_resize(get_field('background_image'),1920,1080,true,true,true),//image bg
                get_field('title').' <br>'.get_field('subtitle'), //element1
                ]
    ]);
    			?>

	<?php get_component([
        'template' => 'molecule/general-box',
        'remove_tags' => ["h1","h2"],
        'vars' => [
                "content-text text-center container", //class      
                Null,                      //image bg
                Null,
                NULL,
                get_the_content(), //element1
                ]
    ]); ?>


    <?php get_component([
        'template' => 'organism/search',
        'vars' => ["search"]
    ]); ?>

<section id="productSearch" class="search-result">
<input id="productFilter" class="search hidden" />


<ul class="list list-inline container-fluid">
<?php
    
// WP_Query arguments
$args = array (
    'post_type'              => array( 'product' ),
);

// The Query
$query = new WP_Query( $args );

// The Loop
if ( $query->have_posts() ) {
    while ( $query->have_posts() ) {
        $query->the_post(); ?>
        <li class=" col-md-4">
        <?php
        get_component([
        'template' => 'molecule/product-article',
        'remove_tags' => [],
        'vars' => [
                    "product-article text-center", //class    
                    aq_resize(getFeaturedUrl(),645,350,true,true,false), //image 
                    get_the_title(),//element1
                    truncate(get_the_content(),15,'',false),
                    get_component([
                        'template' => 'atom/button-link',
                        'return_string' => true,
                        'vars' => [
                                    "link text-center", //class    
                                    "find out more",       //text
                                     get_permalink(),//link
                                    ]
                    ]),
                    get_field('container_type'),
                    get_field('size')

                  ]
    ]); 
    } ?>
    </li>
    <?php
} else {
    // no posts found
}

// Restore original Post Data
wp_reset_postdata();

    ?>
    </ul>
</section>

<?php 
    get_component([
        'template' => 'molecule/contact-us',
        'remove_tags' => [],
        'vars' => [
                    "contact-us text-center", //class
                     get_field('form')
                  ]
    ]); 
    
    ?>


<?php 
    get_component([
        'template' => 'organism/slider',
        'remove_tags' => [],
        'vars' => [
                    "slider text-center", //class    
                    "title_slider" => get_field('title_slider'),
                    "subtitle_slider" => get_field('subtitle_slider'),
                    
                  ]
    ]); 
    
    ?>


<?php endwhile; ?>
