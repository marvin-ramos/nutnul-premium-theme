<?php
/*
    @package nutnull-premium-theme

    =========================================================    
                    Used for ajax functions      
    =========================================================
*/

// for saving our data input values
add_action( 'wp_ajax_nopriv_nutnull_save_user_contact_form', 'nutnull_save_contact' );
add_action( 'wp_ajax_nutnull_save_user_contact_form', 'nutnull_save_contact' );

function nutnull_save_contact() {

	$title = wp_strip_all_tags($_POST["subject"]);
	$message = wp_strip_all_tags($_POST["message"]);
	$name = wp_strip_all_tags($_POST["name"]);
    $email = wp_strip_all_tags($_POST["email"]);

	$args = array(
		'post_title' => $title,
		'post_content' => $message,
		'post_author' => $name,
		'post_status' => 'publish',
		'post_type' => 'nutnull-contact',
		'meta_input' => array(
			'contact_email' => $email
		)
	);

	$postID = wp_insert_post( $args, $wp_error );

	echo $postID;

	die();

}