<?php
/**
 * Class: Plugin_Name_License
 */

if ( ! defined ( 'ABSPATH') ) {
     exit;
}

//require_once PLUGIN_NAME_DIR . "/lib/tala-el/plugin-name-el.php";

//Init the Class
if (! class_exists('Plugin_Name_License')) {

     final class Plugin_Name_License {
          /**
		 * Member Variable
		 *
		 * @var instance
		 */
		private static $instance;


          /**
           * GET THE ACTIVATE LICENSE
           */
          private $activated_license;
          private $deactivated_license;

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

               require_once PLUGIN_NAME_DIR . "/lib/tala-el/plugin-name-el.php";
               $this->getLicenseELForm = new Plugin_Name_EL();
               //$activated_license = $this->getLicenseELForm->activated();
               //$deactivated_license = $this->getLicenseELForm->license_form();

               
        }


        public function display_plugin_name_license() {
               // Print to Debug Only    -   
               echo $license_key=get_option("Plugin_Name_EL_lic_Key","");
               return '
               <div class="gm-title">
                    <div class="gm-title-style">
                         <h3 class="gm-text6">
                              <span>LICENSE</span>
                         </h3>
                    </div>
               </div>';
        }

        public function display_plugin_name_el_license_form() {  
          //Gets the License Value from DB and Checks if not Empty
          $license_key=get_option("Plugin_Name_EL_lic_Key",""); 
          if( !empty ($license_key)) {
               //Display the Activated Status
               return $activated_license = $this->getLicenseELForm->activated();
          } else {
               //Display the License FORM
               return $deactivated_license = $this->getLicenseELForm->license_form();
          }
          
        }


        public function display_plugin_name_ed_license_form() {

        }

     }

}


/**
 *  Prepare if class 'Plugin_Name_Services' exist.
 *  Kicking this off by calling 'get_instance()' method
 */
Plugin_Name_License::get_instance();

