 <?php
/**
 * Template Name: Gallery Page
 */

get_header(); 
?>

<section class="gallery-section">
  <div class="gallery-container">
    <h1 class="gallery-title"><?php the_title(); ?></h1>
    <div class="gallery-grid">
      <?php
        while (have_posts()) : the_post();
          the_content(); // Outputs images added via Block Editor
        endwhile;
      ?>
    </div>
  </div>
</section>



<?php get_footer(); ?>