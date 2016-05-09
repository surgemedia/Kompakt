<?php 
  $var['class'] = $vars[0];
?>

<section class="<?php echo $var['class']?>">
  <?php 
    get_component([
        'template' => 'molecule/product-equiry',
        'remove_tags' => [],
        'vars' => [
                    "product-equiry col-md-8", //class    
                  ]
    ]); 
    
    ?>

  <?php
  $customSolutionImage;
  $args = [
      'post_type' => 'page',
      'fields' => 'ids',
      'nopaging' => true,
      'meta_key' => '_wp_page_template',
      'meta_value' => 'template-custom.php'
  ];
  $customSolutionImage_id = get_posts( $args )[0];
  if(get_the_category()[0]->name == 'Cabins'){
    $customSolutionImage = get_field('gallery',$customSolutionImage_id)[1]['image'];
  } else {
     $customSolutionImage = get_field('gallery',$customSolutionImage_id)[0]['image'];
  }
     get_component([
        'template' => 'molecule/general-box',
        'remove_tags' => ["p"],
        'vars' => [
                    "read-more col-md-4", //class    
                    $customSolutionImage, //image bg
                    "Kompakt<br> ".get_the_category()[0]->name,//element1
                    "Custom<br> solution",
                    NULL,
                    get_component([
                        'template' => 'atom/button-link',
                        'return_string' => true,
                        'vars' => [
                                    "link text-center", //class    
                                    "read more",                  //image bg
                                     get_permalink($customSolutionImage_id),//element1
                                                                          
                                    ]
                    ]),

                  ]
    ]); 
     unset($customSolutionImage);
     unset($customSolutionImage_id);

  ?>
</section>