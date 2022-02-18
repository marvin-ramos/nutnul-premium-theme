<?php
/*
    @package nutnull-premium-theme
    ==============================
        Custom Post Type
    ==============================
*/

$contact = get_option('activate_contact');
if(@$contact == 1) {

    add_action( 'init', 'nutnull_contact_custom_post_type' );
	
    // add_filter( 'manage_yourcustomposttype_posts_columns', 'nutnull_set_contact_columns' );
	add_filter( 'manage_nutnull-contact_posts_columns', 'nutnull_set_contact_columns' );

	// add_action( 'manage_yourcustomposttype_posts_custom_column', 'nutnull_contact_custom_column', 10, 2 );
    add_action( 'manage_nutnull-contact_posts_custom_column', 'nutnull_contact_custom_column', 10, 2 );

    add_action('add_meta_boxes', 'nutnull_contact_add_meta_box');
    add_action('save_post', 'nutnull_save_contact_email_data');
}

/*
=========================================================== 
            used for Custom Post Type Function 
===========================================================
*/
function nutnull_contact_custom_post_type() {
    $labels = array(
		'name' 				=> 'Messages',
		'singular_name' 	=> 'Message',
		'menu_name'			=> 'Messages',
		'name_admin_bar'	=> 'Message'
	);
	
	$args = array(
		'labels'			=> $labels,
		'show_ui'			=> true,
		'show_in_menu'		=> true,
		'capability_type'	=> 'post',
		'hierarchical'		=> false,
		'menu_position'		=> 26,
		'menu_icon'			=> 'dashicons-email-alt',
		'supports'			=> array( 'title', 'editor', 'author' )
	);
	
	register_post_type( 'nutnull-contact', $args );
}

function nutnull_set_contact_columns( $columns ){
	$newColumns = array();
	$newColumns['title'] = 'Subject';
	$newColumns['message'] = 'Message';
    $newColumns['author'] = 'Full Name';
	$newColumns['email'] = 'Email';
	$newColumns['date'] = 'Date';
	return $newColumns;
}

function nutnull_contact_custom_column( $column, $post_id ){
	
	switch( $column ){
		
		case 'message' :
			echo get_the_excerpt();
			break;
			
		case 'email' :
			//email column
			$email = get_post_meta( $post_id, '_contact_email_value_key', true);
            echo '<a href="mailto:'.$email.'">'.$email.'</a>';
			break;
	}
	
}

/*
=========================================================== 
            used for Custom Contact Meta Boxes 
===========================================================
*/
function nutnull_contact_add_meta_box() {

    // add_meta_box( 'id', 'title', 'callback', 'screen, 'position' );
    add_meta_box( 'contact_email', 'Email Address', 'nutnull_contact_email_callback', 'nutnull-contact', 'side');
}

function nutnull_contact_email_callback($post) {

    //wp_nonce_field( 'action','name','referer')
    wp_nonce_field( 'nutnull_save_contact_email_data','nutnull_contact_email_meta_box_nonce');

    $value = get_post_meta($post->ID, '_contact_email_value_key', true);
    echo '<label for="nutnull_contact_email_field">Email Address: </label>';
    echo '<input type="email" id="nutnull_contact_email_field" name="nutnull_contact_email_field" value="'.esc_attr( $value ).'" size="25"/>';
}

function nutnull_save_contact_email_data( $post_id ) {
    if( ! isset( $_POST['nutnull_contact_email_meta_box_nonce'] ) ){
		return;
	}
	
	if( ! wp_verify_nonce( $_POST['nutnull_contact_email_meta_box_nonce'], 'nutnull_save_contact_email_data') ) {
		return;
	}
	
	if( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ){
		return;
	}
	
	if( ! current_user_can( 'edit_post', $post_id ) ) {
		return;
	}
	
	if( ! isset( $_POST['nutnull_contact_email_field'] ) ) {
		return;
	}
	
	$my_data = sanitize_text_field( $_POST['nutnull_contact_email_field'] );
	
	update_post_meta( $post_id, '_contact_email_value_key', $my_data );
}