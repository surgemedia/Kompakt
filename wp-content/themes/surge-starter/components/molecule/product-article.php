<?php 
  $var['class'] = $vars[0];
  $var['thumb'] = $vars[1];
  $var['title'] = $vars[2];
  $var['content'] = $vars[3];
  $var['button'] = $vars[4];
 ?>

<article class="<?php echo $var['class'] ?>">
	<div class="row">
			<div class="img-bg" style="background-image:url('<?php echo $var['thumb'] ?>');"> </div>
	</div>
	<div class="wrapper">
		<h1><?php echo $var['title']?></h1>
		<p><?php echo $var['content']?></p>
		<?php echo $var['button']; ?>
	</div>
</article>