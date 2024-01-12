<?php
/**
 * Individul Functions to load each the directory and execute
 * 
 * Mostly for libraries and SDK
 * 
 * @since 1.0.0
 * @Date 10/Jan/2024
 */
if ( ! function_exists( 'glomotive_fs' ) ) {
    // Create a helper function for easy SDK access.
    function glomotive_fs() {
        global $glomotive_fs;

        if ( ! isset( $glomotive_fs ) ) {
            // Include Freemius SDK.
            require_once PLUGIN_NAME_DIR  . '/lib/freemius/start.php';

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

echo "Freemius Loaded";