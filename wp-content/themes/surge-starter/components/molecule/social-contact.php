<div class="social-contact">
	<ul>
	<?php $tel= str_replace("(0)","",get_field("main_phone","option"));
  				$tel= str_replace(" ","",$tel);
  	?>
		<li>
			<i class="icon-telephone"></i>
			<a href="tel:<?php echo $tel;?>">
				<?php echo get_field("main_phone","option") ?>
			</a>
		</li>
		<li><i class="icon-facebook"></i></li>
		<li><i class="icon-instagram"></i></li>
		<li><i class="icon-pinterest"></i></li>
	</ul>
</div>