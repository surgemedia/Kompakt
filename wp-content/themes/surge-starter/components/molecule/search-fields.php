<?php 
  $var['class'] = $vars[0];

  ?>
<section class="search-field <?php echo $var['class']; ?>">
		
		<div class="col-xs-12">
			<label for="">keywords</label>
			<input type="text" placeholder="Please input the keywords related">
		</div>
		
		<div class="col-xs-12 col-sm-6">
			<label for="">Container type</label>
			<select class="chosen" id="">
				<option value="">-ANY-</option>
				<option value="">Big</option>
				<option value="">Small</option>
				<option value="">Square</option>
				<option value="">Open</option>
				<option value="">Close</option>
			</select>
		</div>
		
		<div class="col-xs-12 col-sm-6">
			<label for="">size</label>
			<select class="chosen" name="" id="">
				<option value="">-ANY-</option>
				<option value="">Big</option>
				<option value="">Small</option>
				<option value="">Square</option>
				<option value="">Open</option>
				<option value="">Close</option>
			</select>
		</div>
			
		<?php  
				get_component([
                        'template' => 'atom/button-call',
                        'vars' => [
                                    "call text-center", //class    
                                    "search",                  //image bg
                                     "",//element1
                                                                          
                                    ]
                    ]);
		?>

</section>