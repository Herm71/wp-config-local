<?php
/**
 * WP-Local configuration for local WordPress. development environment. 
 *
 * This file works in conjunction with a special if-statement placed in your 
 * wp-config file.
 *
 * For use in local development environment.
 * Make sure to add wp-config.local.php to your .gitignore file.
 * This file SHOULD NOT  be on the production server
 * 
 * Place following if-statement in wp-config.php:
 *
 *
 *  if (file_exists(dirname(__FILE__). '/wp-config.local.php')) {
 *      include (dirname(__FILE__). '/wp-config.local.php');
 *      }
 * 
 *  else {
 *      ** Live server's MySQL settings here  **
 *      }
 * @author Jason Chafin, Blackbird Consulting
 */



// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'database_name_here');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'bbwp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);
