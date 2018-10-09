<?php
/**
 * Setup the Uno master class. This includes all the basic
 * helper functions, files, and libraries the Uno theme needs.
 *
 * @package    Uno Free
 * @author     Calvin Koepke <hello@calvinkoepke.com>
 * @author     Rafal Tomal <rafal@rafaltomal.com>
 * @license    https://www.gnu.org/licenses/gpl-3.0.en.html  GPL-3.0
 * @version    0.0.1
 * @link       https://github.com/cjkoepke/uno
 * @since      0.0.1
 */

class Uno {

	function __construct() {
		self::init();
	}

	/**
	 * Setup the required child theme settings.
	 * - Load constants.
	 * - Register class autoloader.
	 * - Autoload /src/ folder.
	 *
	 * @since 0.0.1
	 */
	public static function init() {

		// Constants.
		require_once( __DIR__ . '/constants.php' );

		// Autoloading.
		self::register_class_autoloader();

		// Ensure Genesis is loaded first.
		add_action( 'after_setup_theme', function() {
			Uno::autoload( CHILD_ROOT_PATH . '/src' );
		} );
	}

	/**
	 * Defines the autoloader for theme classes. If a class is not available,
	 * the autoloader will look in the root /classes/ folder for a file that
	 * corresponds with the class name being called. This allows you to call
	 * classes without having to import them.
	 *
	 * @since 0.0.1
	 */
	public static function register_class_autoloader() {
		spl_autoload_register( function( $class ) {
			$file = CHILD_ROOT_PATH . "/classes/{$class}.class.php";
			if ( stream_resolve_include_path( $file ) ) {
				include $file;
			}
		} );
	}

	/**
	 * Recursively loads all php files in all subdirectories of the given path.
	 * @author Aaron Holbrook (modified)
	 * @link https://github.com/a7/autoload/edit/master/src/autoload.php
	 *
	 * @param $directory
	 */
	public static function autoload( $directory ) {

		// Get a listing of the current directory
		$scanned_dir = scandir( $directory );

		if ( empty( $scanned_dir ) ) {
			return;
		}

		if ( count( $scanned_dir ) > 200 ) {
			trigger_error( 'Too many files attempted to load via autoload' );
		}

		// Ignore these items from scandir
		$ignore = [
			'.',
			'..'
		];

		// Remove the ignored items
		$scanned_dir = array_diff( $scanned_dir, $ignore );

		foreach ( $scanned_dir as $item ) {

			$filename  = $directory . '/' . $item;
			$real_path = realpath( $filename );

			if ( false === $real_path ) {
				continue;
			}

			$filetype = filetype( $real_path );

			if ( empty( $filetype ) ) {
				continue;
			}

			// If it's a directory then recursively load it
			if ( 'dir' === $filetype ) {
				self::autoload( $real_path );
			}

			// If it's a file, let's try to load it
			else if ( 'file' === $filetype ) {

				// Don't allow files that have been uploaded
				if ( is_uploaded_file( $real_path ) ) {
					continue;
				}

				$filesize = filesize( $real_path );
				// Don't include empty or negative sized files
				if ( $filesize <= 0 ) {
					continue;
				}

				// Don't include files that are greater than 300kb
				if ( $filesize > 300000 ) {
					continue;
				}

				$pathinfo = pathinfo( $real_path );

				// An empty filename wouldn't be a good idea
				if ( empty( $pathinfo['filename'] ) ) {
					continue;
				}

				// We want just a PHP extension!
				if ( 'php' !== $pathinfo['extension'] ) {
					continue;
				}

				// Only for files that really exist
				if ( true !== file_exists( $real_path ) ) {
					continue;
				}

				if ( true !== is_readable( $real_path ) ) {
					continue;
				}

				require_once( $real_path );
			}
		}
	}
}