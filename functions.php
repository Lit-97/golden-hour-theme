 <?php
// Register the primary navigation menu
function golden_hour_register_menus() {
  register_nav_menus(array(
    'left' => __('Left Menu', 'golden-hour'),
    'right' => __('Right Menu', 'golden-hour'),
  ));
}
add_action('after_setup_theme', 'golden_hour_register_menus');

// Enqueue Font Awesome and the main stylesheet
function golden_hour_enqueue_styles() {
  // Enqueue Font Awesome from CDN
  wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css', [], '6.5.0');

  // Enqueue your main stylesheet with cache busting
  wp_enqueue_style('golden-hour-style', get_stylesheet_uri(), [], filemtime(get_stylesheet_directory() . '/style.css'));
}
add_action('wp_enqueue_scripts', 'golden_hour_enqueue_styles');

function golden_hour_register_patterns() {
  register_block_pattern_category(
    'golden-hour',
    array('label' => __('Golden Hour Patterns', 'golden-hour'))
  );

  register_block_pattern(
    'golden-hour/about-us-pattern',
    array(
      'title'       => __('About Us Section', 'golden-hour'),
      'description' => __('Elegant and cozy about section with team and story.', 'golden-hour'),
      'categories'  => array('golden-hour'),
      'content'     => file_get_contents(get_template_directory() . '/patterns/about-us-pattern.php'),
    )
  );
}
add_action('init', 'golden_hour_register_patterns');

function golden_hour_disable_post_redirect() {
    if (is_page_template('page-simple-contact.php') && $_SERVER['REQUEST_METHOD'] === 'POST') {
        remove_action('template_redirect', 'redirect_canonical');
    }
}
add_action('template_redirect', 'golden_hour_disable_post_redirect');
?>