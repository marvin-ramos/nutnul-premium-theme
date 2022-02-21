<?php 
    /*
        @package nutnull-premium-theme

        =========================================================    
                Used for standard post formats content      
        =========================================================
    */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php the_title('<h1 class="entry-title">','</h1>'); ?>

        <div class="entry-meta">
            <?php echo nutnull_posted_meta(); ?>
        </div>
    </header>

    <div class="entry-content">

        <?php if( has_post_thumbnail() ): ?>

            <div class="standard-featured">
                <?php the_post_thumbnail(); ?>
            </div>

        <?php endif; ?>

        <div class="entry-excerpt">
            <?php the_excerpt(); ?>
        </div>

    </div>
</article>