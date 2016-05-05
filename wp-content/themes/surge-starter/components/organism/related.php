<section class="related">
	<?php get_component([
      'template' => 'molecule/general-box',
      'remove_tags' => ["h2","p"],
      'vars' => [
              "related-title text-center", //class 
              Null,
              "Other Kompakt ".get_the_category()[0]->name." Products"     
              ]
  ]); ?>
<?php 
// WP_Query arguments
$args = array (
  'post_type'              => array( 'product' ),
  'category_name'          => get_the_category()[0]->name,
  'posts_per_page'         => '3'
);

// The Query
$query = new WP_Query( $args );

// The Loop
if ( $query->have_posts() ) {
  while ( $query->have_posts() ) {
    $query->the_post();
    // do something
      get_component([
          'template' => 'molecule/product-article',
          'remove_tags' => [],
          'vars' => [
                      "product-article text-center col-md-4", //class    
                      getFeaturedUrl(), //image 
                      get_the_title(),//element1
                      truncate(get_the_content(),25,'...' ,false),
                      get_component([
                          'template' => 'atom/button-link',
                          'return_string' => true,
                          'vars' => [
                                      "link text-center", //class    
                                      "find out more",       //text
                                       get_permalink(),//link
                                      ]
                      ]),
                    ]
      ]); 
  }
} else {
  // no 
      
  }

// Restore original Post Data
wp_reset_postdata();

 ?>


</section>