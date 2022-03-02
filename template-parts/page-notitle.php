<?php 
/* 
    Template Name: Page No Title
*/

get_header(); ?>

	<!-- displaying/calling our post inside wordpress  -->
	<?php
		if( have_posts()) :

			while(have_posts()): the_post(); ?>

			<h1>This is a static page</h1>

		<?php endwhile;

		endif;
	?>

<?php get_footer(); ?>