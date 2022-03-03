<?php 
    /*
        Template Name: Page Contact Us
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

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title">
                    <span>Contact</span>
                    <h2>Contact</h2>
                    <p>We are located in the heart of the city. Call us or visit us in our awesome office.</p>
                </div>

                <?php 
                    $companyAddress = esc_attr(get_option('company_address'));
                    $companyPhone = esc_attr(get_option('company_phone'));
                    $companyEmail = esc_attr(get_option('company_email'));
                    $companyMap = esc_attr(get_option('company_map'));
                ?>

                <div class="row" data-aos="fade-up">
                    <div class="col-lg-6">
                        <div class="info-box mb-4">
                            <i class="bx bx-map"></i>
                            <h3>Our Address</h3>
                            <p><?php print $companyAddress; ?></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="info-box  mb-4">
                            <i class="bx bx-envelope"></i>
                            <h3>Email Us</h3>
                            <p><?php print $companyEmail; ?></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="info-box  mb-4">
                            <i class="bx bx-phone-call"></i>
                            <h3>Call Us</h3>
                            <p><?php print $companyPhone; ?></p>
                        </div>
                    </div>

                </div>

                <div class="row" data-aos="fade-up">

                    <div class="col-lg-6 ">           
                        <iframe src="<?php print $companyMap; ?>" width="100%" height="384px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>

                    <div class="col-lg-6">
                        <?php 
                        
                            if( have_posts() ):
                                
                                while( have_posts() ): the_post();

                                    the_content();
                                
                                endwhile;
                                
                            endif;
                        
                        ?>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main>
    
<?php get_footer(); ?>