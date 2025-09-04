 <?php
/**
 * Title: About Us Section
 * Slug: golden-hour/about-us-pattern
 * Categories: golden-hour
 */
?>

<!-- wp:group {"tagName":"section","className":"about-us-section","layout":{"type":"constrained"}} -->
<section class="about-us-section">
  <div class="about-us-container">
    <!-- wp:heading {"level":1,"className":"about-us-title"} -->
    <h1 class="about-us-title">Our Story</h1>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"className":"about-us-intro"} -->
    <p class="about-us-intro">Welcome to <strong>The Golden Hour</strong> — where coffee meets craft and community. Nestled in the heart of Golden City, we blend elegant ambiance with carefully curated brews to create an experience worth savoring.</p>
    <!-- /wp:paragraph -->

    <!-- wp:columns {"className":"about-us-content"} -->
    <div class="wp-block-columns about-us-content">
      <!-- wp:column {"className":"about-us-text"} -->
      <div class="wp-block-column about-us-text">
        <h2 class="section-heading">A Cozy Escape</h2>
        <p>What began as a small neighborhood café has blossomed into a space where every detail matters — from the scent of freshly ground beans to the gentle lighting that bathes our space in warmth.</p>

        <h2 class="section-heading">Crafted With Intention</h2>
        <p>Our team of passionate baristas and bakers takes pride in every pour, pastry, and plate. We work with local roasters and artisans to ensure every cup tells a story — your story.</p>
      </div>
      <!-- /wp:column -->

      <!-- wp:column {"className":"about-us-image"} -->
      <div class="wp-block-column about-us-image">
        <img src="<?php echo get_template_directory_uri(); ?>/img/tghinterior.jpg" alt="Inside The Golden Hour café" />
      </div>
      <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:group {"className":"about-us-team"} -->
    <div class="about-us-team">
      <h2 class="section-heading">Meet Our Team</h2>
      <div class="team-grid">
        <div class="team-member">
          <img src="<?php echo get_template_directory_uri(); ?>/img/sarahb.jpg" alt="Sarah - Head Barista" />
          <h3>Sarah</h3>
          <p>Head Barista</p>
        </div>
        <div class="team-member">
          <img src="<?php echo get_template_directory_uri(); ?>/img/luis.jpg" alt="Luis - Pastry Chef" />
          <h3>Luis</h3>
          <p>Pastry Chef</p>
        </div>
        <div class="team-member">
          <img src="<?php echo get_template_directory_uri(); ?>/img/jade.jpg" alt="Jade - Manager" />
          <h3>Jade</h3>
          <p>Café Manager</p>
        </div>
      </div>
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"className":"about-quote"} -->
    <div class="about-quote">
      <blockquote>
        <p>"Coffee is more than a drink — it's a ritual, a pause, a conversation waiting to happen."</p>
        <cite>– The Golden Hour</cite>
      </blockquote>
    </div>
    <!-- /wp:group -->

  </div>
</section>
<!-- /wp:group -->