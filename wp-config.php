<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'yUlTFF0V7l9ptjK+6hd9CG3GsovI9uNYE8JzwRgCqBFenvYwt+evIqvslOZkUcEEBgtvHcamQh/YzAOZhksvRA==');
define('SECURE_AUTH_KEY',  'lE21T7UoeQIXvcNhxY23x+o4bsALYNRlPBKvi55YvN/APHvXQt+Bug5U5ymOL92O4h252iuI8aLThPENb09vbw==');
define('LOGGED_IN_KEY',    '3djEpoVdJpyPMelt0gzgQ1bPt5BvIcDIRzaNVwZllZpHzq3q4Z749dekgSbT+uyuJIoE26/sHFATr6Uhc3ZPzQ==');
define('NONCE_KEY',        'IhDIXv5HXTf1Ag86oe+qS1T8DpXEewrCY+Hsz/uWsc+MIhpY70OSpsVrcv2BaByCkClPAaOLALTr07xwBF3JiA==');
define('AUTH_SALT',        'FT13KoyoNgjTDsU5bZo8bfUS1h9bg4WTr04q4qUvogamp40BxC89CRRgROUbBKKhaY9o1c0lPODH+btbNI19ww==');
define('SECURE_AUTH_SALT', 'nualg4EVGE26LqKz3YuWiYwmHLkh8VqumtZngn3ZAkor8BRwVcOjp/lsl7e/2ELQHHcGIJd1Ow/iUoM9/1ckBQ==');
define('LOGGED_IN_SALT',   'e0mm5ztFZupLXgwGxOYO5nI84v5qg4xu2wE9YN0Wg4bJzLRmsvSB4SNk4F7BuF+QvUB+gga1PyOqZmk8uKRI1Q==');
define('NONCE_SALT',       '5+doEdZ72E6eEKRcyACGLz94x+zAWqTUjKmr++C0GwD8g56YoVgeQkPDlHBtZBimddD3fFDFAA3q3m39bwWuew==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
