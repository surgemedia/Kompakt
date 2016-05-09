<?php 
  $vars['class'] = $vars[0];
  $vars['bg-img'] = $vars[1];
  $vars['title'] = $vars[2];
  $vars['subtitle'] = $vars[3];
  $vars['content'] = $vars[4];
  $vars['button'] = $vars[5];
  $vars['p_col'] = $vars[6];

 ?>

<section class="<?php echo $vars['class']; ?>" style="background-image: url(<?php echo $vars['bg-img']; ?>)">
	<div class="wrapper">
	
			<h1><?php echo $vars['title'] ?></h1>
			<h2><?php echo $vars['subtitle'] ?></h2>
			<p class="<?php echo $vars['p_col']; ?>"><?php echo $vars['content'] ?></p>
			<?php echo $vars['button'] ?>
	</div>
</section>
