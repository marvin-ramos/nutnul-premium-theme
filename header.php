<?php 
    /*
        this is the template for the header
        @package nutnull-premium-theme
    */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <title>Nutnull<?php wp_title(); ?></title>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php if( is_singular() && pings_open( get_queried_object() ) ) : ?>
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php endif; ?>
    
    <?php wp_head(); ?>

    <?php 
      $custom_css = esc_attr(get_option('nutnull_css'));
      if( !empty($custom_css)) :
        echo '<style>'. $custom_css .'</style>';
      endif;
    ?>
</head>

<body <?php body_class(); ?>>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top ">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-envelope"></i> <a href="mailto:contact@example.com">info@nutnull.com</a>
        <i class="icofont-phone"></i>(+639) 17-715-2496
      </div>
      <div class="social-links">
        <a href="https://www.facebook.com/nutnull" target="blank" class="facebook"><i class="icofont-facebook"></i></a>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">
      <img src="http://local.nutnull.com/wp-content/uploads/2022/02/nutnull-logo.png" class="headerlogo" alt="">
      <img src="http://local.nutnull.com/wp-content/uploads/2022/02/nutnull-logo-modname2.png" class="namelogo mr-auto" alt="">
      <!-- <img src="assets/img/nutnull-logo-modname.png" class="namelogomod mr-auto" alt=""> -->
      <!-- <h1 class="logo mr-auto"><a href="index.html">NUTNULL</a></h1> -->
      <nav class="nav-menu d-none d-lg-block">
        <!-- <ul>
          <li class="active"><a href="index.html">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul> -->
        <?php
          wp_nav_menu( array(
            'theme_location' => 'primary',
            'container' => false,
            'menu_class' => '',
            'walker' => new Nutnull_Walker_Nav_Primary()
          ) );
        ?>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <div id="hero" class="d-flex align-items-center" style="background: url(<?php header_image(); ?>) top center;width: 100%;height: 100vh;background-size: cover;position: relative;">
    <div class="container position-relative" data-aos-delay="500">
      <h1><?php bloginfo('name'); ?></h1>
      <h2><?php bloginfo('description'); ?></h2>
      <a href="#about" class="btn-get-started scrollto">Get Started</a>
    </div>
  </div>