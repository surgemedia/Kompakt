<?php 
  $vars['class'] = $vars[0];
  $vars['thumb'] = $vars[1];
  $vars['title'] = $vars[2];
  $vars['content'] = $vars[3];
  $vars['button'] = $vars[4];
  $vars['container_type'] = $vars[5];
  $vars['size-field'] = $vars[6];


 ?>

<article class="<?php echo $vars['class'] ?>">
	<div class="row">
			<div class="img-bg" style="background-image:url('<?php echo $vars['thumb'] ?>');"> </div>
	</div>
	<div class="wrapper">
		<h1 class="search_title"><?php echo $vars['title']?></h1>
		<p class="keywords"><?php echo $vars['content']?></p>
		<?php echo $vars['button']; ?>
	</div>
	<pre class="search-tags hidden">
		<p class="container_type"><?php echo  $vars['container_type'] ?></p>
		<p class="size"><?php echo  $vars['size-field'] ?></p>
	</pre>
</article>