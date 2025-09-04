 <?php
/**
 * Template Name: Simple Contact Page
 */

get_header();

$success = '';
$error = '';
$name = '';
$email = '';
$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name    = sanitize_text_field($_POST['name'] ?? '');
    $email   = sanitize_email($_POST['email'] ?? '');
    $message = sanitize_textarea_field($_POST['message'] ?? '');

    if (!$name || !$email || !is_email($email) || !$message) {
        $error = 'Please fill in all fields with valid info.';
    } else {
        $to = get_option('admin_email');
        $subject = 'New contact form message from ' . $name;
        $headers = ['Content-Type: text/html; charset=UTF-8', 'From: ' . $name . ' <' . $email . '>'];

        $body = "<p><strong>Name:</strong> {$name}</p>";
        $body .= "<p><strong>Email:</strong> {$email}</p>";
        $body .= "<p><strong>Message:</strong><br>" . nl2br($message) . "</p>";

        if (wp_mail($to, $subject, $body, $headers)) {
            $success = 'Thank you for your message. We will get back to you soon!';
            $name = $email = $message = ''; // clear the form
        } else {
            $error = 'Sorry, there was an error sending your message. Please try again later.';
        }
    }
}

// WordPress Loop to get page data
if (have_posts()) :
    while (have_posts()) : the_post(); ?>

<section class="contact-section">
  <div class="contact-container">
    <h1 class="contact-title"><?php the_title(); ?></h1>

    <?php if ($success): ?>
      <div class="form-feedback success"><?php echo esc_html($success); ?></div>
    <?php elseif ($error): ?>
      <div class="form-feedback error"><?php echo esc_html($error); ?></div>
    <?php endif; ?>

    <form method="post" class="contact-content" novalidate autocomplete="off">
      <div id="form-error" class="form-feedback error" style="display:none;"></div>

      <label for="name">Name</label>
      <input type="text" id="name" name="name" required autocomplete="off" value="<?php echo esc_attr($name); ?>">

      <label for="email">Email</label>
      <input type="email" id="email" name="email" required autocomplete="off" value="<?php echo esc_attr($email); ?>">

      <label for="message">Message</label>
      <textarea id="message" name="message" rows="6" required><?php echo esc_textarea($message); ?></textarea>

      <button type="button" id="send-message-btn">Send Message</button>
    </form>

    <?php if (isset($_GET['submitted']) && $_GET['submitted'] === 'true'): ?>
  <div id="success-popup" class="popup-overlay">
    <div class="popup-content">
      <p>Thank you for your message!</p>
      <button id="close-popup">Close</button>
    </div>
  </div>
<?php endif; ?>

  </div>
</section>

<?php
    endwhile;
endif;
?>

<script>
document.addEventListener('DOMContentLoaded', function () {
  const popup = document.getElementById('success-popup');
  const closeBtn = document.getElementById('close-popup');

  if (popup && closeBtn) {
    popup.style.display = 'flex';
    closeBtn.addEventListener('click', () => {
      popup.style.display = 'none';
      // Remove ?submitted=true from URL without reloading
      const url = new URL(window.location);
      url.searchParams.delete('submitted');
      window.history.replaceState({}, document.title, url.pathname);
    });
  }
});

document.addEventListener('DOMContentLoaded', function () {
  const sendBtn = document.getElementById('send-message-btn');
  const errorDiv = document.getElementById('form-error');

  sendBtn.addEventListener('click', function () {
    errorDiv.style.display = 'none';  // Reset error

    const name = document.getElementById('name').value.trim();
    const email = document.getElementById('email').value.trim();
    const message = document.getElementById('message').value.trim();

    // Basic email regex check
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (!name || !email || !message) {
      errorDiv.textContent = 'Please fill in all fields.';
      errorDiv.style.display = 'block';
      return;
    }
    if (!emailPattern.test(email)) {
      errorDiv.textContent = 'Please enter a valid email address.';
      errorDiv.style.display = 'block';
      return;
    }

    // All good, redirect to show popup
    window.location.href = '?submitted=true';
  });
});
</script>



<?php get_footer(); ?>