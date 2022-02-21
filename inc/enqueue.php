<?php
/*
@package nutnull-premium-theme
================================================================= 
    used to add Admin Enqueue Functions inside in our theme     
=================================================================
*/

function nutnull_load_admin_scripts( $hook ) {

    //importing our google fonts styles
    wp_register_style( 'open-sans-admin', 'https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap' );
    wp_register_style( 'raleway-admin', 'https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap' );
    wp_register_style( 'poppins-admin', 'https://fonts.googleapis.com/css2?family=family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap' );

    //setting specific page to execute styles
    if('toplevel_page_nutnull_theme' == $hook) { 

        //Adding our custom styles for our admin section 
        wp_register_style( 'nutnull_admin_css', get_template_directory_uri() . '/css/nutnull.admin.css', array(), '1.0.0', 'all' );
        wp_enqueue_style( 'nutnull_admin_css' );

        // for our media/logo uploader 
        wp_enqueue_media();

        //Adding our custom scripts for our admin section 
        wp_register_script('nutnull_admin_js', get_template_directory_uri() . '/js/nutnull.admin.js', array(), '1.0.0', true);
        wp_enqueue_script( 'nutnull_admin_js' );

    } else if('nutnull_page_nutnull_theme_css' == $hook ) {

        wp_enqueue_style( 'ace', get_template_directory_uri() . '/css/nutnull.ace.css', array(), '1.0.0', 'all' );
		
		wp_enqueue_script( 'ace', get_template_directory_uri() . '/js/src/ace.js', array('jquery'), '1.2.1', true );
		wp_enqueue_script( 'nutnull-custom-css-script', get_template_directory_uri() . '/js/nutnull.custom_css.js', array('jquery'), '1.0.0', true );
        
    } else {return; }
}
add_action( 'admin_enqueue_scripts', 'nutnull_load_admin_scripts');

/*
=========================================================== 
    used to enqueue our custom css and js library 
===========================================================
*/
function nutnull_load_scripts() {

    // for our css library
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('icofont', get_template_directory_uri() . '/assets/vendor/icofont/icofont.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('boxicons', get_template_directory_uri() . '/assets/vendor/boxicons/css/boxicons.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('venobox', get_template_directory_uri() . '/assets/vendor/venobox/venobox.css', array(), '1.0.0', 'all');
    wp_enqueue_style('owl', get_template_directory_uri() . '/assets/vendor/owl.carousel/assets/owl.carousel.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('aos', get_template_directory_uri() . '/assets/vendor/aos/aos.css', array(), '1.0.0', 'all');

    // for our custom css library
    wp_enqueue_style( 'nutnull', get_template_directory_uri() . '/css/nutnull.css', array(), '1.0.0', 'all' );

    // for our js library
    wp_deregister_script( 'jquery' );
	wp_register_script('jquery', get_template_directory_uri() . '/assets/vendor/jquery/jquery.min.js', array(), '1.0.0', true);
	wp_enqueue_script( 'jquery' );
    wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', array(), '1.0.0', true);
    wp_enqueue_script('jqueryeasingjs', get_template_directory_uri() . '/assets/vendor/jquery.easing/jquery.easing.min.js', array(), '1.0.0', true);
    wp_enqueue_script('validatejs', get_template_directory_uri() . '/assets/vendor/php-email-form/validate.js', array(), '1.0.0', true);
    wp_enqueue_script('isotopejs', get_template_directory_uri() . '/assets/vendor/isotope-layout/isotope.pkgd.min.js', array(), '1.0.0', true);
    wp_enqueue_script('venoboxjs', get_template_directory_uri() . '/assets/vendor/venobox/venobox.min.js', array(), '1.0.0', true);
    wp_enqueue_script('carouseljs', get_template_directory_uri() . '/assets/vendor/owl.carousel/owl.carousel.min.js', array(), '1.0.0', true);
    wp_enqueue_script('aosjs', get_template_directory_uri() . '/assets/vendor/aos/aos.js', array(), '1.0.0', true);

    // for our custom js library
    wp_enqueue_script( 'nutnull', get_template_directory_uri() . '/js/nutnull.js', array('jquery'), '1.2.1', true );
}
add_action('wp_enqueue_scripts', 'nutnull_load_scripts');