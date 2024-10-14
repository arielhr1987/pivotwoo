<?php
/**
 * Plugin Name: Pivotwoo
 * Version: 0.1.0
 * Author: The WordPress Contributors
 * Author URI: https://woo.com
 * Text Domain: pivotwoo
 * Domain Path: /languages
 *
 * License: GNU General Public License v3.0
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 *
 * @package extension
 */

 defined( 'ABSPATH' ) || exit;

if ( ! defined( 'MAIN_PLUGIN_FILE' ) ) {
	define( 'MAIN_PLUGIN_FILE', __FILE__ );
}

require_once plugin_dir_path( __FILE__ ) . '/vendor/autoload_packages.php';

use Pivotwoo\Admin\Setup;

// phpcs:disable WordPress.Files.FileName

/**
 * WooCommerce fallback notice.
 *
 * @since 0.1.0
 */
function pivotwoo_missing_wc_notice() {
	/* translators: %s WC download URL link. */
	echo '<div class="error"><p><strong>' . sprintf( esc_html__( 'Pivotwoo requires WooCommerce to be installed and active. You can download %s here.', 'pivotwoo' ), '<a href="https://woo.com/" target="_blank">WooCommerce</a>' ) . '</strong></p></div>';
}

register_activation_hook( __FILE__, 'pivotwoo_activate' );

/**
 * Activation hook.
 *
 * @since 0.1.0
 */
function pivotwoo_activate() {
	if ( ! class_exists( 'WooCommerce' ) ) {
		add_action( 'admin_notices', 'pivotwoo_missing_wc_notice' );
		return;
	}
}

if ( ! class_exists( 'Pivotwoo' ) ) :
	/**
	 * The pivotwoo class.
	 */
	class Pivotwoo {
		/**
		 * This class instance.
		 *
		 * @var \pivotwoo single instance of this class.
		 */
		private static $instance;

		/**
		 * Constructor.
		 */
		public function __construct() {
			if ( is_admin() ) {
				new Setup();
			}
		}

		/**
		 * Cloning is forbidden.
		 */
		public function __clone() {
			wc_doing_it_wrong( __FUNCTION__, __( 'Cloning is forbidden.', 'pivotwoo' ), $this->version );
		}

		/**
		 * Unserializing instances of this class is forbidden.
		 */
		public function __wakeup() {
			wc_doing_it_wrong( __FUNCTION__, __( 'Unserializing instances of this class is forbidden.', 'pivotwoo' ), $this->version );
		}

		/**
		 * Gets the main instance.
		 *
		 * Ensures only one instance can be loaded.
		 *
		 * @return \pivotwoo
		 */
		public static function instance() {

			if ( null === self::$instance ) {
				self::$instance = new self();
			}

			return self::$instance;
		}
	}
endif;

add_action( 'plugins_loaded', 'pivotwoo_init', 10 );

/**
 * Initialize the plugin.
 *
 * @since 0.1.0
 */
function pivotwoo_init() {
	load_plugin_textdomain( 'pivotwoo', false, plugin_basename( dirname( __FILE__ ) ) . '/languages' );

	if ( ! class_exists( 'WooCommerce' ) ) {
		add_action( 'admin_notices', 'pivotwoo_missing_wc_notice' );
		return;
	}

	Pivotwoo::instance();

}
