<?php
/**
 * Class: Plugin_Name_Widgets
 */

if ( ! defined ( 'ABSPATH') ) {
     exit;
}



//Init the Class
if (! class_exists('Plugin_Name_Widgets')) {

    final class Plugin_Name_Widgets {
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
        }

    } //class

}