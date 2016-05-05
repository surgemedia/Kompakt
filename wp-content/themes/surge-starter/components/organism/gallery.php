<?php
$vars['class'] = $vars[0];
$vars['text'] = $vars[1];
// $vars['repeater']
?>
<section class="<?php echo $vars['class'] ?>">
    <p><?php echo $vars['text']; ?></p>
    <ul>
    <?php for ($i=0; $i < sizeof($vars['repeater']); $i++) { ?>
        <li id="gallery<?php echo $i ?>" class="col-xs-12 col-md-6"> <?php
            get_component([
            'template' => 'molecule/general-box',
            'remove_tags' => ["p"],
            'vars' => [
            "gallery-item text-center col-xs-12 col-sm-7 col-md-9 col-lg-12", //class
            $vars['repeater'][$i]['image'],
            $vars['repeater'][$i]['title'],
            $vars['repeater'][$i]['subtitle'],
            NULL,
            get_component([
            'template' => 'atom/button-call',
            'return_string' => true,
            'vars' => [
            "link text-center image-gallery-button", //class
            "view gallery",       //text
            "",//link
            ]
            ]),
            
            ]
            ]);
            
            ?>
            <div class="blueimp-gallery blueimp-gallery-controls">
                <div class="slides"></div>
                <h3 class="title"></h3>
                <a class="prev">‹</a>
                <a class="next">›</a>
                <a class="close">×</a>
                <a class="play-pause"></a>
            <ol class="indicator"></ol>
        </div>
        
        <div class="links hidden">
        <?php debug($vars['repeater'][$i]['gallery']) ?>
        <?php for ($j=0; $j < sizeof($vars['repeater'][$i]['gallery']); $j++) { 
            debug($vars['repeater'][$i]['gallery'][$j]); ?>
            <a href="<?php echo $vars['repeater'][$i]['gallery'][$j]['url'] ?>" title="" data-gallery="<?php echo $vars['repeater'][$i]['gallery'][$j]['url'] ?>">
                <img src="">
            </a>
            <?php } ?>
       </div>
    </li>
     <?php } ?>
</ul>


</section>