<?php
/**
 * Template Name: Custom
 */
?>

<?php while (have_posts()) : the_post(); ?>
 <?php 
    get_component([
        'template' => 'molecule/general-box',
        'remove_tags' => ["h2","p"],
        'vars' => [
                "jumbotron text-center", //class         
                aq_resize(get_field('background_image'),1920,1080,true,true,true),//image bg
                get_field('title').' <br>'.get_field('subtitle'), //element1
                ]
    ]);
    ?>
<?php get_component([
        'template' => 'molecule/general-box',
        'remove_tags' => ["h1","h2"],
        'vars' => [
                "content-text text-center container", //class      
                Null,                      //image bg
                Null,
                NULL,
                get_the_content(), //element1
                ]
    ]); ?>
    
 <?php 
 // $the_galleries = g;
 // debug($the_galleries[0]);
    get_component([
        'template' => 'organism/gallery',
        'remove_tags' => [],
        'vars' => [
                    "gallery text-center container", //class    
                    get_field('blurb'),
                    "repeater" => get_field('gallery'),
                  ]
    ]); 
    
    ?>   


<?php 
    get_component([
        'template' => 'molecule/contact-us',
        'remove_tags' => [],
        'vars' => [
                    "contact-us text-center", //class    
                    get_field('form')
                  ]
    ]); 
    
    ?>


<?php /*
    get_component([
        'template' => 'organism/slider',
        'remove_tags' => [],
        'vars' => [
                    "slider text-center", //class    
                    "title_slider" => get_field('title_slider'),
                    "subtitle_slider" => get_field('subtitle_slider'),
                  ]
    ]); 
    */
    ?>


<?php endwhile; ?>
