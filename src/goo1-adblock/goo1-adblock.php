<?php
/**
 * Plugin Name: goo1 Adblocker
 * Description: Removes the anoying adds in the admin area.
 * Version: 1.0
 * Author: Andreas Kasper
 */

// Add the custom CSS file to the admin dashboard
function goo1_add_custom_admin_css() {
    wp_enqueue_style(
        'custom-admin-style', // Handle for the stylesheet
        plugin_dir_url(__FILE__) . 'css/admin-style.css', // Path to the CSS file
        [], // Dependencies
        '1.0' // Version
    );
}
add_action('admin_enqueue_scripts', 'goo1_add_custom_admin_css');

?>
