<?php
/**
 * Class: Plugin_Name_Settings
 */

if ( ! defined ( 'ABSPATH') ) {
     exit;
}



//Init the Class
if (! class_exists('Plugin_Name_Settings')) {

    final class Plugin_Name_Settings {
        /**
		 * Member Variable
		 *
		 * @var instance
		 */
		private static $instance;

		/**
		 *  Initiator
		 */
		public static function get_instance() {
			if ( ! isset( self::$instance ) ) {
				self::$instance = new self();
			}
			return self::$instance;
		}

		/**
		 * Constructor
		 */
        public function __construct() {
            add_action('admin_init', array($this, 'plugin_name_register_settings'));
            add_action('rest_api_init', array($this, 'plugin_name_register_rest_route'));
            //add_action('admin_menu', array($this, 'plugin_name_add_settings_page')); //Extra Admin Menu under Settings

            // Display SETTINGS
            require_once PLUGIN_NAME_DIR . '/admin/partials/plugin-name-admin-settings.php';
            $this->displaySettings = new Plugin_Name_DisplaySettings();
        }
    
    
        // Register REST route for retrieving settings
        public function plugin_name_register_rest_route() {
            register_rest_route('plugin-name/v1', '/settings', array(
                'methods'  => 'GET',
                'callback' => array($this, 'plugin_name_get_settings'),

                //UNCOMMENT THE BELOW PERMISSIONS, ON PRODUCTION
                // 'permission_callback' => function () {
                //     return current_user_can('manage_options');
                // },
            ));

            // Flush rewrite rules to ensure the route is recognized
            flush_rewrite_rules();
        }
    
        // Add settings page
        public function plugin_name_add_settings_page() {
            //add_options_page('Plugin Name Settings', 'Plugin Name', 'manage_options', 'plugin-name-settings', array($this, 'plugin_name_render_settings_page'));
        }
    

        /**
         * Render settings page
         * 
         * No Edit Required - Make Changes on /partials/-admin-settings.php
         *
         * @since 1.0
         */
        public function plugin_name_render_settings_page() {
            ?>
            <div class="wrap">
                <form method="post" action="options.php">
                    <!-- Heading -->
                    <div class="section-heading  ">
                        <div class="title">
                                <h2>
                                    <span>Plugin Name Settings Panel</span>
                                </h2>
                        </div>
                        <div class="actions">		
                            <?php submit_button('Save Changes', 'btn btn-primary btn-md', 'save_changes_button', false, array('id' => 'save-changes-button' ));?>
                            <div id="loading-screen" style="display: none;">
                                <img style="width: 55%;margin-bottom: 5px;" src="<?php echo esc_url(PLUGIN_NAME_URL . 'admin/images/loading.gif'); ?>" alt="Loading..." />
                            </div>
                        </div>
                    </div>

                    <?php settings_fields('plugin_name_settings'); ?>
                    <?php do_settings_sections('plugin-name-settings'); ?>

                    <?php 
                    //selected($selected, $current, $echo)
                        //require_once PLUGIN_NAME_DIR . '/admin/partials/plugin-name-admin-settings.php'; 
                        $gensettings = $this->displaySettings->plugin_name_settings_general();
                        $gensettings = $this->displaySettings->plugin_name_settings_others();
                    ?>
                    <?php //submit_button('Save Changes', 'primary', 'save_changes_button', false, array('id' => 'save-changes-button')); ?>
                </form>
            </div>

            <script>
                jQuery(document).ready(function ($) {
                    $('#save-changes-button').click(function () {
                        // Show loading screen on button click
                        $('#loading-screen').show();
                    });
                });
            </script>

            <?php
        }


        /**
         * Register settings
         *
         * @since 1.0
         */
        public function plugin_name_register_settings() {
            register_setting('plugin_name_settings', 'plugin_name_name');
            register_setting('plugin_name_settings', 'plugin_name_email');
            register_setting('plugin_name_settings', 'plugin_name_dropdown');
            register_setting('plugin_name_settings', 'plugin_name_checkbox');
            register_setting('plugin_name_settings', 'plugin_name_radio');
            register_setting('plugin_name_settings', 'plugin_name_textarea');
            register_setting('plugin_name_settings', 'plugin_name_url');
            register_setting('plugin_name_settings', 'plugin_name_custom2');
            register_setting('plugin_name_settings', 'glorious_live_chat');

            // if (isset($_POST['save_changes_button'])) {
            //     // Redirect to the specified page after saving settings
            //     wp_redirect(admin_url('admin.php?page=plugin-name#settings'));
            //     exit();
            // }
        }
    

        /**
         * Callback for REST route to retrieve settings
         *
         * @since 1.0
         */
        public function plugin_name_get_settings() {
            // Check user capabilities
            // if (!current_user_can('manage_options')) {
            //     return rest_ensure_response(array('error' => 'Unauthorized access'));
            // }

            $settings = array(
                'name'      => get_option('plugin_name_name'),
                'email'     => get_option('plugin_name_email'),
                'dropdown'  => get_option('plugin_name_dropdown'),
                'checkbox'  => get_option('plugin_name_checkbox'),
                'radio'     => get_option('plugin_name_radio'),
                'textarea'  => get_option('plugin_name_textarea'),
                'url'       => get_option('plugin_name_url'),
                'custom2'    => get_option('plugin_name_custom2'),
                'glorious_live_chat'  => get_option('glorious_live_chat'),
            );

            return rest_ensure_response($settings);
        }

        // Method to retrieve and output name and email
        public function plugin_name_retrieve_name_and_email() {
            // Check user capabilities
            // if (!current_user_can('manage_options')) {
            //     echo 'Unauthorized access';
            //     return;
            // }

            // Make a GET request to the REST API endpoint
            $response = wp_remote_get(site_url('/wp-json/plugin-name/v1/settings'));

            // Check for successful request
            if (is_wp_error($response) || wp_remote_retrieve_response_code($response) !== 200) {
                $error_message = is_wp_error($response) ? $response->get_error_message() : 'Unknown error';
                echo 'Error retrieving data: ' . esc_html($error_message);
                return;
            }

            // Parse the JSON response
            $body = wp_remote_retrieve_body($response);
            $data = json_decode($body, true);

            // Check if data is valid
            if (empty($data) || !is_array($data)) {
                echo 'Invalid data';
                return;
            }

            // Get name and email from the retrieved data
            $name = isset($data['name']) ? $data['name'] : '';
            $email = isset($data['email']) ? $data['email'] : '';

            // Output or use the retrieved data
            echo 'Name: ' . esc_html($name) . '<br>';
            echo 'Email: ' . esc_html($email);
        }




    } //final class ends


}