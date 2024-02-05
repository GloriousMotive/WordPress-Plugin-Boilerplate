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
            add_action('admin_menu', array($this, 'plugin_name_add_settings_page'));
        }
    
        // Register settings
        public function plugin_name_register_settings() {
            register_setting('plugin_name_settings', 'plugin_name_name');
            register_setting('plugin_name_settings', 'plugin_name_email');
            register_setting('plugin_name_settings', 'plugin_name_dropdown');
            register_setting('plugin_name_settings', 'plugin_name_checkbox');
            register_setting('plugin_name_settings', 'plugin_name_radio');
            register_setting('plugin_name_settings', 'plugin_name_textarea');
            register_setting('plugin_name_settings', 'plugin_name_url');
            register_setting('plugin_name_settings', 'plugin_name_slider');
        }
    
        // Register REST route for retrieving settings
        public function plugin_name_register_rest_route() {
            register_rest_route('plugin-name/v1', '/settings', array(
                'methods'  => 'GET',
                'callback' => array($this, 'plugin_name_get_settings'),
                'permission_callback' => function () {
                    return current_user_can('manage_options');
                },
            ));

            // Flush rewrite rules to ensure the route is recognized
            flush_rewrite_rules();
        }
    
        // Add settings page
        public function plugin_name_add_settings_page() {
            add_options_page('Plugin Name Settings', 'Plugin Name', 'manage_options', 'plugin-name-settings', array($this, 'plugin_name_render_settings_page'));
        }
    
        // Render settings page
        public function plugin_name_render_settings_page() {
            ?>
            <div class="wrap">
                <h2>Plugin Name Settings</h2>
                <form method="post" action="options.php">
                    <?php settings_fields('plugin_name_settings'); ?>
                    <?php do_settings_sections('plugin-name-settings'); ?>
                    <table class="form-table">
                        <tr>
                            <th>Name</th>
                            <td><input type="text" name="plugin_name_name" value="<?php echo esc_attr(get_option('plugin_name_name')); ?>" /></td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td><input type="text" name="plugin_name_email" value="<?php echo esc_attr(get_option('plugin_name_email')); ?>" /></td>
                        </tr>
                        <tr>
                            <th>Dropdown - Yes/No</th>
                            <td>
                                <select name="plugin_name_dropdown">
                                    <option value="yes" <?php selected(get_option('plugin_name_dropdown'), 'yes'); ?>>Yes</option>
                                    <option value="no" <?php selected(get_option('plugin_name_dropdown'), 'no'); ?>>No</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>Checkbox</th>
                            <td><input type="checkbox" name="plugin_name_checkbox" value="1" <?php checked(get_option('plugin_name_checkbox'), 1); ?> /></td>
                        </tr>
                        <tr>
                            <th>Radio Buttons</th>
                            <td>
                                <label><input type="radio" name="plugin_name_radio" value="option1" <?php checked(get_option('plugin_name_radio'), 'option1'); ?>> Option 1</label><br>
                                <label><input type="radio" name="plugin_name_radio" value="option2" <?php checked(get_option('plugin_name_radio'), 'option2'); ?>> Option 2</label>
                            </td>
                        </tr>
                        <tr>
                            <th>Text Area</th>
                            <td><textarea name="plugin_name_textarea"><?php echo esc_textarea(get_option('plugin_name_textarea')); ?></textarea></td>
                        </tr>
                        <tr>
                            <th>URL</th>
                            <td><input type="url" name="plugin_name_url" value="<?php echo esc_url(get_option('plugin_name_url')); ?>" /></td>
                        </tr>
                        <tr>
                            <th>Slider (True/False)</th>
                            <td><input type="checkbox" name="plugin_name_slider" value="1" <?php checked(get_option('plugin_name_slider'), 1); ?> /></td>
                        </tr>
                    </table>
                    <?php submit_button(); ?>
                </form>
            </div>
            <?php
        }
    
        // Callback for REST route to retrieve settings
        public function plugin_name_get_settings() {
            $settings = array(
                'name'      => get_option('plugin_name_name'),
                'email'     => get_option('plugin_name_email'),
                'dropdown'  => get_option('plugin_name_dropdown'),
                'checkbox'  => get_option('plugin_name_checkbox'),
                'radio'     => get_option('plugin_name_radio'),
                'textarea'  => get_option('plugin_name_textarea'),
                'url'       => get_option('plugin_name_url'),
                'slider'    => get_option('plugin_name_slider'),
            );
    
            return rest_ensure_response($settings);
        }


        // Method to retrieve and output name and email
        public function plugin_name_retrieve_name_and_email() {
            // Make a GET request to the REST API endpoint
            //$response = wp_remote_get(site_url('/wp-json/plugin-name/v1/settings'));
            $response = wp_remote_get(site_url('/wp-json/plugin-name/v1/settings'), array('timeout' => 15));

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