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


/** LICENSE */
define( 'PLUGIN_NAME_LICENSE_ENGINE' ,'el' ); //'ed
define( 'PLUGIN_NAME_EL_KEY', '199C773E3189A3AC'); // Key
define( 'PLUGIN_NAME_EL_PID', '4'); //Product ID