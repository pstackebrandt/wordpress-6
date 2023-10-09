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


define('AUTH_KEY',         'XRC9KIiRHLKUTzmFu8+A1BqjNXEyE+VChLkU+xP7jktPJLnV1E0KuggvPFM+zRbV2ttwur53a03MkqYNGpTTxw==');
define('SECURE_AUTH_KEY',  'KrtmtYUDvfqiUGzJYiFzJF0waKKv7civysgBp6G49e293lZ8MPwJ1ZDayvTbBbwKl5IkbYGRhsvRhZGcrqefAg==');
define('LOGGED_IN_KEY',    '6BM9Ofy6sy71Sx45cpJF5fKB5xDGQtsEUaDZ1xCOwWjtXS0L2ppcdVAkKiVeP+wzTmppvlr28CywGgUWuFH0Mg==');
define('NONCE_KEY',        'NmvOZKo4ogbxrUbc/DRCvYuoc1G1apxzO4prCcg2ABc71G6iSqIPFp2oq6ce/eSNGdXDp6YPr+k0ibiqT6Tvtw==');
define('AUTH_SALT',        '6c3s/AKAi3QwdLH5z6rhPCi5MFNpMPOS8kOr4mhYiQc/NAWrjaqI3vY8SM4CKxMi6KWIJB1tEaleKveH4GJJNg==');
define('SECURE_AUTH_SALT', 'UO0WbMg8p78/agsDHGhGBnZvIytlpB0hFhKaASVHuCI8k94iOPqykdrhFgGWCm8sQZhx0P/0tvawny9vU+/55g==');
define('LOGGED_IN_SALT',   'mZiWr6xHYTajMvpf5ImqGkUG5gbGSP4gFE/mqWDaUh2i1vEl/bWmpQGjcC+h+JRnk+32i3u41TDiUktVQQSVbg==');
define('NONCE_SALT',       'dhfeGfxhKl93HVK8+Fxr+LqMDhoZtBEOhMJR+o4ktQwghq5W8Zw2A9JqPn0k9La8kDDxUHm6SD75z+baH1o46w==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
