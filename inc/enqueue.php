<?php
/*
     @package nutnull-premium-theme
     ==============================
        Admin Enqueue Functions
     ==============================
*/

function nutnull_load_admin_scripts( $hook ) {
    echo $hook;
    
    //setting specific page to execute styles
    if('toplevel_page_nutnull_theme' == $hook) { 

        //Adding our custom styles here
        wp_register_style( 'nutnull_admin_css', get_template_directory_uri() . '/css/nutnull.admin.css', array(), '1.0.0', 'all' );

        //Adding our css library here
        wp_register_style('bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css', array(), '1.0.0', 'all');
        wp_register_style('icofont', get_template_directory_uri() . '/assets/vendor/icofont/icofont.min.css', array(), '1.0.0', 'all');
        wp_register_style('boxicons', get_template_directory_uri() . '/assets/vendor/boxicons/css/boxicons.min.css', array(), '1.0.0', 'all');
        wp_register_style('venobox', get_template_directory_uri() . '/assets/vendor/venobox/venobox.css', array(), '1.0.0', 'all');
        wp_register_style('owl', get_template_directory_uri() . '/assets/vendor/owl.carousel/assets/owl.carousel.min.css', array(), '1.0.0', 'all');
        wp_register_style('aos', get_template_directory_uri() . '/assets/vendor/aos/aos.css', array(), '1.0.0', 'all');

        //Adding our custom styles here
        wp_enqueue_style( 'nutnull_admin_css' );

        //Adding our css library here
        wp_enqueue_style( 'bootstrap' );
        wp_enqueue_style( 'icofont' );
        wp_enqueue_style( 'boxicons' );
        wp_enqueue_style( 'venobox' );
        wp_enqueue_style( 'owl' );
        wp_enqueue_style( 'aos' );


        // for our media/logo uploader 
        wp_enqueue_media();

        //Adding our custom js here
        wp_register_script('nutnull_admin_js', get_template_directory_uri() . '/js/nutnull.admin.js', array(), '1.0.0', true);

        //Adding our js library here
        wp_register_script('jqueryjs', get_template_directory_uri() . '/assets/vendor/jquery/jquery.min.js', array(), '1.0.0', true);
        wp_register_script('bootstrapjs', get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', array(), '1.0.0', true);
        wp_register_script('jqueryeasingjs', get_template_directory_uri() . '/assets/vendor/jquery.easing/jquery.easing.min.js', array(), '1.0.0', true);
        wp_register_script('validatejs', get_template_directory_uri() . '/assets/vendor/php-email-form/validate.js', array(), '1.0.0', true);
        wp_register_script('isotopejs', get_template_directory_uri() . '/assets/vendor/isotope-layout/isotope.pkgd.min.js', array(), '1.0.0', true);
        wp_register_script('venoboxjs', get_template_directory_uri() . '/assets/vendor/venobox/venobox.min.js', array(), '1.0.0', true);
        wp_register_script('carouseljs', get_template_directory_uri() . '/assets/vendor/owl.carousel/owl.carousel.min.js', array(), '1.0.0', true);
        wp_register_script('aosjs', get_template_directory_uri() . '/assets/vendor/aos/aos.js', array(), '1.0.0', true);

        //Adding our custom js here
        wp_enqueue_script( 'nutnull_admin_js' );

        //Adding our js library here
        wp_enqueue_script( 'jqueryjs' );
        wp_enqueue_script( 'bootstrapjs' );
        wp_enqueue_script( 'jqueryeasingjs' );
        wp_enqueue_script( 'validatejs' );
        wp_enqueue_script( 'isotopejs' );
        wp_enqueue_script( 'venoboxjs' );
        wp_enqueue_script( 'carouseljs' );
        wp_enqueue_script( 'aosjs' );

    } else if('nutnull_page_nutnull_theme_css' == $hook ) {

        wp_enqueue_style( 'ace', get_template_directory_uri() . '/css/nutnull.ace.css', array(), '1.0.0', 'all' );
		
        // wp_enqueue_script( 'requirejs', get_template_directory_uri() . '/js/require.min.js', array(), '2.3.6', true );
		wp_enqueue_script( 'ace', get_template_directory_uri() . '/js/src/ace.js', array('jquery'), '1.2.1', true );
		wp_enqueue_script( 'nutnull-custom-css-script', get_template_directory_uri() . '/js/nutnull.custom_css.js', array('jquery'), '1.0.0', true );
        
    } else {return; }
}
add_action( 'admin_enqueue_scripts', 'nutnull_load_admin_scripts');