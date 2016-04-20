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
                    "Kompakt",
                    "creations",
                    "KOMPAKT KINGS is a short list of our valuable andcreative custumers.<br>
                    Browse below and get inspired by their brilliant ideas."
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