<?php 
  $var['class'] = $vars[0];
  $var['bg-img'] = $vars[1];
  $var['title'] = $vars[2];
  $var['subtitle'] = $vars[3];
  $var['content'] = $vars[4];
  $var['button'] = $vars[5];
 ?>

<section class="<?php echo $var['class']; ?>" style="background-image: url(<?php echo $var['bg-img']; ?>)">
	<div class="wrapper">
	
			<h1><?php echo $var['title'] ?></h1>
			<h2><?php echo $var['subtitle'] ?></h2>
			<p><?php echo $var['content'] ?></p>
			<?php echo $var['button'] ?>
	</div>
</section>
