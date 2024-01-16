<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Plugin_Name
 * @subpackage Plugin_Name/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Plugin_Name
 * @subpackage Plugin_Name/admin
 * @author     Your Name <email@example.com>
 */
class Plugin_Name_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * The Admin Tabs .
	 */
	//private $getAdminTabs;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

		//$this->getAdminTabs = new Plugin_Name_AdminTabs();

		// Hook into the WordPress admin menu action.
        add_action( 'admin_menu', array( $this, 'add_admin_page_suffix' ) );
		
		// Hook into the plugin action links filter.
		add_filter( 'plugin_name_action_links_' . plugin_basename( __FILE__ ), array( $this, 'plugin_name_add_settings_link' ) );
	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/plugin-name-admin.css', array(), $this->version, 'all' );
		
	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/plugin-name-admin.js', array( 'jquery' ), $this->version, false );
		wp_enqueue_script( 'plugin_name_tabs', plugin_dir_url( __FILE__ ) . 'js/plugin-name-tabs.js', array( 'jquery' ), $this->version, true );
		//wp_enqueue_script($handle, $src, $deps, $ver, $in_footer)

		$current_screen = get_current_screen();

		// Enqueue your CSS file here.
		wp_enqueue_style('plugin-name-globaladmin', plugins_url('../assets/css/global.css', __FILE__ ) ) ;

		// Enqueue CSS only if Admin and on URL gloriousmotive.
		if (
				$current_screen->id === 'toplevel_page_plugin_name' ||
				( $current_screen->id === 'plugin-name-submenu' && $current_screen->parent_base === 'plugin-name' )
		) {
				// Enqueue your CSS file here.
				wp_enqueue_style('plugin-name-admin', plugins_url('../css/plugin-name-admin.css', __FILE__ ) ) ;
		}

	}



	/**
     * Add an admin page to the WordPress admin menu.
     */
    public function add_admin_page_suffix() {
        add_menu_page(
			PLUGIN_NAME_NAME,
			PLUGIN_NAME_NAME,
			'manage_options',
			'plugin-name',
			array($this, 'render_admin_page_sufix'),
			'dashicons-star-filled', // Icon URL or Dashicon name
			5 // Menu Position
	   );

	   // Add submenu pages here.
	   add_submenu_page(
			'plugin-name',
			'Submenu Page',
			'Submenu Page',
			'manage_options',
			'plugin-name-submenu',
			array($this, 'render_subadmin_page_sufix')
	   );
    }

	/**
	* Render the admin page content.
	*/
	public function render_admin_page_sufix() {
		// Check user capabilities.
		if ( ! current_user_can( 'manage_options' ) ) {
			return;
		}

		//$tabsoutput = $this->getAdminTabs->display_plugin_name_admintabs();
		
		// Output the admin page HTML here.
		require_once PLUGIN_NAME_DIR . '/admin/partials/plugin-name-admin-display.php';
	}

	/**
	* Render the admin page content.
	*/
	public function render_subadmin_page_sufix() {
		// Check user capabilities.
		if ( ! current_user_can( 'manage_options' ) ) {
			return;
		}

		// Output the admin page HTML here.
		require_once PLUGIN_NAME_DIR . '/admin/partials/plugin-name-admin-display.php';
	}



	/**
     * Add settings link to the plugin description on the Plugins page.
     *
     * @param array $links Existing plugin action links.
     * @return array Modified plugin action links.
     */
    public function plugin_name_add_settings_link( $links ) {
        $settings_link = '<a href="' . esc_url( admin_url( 'admin.php?page=plugin_name' ) ) . '">' . esc_html__( 'Settings', 'plugin_name' ) . '</a>';
        array_push( $links, $settings_link );

        return $links;
    }

}
