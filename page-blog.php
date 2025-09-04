 <?php
/**
 * Template Name: Blog
 */
get_header();
?>

<section class="blog-page-section">
  <h2 class="blog-section-title">Blog</h2>
  <div class="blog-divider blog-center"></div>

  <?php
    $args = array(
      'post_type' => 'post',
      'posts_per_page' => 6,
    );
    $blog_query = new WP_Query($args);

    if ($blog_query->have_posts()) :
      $post_count = 0;
      echo '<div class="blog-grid">';
      while ($blog_query->have_posts()) : $blog_query->the_post();
        if ($post_count === 3) {
          // Close first row and open second row
          echo '</div><div class="blog-grid" style="margin-top: 60px;">';
        }
  ?>
        <div class="blog-card">
          <a href="<?php the_permalink(); ?>" class="blog-card-link">
            <?php if (has_post_thumbnail()) : ?>
              <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>">
            <?php endif; ?>
            <div class="blog-card-content">
              <h3><?php the_title(); ?></h3>
              <p class="blog-date"><?php echo get_the_date(); ?></p>
              <p class="blog-excerpt"><?php echo wp_trim_words(get_the_excerpt(), 30); ?></p>
              <span class="read-more">Read More →</span>
            </div>
          </a>
        </div>
  <?php
        $post_count++;
      endwhile;
      echo '</div>'; // Close final blog-grid
      wp_reset_postdata();
    else :
  ?>
    <p>No blog posts found.</p>
  <?php endif; ?>
</section>

<?php get_footer(); ?>