<?php
/**
 * Class: Plugin_Name_AdminTabs
 */

if ( ! defined ( 'ABSPATH') ) {
     exit;
}

//Init the Class
if (! class_exists('Plugin_Name_AdminTabs')) {

     final class Plugin_Name_AdminTabs {
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


          public function display_plugin_name_admintabs() {
               return '
               <div class="idss">
                    <a href="#tab1">Tab 1</a>
                    <a href="#tab2">Tab 2</a>
                    <a href="#tab3">Tab 3</a>
                    <!-- Add more tabs as needed -->
               </div>
               ';
          }


          public function display_plugin_name_admintabs_content() {
               return '
               ';
          }

     }

}


/**
 *  Prepare if class 'Plugin_Name_AdminTabs' exist.
 *  Kicking this off by calling 'get_instance()' method
 */
Plugin_Name_AdminTabs::get_instance();

