<?php
get_component([
        'template' => 'molecule/general-box',
        'remove_tags' => ["h2","p"],
        'vars' => [
                "jumbotron text-center", //class         
                aq_resize(get_field('background_image',2),1920,1080,true,true,true),//image bg
                'Error 404<br> Page not found', //element1
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
                'Looks like you got a bit lost. <a href="/">Return Home</a>', //element1
                ]
    ]); ?>
