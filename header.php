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

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-YZGJZ6DZQ6"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-YZGJZ6DZQ6');
  </script>

</head>

<body <?php body_class(); ?>>

  <?php 
    $companyLogo = esc_attr(get_option('company_logo'));
    $companyPhone = esc_attr(get_option('company_phone'));
    $companyEmail = esc_attr(get_option('company_email'));
    $companyFacebook = esc_attr(get_option('company_facebook'));
  ?>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top ">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-envelope"></i> <a href="mailto:contact@example.com"><?php print $companyEmail; ?></a>
        <i class="icofont-phone"></i><?php print $companyPhone; ?>
      </div>
      <div class="social-links">
        <a href="https://www.facebook.com/<?php print $companyFacebook; ?>/" target="blank" class="facebook"><i class="icofont-facebook"></i></a>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">
      <img src="<?php print $companyLogo; ?>" class="headerlogo" alt="">
      <img src="http://local.nutnull.com/wp-content/uploads/2022/02/nutnull-logo-modname2.png" class="namelogo mr-auto" alt="">
      
      <nav class="nav-menu d-none d-lg-block">
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