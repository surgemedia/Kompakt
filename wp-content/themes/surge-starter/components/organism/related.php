<section class="related">
	<?php get_component([
      'template' => 'molecule/general-box',
      'remove_tags' => ["h2","p"],
      'vars' => [
              "related-title text-center", //class 
              Null,
              "Other Kompakt Commercial Products"     
              ]
  ]); ?>

	<?php for ($i=0; $i <3 ; $i++) { 
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
    
}
    ?>


</section>