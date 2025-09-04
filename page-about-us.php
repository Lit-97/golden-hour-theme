 <?php
/**
 * Template Name: About Us Page
 */
get_header();
?>

<!-- About Us Section (Dark) -->
<section class="about-us-section">
  <div class="about-us-container">
    <h1 class="about-us-title">Our Story</h1>
    <p class="about-us-intro">
      Welcome to <strong>The Golden Hour</strong> — where coffee meets craft and community. Nestled in the heart of Golden City, we blend elegant ambiance with carefully curated brews to create an experience worth savoring.
    </p>
    <p class="about-us-intro">
      The Golden Hour was born from a belief that the best moments in life happen in the in-between — in the quiet lull between sunrise and bustle, or the golden light just before dusk. We set out to create a space that reflects that magic: where warmth meets wonder, and every visit feels like a gentle pause in the day.
    </p>
  </div>
</section>

<!-- Light Section: Story -->
<section class="about-us-light-section">
  <div class="about-us-container">
    <div class="about-us-content">
      <div class="about-us-text">
        <h2 class="section-heading">A Cozy Escape</h2>
        <p>
          From humble beginnings as a quiet neighborhood café, The Golden Hour has grown into a sanctuary of warmth and intention. Every detail — the aroma of hand-ground beans, the soft golden glow of evening light, the hum of quiet conversations — is curated to feel like home, yet a little more magical.
        </p>
        <p>
          This isn’t just a place to grab a drink. It’s where time slows down, where strangers become neighbors, and where the world outside fades just enough for you to catch your breath.
        </p>

        <h2 class="section-heading">Crafted With Intention</h2>
        <p>
          At The Golden Hour, we believe that craft is a form of care. Every espresso shot, every flaky croissant, every detail on your plate is the result of thoughtful hands and honest passion. Our baristas and bakers aren’t just skilled — they’re storytellers, creating moments of comfort one creation at a time.
        </p>
        <p>
          We proudly partner with local roasters and makers who share our values, ensuring that what you sip and savor carries the essence of our community. Every bite and every brew is a quiet celebration of intention.
        </p>
      </div>

      <div class="about-us-image">
        <img src="/wp-content/themes/golden-hour/img/tghinterior.jpg" alt="Inside The Golden Hour café">
      </div>
    </div>
  </div>
</section>

<!-- Team Section (Dark) -->
<section class="about-us-team-section-dark">
  <div class="about-us-container">
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
  </div>
</section>

<!-- Quote Section (White) -->
<section class="about-quote-light">
  <div class="about-us-container">
    <div class="about-quote-content">
      <blockquote>
        <p>"Beyond aroma and warmth, coffee carries what we often forget to give ourselves — time."</p>
        <cite>– The Golden Hour</cite>
      </blockquote>
    </div>
  </div>
</section>

<?php get_footer(); ?