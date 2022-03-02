<h1 class="nutnull-sidebar-preview-title">Nutnull Company Details</h1>

<?php 
	$companyLogo = esc_attr(get_option('company_logo'));
	$companyName = esc_attr(get_option('company_name'));
	$companyAddress = esc_attr(get_option('company_address'));
	$companyPhone = esc_attr(get_option('company_phone'));
	$companyEmail = esc_attr(get_option('company_email'));
	$companyTwitter = esc_attr(get_option('company_twitter'));
	$companyFacebook = esc_attr(get_option('company_facebook'));
	$companyInstagram = esc_attr(get_option('company_instagram'));
	$companyGmail = esc_attr(get_option('company_gmail'));
?>

<div class="nutnull-sidebar-preview">
	<div class="nutnull-sidebar-container">

		<!-- for company logo -->
		<div class="nutnull-company-logo">
			<div class="company-logo-container">
				<div id="company-logo-preview" class="company-logo" style="background-image: url(<?php print $companyLogo; ?>);"></div>
				
				<h1>Company Logo</h1>

				<!-- for nutnull company social media icons -->
				<div class="icons-wrapper">
					<?php if( !empty( $companyEmail ) ): ?>
						<button class="btn-social-media-icon">
							<a href="mailto:'.<?php print $companyEmail; ?>.'">
								<i class="icofont-email"></i>
							</a>
						</button>
					<?php endif; ?>
					<?php if( !empty( $companyPhone ) ): ?>
						<button class="btn-social-media-icon">
							<a href="">
								<i class="icofont-phone"></i>
							</a>
						</button>
					<?php endif; ?>
					<?php if( !empty( $companyTwitter ) ): ?>
						<button class="btn-social-media-icon">
							<a href="">
								<i class="icofont-twitter"></i>
							</a>
						</button>
					<?php endif; ?>
					<?php if( !empty( $companyFacebook ) ): ?>
						<button class="btn-social-media-icon">
							<a href="">
								<i class="icofont-facebook"></i>
							</a>
						</button>
					<?php endif; ?>
					<?php if( !empty( $companyInstagram ) ): ?>
						<button class="btn-social-media-icon">
							<a href="">	
								<i class="icofont-instagram"></i>
							</a>
						</button>
					<?php endif; ?>
					<?php if( !empty( $companyGmail ) ): ?>
						<button class="btn-social-media-icon">
							<a href="">	
								<i class="icofont-google-plus"></i>
							</a>
						</button>	
					<?php endif; ?>		
				</div>
			</div>
		</div>

		<!-- for nutnull company details -->
		<span>Company Name</span>
		<h2 class="nutnull-company-name"><?php print $companyName; ?></h2>

		<span>Company Address</span>
		<h2 class="nutnull-company-address"><?php print $companyAddress; ?></h2>

		<h1>Company Contact Information</h1>

		<span>Company Phone Number</span>
		<h2 class="nutnull-company-phone"><?php print $companyPhone; ?></h2>

		<span>Company Email Address</span>
		<h2 class="nutnull-company-email"><?php print $companyEmail; ?></h2>
	</div>

	<div class="form-container">
		<!-- for sidebar theme menu forms -->
		<form method="post" action="options.php" class="nutnull-general-form">
			<?php settings_fields('nutnull-settings-group'); ?>
			<?php do_settings_sections('nutnull_theme'); ?>
			<?php submit_button('Save Changes', 'primary', 'btnSubmit');?>
		</form>
	</div>
</div>