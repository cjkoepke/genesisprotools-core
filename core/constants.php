<?php

namespace Uno;

/**
 * Setup the Uno child theme constants.
 *
 * @package    Uno Free
 * @author     Calvin Koepke <hello@calvinkoepke.com>
 * @author     Rafal Tomal <rafal@rafaltomal.com>
 * @license    https://www.gnu.org/licenses/gpl-3.0.en.html  GPL-3.0
 * @version    0.0.1
 * @link       https://github.com/cjkoepke/uno
 * @since      0.0.1
 */

$theme = wp_get_theme();

// Core paths.
define( 'UNO_CORE_PATH',       __DIR__                                  );
define( 'UNO_CORE_URL',        get_stylesheet_directory_uri() . '/core' );
define( 'CHILD_ROOT_PATH',     get_stylesheet_directory()               );
define( 'CHILD_ROOT_URL',      get_stylesheet_directory_uri()           );
define( 'CHILD_VENDOR_PATH',   CHILD_ROOT_PATH . '/vendor'              );
define( 'CHILD_VENDOR_URL',    CHILD_ROOT_URL . '/vendor'               );

// Asset paths.
define( 'CHILD_CSS_PATH',      CHILD_ROOT_PATH . '/dist/css'            );
define( 'CHILD_CSS_URL',       CHILD_ROOT_URL . '/dist/css'             );
define( 'CHILD_JS_PATH',       CHILD_ROOT_PATH . '/dist/js'             );
define( 'CHILD_JS_URL',        CHILD_ROOT_URL . '/dist/js'              );
define( 'CHILD_IMAGE_PATH',    CHILD_ROOT_PATH . '/dist/images'         );
define( 'CHILD_IMAGE_URL',     CHILD_ROOT_URL . '/dist/images'          );
define( 'CHILD_SVG_PATH',      CHILD_ROOT_PATH . '/dist/svg'            );
define( 'CHILD_SVG_URL',       CHILD_ROOT_URL . '/dist/svg'             );

// Theme information.
define( 'CHILD_THEME_NAME',    $theme->get('Name')                      );
define( 'CHILD_THEME_URL',     $theme->get('ThemeURI')                  );
define( 'CHILD_THEME_VERSION', $theme->get('Version')                   );
define( 'CHILD_THEME_AUTHORS', $theme->get('Author')                    );
define( 'CHILD_THEME_HANDLE',  strtolower( CHILD_THEME_NAME )           );
