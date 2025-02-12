<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://appsy.app
 * @since             1.0.0
 * @package           Appsy
 *
 * @wordpress-plugin
 * Plugin Name:       Appsy
 * Plugin URI:        https://appsy.app
 * Description:       A plugin for wordpress of Appsy app.
 * Version:           1.0.0
 * Author:            Maprinter Ltd
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       appsy
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
define( 'Appsy_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-appsy-activator.php
 */
function activate_appsy() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-appsy-activator.php';
	Appsy_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-appsy-deactivator.php
 */
function deactivate_appsy() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-appsy-deactivator.php';
	Appsy_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_appsy' );
register_deactivation_hook( __FILE__, 'deactivate_appsy' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-appsy.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_appsy() {

	$plugin = new Appsy();
	$plugin->run();

}
run_appsy();
