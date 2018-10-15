<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . '/wordpress');
define('WP_HOME',    'http://' . $_SERVER['SERVER_NAME']);

define('WP_CONTENT_DIR', $_SERVER['DOCUMENT_ROOT'] . '/wp-content');
define('WP_CONTENT_URL', 'http://' . $_SERVER['SERVER_NAME'] . '/wp-content');

if ($_SERVER['REMOTE_ADDR']=='127.0.0.1') {
    define('WP_ENV', 'development');
} else {
    define('WP_ENV', 'production');
}

define('WP_DEFAULT_THEME', 'understrap-child-master');
// ** MySQL settings - You can get this info from your web host ** //
// if (WP_ENV == 'development') {
//     define('DB_NAME', 'sopro');
//     define('DB_USER', 'root');
//     define('DB_PASSWORD', '');
//     define('DB_HOST', 'localhost');
// } else {
//     define('DB_NAME', 'mydb-prod');
//     define('DB_USER', 'username');
//     define('DB_PASSWORD', 'pasdword');
//     define('DB_HOST', 'mysql.mysite.com');
// } 

/** The name of the database for WordPress */
 define('DB_NAME', 'sopro');

/** MySQL database username */
 define('DB_USER', 'root');

/** MySQL database password */
 define('DB_PASSWORD', '');

/** MySQL hostname */
 define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
 define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
 define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'iU2FFTynGZt2VJWtD+2hJbGoK2oqOYgbH5FqnQRwLwfqVywKisbs0L/KcYcSLzir/lr/gyWAzpSkfUrmhkCdJw==');
define('SECURE_AUTH_KEY',  'R48uJAlHTSxiCt9Vvn+A9LYtIJ9/NnwqdXiAHeIfcNVHbZ3sSQqadoshYhVgU9Qx3f4Pk1V/E608A7Jw4vsl9Q==');
define('LOGGED_IN_KEY',    'i3JvKtEjEfCisHhMLWLaVHAEcVkWXpm0MM5V9shKXrqbAtoX/w7z+K6YBkP/tmVDohWrGQIDjXL35u79BicOqw==');
define('NONCE_KEY',        'hMP37whVj/g5er9/WbVGR3MVMC3+JCiR2IO5/RHXJq30FfqL6J6lCrQWR+qQdOWfMZAKWeBtl2cVcKm1P8koYg==');
define('AUTH_SALT',        'iQeXn5iPG63VZpjZc4jhFomsxrcP+LoQ27KV522EbY9AXhjrayVPhHcAPNeGuKJtmWZy2Y4A29yby0hUetBZ+A==');
define('SECURE_AUTH_SALT', 'gMKDiyrUanNvYhbccu0AL4ObhfUFl/YvyWvAcWDlAd8C6YACC6QAaVmTXRowfo1xlO9MHeBNCraIdACmhfMnEw==');
define('LOGGED_IN_SALT',   'em6AS4SRzUXWu/PxV7ddjp9kXm3O7AbPH3T1ehVq8oxTXuwBf3dcLxGB/Pio1XWDXsDDrGt49RcFoh16lFZrNw==');
define('NONCE_SALT',       'uHLfW08XZcYUIBgNPakzy9h02ZFydTycpcxLpg0X+1OyrbnHEa4zaSZSB6Q89TuwT9t+tHVr0I/oUkhQCcL1AA==');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
