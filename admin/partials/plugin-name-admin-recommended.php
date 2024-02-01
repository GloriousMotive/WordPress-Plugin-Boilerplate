<?php
/**
 * Class: Plugin_Name_Recommeneded
 */

if ( ! defined ( 'ABSPATH') ) {
     exit;
}



//Init the Class
if (! class_exists('Plugin_Name_Recommeneded')) {

    final class Plugin_Name_Recommeneded {
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
		public function __construct(){
               
        }


        public function plugin_name_display_recommeneded() {

        }

        //HTML STRUCTURE FOR TABS
        public function plugin_name_display_tabs() {

		}


		// Function to fetch and display JSON content
		public function display_json_content($type) {
			// Replace 'YOUR_JSON_URL' with the actual URL of your JSON file
			$site_url = PLUGIN_NAME_URL; //Get the site url
			$data_folder = "/admin/json/"; //The folder Depth
			$json_type = $type;
			$build_url = $site_url . $data_folder . $json_type;
			$json_url = $build_url;

			// Fetch JSON data from the provided URL
			$response = wp_remote_get($json_url);

			// Check if the request was successful
			if (is_array($response) && !is_wp_error($response)) {
				$body = wp_remote_retrieve_body($response);

				// Decode JSON data
				$json_data = json_decode($body, true);

				// Check if JSON data is valid
				if ($json_data) {
					// Loop through each item in the JSON array
					foreach ($json_data as $item) {
						// Output the desired fields (modify as needed)
						echo '<h2>' . esc_html($item['Title']) . '</h2>';
						echo '<p>' . esc_html($item['description']) . '</p>';
						echo '<img src="' . esc_url($item['image_url']) . '" alt="' . esc_attr($item['Title']) . '">';
						echo '<p>Category: ' . esc_html($item['category']) . '</p>';
						echo '<p>Price: ' . esc_html($item['price']) . '</p>';
						echo '<p>Sale Price: ' . esc_html($item['sale_price']) . '</p>';
						echo '<a href="' . esc_url($item['buy_link']) . '">Buy Now</a>';
						echo '<a href="' . esc_url($item['sale_link']) . '">Sale Link</a>';
						echo '<p>Type: ' . esc_html($item['type']) . '</p>';
					}
				} else {
					echo 'Invalid JSON format.';
				}
			} else {
				echo 'Failed to fetch JSON data.';
			}
		}

    }


}