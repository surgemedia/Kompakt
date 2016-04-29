<?php 
  $var['class'] = $vars[0];

  ?>
  <article class="<?php echo $var['class'] ?>">
   <div class="wrapper">
    <a href="">back to results </a>
    <header>
       <h2>kompakt Comercial</h2>
       <h1><?php the_title(); ?></h1>
       <p class="price">$ 20,000</p>
    </header>
     <div class="entry-content">
       <?php the_content(); ?>
     </div>
     <footer>
       <ul> 
        <li>
          <i class="icon-share"></i>Share
        </li>
        <li>
          <i class="icon-print"></i>Print
        </li>
        <li>
          <i class="icon-construction"></i>Floorplan
        </li>
       </ul>
     </footer>
     
     </div>
  </article>
