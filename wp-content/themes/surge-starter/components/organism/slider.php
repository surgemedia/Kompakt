<?php 
  $var['class'] = $vars[0];

 ?>
<section class="<?php echo $var['class'] ?>">
  
	<?php 
    get_component([
        'template' => 'molecule/general-box',
        'remove_tags' => [],
        'vars' => [
                    "slider-text text-center", //class    
                    NULL,
                    get_field('title_slider'),
                    get_field('subtitle_slider'),
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