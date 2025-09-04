 <?php get_header(); ?>

<section class="single-post-section">
  <div class="single-post-container">
    <h1 class="single-post-title"><?php the_title(); ?></h1>
    <p class="single-post-meta"><?php echo get_the_date(); ?> | By <?php the_author(); ?></p>

    <?php if (has_post_thumbnail()) : ?>
      <div class="post-featured-image">
        <?php the_post_thumbnail('large'); ?>
      </div>
    <?php endif; ?>

    <div class="single-post-content">
      <?php the_content(); ?>
    </div>

    <div class="back-to-blog">
      <a href="<?php echo home_url('/blog'); ?>">← Back to Blog</a>
    </div>
  </div>
</section>

<?php get_footer(); ?>