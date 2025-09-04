 <!-- Footer -->
<footer class="site-footer">
  <div class="footer-container">
    <div class="footer-left">
      <a href="<?php echo home_url(); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/img/tghlogo.png" alt="The Golden Hour Logo" class="footer-logo">
      </a>
      <h3 class="footer-cafe-name">The Golden Hour</h3>
      <address class="footer-address">
        123 Sunrise Blvd.<br />
        Golden City, GC 45678
      </address>
    </div>

    <div class="footer-center">
      <div class="footer-hours">
        <h4>Hours</h4>
        <p>Mon - Fri: 7am - 7pm<br />Sat - Sun: 8am - 5pm</p>
      </div>
      <nav class="footer-nav">
        <a href="<?php echo home_url(); ?>">Home</a>
        <a href="<?php echo home_url('/about-us'); ?>">About Us</a>
        <a href="<?php echo home_url('/menu'); ?>">Menu</a>
        <a href="<?php echo home_url('/gallery'); ?>">Gallery</a>
        <a href="<?php echo home_url('/blog'); ?>">Blog</a>
        <a href="<?php echo home_url('/contact'); ?>">Contact</a>
      </nav>
    </div>

    <div class="footer-right">
      <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
      <a href="#" aria-label="X (Twitter)"><i class="fab fa-x-twitter"></i></a>
      <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
      <a href="#" aria-label="TikTok"><i class="fab fa-tiktok"></i></a>
    </div>
  </div>

  <div class="footer-lines">
    <hr class="long-line" />
    <hr class="short-line" />
  </div>

  <!-- EST. 2025 Line -->
  <div class="footer-bottom">
    <p class="footer-est"><sup>®</sup> 2025 The Golden Hour</p>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>