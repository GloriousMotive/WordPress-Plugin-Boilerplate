<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://example.com
 * @since             1.0.0
 * @package           Plugin_Name
 *
 * @wordpress-plugin
 * Plugin Name:       1 Glorious WordPress Plugin Boilerplate JAN 2024
 * Plugin URI:        http://example.com/plugin-name-uri/
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Your Name or Your Company
 * Author URI:        http://example.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       plugin-name
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

if ( ! function_exists( 'glomotive_fs' ) ) {
    // Create a helper function for easy SDK access.
    function glomotive_fs() {
        global $glomotive_fs;

        if ( ! isset( $glomotive_fs ) ) {
            // Include Freemius SDK.
            require_once dirname(__FILE__) . '/lib/freemius/start.php';

            $glomotive_fs = fs_dynamic_init( array(
                'id'                  => '14101',
                'slug'                => 'gloriousmotive',
                'type'                => 'plugin',
                'public_key'          => 'pk_f9631c68b2694a2b9a53c21d1fb16',
                'is_premium'          => false,
                'has_addons'          => false,
                'has_paid_plans'      => false,
                'menu'                => array(
                    'slug'           => 'gloriousmotive',
                    'first-path'     => 'admin.php?page=gloriousmotive',
                    'account'        => false,
                    'contact'        => false,
                    'support'        => false,
                ),
            ) );
        }

        return $glomotive_fs;
    }

    // Init Freemius.
    glomotive_fs();
    // Signal that SDK was initiated.
    do_action( 'glomotive_fs_loaded' );
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'PLUGIN_NAME_VERSION', '1.0.0' );


/** GET ESSENTIAL FILES */
require_once plugin_dir_path( __FILE__ ) . '/config.php';



/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-plugin-name-activator.php
 */
function activate_plugin_name_sufix() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-plugin-name-activator.php';
	Plugin_Name_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-plugin-name-deactivator.php
 */
function deactivate_plugin_name_sufix() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-plugin-name-deactivator.php';
	Plugin_Name_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_plugin_name_sufix' );
register_deactivation_hook( __FILE__, 'deactivate_plugin_name_sufix' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-plugin-name.php';




/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_plugin_name_sufix() {

	$plugin = new Plugin_Name();
	$plugin->run();

}
run_plugin_name_sufix();
