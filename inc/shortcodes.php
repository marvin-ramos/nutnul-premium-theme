<?php

/*
@package nutnull-premium-theme
=========================================================== 
                used for shortcode options 
===========================================================
*/

//for contact form shortcode
function nutnull_contact_form( $atts, $content = null ) {
    
    //[contact_form]
	$atts = shortcode_atts(
		array(),
		$atts,
		'contact_form'
	);
	
	// return 'this is the short code generator';
    ob_start();	
    include 'templates/contact-form.php';
    return ob_get_clean();
}

add_shortcode( 'contact_form', 'nutnull_contact_form' );