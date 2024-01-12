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
               <div class="plugin-name-settings">
                    <ul class="tabs">
                         <li><a href="#tab1">Welcome</a></li>
                         <li><a href="#tab2">Settings</a></li>
                         <li><a href="#tab3">Services</a></li>
                         <li><a href="#tab4">Support</a></li>
                         <li><a href="#tab5">Blogs</a></li>
                    </ul>

                    <div id="tab1" class="tab-content">
                         <!-- Content for Welcome tab -->
                         tab1
                    </div>

                    <div id="tab2" class="tab-content">
                         <!-- Content for Settings tab -->tab2
                    </div>

                    <div id="tab3" class="tab-content">
                         <!-- Content for Services tab -->tab3
                    </div>

                    <div id="tab4" class="tab-content">
                         <!-- Content for Support tab -->tab4
                    </div>

                    <div id="tab5" class="tab-content">
                         <!-- Content for Blogs tab -->tab5
                    </div>
                    </div>

               ';
          }

     }

}


/**
 *  Prepare if class 'Plugin_Name_AdminTabs' exist.
 *  Kicking this off by calling 'get_instance()' method
 */
Plugin_Name_AdminTabs::get_instance();

