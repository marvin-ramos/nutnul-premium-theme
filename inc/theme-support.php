<?php
/*
    @package nutnull-premium-theme
    ==============================
        Theme Support Options
    ==============================
*/

$options = get_option('post_formats');
$formats = array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat' );
$output = array();

foreach ( $formats as $format ){
    $output[] = ( @$options[$format] == 1 ?  $format : '' );
}

if(!empty($options)) {
    add_theme_support('post_formats', $output);
}

// for custom header function
$customHeader = get_option('custom_header');
if ( @$customHeader == 1) {
    add_theme_support('custom-header');
}

// for custom background function
$customBackground = get_option('custom_background');
if ( @$customBackground == 1) {
    add_theme_support('custom-background');
}