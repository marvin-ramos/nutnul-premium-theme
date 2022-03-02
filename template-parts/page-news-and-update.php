<?php 
    /*
        Template Name: Page News and Update
        @package nutnull-premium-theme
    */
?>

<?php get_header() ?>

    <!-- ======= Hero Section ======= -->
    <div id="hero" class="d-flex align-items-center" style="background: url(<?php header_image(); ?>) top center;width: 100%;height: 100vh;background-size: cover;position: relative;">
        <div class="container position-relative" data-aos-delay="500">
        <h1><?php bloginfo('name'); ?></h1>
        <h2><?php bloginfo('description'); ?></h2>
        <a href="#about" class="btn-get-started scrollto">Get Started</a>
        </div>
    </div>

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs job-hiring-nav">
            <div class="container">

                <ol>
                <li><a href="index.html">Home</a></li>
                <li>News & Update</li>
                </ol>
                <h2>News & Update</h2>

                <div class="breaking-news-section">
                    <marquee direction="left" onmouseover="this.stop()" onmouseout="this.start()">
                        <a href="#" class="breaking-news">
                            <p class="bntime">11 Jan 2019</p>
                            Congress under pressure to reach a deal
                        </a>
                        <a href="#" class="breaking-news">
                            <p class="bntime">11 Jan 2019</p>
                            Powerful laser beam is helping track the moon
                        </a>
                        <a href="#" class="breaking-news">
                            <p class="bntime">11 Jan 2019</p>
                            Snowstorm buries Pacific Northwest, with more on the way
                        </a>
                    </marquee>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <section class="container" id="featured-news">
            <div class="container featured-news-container">
                <div id="featured-news-slider" class="featured-news-slider">
                    <div id="carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>

                        <div class="carousel-inner news-update-carousel">

                            <?php
                                $c = 0;
                                $post_date = get_the_date( 'l F j, Y' );
                                $class = '';

                                query_posts('category_name=news-and-update&showposts=3');
                                if ( have_posts() ) : while ( have_posts() ) : the_post();
                                    $c++;

                                    $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), '' );
                                    $url = $thumb['0'];

                                    if ( $c == 1 ) $class .= ' active';
                                    else $class = '';
                                        ?>
                                        <div class="carousel-item <?php echo $class; ?>">
                                            <img src="<?php echo $url; ?>" class="d-block" alt="">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5><?php the_title() ?></h5>
                                                <p><?php echo $post_date; ?></p>
                                            </div>
                                        </div>
                                        <?php
                                endwhile;endif;
                                wp_reset_query();
                            ?>

                        </div>

                        <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div id="latest-featured-news" class="latest-featured-news">
                    <?php
                        $args = array(
                            'post_type' => 'post',
                            'post_status' => 'publish',
                            'category_name' => 'news-and-update',
                            'posts_per_page' => 3,
                        );
                        $arr_posts = new WP_Query( $args );
                            
                        if ( $arr_posts->have_posts() ) :
                            
                            while ( $arr_posts->have_posts() ) :
                                $arr_posts->the_post();
                                ?>
                                    <?php if ( has_post_thumbnail() ) : ?>
                                        <div class="news-container">
                                            <?php the_post_thumbnail(); ?>
                                            <p class="news-container-text"><?php the_title(); ?></p>				
                                        </div>	
                                    <?php endif; ?>
                                <?php
                            endwhile;
                        endif;
                    ?>						
                </div>
            </div>
        </section>

        <section class="container-fluid" id="latest-updates">
        <div class="container latest-updates-container">
            <div class = "latest-updates-content">
            <h2>GET THE WORLD'S LATEST TECH NEWS</h2>
            <h3>World's Leading Tech News Portal</h3>

            <button>
                <a href = "#">Read More</a>
            </button>

            <div class = "latest-updates-news">
                <?php
                    $args = array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'category_name' => 'latest-updates-news',
                        'posts_per_page' => 4,
                    );
                    $arr_posts = new WP_Query( $args );
                        
                    if ( $arr_posts->have_posts() ) :
                        
                        while ( $arr_posts->have_posts() ) :
                            $arr_posts->the_post();
                            ?>
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <h3><?php the_title(); ?><span>by <?php echo get_the_author(); ?></span></h3>
                                <?php endif; ?>
                            <?php
                        endwhile;
                    endif;
                ?>
            </div>
        </div>

        <div class = "latest-updates-sub-content">
            <?php
                $args = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'category_name' => 'latest-updates-news',
                    'posts_per_page' => 4,
                );
                $arr_posts = new WP_Query( $args );
                    
                if ( $arr_posts->have_posts() ) :
                    
                    while ( $arr_posts->have_posts() ) :
                        $arr_posts->the_post();
                        ?>
                            <?php if ( has_post_thumbnail() ) : ?>
                                <div class = "latest-updates-topic">
                                    <?php the_post_thumbnail('thumbnail'); ?>
                                    
                                    <div class = "latest-updates-topic-content">
                                        <h2><?php the_title(); ?></h2>
                                        <a href = "#" class="latest-read-more" >Read More</a>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php
                    endwhile;

                endif;
            ?>
            </div>
        </div>

        </div>
        </section>

        <section class="container blog-section-page">
            <div class="blog-section-page-main">
                <?php
                    $args = array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'category_name' => 'latest-updates-news',
                        'posts_per_page' => 3,
                    );
                    $arr_posts = new WP_Query( $args );
                        
                    if ( $arr_posts->have_posts() ) :
                        
                        while ( $arr_posts->have_posts() ) :
                            $arr_posts->the_post();
                            ?>
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <div class="container-top-left-container">
                                        <div class="container-top-left-wrapper">
                                            <div class="container-top-left-content">
                                                <span class="container-top-left-id"><?php $post_id = get_the_ID(); echo $post_id; ?></span>
                                                <span class="container-top-left-name"><?php the_author();?></span>
                                                <h1 class="container-top-left-title"><?php the_title(); ?></h1>
                                                <p class="container-top-left-content"><?php $content = get_the_content(); echo mb_strimwidth($content, 0, 300, '<div class="container-top-left-card-read"><a href="' . get_permalink() . '">Read More</a></div>');?></p>
                                                <div class="right">
                                                    <span class="circle">C</span> 
                                                </div>
                                            </div>
                                            <div class="container-top-left-image">
                                                <?php the_post_thumbnail('large'); ?>
                                            </div>
                                            <div class="container-top-left-shadow"></div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php
                        endwhile;

                    endif;
                ?>
            </div>
        </section>

        <section class="container" id="top-stories-section">
            <div class="top-stories-left">
                <div class = "main-container-left">
                    <h2>Top Stories</h2>
                    <div class = "container-top-left">
                        <?php
                            $args = array(
                                'post_type' => 'post',
                                'post_status' => 'publish',
                                'category_name' => 'latest-updates-news',
                                'posts_per_page' => 3,
                            );
                            $arr_posts = new WP_Query( $args );
                                
                            if ( $arr_posts->have_posts() ) :
                                
                                while ( $arr_posts->have_posts() ) :
                                    $arr_posts->the_post();
                                    ?>
                                        <?php if ( has_post_thumbnail() ) : ?>
                                            <article class="top-stories-content">
                                                <?php the_post_thumbnail('large'); ?>
                                                <div>
                                                    <h3><?php the_title(); ?></h3>
                                                    <p><?php $content = get_the_content(); echo mb_strimwidth($content, 0, 300, '<br> <a href="' . get_permalink() . '">[Read more]</a>');?></p>
                                                </div>
                                            </article>
                                        <?php endif; ?>
                                    <?php
                                endwhile;

                            endif;
                        ?>
                    </div>
                </div>  
            </div>
            <div class = "top-stories-right">
                <h2>Latest Stories</h2>
                    <?php
                        $args = array(
                            'post_type' => 'post',
                            'post_status' => 'publish',
                            'category_name' => 'latest-updates-news',
                            'posts_per_page' => 4,
                        );
                        $arr_posts = new WP_Query( $args );
                            
                        if ( $arr_posts->have_posts() ) :
                            
                            while ( $arr_posts->have_posts() ) :
                                $arr_posts->the_post();
                                ?>
                                    <?php if ( has_post_thumbnail() ) : ?>
                                        <article class="latest-stories-content">
                                            <h4>just in </h4>
                                            <div>
                                                <h2 class="latest-stories-title"><?php the_title(); ?></h2>
                                                <p class="latest-stories-desc"><?php $content = get_the_content(); echo mb_strimwidth('<span class="content-latest-stories">'.$content.'</span>', 0, 200, '<br> <a href="' . get_permalink() . '">[Read more]</a>');?></p>
                                            </div>
                                            <?php the_post_thumbnail('thumbnail'); ?>
                                        </article>
                                    <?php endif; ?>
                                <?php
                            endwhile;

                        endif;
                    ?>
            </div>
        </section>

        

    </main><!-- End #main -->

<?php get_footer(); ?>