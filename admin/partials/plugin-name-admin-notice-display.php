<?php

// Assuming this is where you want to display the banner, within the admin section.
function plugin_name_display_notification_banner() {
     echo '<div id="plugin-notification"  claim-url="'. PLUGIN_NAME_NOTIFICATION_LINK . '" class="hydrated">
     <div class="gm-banner">
          <div></div>
          <div class="gm-banner-flex"><p>'. PLUGIN_NAME_NOTIFICATION_MESSAGE .'
               <a href="'. PLUGIN_NAME_NOTIFICATION_LINK .'" target="_blank">'. PLUGIN_NAME_NOTIFICATION_LINK_TEXT .' 
                    <div part="base" class="icon" role="img" aria-label="arrow right">
                         <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                              <line x1="5" y1="12" x2="19" y2="12"></line>
                              <polyline points="12 5 19 12 12 19"></polyline>
                         </svg>
                    </div>
               </a>
          </p></div>
          <div class="dismiss-btn-div"><a class="dismiss-btn" href="#" id="dismiss-banner">Dismiss</a></div>
          
     </div>
</div>';
 }
 //add_action('admin_notices', 'plugin_name_display_notification_banner');
 plugin_name_display_notification_banner();

?>

