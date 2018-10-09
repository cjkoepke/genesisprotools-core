THEME_ROOT = $1

cd $THEME_ROOT && cat > functions.php << 'EOL'
<?php
/**
 * This file was automatically generated by Genesis Pro Tools.
 *
 * @package    Genesis Pro Tools
 * @author     Calvin Koepke <hello@calvinkoepke.com>
 * @license    https://www.apache.org/licenses/LICENSE-2.0 Apache 2.0
 * @version    1.0.0
 * @link       https://genesisprotools.com
 * @since      1.0.0
 */

/**
 * Import the main Genesis Pro Tools class.
 *
 * @since 1.0.0
 */
require_once( GPT_CORE_PATH '/GPT.class.php' );

/**
 * Instantiate the GPT class instance in the theme.
 *
 * @since 1.0.0
 */
GPT::init();
EOL