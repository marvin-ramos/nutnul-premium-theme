<h1 class="nutnull-sidebar-preview-title">Nutnull General Options</h1>

<?php 
    //for debugging purpose
    settings_errors();

	// $companyLogo = esc_attr(get_option('company_logo'));
?>

<div class="form-container">

    <!-- for sidebar theme menu forms -->
    <form method="post" action="options.php" class="nutnull-general-form">
        <?php settings_fields('nutnull-theme-support'); ?>
        <?php do_settings_sections('nutnull_theme_general'); ?>
        <?php submit_button(); ?>
    </form>
</div>


