<?php 
/*
@package nutnull-premium-theme
=========================================================== 
    used for Footer Template in our admin page 
===========================================================
*/
?>

<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-6">
                    <div class="footer-info">
                        <h3>NutNull</h3>
                        <?php 
                            $companyAddress = esc_attr(get_option('company_address'));
                            $companyPhone = esc_attr(get_option('company_phone'));
                            $companyEmail = esc_attr(get_option('company_email'));
                            $companyMap = esc_attr(get_option('company_map'));
                        ?>
                        <p>
                            <?php print $companyAddress; ?><br><br>
                            <strong>Phone:</strong> <?php print $companyPhone; ?><br>
                            <strong>Email:</strong> <?php print $companyEmail; ?><br>
                        </p>
                        <div class="social-links mt-3">
                            <a href="https://www.facebook.com/nutnull" target="blank" class="facebook"><i class="bx bxl-facebook"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Links</h4>
                    <?php
                        wp_nav_menu( array(
                            'theme_location' => 'primary',
                            'container' => false,
                            'menu_class' => '',
                            'walker' => new Nutnull_Walker_Nav_Primary()
                        ) );
                    ?>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 footer-newsletter">
                    <h4>Our Newsletter</h4>
                    <p>Want to get the latest updates from us? Subscribe now!</p>
                    <form action="" method="post">
                        <input type="email" name="email"><input type="submit" value="Subscribe">
                    </form>

                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><span>NutNull</span></strong>. All Rights Reserved
        </div>

    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
<div id="preloader"></div>

<?php wp_footer(); ?>
</body>
</html>