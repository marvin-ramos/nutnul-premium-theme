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

                <div class="row" data-aos="fade-up">
                    <div class="col-lg-6">
                        <div class="info-box mb-4">
                            <i class="bx bx-map"></i>
                            <h3>Our Address</h3>
                            <p>002 Salvani St. Soriano Subd.</p>
                            <p>Brgy. City Heights General Santos City</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="info-box  mb-4">
                            <i class="bx bx-envelope"></i>
                            <h3>Email Us</h3>
                            <p>info@nutnull.com</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="info-box  mb-4">
                            <i class="bx bx-phone-call"></i>
                            <h3>Call Us</h3>
                            <p>(+639) 17-715-2496</p>
                        </div>
                    </div>

                </div>

                <div class="row" data-aos="fade-up">

                    <div class="col-lg-6 ">           
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7934.048948821631!2d125.1652831909609!3d6.127408741018154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32f79f001fb90fc5%3A0xac33538aff6c237a!2sSalvani%20St%2C%20General%20Santos%20City%2C%20South%20Cotabato!5e0!3m2!1sen!2sph!4v1603814882688!5m2!1sen!2sph" width="100%" height="384px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
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