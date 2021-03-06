<?php

/*
    @package nutnull-premium-theme

    ==============================
            FOR ADMIN PAGE
    ==============================
*/

function nutnull_add_admin_page() {

    //Generating Nutnull admin panel
    add_menu_page('Nutnull Theme Options', 'Nutnull', 'manage_options', 'nutnull_theme', 'nutnull_theme_create_page', get_template_directory_uri() . '/img/logo-small.ico', 110);

    //Generating sub-menu page for nutnull admin panel
    add_submenu_page('nutnull_theme', 'Nutnull Theme Options', 'Company Details', 'manage_options', 'nutnull_theme', 'nutnull_theme_create_page' );
    add_submenu_page('nutnull_theme', 'Nutnull General Options', 'General Options', 'manage_options', 'nutnull_theme_general', 'nutnull_theme_general_page' );
    add_submenu_page('nutnull_theme', 'Nutnull CSS Options', 'Custom CSS', 'manage_options', 'nutnull_theme_css', 'nutnull_theme_settings_page' );
}

//initialization of the admin function
add_action('admin_menu', 'nutnull_add_admin_page');

//Activating custom Settings
add_filter('admin_init', 'nutnull_custom_settings' );

/*  
    ==============================
      Activating custom Settings
    ==============================
*/
function nutnull_custom_settings() {

    /* ======== used for company details function ========*/
    //for media/logo uploader 
    register_setting( 'nutnull-settings-group', 'company_logo' );

    //for company name details and information
    register_setting( 'nutnull-settings-group', 'company_name', 'nutnull_sanitize_company_name' );
    register_setting( 'nutnull-settings-group', 'company_address', 'nutnull_sanitize_company_address' );
    register_setting( 'nutnull-settings-group', 'company_phone', 'nutnull_sanitize_company_phone' );
    register_setting( 'nutnull-settings-group', 'company_email', 'nutnull_sanitize_company_email' );

    //for social media icons	
    register_setting( 'nutnull-settings-group', 'company_twitter', 'nutnull_sanitize_twitter' );
    register_setting( 'nutnull-settings-group', 'company_facebook', 'nutnull_sanitize_facebook' );
    register_setting( 'nutnull-settings-group', 'company_instagram', 'nutnull_sanitize_instagram' );
    register_setting( 'nutnull-settings-group', 'company_gmail', 'nutnull_sanitize_gmail' );

    add_settings_section( 'nutnull-sidebar-options', 'Sidebar Option', 'nutnull_sidebar_options', 'nutnull_theme');

    //for media/logo uploader 
    add_settings_field( 'sidebar-logo-uploader', 'Company Logo', 'nutnull_sidebar_company_logo', 'nutnull_theme', 'nutnull-sidebar-options');

    //for company name details and information
    add_settings_field( 'sidebar-name', 'Company Name', 'nutnull_sidebar_company_name', 'nutnull_theme', 'nutnull-sidebar-options');
    add_settings_field( 'sidebar-address', 'Company Address', 'nutnull_sidebar_company_address', 'nutnull_theme', 'nutnull-sidebar-options');
    add_settings_field( 'sidebar-phone', 'Company Phone Number', 'nutnull_sidebar_company_phone', 'nutnull_theme', 'nutnull-sidebar-options');
    add_settings_field( 'sidebar-email', 'Company Email', 'nutnull_sidebar_company_email', 'nutnull_theme', 'nutnull-sidebar-options');

    //for company name details and information
    add_settings_field( 'sidebar-twitter', 'Twitter handler', 'nutnull_sidebar_company_twitter', 'nutnull_theme', 'nutnull-sidebar-options');
    add_settings_field( 'sidebar-facebook', 'Facebook handler', 'nutnull_sidebar_company_facebook', 'nutnull_theme', 'nutnull-sidebar-options');
    add_settings_field( 'sidebar-instagram', 'Instagram handler', 'nutnull_sidebar_company_instagram', 'nutnull_theme', 'nutnull-sidebar-options');
    add_settings_field( 'sidebar-gmail', 'Gmail handler', 'nutnull_sidebar_company_gmail', 'nutnull_theme', 'nutnull-sidebar-options');
    
    /* ======== used for general options function ========*/
    register_setting('nutnull-theme-support', 'post_formats');
    register_setting('nutnull-theme-support', 'custom_header');
    register_setting('nutnull-theme-support', 'custom_background');

    add_settings_section('nutnull-theme-options', 'Theme Options', 'nutnull_theme_options', 'nutnull_theme_general');

    add_settings_field('post-formats', 'Post Formats', 'nutnull_post_formats', 'nutnull_theme_general', 'nutnull-theme-options');
    add_settings_field('custom-header', 'Custom Header', 'nutnull_custom_header', 'nutnull_theme_general', 'nutnull-theme-options');
    add_settings_field('custom-background', 'Custom Background', 'nutnull_custom_background', 'nutnull_theme_general', 'nutnull-theme-options');
}

function nutnull_sidebar_options() {
    echo 'Customize our sidebar information';
}

