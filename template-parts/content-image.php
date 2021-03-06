<?php 
    /*
        @package nutnull-premium-theme

        =========================================================    
                Used for image post formats content      
        =========================================================
    */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'nutnull-format-image' ); ?>>
	
	<header class="entry-header text-center background-image" style="background-image: url(<?php echo nutnull_get_attachment(); ?>);">
		
		<?php the_title( '<h1 class="entry-title"><a href="'. esc_url( get_permalink() ) .'" rel="bookmark">', '</a></h1>'); ?>
		
		<div class="entry-meta">
            <?php echo nutnull_posted_meta(); ?>
		</div>
		
		<div class="entry-excerpt image-caption">
			<?php the_excerpt(); ?>
		</div>
		
	</header>
	
	<footer class="entry-footer">
        <?php echo nutnull_posted_footer(); ?>
	</footer>
	
</article>