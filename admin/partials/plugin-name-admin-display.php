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

?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->

<div class="gm-settings-container">
    <!-- Add your settings form or content here -->

    <div class="gm-settings-header-container">
        <div id="gm-settings-header">

            <div class="header-logo">
                <span class="breadcrumb-item__label breadcrumb-item__label--link">
                    <img style="display: block" src="http://surecrafted.local/wp-content/plugins/surecart/images/logo.svg" alt="SureCart" width="125">
                </span>
            </div>

            <div class="header-menu">
                <span>
                    <div class="">
                        Version: <?php echo PLUGIN_NAME_THEME_VERSION; ?>
                    </div>
                </span>
                <span></span>
                <span></span>
            </div>

            <gm-flex class="hydrated">
            <form action="
            /wp-admin/admin.php?page=gm-settings&amp;cache=clear			" method="post">
                    <input type="hidden" id="nonce" name="nonce" value="4980c3282f"><input type="hidden" name="_wp_http_referer" value="/wp-admin/admin.php?page=gm-settings">				<gm-button type="default" size="small" outline="" submit="" class="hydrated">Clear Account Cache</gm-button>
                </form>
                <gm-button type="text" size="small" href="https://status.surecart.com" target="_blank" class="hydrated">
                    SureCart Status				<gm-icon name="external-link" slot="suffix" class="hydrated"></gm-icon>
                </gm-button>
                <gm-tag type="default" size="medium" class="hydrated">
                    Version 2.15.0			</gm-tag>
            </gm-flex>
        </div>
    </div>
    <?php echo $tabsoutput;?>


    <div id="gm-settings-content">
		<div id="gm-nav" style="--gm-tabs-min-width: 0;">
	
	<gm-tab href="http://surecrafted.local/wp-admin/admin.php?page=gm-settings&amp;tab=connection" id="tab-1" panel="" class="hydrated">
		<gm-icon style="font-size: 18px; width: 18px; stroke-width: 4; opacity: 0.7" name="upload-cloud" slot="prefix" class="hydrated"></gm-icon>
		Connection	</gm-tab>

	<gm-tab href="http://surecrafted.local/wp-admin/admin.php?page=gm-settings&amp;tab=advanced" id="tab-2" panel="" class="hydrated">
		<gm-icon style="font-size: 18px; width: 18px; stroke-width: 4; opacity: 0.7" name="sliders" slot="prefix" class="hydrated"></gm-icon>
		Advanced	</gm-tab>

			<div class="gm-item-stick-bottom">
			<gm-card href="https://app.surecart.com/billing" class="surecart-cta hydrated">
				<gm-flex flex-direction="column" style="--spacing: var(--gm-spacing-medium)" class="hydrated">
					<gm-flex justify-content="flex-start" class="hydrated">
						<gm-icon style="font-size: 18px; width: 18px; stroke-width: 4; color: var(--gm-color-primary-500)" name="zap" class="hydrated"></gm-icon>
						<gm-text style="--font-size: var(--gm-font-size-large); --font-weight: var(--gm-font-weight-bold)" class="hydrated">Boost Your Revenue</gm-text>
					</gm-flex>
					<gm-text class="hydrated">Unlock revenue boosting features when you upgrade to Pro!</gm-text>
					<gm-button type="primary" href="https://app.surecart.com/billing" target="_blank" size="medium" class="hydrated">
						Upgrade To Premium					</gm-button>
				</gm-flex>
			</gm-card>
		</div>
	
	<a href="https://surecart.com/support/" target="_blank" class="surecart-help">
		<gm-icon style="font-size: 18px; width: 22px; stroke-width: 4;" name="life-buoy" class="hydrated"></gm-icon>
		Help	</a>

</div>

		<div class="gm-container">
			<div class="gm-content" id="app"><gm-form class="hydrated"><div class="css-1mng02n"><div class="css-6zq5xv"><h3 class="css-14dcts6"><gm-icon name="upload-cloud" class="hydrated"></gm-icon><span>Connection Settings</span></h3></div><gm-button type="primary" submit="" aria-disabled="true" disabled="" size="medium" class="hydrated">Save</gm-button></div><div class="css-1mxot49" style="--gm-form-row-spacing: var(--gm-spacing-large);"><gm-dashboard-module heading="Connection Details" style="--gm-dashboard-module-spacing: 1em; --gm-dashbaord-module-heading-size: 1.1em;" class="hydrated"><span slot="description">Update your api token to change or update the connection to SureCart.</span><gm-card class="hydrated"><gm-input label="API Token" placeholder="Enter your api token" value="false" type="password" size="medium" class="hydrated"></gm-input></gm-card><div><gm-button type="primary" submit="" aria-disabled="true" disabled="" size="medium" class="hydrated">Save</gm-button></div></gm-dashboard-module></div><div class="components-snackbar-list css-11pxcvf" tabindex="-1"></div><div class="components-snackbar-list css-11pxcvf" tabindex="-1"></div></gm-form></div>
		</div>
	</div>
    

</div>