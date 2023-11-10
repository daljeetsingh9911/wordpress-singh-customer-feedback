<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://daljeetsolutions.com
 * @since             1.0.0
 * @package           Singh_Customer_Feedback
 *
 * @wordpress-plugin
 * Plugin Name:       Customer Feedback
 * Plugin URI:        https://daljeetsolutions.com
 * Description:       this plugin will collect customer feedback by submitting the simple form with a star rating input
 * Version:           1.0.0
 * Author:            Daljeet Singh
 * Author URI:        https://daljeetsolutions.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       singh-customer-feedback
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'SINGH_CUSTOMER_FEEDBACK_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-singh-customer-feedback-activator.php
 */
function activate_singh_customer_feedback() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-singh-customer-feedback-activator.php';
	Singh_Customer_Feedback_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-singh-customer-feedback-deactivator.php
 */
function deactivate_singh_customer_feedback() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-singh-customer-feedback-deactivator.php';
	Singh_Customer_Feedback_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_singh_customer_feedback' );
register_deactivation_hook( __FILE__, 'deactivate_singh_customer_feedback' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-singh-customer-feedback.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_singh_customer_feedback() {

	$plugin = new Singh_Customer_Feedback();
	$plugin->run();

}
run_singh_customer_feedback();
