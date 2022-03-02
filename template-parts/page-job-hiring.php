<?php 
    /*
        Template Name: Page Job Hiring
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
            <li>Job Hiring</li>
            </ol>
            <h2>Job Hiring</h2>
        </div>
    </section><!-- End Breadcrumbs -->

    <section class="job-offer-container container" id="job-offered-section">
        <div class="job-offers">
        <h1>Newest Job Offers </h1>
        <a href="#">View all job offers</a>
        </div>
        <div class="container" id="jobs-section">
            
            <?php
                $args = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'category_name' => 'jobs',
                    'posts_per_page' => 4,
                );
                $arr_posts = new WP_Query( $args );
                    
                if ( $arr_posts->have_posts() ) :
                    
                    while ( $arr_posts->have_posts() ) :
                        $arr_posts->the_post();
                        ?>
                            <?php if ( has_post_thumbnail() ) : ?>
                                <div class="jobs-section-container container" id="jobs-section-card">
                                    <div class="jobs-section-offers">
                                        <div class="jobs-section-content">
                                            <span class="icon">
                                                <?php the_post_thumbnail(); ?>
                                            </span>
                                            <h3 class="job-section-title"><?php the_title(); ?></h3>
                                            <?php $content = get_the_content(); echo mb_strimwidth('<span class="job-description">'.$content.'</span>', 0, 200, '<br> <a class="job-section-read-more" href="' . get_permalink() . '">Read more</a>');?>
                                        </div>
                                        <span class="circle-before"></span>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php
                    endwhile;

                endif;
            ?>

        </div>
    </section>

    <section class="container-fluid" id="languages-used">
        <div class="container languages-used-container">
            <h1>Language Used</h1>
            <div class="language-used-icon">
                <div class="icon-container">
                    <span class="icon">
                        <img class="language-image" src="http://local.nutnull.com/wp-content/uploads/2022/02/client-1a.png" alt="">
                    </span>
                </div>
                <div class="icon-container">
                    <span class="icon">
                        <img class="language-image" src="http://local.nutnull.com/wp-content/uploads/2022/02/client-2.png" alt="">
                    </span>
                </div>
                <div class="icon-container">
                    <span class="icon">
                        <img class="language-image" src="http://local.nutnull.com/wp-content/uploads/2022/02/client-3.png" alt="">
                    </span>
                </div>
                <div class="icon-container">
                    <span class="icon">
                        <img class="language-image" src="http://local.nutnull.com/wp-content/uploads/2022/02/client-4.png" alt="">
                    </span>
                </div>
                <div class="icon-container">
                    <span class="icon">
                        <img class="language-image" src="http://local.nutnull.com/wp-content/uploads/2022/02/client-5.png" alt="">
                    </span>
                </div>
                <div class="icon-container">
                    <span class="icon">
                        <img class="language-image" src="http://local.nutnull.com/wp-content/uploads/2022/02/client-6.png" alt="">
                    </span>
                </div>
                <div class="icon-container">
                    <span class="icon">
                        <img class="language-image" src="http://local.nutnull.com/wp-content/uploads/2022/02/client-7.png" alt="">
                    </span>
                </div>
                <div class="icon-container">
                    <span class="icon">
                        <img class="language-image" src="http://local.nutnull.com/wp-content/uploads/2022/02/client-8.png" alt="">
                    </span>
                </div>
            </div>
        </div>
    </section>

</main><!-- End #main -->

<?php get_footer(); ?>