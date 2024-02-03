<?php

/**
 * The Configuration for the entire plugin, Do Not Change once the plugin is in Production.
 * @since 1.0.0
 */

// DEFINED
//define( 'PLUGIN_NAME_', '');
define( 'PLUGIN_NAME_FILE', __FILE__ );
define( 'PLUGIN_NAME_ROOT', dirname( plugin_basename( PLUGIN_NAME_FILE ) ) );
define( 'PLUGIN_NAME_DIR', plugin_dir_path( __FILE__ )  );
define( 'PLUGIN_NAME_URL', plugin_dir_url( __FILE__ ) );
define( 'PLUGIN_NAME_NAME', 'PLUGIN_NAME' );

/** CUSTOM VALUES */
define( 'GLORIOUSTHEMES_SUFFIX_URL', 'https://gloriousthemes.com' );
define( 'GLORIOUSMOTIVE_SUFFIX_URL', 'https://gloriousmotive.com' );
define( 'PLUGIN_NAME_DOCS_URL', 'https://gloriousmotive.com/docs/7432' );


define( 'PLUGIN_NAME_THEME_VERSION', wp_get_theme()->get( 'Version' ) ) ;
define( 'PLUGIN_NAME_THEME_NAME', wp_get_theme()->get( 'Name' ) );

/** NOTIFICATION */
define( 'PLUGIN_NAME_NOTIFICATION_ONOFF' ,'ON' );
define( 'PLUGIN_NAME_NOTIFICATION_MESSAGE' , 'Beautiful Themes for WordPress' );
define( 'PLUGIN_NAME_NOTIFICATION_LINK' , 'https://gloriousthemes.com' );
define( 'PLUGIN_NAME_NOTIFICATION_LINK_TEXT' , 'Visit website' );


/** LICENSE - EL */
define( 'PLUGIN_NAME_LICENSE_ENGINE' ,'wp' ); //'ed The Updater Engine EL, ED or WP, WP is Free
define( 'PLUGIN_NAME_EL_KEY', '199C773E3189A3AC'); // Key
define( 'PLUGIN_NAME_EL_PID', '4'); //Product ID

/** LICENSE - ED */
define( 'PLUGIN_NAME_EDD_STORE_URL', 'http://gloriousmotive.com' ); // this is the URL our updater / license checker
define( 'PLUGIN_NAME_EDD_ITEM_ID', 1372 ); //DOWNLOAD ID of the product for Updater/Licenser //License Format 652d1effc4cbc21f35733f993bc2084a
define( 'PLUGIN_NAME_EDD_ITEM_NAME', 'Test Download' ); //Test Download // the name of the product
define( 'PLUGIN_NAME_EDD_PLUGIN_LICENSE_PAGE', 'plugin-name#license' ); // the name of the settings page

//define("PLUGIN_NAME_JSON_CONTENT", "http://plugins.local/wp-content/plugins/WordPress-Plugin-Boilerplate/admin/json/theme.json");