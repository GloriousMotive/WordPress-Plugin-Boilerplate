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
			$this->plugin_name_display_json_content("theme");
			echo $themesContent = '<script>
				const pluginNameJsonContent = "'. PLUGIN_NAME_JSON_CONTENT.'"
			</script>
			<div class="ht-menu">
				<button class="btn-white btn" onclick="filterProducts(\'ALL\')">Show All Products</button>
				<button class="btn-white btn" onclick="filterProducts(\'Themes\')">Themes</button>
				<button class="btn-white btn" onclick="filterProducts(\'Plugins\')">Plugins</button>
				<button class="btn-white btn" onclick="filterProducts(\'Services\')">Services</button>
			</div>
		
			<div class="product-container" id="productContainer">
				<!-- Product cards will be dynamically added here -->
			</div>';
			
        }

        //HTML STRUCTURE FOR TABS
        public function plugin_name_display_tabs() {
			// $plugin_name_drc = '<div class="glorious-ht-plugin-name-tabs" id="glorious-ht-plugin-name-tabContainer">';
			// $categories = ['Category 1', 'Category 2', 'Category 3'];

			// foreach ($categories as $index => $category) {
			// 	$activeClass = ($index === 0) ? 'glorious-ht-plugin-name-active-tab' : '';
			// 	$plugin_name_drc .= '<div class="glorious-ht-plugin-name-tab ' . $activeClass . '" onclick="changeTab(' . $index . ')">' . $category . '</div>';
			// }
			// $plugin_name_drc .= '</div>';
			// echo $plugin_name_drc;
			// $this->plugin_name_display_tabs_content();

			// Define tab content for each tab
			
			
		}

		 //HTML STRUCTURE FOR TABS
		 public function plugin_name_display_tabs_content() {
			$json_theme = "";
			// $contents = [
			// 	'<div class="tab1-content">' . $this->plugin_name_display_json_content("theme") . 'fghj</div>',
			// 	'<p>Content for Category 2</p>',
			// 	'<p>Content for Category 3</p>'
			// ];
			
			// foreach ($contents as $index => $content) {
			// 	$activeClass = ($index === 0) ? 'glorious-ht-plugin-name-active-tab' : '';
			// 	$tabId = 'glorious-ht-plugin-name-tab' . $index;
			
			// 	echo '<div class="glorious-ht-plugin-name-tab-content ' . $activeClass . '" id="' . $tabId . '">' . $content . '</div>';
			// }
	
		 }


		// Function to fetch and display JSON content
		public function plugin_name_display_json_content($type) {
			// Replace 'YOUR_JSON_URL' with the actual URL of your JSON file
			$site_url = PLUGIN_NAME_URL; //Get the site url
			$data_folder = "admin/json/"; //The folder Depth
			$json_type = $type;
			$build_url = $site_url . $data_folder . $json_type . ".json";
			$json_url = $build_url;
			define("PLUGIN_NAME_JSON_CONTENT",$build_url);

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
						$plugin_name_jsondt = '<div class="inline-flex"><div class="cards cards-container"><h2>' . esc_html($item['Title']) . '</h2>';
						$plugin_name_jsondt .= '<p>' . esc_html($item['description']) . '</p>';
						$plugin_name_jsondt .= '<img src="' . esc_url($item['image_url']) . '" alt="' . esc_attr($item['Title']) . '">';
						$plugin_name_jsondt .= '<p>Category: ' . esc_html($item['category']) . '</p>';
						$plugin_name_jsondt .= '<p>Price: ' . esc_html($item['price']) . '</p>';
						$plugin_name_jsondt .= '<p>Sale Price: ' . esc_html($item['sale_price']) . '</p>';
						$plugin_name_jsondt .= '<a href="' . esc_url($item['buy_link']) . '">Buy Now</a>';
						$plugin_name_jsondt .= '<a href="' . esc_url($item['sale_link']) . '">Sale Link</a>';
						$plugin_name_jsondt .= '<p>Type: ' . esc_html($item['type']) . '</p></div></div>';
						//echo $plugin_name_jsondt;
					}
				} else {
					echo 'Invalid JSON format.';
				}
			} else {
				echo 'Failed to fetch JSON data.';
			}
			//return;
		}




    } //final class ends


}