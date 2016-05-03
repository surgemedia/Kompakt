<?php 
  $var['class'] = $vars[0];

  ?>
<section class="search-field <?php echo $var['class']; ?>">
		
		<div class="col-xs-12">
			<label for="">keywords</label>
			<input class="input" type="text" placeholder="Please input the keywords related">
		</div>
		
		<div class="col-xs-12 col-sm-6">
			<label for="">Container type</label>
			<select id="filterContainer" class="select-chosen" id="">
				<option value="">-ANY-</option>
				<option value="big">Big</option>
				<option value="small">Small</option>
				<option value="">Square</option>
				<option value="">Open</option>
				<option value="">Close</option>
			</select>
		</div>
		
			<?php 
				$field_key = "field_5722f1ce47a59";
				$sizefield = get_field_object($field_key)['choices'];
			 ?>
		<div class="col-xs-12 col-sm-6">
			<label for="">size</label>
			<select id="filterSize" class="select-chosen" name="" id="">
				<option value="">-ANY-</option>
				<?php foreach ($sizefield as $key => $value) { ?>
				<option value="<?php echo $key ?>"><?php echo $value ?></option>
				<?php } ?>
			</select>
		</div>
			
		<?php  
				get_component([
                        'template' => 'atom/button-call',
                        'vars' => [
                                    "link text-center", //class    
                                    "search", //text
                                     "",//action
                                                                          
                                    ]
                    ]);
		?>

</section>