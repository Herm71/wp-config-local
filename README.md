wp-config-local
===============

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