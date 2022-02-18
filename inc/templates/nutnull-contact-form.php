<h1 class="nutnull-sidebar-preview-title">Nutnull General Options</h1>
<?php settings_errors(); ?>

<!-- for sidebar theme menu forms -->
<form method="post" action="options.php" class="nutnull-general-form">
    <?php settings_fields('nutnull-contact-options'); ?>
    <?php do_settings_sections('nutnull_theme_contact_form'); ?>
    <?php submit_button(); ?>
</form>