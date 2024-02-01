<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Plugin_Name
 * @subpackage Plugin_Name/admin/partials
 */
if( PLUGIN_NAME_NOTIFICATION_ONOFF == 'ON' ){
    //Gets Admin Notification
    require_once PLUGIN_NAME_DIR . '/admin/partials/plugin-name-admin-notice-display.php';
  
}

// CALL SERVICES
require_once PLUGIN_NAME_DIR . '/admin/partials/plugin-name-admin-support.php';
$this->getSupport = new Plugin_Name_Support();

// CALL LICENSE
require_once PLUGIN_NAME_DIR . '/admin/partials/plugin-name-admin-license.php';
$this->getLicense = new Plugin_Name_License();

// SHOW RECOMMENDED PRODUCTS
require_once PLUGIN_NAME_DIR . '/admin/partials/plugin-name-admin-recommended.php';
$this->getRecommended = new Plugin_Name_Recommeneded();



?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->

<div class="gm-settings-container">
    <!-- Add your settings form or content here -->

    <div class="gm-settings-header-container">
        <div id="gm-settings-header">

            <div class="header-logo">
                <span class="breadcrumb-item__label breadcrumb-item__label--link">
                    <img style="display: block" src="<?php echo PLUGIN_NAME_URL;?>admin/images/logo-black.png" alt="PLUGIN-NAME" width="225">
                </span>
            </div>

            <div class="header-menu">
                <span>
                    <div class="">
                        Theme Version: <?php echo PLUGIN_NAME_THEME_VERSION; ?>
                    </div>
                </span>
                <span>
                    <div class="">
                        Plugin Version: <?php echo PLUGIN_NAME_VERSION; ?>
                    </div>
                </span>
                <span>
                    <div class="">
                        WP Version: <?php echo PLUGIN_NAME_THEME_VERSION; ?>
                    </div>
                </span>
            </div>

        </div>
    </div>
   


    <div id="gm-settings-content">

        <div class="idss" id="gm-nav" style="--gm-tabs-min-width: 0;">
            <a href="#dashboard">Dashboard</a>
            <a href="#settings">Settings</a>
            <a href="#themes">Themes</a>
            <a href="#plugins">Plugins</a>
            <a href="#recommended">Recommended Products</a>
            <a href="#support">Support & Documentation</a>
            <a href="#license">License</a>
            <!-- Add more tabs as needed -->
    

		<div class="gm-item-stick-bottom">
            <div><b>Boost Your Revenue</b></div>
            <span>Unlock revenue boosting features when you upgrade to Pro!</span>
            <a href="https://gloriousthemes.com/support/" target="_blank" size="medium" >Upgrade To Premium</a>
		</div>

    </div>

	<div class="gm-container">
		<div class="gm-content" id="app">
            <div class="conts">
                <div id="dashboard" class="tab-content active">
                    <!-- Content for Tab 1 -->
                    <h3><span>Dashboard</span></h3>
                    <p>Content of Tab 1</p>
                </div>
                <div id="settings" class="tab-content">
                    <!-- Content for Tab 2 -->
                    <p>Content of Tab 2</p>
                </div>
                <div id="themes" class="tab-content">
                    <!-- Content for Tab 3 -->
                    <p>Content of Tab 3</p>
                </div>

                <div id="plugins" class="tab-content">
                    <!-- Content for Tab 1 -->
                    <h3><span>All Glorious Plugins</span></h3>
                    <p>Content of Tab 1</p>
                </div>

                <div id="recommended" class="tab-content">
                    <!-- Content for Tab recommended -->
                    <?php 
                    echo $recommended = $this->getRecommended->plugin_name_display_recommeneded();
                    ?>
                </div>

                <div id="support" class="tab-content">
                    <!-- Content for Tab support -->
                    <?php 
                    echo $support = $this->getSupport->display_plugin_name_support(); 
                    echo $this->getSupport->display_plugin_name_support_compare();
                    ?>
                    <div class="service-debug-container" style="margin-top:20px;">
                        <div class="gm-title">
                            <div class="gm-title-style">
                                <h3 class="gm-text6">
                                    <span>DEBUG DATA</span>
                                </h3>
                            </div>
                        </div>


                        <div class="heading__description" part="heading-description">
                            <slot name="description">
                                Copy this code and then paste it on your support ticket when the support team asks for Debug Data
                            </slot>
                            <div id="myDiv" class="cards cards-container">
                                <p>### DEBUG DATA STARTS ###.</p>
                                <?php
                                // CALL SERVICES
                                require_once PLUGIN_NAME_DIR . '/admin/partials/plugin-name-admin-status.php';
                                ?>
                                <p>### DEBUG DATA ENDS ###.</p>
                            </div>

                            <button class="cards-button" onclick="copyToClipboard()">Copy Debug Data</button>
                            <div id="successMessage"></div>
                        </div>
                    </div>
                </div>

                <div id="license" class="tab-content">
                    <!-- Content for Tab license -->
                    <?php 
                    echo $license = $this->getLicense->display_plugin_name_license();
                    if ( PLUGIN_NAME_LICENSE_ENGINE == 'el' ) {
                        echo $license = $this->getLicense->display_plugin_name_el_license_form();
                    } elseif ( PLUGIN_NAME_LICENSE_ENGINE == 'ed') {
                        echo $license = $this->getLicense->display_plugin_name_ed_license_form();
                    } elseif ( PLUGIN_NAME_LICENSE_ENGINE == 'wp') {
                        echo $license = $this->getLicense->display_plugin_name_wp_license();
                    } else {
                        //Oops
                    }
                     
                    ?>
                </div>
                <!-- Add more content sections as needed -->
            </div>
        </div>
	</div>
</div>