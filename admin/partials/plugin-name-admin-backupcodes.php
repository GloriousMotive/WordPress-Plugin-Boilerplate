
/** HORIZONTAL TAB WITH BUTTONS */
<style>
    /* Add your styling here */
    .tab-contents-horizontal {
        display: none;
    }

    .active-tabs-horizontal {
        display: block;
    }

    .tabs-h {
        display: flex;
        cursor: pointer;
    }

    .tab-h {
        padding: 10px;
        margin: 5px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }
</style>
<div class="tabs-h" id="tabContainer">
    <?php
    $categories = ['Category 1', 'Category 2', 'Category 3'];

    foreach ($categories as $index => $category) {
        echo '<div class="tab-h" onclick="changeTab(' . $index . ')">' . $category . '</div>';
    }
    ?>
</div>

<?php
// Content for each category
$contents = [
    '<p>Content for Category 1</p>',
    '<p>Content for Category 2</p>',
    '<p>Content for Category 3</p>'
];

foreach ($contents as $index => $content) {
    echo '<div class="tab-contents-horizontal" id="tab' . $index . '">' . $content . '</div>';
}
?>

<script>
    function changeTab(index) {
        // Hide all tab contents
        var tabContents = document.getElementsByClassName('tab-contents-horizontal');
        for (var i = 0; i < tabContents.length; i++) {
            tabContents[i].style.display = 'none';
        }

        // Remove 'active-tab' class from all tabs
        var tabs = document.getElementsByClassName('tab');
        for (var i = 0; i < tabs.length; i++) {
            tabs[i].classList.remove('active-tabs-horizontal');
        }

        // Show the selected tab content and mark the tab as active
        document.getElementById('tab' + index).style.display = 'block';
        tabs[index].classList.add('active-tabs-horizontal');
    }
</script>



/** NEW SOMETHING */


//HTML STRUCTURE FOR TABS
        public function plugin_name_display_tabs() {
			$plugin_name_drc = '<div class="glorious-ht-plugin-name-tabs" id="glorious-ht-plugin-name-tabContainer">';
			$categories = ['Category 1', 'Category 2', 'Category 3'];

			foreach ($categories as $index => $category) {
				$activeClass = ($index === 0) ? 'glorious-ht-plugin-name-active-tab' : '';
				$plugin_name_drc .= '<div class="glorious-ht-plugin-name-tab ' . $activeClass . '" onclick="changeTab(' . $index . ')">' . $category . '</div>';
			}
			$plugin_name_drc .= '</div>';
			echo $plugin_name_drc;

			$this->plugin_name_display_tabs_content();
			
		}

		 //HTML STRUCTURE FOR TABS
		 public function plugin_name_display_tabs_content() {
			$contents = [
				'<div class="tab1-content">'.$this->plugin_name_display_json_content("theme").'</div>',
				'<p>Content for Category 2</p>',
				'<p>Content for Category 3</p>'
			];
			
			foreach ($contents as $index => $content) {
				$activeClass = ($index === 0) ? 'glorious-ht-plugin-name-active-tab' : '';
				echo $plugin_name_drcs = '<div class="glorious-ht-plugin-name-tab-content ' . $activeClass . '" id="glorious-ht-plugin-name-tab' . $index . '">' . $content . '</div>';
			}
		 }


		// Function to fetch and display JSON content
		public function plugin_name_display_json_content($type) {
			// Replace 'YOUR_JSON_URL' with the actual URL of your JSON file
			$site_url = PLUGIN_NAME_URL; //Get the site url
			$data_folder = "admin/json/"; //The folder Depth
			$json_type = $type;
			$build_url = $site_url . $data_folder . $json_type . ".json";
			echo $json_url = $build_url;

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
						$plugin_name_jsondt = '<div><h2>' . esc_html($item['Title']) . '</h2>';
						$plugin_name_jsondt .= '<p>' . esc_html($item['description']) . '</p>';
						$plugin_name_jsondt .= '<img src="' . esc_url($item['image_url']) . '" alt="' . esc_attr($item['Title']) . '">';
						$plugin_name_jsondt .= '<p>Category: ' . esc_html($item['category']) . '</p>';
						$plugin_name_jsondt .= '<p>Price: ' . esc_html($item['price']) . '</p>';
						$plugin_name_jsondt .= '<p>Sale Price: ' . esc_html($item['sale_price']) . '</p>';
						$plugin_name_jsondt .= '<a href="' . esc_url($item['buy_link']) . '">Buy Now</a>';
						$plugin_name_jsondt .= '<a href="' . esc_url($item['sale_link']) . '">Sale Link</a>';
						$plugin_name_jsondt .= '<p>Type: ' . esc_html($item['type']) . '</p></div>';
						echo $plugin_name_jsondt;
					}
				} else {
					echo 'Invalid JSON format.';
				}
			} else {
				echo 'Failed to fetch JSON data.';
			}
			//return;
		}