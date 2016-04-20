<?php 
  $var['class'] = $vars[0];
  $var['text'] = $vars[1];
 ?>
<section class="<?php echo $var['class'] ?>">
    <p><?php echo $var['text']; ?></p>
    <ul>
        <li class="col-xs-12 col-md-6"> <?php 
    get_component([
        'template' => 'molecule/general-box',
        'remove_tags' => ["p"],
        'vars' => [
                    "gallery-item text-center col-xs-12 col-sm-7 col-md-9 col-lg-7 col-lg-push-5 col-md-push-3", //class    
                    "http://kompakt.local/wp-content/uploads/2016/04/Conversion-Internal-Render-2.jpg",
                    "Kompakt Comercial",
                    "Custum Solutions",
                    NULL,
                    get_component([
                        'template' => 'atom/button-call',
                        'return_string' => true,
                        'vars' => [
                                    "link text-center", //class    
                                    "view gallery",       //text
                                     "",//link
                                    ]
                    ]),
                    
                  ]
    ]); 
    
    ?></li>
        <li class="col-xs-12 col-md-6">
             <?php 
    get_component([
        'template' => 'molecule/general-box',
        'remove_tags' => ["p"],
        'vars' => [
                    "gallery-item text-center col-xs-12 col-sm-7 col-md-9 col-lg-7 col-md-push-0", //class    
                    "http://kompakt.local/wp-content/uploads/2016/04/Conversion-Internal-Render-1.jpg",
                    "Kompakt Cabins",
                    "Custum Solutions",
                    NULL,
                    get_component([
                        'template' => 'atom/button-call',
                        'return_string' => true,
                        'vars' => [
                                    "link text-center", //class    
                                    "view gallery",       //text
                                     "",//link
                                    ]
                    ]),
                    
                  ]
    ]); 
    
    ?>
        </li>
    </ul>

   
 
</section>