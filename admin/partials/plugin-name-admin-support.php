<?php
/**
 * Class: Plugin_Name_Support
 */

if ( ! defined ( 'ABSPATH') ) {
     exit;
}



//Init the Class
if (! class_exists('Plugin_Name_Support')) {

     final class Plugin_Name_Support {
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


          public function display_plugin_name_support() {
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
                         <h3 style="margin-top:0px;">Support Ticket ( For Customers Only )</h3>
                         <p style="margin-bottom:20px;"><strong>Need Support!</strong> Create a ticket to fix your problem easily. Our Support team is ready to fix your problem. Active License is required.</p>
                         <div>
                              <a class="cards-button" href="https://gloriousmotive.com/support-tickets/" target="_black">Create a Ticket</a>
                         </div>
                    </div>

                    <div class="cards cards-container margin20-lr" href="https://gloriousmotive.com/contact" target="_black">
                         <h3 style="margin-top:0px;">Contact us</h3>
                         <p style="margin-bottom:20px;">Want to get in touch with us, its simple. Click this button, fill the form and type your message and w will get back to you in <strong>24 hours.</strong></p>
                         <div>
                              <a class="cards-button" href="https://gloriousmotive.com/contact" target="_black">Contact us</a>
                         </div>
                    </div>

                    <div class="cards cards-container" href="' .PLUGIN_NAME_DOCS_URL .'" target="_black">
                         <h3 style="margin-top:0px;">Documentation</h3>
                         <p style="margin-bottom:20px;">Read our documentation on how to use the product and get the best out of it. <strong>Get Started</strong> with the documentation to use the product the right way!</p>
                         <div>
                              <a class="cards-button" href="' .PLUGIN_NAME_DOCS_URL .'" target="_black">Read Documentation</a>
                         </div>
                    </div>
               </div>

               ';
          }


          public function display_plugin_name_support_compare() {
               return '
                    </br><div class="gm-title">
                         <div class="gm-title-style">
                              <h3 class="gm-text6">
                                   <span>Whats in Support</span>
                              </h3>
                         </div>
                    </div>
                    <div class="service-container">
                         <div class="cards cards-container" href="https://gloriousmotive.com/support-tickets/" target="_black">
                              <h3 style="margin-top:0px;">What’s Included</h3>
                              <ul class="support_ul">
                                   <li>
                                        <strong>Assistance With Theme Installation</strong>
                                        If after following all instructions in theme documentation you still have troubles installing your theme, we’ll gladly help you and point you in the right direction.
                                   </li>
                                   <li>
                                        <strong>Modifications Covered by Theme Functionality</strong>
                                        Minor tweaks or changes that can be done without modifying theme source files or implementing new features.
                                   </li>
                                   <li>
                                        <strong>Theme Compatibility With Included Plugins</strong>
                                        We guarantee that your theme works as intended with any plugin bundled with or recommended by the theme. In case any issue occurs, it will be fixed in a timely manner.
                                   </li>
                                   <li>
                                        <strong>Assistance With Reported Theme Bugs</strong>
                                        Contact our support team if you’ve found an obvious bug that prevents you from using the theme as intended.
                                   </li>
                                   <li>
                                        <strong>Providing Information about Recommended Server Configuration</strong>
                                        The list of theme requirements is available in the theme documentation. Our Tech Support Team can always point you to the server configuration changes that will solve the issue you faced.
                                   </li>
                                   <li>
                                        <strong>General Guidelines on Website Speed Optimization</strong>
                                        Website loading time depends on many factors like server response time, image optimization, caching etc. Our Tech Support Team can check your website and point you to the steps on improving your website performance.
                                   </li>
                              </ul>
                              <div>
                                   <a class="cards-button" href="https://gloriousmotive.com/support-tickets/" target="_black">Create a Ticket</a>
                              </div>
                         </div>


                         <div class="cards cards-container" href="' .PLUGIN_NAME_DOCS_URL .'" target="_black">
                              <h3 style="margin-top:0px;">What’s Not Included</h3>
                              <ul class="support_ul">
                                   <li>
                                        <strong>Complete Theme Installation From Start to Finish</strong>
                                        If you’re new to WordPress, or simply don’t have enough time, you can always order our theme installation service and we’ll install the theme for you.
                                   </li>
                                   <li>
                                        <strong>Customization Not Covered by Theme Functionality</strong>
                                        This includes extending or modifying your theme beyond its advertised features. For any development work, you can always refer to our custom studio.
                                   </li>
                                   <li>
                                        <strong>Support for 3rd Party Plugins</strong>
                                        We do not guarantee full compatibility of your theme with 3rd party plugins. Making a theme compliant with the plugin may require additional customization which is not included in support service.
                                   </li>
                                   <li>
                                        <strong>Help With Additional Scripts or Custom Code Added to the Theme</strong>
                                        Custom code and scripts you add on the website may conflict with the theme. Resulting issues are not covered by our Support Policy. For any development work, you can always refer to our custom studio.
                                   </li>
                                   <li>
                                        <strong>Server Environment Setup</strong>
                                        Issues caused by your web hosting, server environment or software installed on your local machine go beyond our standard support service. Please contact your web hosting provider or consult the documentation for the software that you’re using to get the necessary assistance.
                                   </li>
                                   <li>
                                        <strong>Website Speed Optimization and SEO</strong>
                                        Optimizing your website performance or search engine optimization is beyond our support service. Feel free to get in touch with Themerex Customization Studio to get a quote on these offers.
                                   </li>
                              </ul>
                              <div>
                                   <a class="cards-button" href="' .PLUGIN_NAME_DOCS_URL .'" target="_black">Read Documentation</a>
                              </div>
                         </div>
                    </div>
               ';
          }

     }

}


/**
 *  Prepare if class 'Plugin_Name_Support' exist.
 *  Kicking this off by calling 'get_instance()' method
 */
Plugin_Name_Support::get_instance();

