<?php 
  $vars['class'] = $vars[0];
  
 ?>

<div class="<?php echo $vars['class'];?>">
	<div class="owl-carousel hide-print">
<?php 
	get_component([
			        'template' => 'molecule/general-box',
			        'remove_tags' => ["h1","h2"],
			        'vars' => [
			                    "active slider-item text-center", //class    
			                    getFeaturedUrl(),
			                    NULL,
			                    NULL,
			                    '1'.'/'.(intval(sizeof($vars['repeater']))+1),
			                    NULL,
			                    'caption'
			                  ]
			    ]);  
	  	for ($i=0; $i < sizeof($vars['repeater']) ; $i++) { 
			    get_component([
			        'template' => 'molecule/general-box',
			        'remove_tags' => ["h1","h2"],
			        'vars' => [
			                    "slider-item text-center", //class    
			                    $vars['repeater'][$i]['url'],
			                    NULL,
			                    NULL,
			                    ($i+2).'/'.(intval(sizeof($vars['repeater']))+1),
			                    NULL,
			                    'caption'
			                  ]
			    ]); 
	 } ?>
	</div>
	  <div id="owlDotContainer">
	  <a class="btn col-xs-2 prev hidden-xs">Prev</a>
	  	<a class="btn col-xs-2 next pull-right hidden-xs">Next</a>
	  </div>
</div>