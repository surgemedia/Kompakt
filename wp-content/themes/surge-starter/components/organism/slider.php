<?php 
  $vars['class'] = $vars[0];

 ?>
<section class="<?php echo $vars['class'] ?>">
  
	<?php 
    get_component([
        'template' => 'molecule/general-box',
        'remove_tags' => [],
        'vars' => [
                    "slider-text text-center", //class    
                    NULL,
                    $vars["title_slider"],
                    $vars["subtitle_slider"],
                    strip_tags(get_field('content_slider'),'<br></ br>'),
                    '',
                    'container'

                  ]
    ]); 
    
    ?>
  <?php 
    get_component([
        'template' => 'molecule/owlCarousel',
        'remove_tags' => [],
        'vars' => [
                    "owlCarousel", //class    
                    
                  ]
    ]); 
    
    ?>
</section>