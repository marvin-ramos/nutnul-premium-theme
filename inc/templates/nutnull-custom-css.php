<h1 class="nutnull-sidebar-preview-title">Nutnull Custom CSS Options</h1>
<?php settings_errors(); ?>

<!-- for sidebar theme menu forms -->
<form id="save-custom-css-form" method="post" action="options.php" class="nutnull-general-form">
    <?php settings_fields('nutnull-custom-css-options'); ?>
    <?php do_settings_sections('nutnull_theme_css'); ?>
    <?php submit_button(); ?>
</form>