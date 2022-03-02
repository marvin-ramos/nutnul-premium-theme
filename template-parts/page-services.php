<?php 
    /*
        Template Name: Page Services
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

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container">
                <div class="section-title">
                    <span>Services</span>
                    <h2>Services</h2>
                    <p>Based on many years of experience, we know every business is unique and has different software needs. That's why we provide wide range of software development services. Check out below our awesome software development services.</p>
                </div>

                <div class="row">
                    <?php
                        $args = array(
                            'post_type' => 'post',
                            'post_status' => 'publish',
                            'category_name' => 'services',
                            'posts_per_page' => 6,
                        );
                        $arr_posts = new WP_Query( $args );
                            
                        if ( $arr_posts->have_posts() ) :
                            
                            while ( $arr_posts->have_posts() ) :
                                $arr_posts->the_post();
                                ?>
                                    <div id="post-<?php the_ID(); ?>" class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up">
                                        <div class="icon-box">
                                        <div class="custom">
                                            <?php
                                                if ( has_post_thumbnail() ) :
                                                    the_post_thumbnail('thumbnail');
                                                endif;
                                            ?>
                                        </div>
                                        <h4><a href=""><?php the_title(); ?></a></h4>
                                        <p><?php the_content(); ?></p>
                                        </div>
                                    </div>
                                <?php
                            endwhile;
                        endif;
                    ?>
                </div>
            </div>
        </section>
        <!-- End Services Section -->
    
    </main>

<?php get_footer(); ?>