<?php
/*
    @package nutnull-premium-theme

    =========================================================    
                    Used for ajax functions      
    =========================================================
*/

function nutnull_save_contact() {

	echo 'iuydgueygudgfuygweyagdihwa';
	// $title = wp_strip_all_tags($_POST["subject"]);
	// $message = wp_strip_all_tags($_POST["message"]);
	// $fullname = wp_strip_all_tags($_POST["fullname"]);
    // $email = wp_strip_all_tags($_POST["email"]);

	// echo $title. ',' .$message. ',' .$fullname. ',' .$email;
	// wp_die();

	// $args = array(
	// 	'post_title' => $title,

	// 	'post_content' => $message,
	// 	'post_author' => 1,
	// 	'post_status' => 'publish',
	// 	'post_type' => 'nutnull-contact',
	// 	'meta_input' => array(
	// 		'contact_email' => $email,
	// 		'contact_fullname' => $fullname
	// 	)
	// );

	// $postID = wp_insert_post( $args, $wp_error );
	// echo $postID;
	// die();	
}

// for saving our data input values
add_action( 'wp_ajax_nopriv_nutnull_save_user_contact_form', 'nutnull_save_contact' );
add_action( 'wp_ajax_nutnull_save_user_contact_form', 'nutnull_save_contact' );
