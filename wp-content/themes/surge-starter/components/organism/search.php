<?php 
  $var['class'] = $vars[0];
?>

<section id="searchBlock" class="<?php echo $var['class']?>">
		 <?php

     get_component([
        'template' => 'molecule/general-box',
        'remove_tags' => ['h2',"p"],
        'vars' => [
                    "read-more text-center col-md-6 col-md-push-6", //class    
                    aq_resize(get_field("side_panel_image"),951,420,true,true,false), //image bg
                    get_field("side_panel_title")."<br>".get_field("side_panel_subtitle"),//element1
                    NULL,
                    NULL,
                    get_component([
                        'template' => 'atom/button-link',
                        'return_string' => true,
                        'vars' => [
                                    "link text-center", //class    
                                    "read more",                  //image bg
                                     get_field('side_panel_read_more'),//element1
                                                                          
                                    ]
                    ]),
                  ]
    ]); ?>
     <?php 
     /*get_component([
        'template' => 'molecule/search-fields',
        'remove_tags' => [],
        'vars' => [
                    "col-md-6 col-md-pull-6"
                ]
    ]);*/
     ?>
     <?php get_component([
        'template' => 'molecule/general-box',
        'remove_tags' => ["h2"],
        'vars' => [
                "banner-side text-center col-md-6 col-md-pull-6", //class      
                Null,                      //image bg
                get_field('banner_title'),
                NULL,
                get_field('banner_text'), //element1
                ]
    ]); ?>
</section>