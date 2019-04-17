<!DOCTYPE html>
<html lang="en">

<head>
  <title>Labs - Design Studio</title>
  <meta charset="UTF-8">
  <meta name="description" content="Labs - Design Studio">
  <meta name="keywords" content="lab, onepage, creative, html">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Favicon -->
  <link href="img/favicon.ico" rel="shortcut icon" />

<?php wp_head(); ?>

  <!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body>
  <!-- Page Preloder -->
  <div id="preloder">
    <div class="loader">
      <img src="<?= get_template_directory_uri(); ?>/img/logo.png" alt="">
      <h2>Loading.....</h2>
    </div>
  </div>


  <!-- Header section -->
  <header class="header-section">
    <div class="logo">
      <img src="<?= get_template_directory_uri(); ?>/img/logo.png" alt=""><!-- Logo -->
    </div>
    <!-- Navigation -->
    <div class="responsive"><i class="fa fa-bars"></i></div>
    <nav>
      <!-- <ul class="menu-list">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="services.php">Services</a></li>
        <li><a href="blog.html">Blog</a></li>
        <li><a href="contact.html">Contact</a></li>
        <li><a href="elements.html">Elements</a></li>
      </ul> -->
      <?php
      wp_nav_menu([
        'menu'            => '',
        'container'       => 'div',
        'container_class' => '',
        'container_id'    => '',
        'menu_class'      => 'menu-list',
        'menu_id'         => '',
        'echo'            => true,
        'fallback_cb'     => 'wp_page_menu',
        'before'          => '',
        'after'           => '',
        'link_before'     => '',
        'link_after'      => '',
        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        'item_spacing'    => 'preserve',
        'depth'           => 0,
        'walker'          => '',
        'theme_location'  => 'main-menu'
      ]);
      ?>
    </nav>
  </header>
  <!-- Header section end -->

  <!-- FIN HEADER
	============================================ -->