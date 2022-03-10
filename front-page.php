<?php get_header(); ?>

<!-- ======= Hero Section ======= -->
<div id="hero" class="d-flex align-items-center" style="background: url(<?php header_image(); ?>) top center;width: 100%;height: 100vh;background-size: cover;position: relative;">
	<div class="container position-relative" data-aos-delay="500">
	<h1><?php bloginfo('name'); ?></h1>
	<h2><?php bloginfo('description'); ?></h2>
	<a href="#about" class="btn-get-started scrollto">Get Started</a>
	</div>
</div>

<main id="main">
	<!-- ======= About Section ======= -->
	<section id="about" class="about">
		<div class="container">

			<div class="row">
				<?php
					$args = array(
						'post_type' => 'post',
						'post_status' => 'publish',
						'category_name' => 'about',
						'posts_per_page' => 1,
					);
					$arr_posts = new WP_Query( $args );
						
					if ( $arr_posts->have_posts() ) :
						
						while ( $arr_posts->have_posts() ) :
							$arr_posts->the_post();
							?>	
								<div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left">
									<?php if ( has_post_thumbnail() ) : ?>
										<img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id( $post->ID ), 'thumbnail' ); ?>" class="img-fluid" alt="">
									<?php endif; ?>
								</div>
								<div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
									<h3><?php the_title(); ?></h3>

									<div class="container">
										<div class="row">
											<div class="col-sm-12 col-md-4 align-items-center">
											<img src="http://localhost/nutnull.com/wp-content/uploads/2022/02/nutnull-logo-full.png" class="aboutlogo" alt="">
											</div>
							
											<div class="col-sm-12 col-md-8 align-items-center">
											<p class="font-italic">
												Back in 2015, we started in Davao city in a small room and provided software services to our client in the United States of America and up until now, our client in the US is still working with us. We provide offshore software engineers to meet their manpower needs.
											</p>
											</div>
										</div>
									</div>

									<p><?php the_excerpt(); ?></p>
								</div>
								
							
							<?php
						endwhile;
					endif;
				?>
			</div>

		</div>
	</section>
	<!-- End About Section -->

	<!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
  
      <div class="container" data-aos="zoom-in">  

        <div class="row d-flex align-items-center">
          
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">

              <div class="carousel-item active"> 

                <div class="row d-flex align-items-center">

                  <div class="col-lg-3 col-md-3 col-12">
                    <img src="http://local.nutnull.com/wp-content/uploads/2022/02/client-1a.png" class="img-fluid" alt="">
                  </div>
  
                  <div class="col-lg-3 col-md-3 col-12">
                    <img src="http://local.nutnull.com/wp-content/uploads/2022/02/client-2.png" class="img-fluid" alt="">
                  </div>

                  <div class="col-lg-3 col-md-3 col-12">
                    <img src="http://local.nutnull.com/wp-content/uploads/2022/02/client-3.png" class="img-fluid" alt="">
                  </div>

                  <div class="col-lg-3 col-md-3 col-12">
                    <img src="http://local.nutnull.com/wp-content/uploads/2022/02/client-4.png" class="img-fluid" alt="">
                  </div>

                </div>
              </div>

              <div class="carousel-item">
                <div class="row d-flex align-items-center">

                  <div class="col-lg-3 col-md-3 col-12">
                    <img src="http://local.nutnull.com/wp-content/uploads/2022/02/client-5.png" class="img-fluid" alt="">
                  </div>
  
                  <div class="col-lg-3 col-md-3 col-12">
                    <img src="http://local.nutnull.com/wp-content/uploads/2022/02/client-6.png" class="img-fluid" alt="">
                  </div>

                  <div class="col-lg-3 col-md-3 col-12">
                    <img src="http://local.nutnull.com/wp-content/uploads/2022/02/client-7.png" class="img-fluid" alt="">
                  </div>

                  <div class="col-lg-3 col-md-3 col-12">
                    <img src="http://local.nutnull.com/wp-content/uploads/2022/02/client-8.png" class="img-fluid" alt="">
                  </div>

                </div>
              </div>

            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon fontIcon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>

            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon fontIcon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>

          </div>

        </div>

      </div>
    </section><!-- End Clients Section -->

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

	<!-- ======= Cta Section ======= -->
	<section id="cta" class="cta">
		<div class="container" data-aos="zoom-in">

		<div class="text-center">
			<h3>Want to bring your idea into an app?</h3>
			<p> Don't wait for your passion to burn out, contact us now and we will be glad to help you in your dream app.</p>
			<a class="cta-btn" href="#">Call To Action</a>
		</div>

		</div>
	</section>
	<!-- End Cta Section -->
	
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
</main><!-- End #main -->

<?php get_footer(); ?>