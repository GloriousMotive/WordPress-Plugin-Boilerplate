<?php
/**
 * Class: Plugin_Name_Services
 */

if ( ! defined ( 'ABSPATH') ) {
     exit;
}



//Init the Class
if (! class_exists('Plugin_Name_Services')) {

     final class Plugin_Name_Services {
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


          public function display_plugin_name_services() {
               return '
               <div class="gm-title">
                    <div class="gm-title-style">
                         <h3 class="gm-text6">
                              <span>SUPPORT & DOCUMENTATION</span>
                         </h3>
                    </div>
               </div>

               <div class="service-container">
                    <div class="cards cards-container" href="https://gloriousmotive.com/support-tickets/" target="_black">
                         <h3>Support Ticket</h3>
                         <p><strong>Need Support!</strong> Create a ticket to fix your problem easily. Our Support team is ready to fix your problem.</p>
                         <div>
                              <button href="https://gloriousmotive.com/support-tickets/" target="_black">Create a Ticket</button>
                         </div>
                    </div>

                    <div class="cards cards-container" href="' .PLUGIN_NAME_DOCS_URL .'" target="_black">
                         <h3>Documentation</h3>
                         <p>Read our documentation on how to use the product and get the best out of it. <strong>Get Started</strong> with the documentation to use the product the right way!</p>
                         <div>
                              <button href="' .PLUGIN_NAME_DOCS_URL .'" target="_black">Read Documentation</button>
                         </div>
                    </div>
               </div>

               ';
          }



     }

}


/**
 *  Prepare if class 'Plugin_Name_Services' exist.
 *  Kicking this off by calling 'get_instance()' method
 */
Plugin_Name_Services::get_instance();

