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
		<?php if (!is_null($var['title'])): ?>
			<h1><?php echo $var['title'] ?></h1>
		<?php endif; ?>
		<?php if (!is_null($var['subtitle'])): ?>
			<h2><?php echo $var['subtitle'] ?></h2>
		<?php endif; ?>
		<?php if (!is_null($var['content'])): ?>
			<p><?php echo $var['content'] ?></p>
		<?php endif; ?>
		<?php if (!is_null($var['button'])): 
			echo $var['button'];
		 endif; ?>
	</div>
</section>
