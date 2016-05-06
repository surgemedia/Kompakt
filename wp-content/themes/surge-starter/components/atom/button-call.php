<?php 
  $var['class'] = $vars[0];
  $var['name'] = $vars[1];
  $var['action'] = $vars[2];
 ?>

<button class="<?php echo $var['class'] ?>" onclick="<?php echo $var['action'] ?>"><?php echo $var['name']; ?>
</button>