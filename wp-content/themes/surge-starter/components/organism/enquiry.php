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
     get_component([
        'template' => 'molecule/general-box',
        'remove_tags' => ["p"],
        'vars' => [
                    "read-more col-md-4", //class    
                    "http://kompakt.surgehost.com.au/wp-content/uploads/2016/04/Daisy-Hill-3.jpg", //image bg
                    "Kompakt<br> comercial",//element1
                    "Custom<br> solution",
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
    ]); 
  ?>
</section>