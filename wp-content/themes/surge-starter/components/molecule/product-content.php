<?php 
  $vars['class'] = $vars[0];

  ?>
  <article class="<?php echo $vars['class'] ?>">
   <div class="wrapper">
    <a href="/#searchBlock">back to results </a>
    <header>
       <h2>kompakt <?php echo $vars['cat']; ?></h2>
       <h1>
      <?php echo $vars['title']; ?>
       </h1>
       <p class="price">$<?php echo $vars['price']; ?></p>
    </header>
     <div class="entry-content">
      <?php echo $vars['content']; ?>
     </div>
     <footer>
     <div id="shareBox" class="collapse" >
       <a href="https://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&media=<?php echo getFeaturedUrl(); ?>&description=<?php echo the_title(); ?>"><i class="icon-pinterest"></i> Pintrest </a>
       <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>"><i class="icon-facebook"></i> Facebook</a>
       <a href="https://twitter.com/home?status=<?php the_permalink(); ?>"><i class="icon-twitter"></i> Twitter</a>
     </div>
       <ul> 
        <li>
          <a id="share" role="button" data-toggle="collapse" href="#shareBox" aria-expanded="false" aria-controls="shareBox" ><i class="icon-share"></i>Share</a>
        </li>
        <li>
          <a href="javascript:window.print()"><i class="icon-print"></i>Print</a>
        </li>
        <li>
          <a target="_blank" href="<?php echo $vars['floorplan'];  ?>"><i class="icon-construction"></i>Floorplan</a>
        </li>
       </ul>
     </footer>
     
     </div>
  </article>
