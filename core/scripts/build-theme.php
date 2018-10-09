<?php

if ( ! function_exists( 'shell_exec' ) ) {
	echo 'Your environment does not support executing shell scripts from PHP.';
	die;
}

shell_exec( __DIR__ . '/bin/bash /shell/functions.sh ' . get_stylesheet_directory() );
