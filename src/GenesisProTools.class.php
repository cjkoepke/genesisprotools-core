<?php

namespace GPT\Core;

/**
 * Setup the GPT master class. This includes all the basic
 * helper functions, files, and libraries the in the Genesis Pro Tools package.
 *
 * @package    Genesis Pro Tools
 * @author     Calvin Koepke <hello@calvinkoepke.com>
 * @license    https://www.apache.org/licenses/LICENSE-2.0 Apache 2.0
 * @version    1.0.0
 * @link       https://genesisprotools.com
 * @since      1.0.0
 */

final class GenesisProTools {

	/**
	 * Only allow a single instance.
	 *
	 * @var null
	 */
	public static $instance = null;

	/**
	 * Instantiate a new instance, or return an existing one.
	 *
	 * @since 1.0.0
	 * @return null|stdClass
	 */
	public static function init() {
		if ( is_null( self::$instance ) ) {
			self::$instance = new self();
		}

		return self::$instance;
	}

	/**
	 * GPT constructor.
	 *
	 * @since 1.0.-
	 */
	private function __construct() {

		$theme = \wp_get_theme();

		// Core paths.
		define( 'GPT_CORE_PATH',       \plugin_dir_path( __DIR__ )               );
		define( 'GPT_CORE_URL',        \plugin_dir_url( __DIR__ )                );
		define( 'CHILD_ROOT_PATH',     \get_stylesheet_directory()               );
		define( 'CHILD_ROOT_URL',      \get_stylesheet_directory_uri()           );
		define( 'CHILD_VENDOR_PATH',   CHILD_ROOT_PATH . '/vendor'               );
		define( 'CHILD_VENDOR_URL',    CHILD_ROOT_URL . '/vendor'                );

		// Asset paths.
		define( 'CHILD_CSS_PATH',      CHILD_ROOT_PATH . '/dist/css'             );
		define( 'CHILD_CSS_URL',       CHILD_ROOT_URL . '/dist/css'              );
		define( 'CHILD_JS_PATH',       CHILD_ROOT_PATH . '/dist/js'              );
		define( 'CHILD_JS_URL',        CHILD_ROOT_URL . '/dist/js'               );
		define( 'CHILD_IMAGE_PATH',    CHILD_ROOT_PATH . '/dist/images'          );
		define( 'CHILD_IMAGE_URL',     CHILD_ROOT_URL . '/dist/images'           );
		define( 'CHILD_SVG_PATH',      CHILD_ROOT_PATH . '/dist/svg'             );
		define( 'CHILD_SVG_URL',       CHILD_ROOT_URL . '/dist/svg'              );

		// Theme information.
		define( 'CHILD_THEME_NAME',    $theme->get('Name')                       );
		define( 'CHILD_THEME_URL',     $theme->get('ThemeURI')                   );
		define( 'CHILD_THEME_VERSION', $theme->get('Version')                    );
		define( 'CHILD_THEME_AUTHORS', $theme->get('Author')                     );
		define( 'CHILD_THEME_HANDLE',  strtolower( CHILD_THEME_NAME )            );

		// Ensure Genesis is loaded first.
		add_action( 'after_setup_theme', function() {
			\A7\autoload( CHILD_ROOT_PATH . '/src' );
		} );

	}
}