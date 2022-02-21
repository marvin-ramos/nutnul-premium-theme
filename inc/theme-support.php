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

/*
=========================================================== 
            used for Activating our Nav Menu Option 
===========================================================
*/
function nutnull_register_nav_menu() {
	register_nav_menu( 'primary', 'Header Navigation Menu' );
}
add_action( 'after_setup_theme', 'nutnull_register_nav_menu' );

/*
=========================================================== 
            used for Activating our Blog loop 
===========================================================
*/
function nutnull_posted_meta(){
	$posted_on = human_time_diff( get_the_time('U') , current_time('timestamp') );
	
	$categories = get_the_category();
	$separator = ', ';
	$output = '';
	$i = 1;
	
	if( !empty($categories) ):
		foreach( $categories as $category ):
			if( $i > 1 ): $output .= $separator; endif;
			$output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( 'View all posts in%s', $category->name ) .'">' . esc_html( $category->name ) .'</a>';
			$i++; 
		endforeach;
	endif;
	
	return '<span class="posted-on">Posted <a href="'. esc_url( get_permalink() ) .'">' . $posted_on . '</a> ago</span> / <span class="posted-in">' . $output . '</span>';
}

function nutnull_posted_footer(){
	return 'tags list and comment link';
}