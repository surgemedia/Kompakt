<section class="search">
		<?php get_component([
        'template' => 'molecule/general-box',
        'remove_tags'=>[],
        'return_string'=>
                     addComponent([
                        'template' => 'atom/button-link',
                        'echo' => false,
                        'filter' => ['<h2><h1>']
                        'vars' => [
                                    "read-more text-center", //class    
                                    "read more",                  //image bg
                                     "/",//element1
                                                                          
                                    ]
                    ]),
        'vars' => [
                    "read-more text-center", //class    
                    get_field("image_read_more"),                  //image bg
                     "Kompakt<br> custom solutions",//element1
                  ]
    ]); ?>
    <?php addComponent([
          'template' => 'molecule/search-fields',
          'vars' => [
						    ]
      ]); ?>
</section>