<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://sajjadcodes.com
 * @since      1.0.0
 *
 * @package    Countdown_Master
 * @subpackage Countdown_Master/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Countdown_Master
 * @subpackage Countdown_Master/admin
 * @author     Sajad <sajjadcodes@gmail.com>
 */
class Countdown_Master_Menu
{


    public function __construct()
    {
    }

    public function wpct_settings_page_html()
    {
        if (!is_admin()) {
            return;
        }
?>
        <div class="wrap">
            <h1 style="color: #111111"><?php echo esc_html(get_admin_page_title()); ?></h1>
            <?php settings_errors(); ?>
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab-1"><?php esc_html_e('General Settings', 'countdown-master');?></a></li>
                <li><a href="#tab-2"><?php esc_html_e('Add Image', 'countdown-master');?></a></li>
                <li><a href="#tab-3"><?php esc_html_e('Customize', 'countdown-master');?></a></li>
                <li><a href="#tab-4"><?php esc_html_e('Social Links', 'countdown-master');?></a></li>
                <li><a href="#tab-5"><?php esc_html_e('Templates', 'countdown-master');?></a></li>
                <li><a href="#tab-6"><?php esc_html_e('Generate Shortcode', 'countdown-master');?></a></li>
            </ul>
            <div class="tab-content">
                <div id="tab-1" class="tab-pane active">
                    <form action="options.php" method="post">
                        <?php
                        settings_fields('wpct-settings');
                        do_settings_sections('wpct-settings');
                        submit_button('Save Changes');
                        ?>
                    </form>
                </div>
                <div id="tab-2" class="tab-pane">
                    <h3><?php esc_html_e('Add Image ', 'countdown-master');?></h3>
                    <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post" enctype="multipart/form-data">
                        <?php
                        settings_fields('wpct-image-settings');
                        do_settings_sections('wpct-image-settings');
                        submit_button('Save Changes');
                        ?>
                        <input type="hidden" name="action" value="wpct_save_image_upload">
                    </form>
                </div>
                <div id="tab-3" class="tab-pane">
                    <h3><?php esc_html_e('Customize', 'countdown-master');?></h3>
                    <form action="options.php" method="post">
                        <?php
                        settings_fields('wpct-settings-customize');
                        do_settings_sections('wpct-settings-customize');
                        submit_button('Save Changes');
                        ?>
                    </form>
                </div>
                <div id="tab-4" class="tab-pane">
                    <h3><?php esc_html_e('Social Links', 'countdown-master');?></h3>
                    <form action="options.php" method="post">
                        <?php
                        settings_fields('wpct-settings-social-links');
                        do_settings_sections('wpct-settings-social-links');
                        submit_button('Save Changes');
                        ?>
                    </form>
                </div>
                <div id="tab-5" class="tab-pane">
                    <h3><?php esc_html_e('Templates', 'countdown-master');?></h3>
                    <form action="options.php" method="post">
                        <?php
                        settings_fields('wpct-settings-templates');
                        do_settings_sections('wpct-settings-templates');
                        submit_button('Save Changes');
                        ?>
                    </form>
                </div>
                <div id="tab-6" class="tab-pane">
                    <h3><?php esc_html_e('Generate Shortcode', 'countdown-master');?></h3>
                    <form id="my-form" action="options.php" method="post">
                        <?php
                        settings_fields('wpct-shortcode-settings');
                        do_settings_sections('wpct-shortcode-settings');
                        ?>
                        <?php submit_button('Save Settings', 'primary', 'my-submit-button'); ?>
                        <!-- <button id="my-button" class="button button-primary">Generate Shortcode</button> -->
                    </form>
                </div>
            </div>
        </div>
<?php
    }

    public function wpct_register_menu_page()
    {

        add_menu_page('Countdown Master', 'Countdown Master', 'manage_options', 'wpct-settings', [$this, 'wpct_settings_page_html'], 'dashicons-clock', 30);
    }
}
