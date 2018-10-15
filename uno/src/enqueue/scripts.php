<?php
/**
 * This file was automatically generated by Genesis Pro Tools.
 *
 * @package    Genesis Pro Tools
 * @author     Calvin Koepke <hello@calvinkoepke.com>
 * @version    1.0.0
 * @link       https://genesisprotools.com
 * @since      1.0.0
 */

add_action( 'wp_enqueue_scripts', 'gpt_load_scripts' );
/**
 * Load compiled theme scripts.
 *
 * @since 1.0.0
 */
function gpt_load_scripts() {

	// Load scripts here.
	$ext = defined('SCRIPT_DEBUG') && SCRIPT_DEBUG ? '' : '.min';

	wp_enqueue_script( 'uno-theme-js', CHILD_JS_URL . "/theme${ext}.js", array('jquery'), CHILD_THEME_VERSION, true );
	wp_localize_script(
		array(
			'uno-responsive-menu',
			'genesis_responsive_menu',
			array(
				'mainMenu'         => __( 'Menu', 'uno' ),
				'menuIconClass'    => 'dashicons-before dashicons-menu',
				'subMenu'          => __( 'Menu', 'uno' ),
				'subMenuIconClass' => 'dashicons-before dashicons-arrow-down-alt2',
				'menuClasses'      => array(
					'combine' => array(
						'.nav-primary',
						'.nav-header',
						'.nav-secondary',
					),
					'others'  => array(
						'.nav-footer',
						'.nav-sidebar',
					),
				),
			);
		)
	);

}