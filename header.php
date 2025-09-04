 <!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="site-header">
  <div class="nav-container">

    <nav class="nav-left">
      <?php
        wp_nav_menu(array(
          'theme_location' => 'left',
          'container' => false,
          'menu_class' => 'main-nav',
          'fallback_cb' => false,
        ));
      ?>
    </nav>

    <div class="logo">
      <a href="<?php echo home_url(); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/img/tghlogo.png" alt="The Golden Hour Logo" class="nav-logo">
      </a>
    </div>

    <nav class="nav-right">
      <?php
        wp_nav_menu(array(
          'theme_location' => 'right',
          'container' => false,
          'menu_class' => 'main-nav',
          'fallback_cb' => false,
        ));
      ?>
    </nav>

  </div>
</header