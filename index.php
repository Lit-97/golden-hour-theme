 <?php get_header(); ?>

<main>
  <h2>Welcome to The Golden Hour</h2>

  <?php
  if ( have_posts() ) :
    while ( have_posts() ) : the_post(); ?>
      <article>
        <h3><?php the_title(); ?></h3>
        <div><?php the_content(); ?></div>
      </article>
    <?php endwhile;
  else :
    echo '<p>No content found.</p>';
  endif;
  ?>
</main>

<?php get_footer(); ?>