// function for our forms inside the admin panel

    function nutnull_sidebar_company_logo () {
        $companyLogo = esc_attr(get_option('company_logo'));

        if(empty($companyLogo)) {
            echo '  
                <input type="button" class="company_logo_uploader" value="Upload Company Logo" id="upload-button" />
                <input type="hidden" id="company-logo" name="company_logo" value="" />
            ';
        } else {
            echo '  
                <input type="button" class="company_logo_uploader" value="Replace Company Logo" id="upload-button" />
                <input type="hidden" id="company-logo" name="company_logo" value="'.$companyLogo.'" />
                <input type="button" class="company_logo_uploader" value="Remove" id="remove-logo" />
            ';
        }
        
    }
    // company details and information
    function nutnull_sidebar_company_name() {
        $companyName = esc_attr(get_option('company_name'));
        echo '<input type="text" name="company_name" value="'.$companyName.'" placeholder="Company Name" />';
    }
    function nutnull_sidebar_company_address() {
	    $companyAddress = esc_attr(get_option('company_address'));
        echo '<textarea name="company_address">'.$companyAddress.'</textarea>';
    }
    function nutnull_sidebar_company_phone() {
        $companyPhone = esc_attr(get_option('company_phone'));

        echo '<input type="text" name="company_phone" value="'.$companyPhone.'" placeholder="Company Phone Number" />';
    }
    function nutnull_sidebar_company_email() {
        $companyEmail = esc_attr(get_option('company_email'));

        echo '<input type="text" name="company_email" value="'.$companyEmail.'" placeholder="Company Email" />';
    }

    // company social media
    function nutnull_sidebar_company_twitter() {
        $companyTwitter = esc_attr(get_option('company_twitter'));
        echo '
              <input type="text" name="company_twitter" value="'.$companyTwitter.'" placeholder="Company Name" />
              <p class="description">Input your Twitter Account without @ character.</p>
        ';
    }
    function nutnull_sidebar_company_facebook() {
        $companyFacebook = esc_attr(get_option('company_facebook'));

        echo '<input type="text" name="company_facebook" value="'.$companyFacebook.'" placeholder="Company Name" />';
    }
    function nutnull_sidebar_company_instagram() {
        $companyInstagram = esc_attr(get_option('company_instagram'));

        echo '<input type="text" name="company_instagram" value="'.$companyInstagram.'" placeholder="Company Name" />';
    }
    function nutnull_sidebar_company_gmail() {
        $companyGmail = esc_attr(get_option('company_gmail'));

        echo '<input type="text" name="company_gmail" value="'.$companyGmail.'" placeholder="Company Name" />';
    }

/*  
    ==============================
          Nutnull Admin Panel
    ==============================
*/
function nutnull_theme_create_page() {

    //creation of nutnull theme admin panel
    require_once( get_template_directory() . '/inc/templates/nutnull-admin.php');

}
function nutnull_theme_settings_page() {

    //creation of our sub-menu page for nutnull theme admin panel

}
function nutnull_theme_general_page() {

    //adding sub-menu template functions
    require_once( get_template_directory() . '/inc/templates/nutnull-theme-support.php');
}
function nutnull_theme_options() {
    echo 'Activating and Deactivating specific theme support options';
}

/*  
    ==============================
        Sanitization Settings
    ==============================
*/
//removing special character of users input
function nutnull_sanitize_company_name( $input ) {
    $output = sanitize_text_field( $input );
    return $output;
}
function nutnull_sanitize_company_address( $input ) {
    $output = sanitize_text_field( $input );
    return $output;
}
function nutnull_sanitize_company_phone( $input ) {
    $output = sanitize_text_field( $input );
    return $output;
}
function nutnull_sanitize_company_email( $input ) {
    $output = sanitize_text_field( $input );
    return $output;
}
function nutnull_sanitize_twitter( $input ) {
    $output = sanitize_text_field( $input );
    $output = str_replace('@', '', $output);
    return $output;
}
function nutnull_sanitize_facebook( $input ) {
    $output = sanitize_text_field( $input );
    return $output;
}
function nutnull_sanitize_instagram( $input ) {
    $output = sanitize_text_field( $input );
    return $output;
}
function nutnull_sanitize_gmail( $input ) {
    $output = sanitize_text_field( $input );
    return $output;
}

/*  
    ==============================
        Nutnull Post Formats
    ==============================
*/
function nutnull_post_formats() {
    $options = get_option('post_formats');
	$formats = array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat' );
	$output = '';
	foreach ( $formats as $format ){
		$checked = ( @$options[$format] == 1 ?  'checked' : '' );
		$output .= '<label><input type="checkbox" id="'.$format.'" name="post_formats['.$format.']" value="1" '.$checked.'/>'.$format.'</label><br>';
	}
    echo $output;
}
function nutnull_custom_header() {
    $options = get_option('custom_header');
    $checked = ( @$options == 1 ?  'checked' : '' );
    echo '<label><input type="checkbox" id="custom_header" name="custom_header" value="1" '.$checked.'/>Activate Custom Header</label><br>';
}
function nutnull_custom_background() {
    $options = get_option('custom_background');
    $checked = ( @$options == 1 ?  'checked' : '' );
    echo '<label><input type="checkbox" id="custom_background" name="custom_background" value="1" '.$checked.'/>Activate Custom Background</label><br>';
}