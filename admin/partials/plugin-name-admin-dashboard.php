<?php
/**
 * Class: Plugin_Name_Dashboard
 */

if ( ! defined ( 'ABSPATH') ) {
     exit;
}



//Init the Class
if (! class_exists('Plugin_Name_Dashboard')) {

    final class Plugin_Name_Dashboard {
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


        /**
         * HTML For Dashboard
         */
        public function plugin_name_dashboard_display() {
            ?>
               <div class="gm-title">
                    <div class="gm-title-style">
                         <h2 class="gm-text6">
                              <span>DASHBOARD</span>
                         </h2>
                    </div>
               </div>

               
               <div class="mt-10 max-w-screen-xl min-w-screen-md mx-auto">
                    <div class="bg-white rounded-lg border border-stroke flex flex-col space-y-6 items-center justify-center py-24 mb-12">
                         <h1 class="font-medium text-3xl">Welcome to Plugin Name</h1>
                         <p class="text-lg text-center">To use plugin name, be sure to configure the settings first.<br>Once configured, you can enjoy the .</p>
                         <div class="flex space-x-4">
                              <a class="btn btn-primary btn-lg" target="_blank" 
                              href="https://downloads.wordpress.org/plugin/plugin-name.zip">
                                   <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" role="img" class="icon h-5 w-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3"></path>
                                   </svg>
                                   <span>Download Plugin</span>
                              </a>
                              <a class="btn btn-white btn-lg" target="_blank"
                              href="https://gloriousthemes.com">
                                   <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000" role="img" class="icon h-5 w-5">
                                   <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 5.25a3 3 0 013 3m3 0a6 6 0 01-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1121.75 8.25z"></path>
                                   </svg>
                                   <span>Visit Website</span>
                              </a>
                         </div>
                         <p class="text-normal">
                              Need help?
                              <a target="_blank" data-controller="link" href="https://gloriousthemes.com/support"><span>Head over to our support site.</span></a>
                         </p>
                    </div>
               </div>               


               <div class="card-gm mx-auto grid grid-cols-1 gap-px bg-stroke sm:grid-cols-2 lg:grid-cols-4" style="max-width:100% !important">
                    <div class="flex flex-wrap items-baseline justify-between gap-x-4 gap-y-2 bg-white px-4 py-8 sm:px-6 xl:px-8">
                         <div class="text-sm font-medium text-primaryGray/75 leading-6 uppercase tracking-wider">
                         Total Referrals
                         </div>
                         <div class="w-full flex-none text-3xl font-medium leading-10 tracking-tight">
                         0
                         </div>
                    </div>
                    <div class="flex flex-wrap items-baseline justify-between gap-x-4 gap-y-2 bg-white px-4 py-8 sm:px-6 xl:px-8">
                         <dt class="text-sm font-medium text-primaryGray/75 leading-6 uppercase tracking-wider">
                         Paid Referrals
                         </dt>
                         <dd class="w-full flex-none text-3xl font-medium leading-10 tracking-tight">
                         0
                         </dd>
                    </div>
                    <div class="flex flex-wrap items-baseline justify-between gap-x-4 gap-y-2 bg-white px-4 py-8 sm:px-6 xl:px-8">
                         <dt class="text-sm font-medium text-primaryGray/75 leading-6 uppercase tracking-wider">
                         Unpaid Referrals
                         </dt>
                         <dd class="w-full flex-none text-3xl font-medium leading-10 tracking-tight">
                         0
                         </dd>
                    </div>
                    <div class="flex flex-wrap items-baseline justify-between gap-x-4 gap-y-2 bg-white px-4 py-8 sm:px-6 xl:px-8">
                         <dt class="text-sm font-medium text-primaryGray/75 leading-6 uppercase tracking-wider">
                         Unpaid Commission
                         </dt>
                         <dd class="w-full flex-none text-3xl font-medium leading-10 tracking-tight">
                         $0.00
                         </dd>
                    </div>
               </div>
               

               <div class="mt-10 service-container">
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



            <?php
        }

    } //class

}