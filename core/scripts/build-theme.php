<?php

if ( ! function_exists( 'shell_exec' ) ) {
	echo 'Your environment does not support executing shell scripts from PHP.';
	die;
}

shell_exec( __DIR__ . '/shell/functions.sh' );