 <?php get_header(); ?>

<!-- Hero Section -->
<section class="hero">
  <div class="hero-image">
    <div class="hero-overlay"></div>
    <div class="hero-text">
      <h1>Welcome to The Golden Hour</h1>
      <p>A warm & elegant place to enjoy your coffee moments.</p>
      
      <div class="hero-buttons">
        <a href="<?php echo home_url('/menu'); ?>" class="btn btn-primary">View Menu</a>
        <a href="<?php echo home_url('/contact'); ?>" class="btn btn-secondary">Contact Us</a>
      </div>
    </div>
  </div>
</section>


<!-- Menu Highlights Section -->
<section class="menu-section">
  <h2 class="section-title">Signature Sips & Bites</h2>
  <div class="divider center"></div>
  <div class="menu-grid">

    <div class="menu-item">
      <a href="<?php echo home_url('/menu'); ?>" class="menu-link"> 
        <img src="/wp-content/themes/golden-hour/img/vbl.jpg" alt="Vanilla Latte">
        <h3>Vanilla Bean Latte</h3>
        <p>Silky espresso blended with our house-made vanilla syrup and steamed milk.</p>
      </a>
    </div>

    <div class="menu-item">
      <a href="<?php echo home_url('/menu'); ?>" class="menu-link"> 
        <img src="/wp-content/themes/golden-hour/img/bc.jpg" alt="Butter Croissant">
        <h3>Butter Croissant</h3>
        <p>Flaky, golden, and baked fresh each morning — the perfect pairing.</p>
      </a>
    </div>

    <div class="menu-item">
      <a href="<?php echo home_url('/menu'); ?>" class="menu-link">
        <img src="/wp-content/themes/golden-hour/img/bsmocha.jpg" alt="Mocha">
        <h3>Butterscotch Mocha</h3>
        <p>Velvety espresso swirled with creamy butterscotch and steamed milk.</p>
      </a>
    </div>

    <div class="menu-item">
      <a href="<?php echo home_url('/menu'); ?>" class="menu-link">    
        <img src="/wp-content/themes/golden-hour/img/atoast.jfif" alt="Avocado Toast">
        <h3>Avocado Toast</h3>
        <p>Toasted sourdough topped with smashed avocado, chili flakes & lemon zest.</p>
      </a>
    </div>

  </div>

  <div class="menu-cta">
    <a href="<?php echo home_url('/menu'); ?>" class="outline site-button">Explore Full Menu</a>
  </div>
</section>


<!-- About Us Section -->
<section class="about-section">
  <div class="image-container">
    <img src="/wp-content/themes/golden-hour/img/ghcafe.jpg" alt="café storefront" class="aboutus-image">
  </div>
  <div class="text-container">
    <p class="subheader">GOLDEN SIPS. TIMELESS TASTE.</p>
    <h2>About The Golden Hour</h2>
    <div class="divider"></div>
    <p>
      At The Golden Hour, we believe every coffee moment should be steeped in warmth, elegance, and quiet joy. Our beans are thoughtfully sourced and brewed to perfection—crafted for those who savor the slower things in life.
    </p>
    <p>
      Step inside, settle in, and indulge in a cup made with care—because every hour deserves to be golden.
    </p>
    <div class="learn-more-button">
      <a href="<?php echo home_url('/about-us'); ?>" class="outline site-button">Learn More About Us</a>
    </div>
  </div>
</section>


<!-- Experience Section -->
<section class="experience-section">
  <div class="experience-content">
    <div class="experience-text">
      <p class="subheader">MORE THAN COFFEE</p>
      <h2>The Golden Experience</h2>
      <div class="divider"></div>
      <p>
        Whether it’s a quiet corner for reading, a shared laugh with friends, or a golden moment of solitude, our café is designed for comfort, community, and calm.
      </p>
      <p>
        From our playlist to our plateware, every detail reflects our commitment to a welcoming and timeless experience.
      </p>
      <a class="outline site-button" href="<?php echo home_url('/gallery'); ?>">See the Space</a>
    </div>

    <div class="experience-image">
      <img src="/wp-content/themes/golden-hour/img/friends.jpg" alt="café interior">
    </div>
  </div>
</section>


<!-- Testimonials Section -->
<section class="testimonials-section">
  <h2 class="section-title-test">What Our Clients Say</h2>
  <div class="divider center"></div>

  <div class="testimonials-container">
    <div class="testimonial">
      <p class="testimonial-text">"This experience exceeded all my expectations!"</p>
      <p class="testimonial-author">— Emma J.</p>
    </div>
    <div class="testimonial">
      <p class="testimonial-text">"Professional, attentive, and truly talented."</p>
      <p class="testimonial-author">— Lucas M.</p>
    </div>
    <div class="testimonial">
      <p class="testimonial-text">"A flawless journey from start to finish."</p>
      <p class="testimonial-author">— Sara B.</p>
    </div>
    <div class="testimonial">
      <p class="testimonial-text">"Their eye for detail is second to none."</p>
      <p class="testimonial-author">— Daniel K.</p>
    </div>
    <div class="testimonial">
      <p class="testimonial-text">"They made our vision come to life beautifully."</p>
      <p class="testimonial-author">— Olivia P.</p>
    </div>
    <div class="testimonial">
      <p class="testimonial-text">"I would recommend them in a heartbeat!"</p>
      <p class="testimonial-author">— Noah T.</p>
    </div>
  </div>
</section>

<?php get_footer(); ?