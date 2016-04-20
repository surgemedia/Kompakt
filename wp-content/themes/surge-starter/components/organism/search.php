<?php 
  $var['class'] = $vars[0];
?>

<section class="<?php echo $var['class']?>">
		 <?php
     get_component([
        'template' => 'molecule/general-box',
        'remove_tags' => ['h2',"p"],
        'vars' => [
                    "read-more text-center col-md-6 col-md-push-6", //class    
                    get_field("image_read_more"), //image bg
                    "Kompakt<br> custom solutions",//element1
                    NULL,
                    NULL,
                    get_component([
                        'template' => 'atom/button-link',
                        'return_string' => true,
                        'vars' => [
                                    "link text-center", //class    
                                    "read more",                  //image bg
                                     "/",//element1
                                                                          
                                    ]
                    ]),
                  ]
    ]); ?>
     <?php 
     get_component([
        'template' => 'molecule/search-fields',
        'remove_tags' => [],
        'vars' => [
                    "col-md-6 col-md-pull-6"
                ]
    ]);
     ?>
</section>