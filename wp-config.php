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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'i7277991_wp1' );

/** MySQL database username */
define( 'DB_USER', 'i7277991_wp1' );

/** MySQL database password */
define( 'DB_PASSWORD', 'F.XPnHgOG6BfwlmkSwO44' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'deSSlTi8daJGIkx1p0IV9IcpKqGyCeLA3V7CZLUkrghHXXONrZqODv0vkwSvCbUp');
define('SECURE_AUTH_KEY',  'aEbkoIM5RWRJ1N4YwT9nkQOoPOVGVpY84zvKKvqBBKh7zLIOMwmgqDbAVjLZPSUv');
define('LOGGED_IN_KEY',    'axUgeZjJbeeKyTuc4OUWgr9YBQuF7wmyMYRVY7bpoR4Fygdlc9vNL7cSVMdImZUg');
define('NONCE_KEY',        'jw3Xybv29R677F4VhazUQOkHO5Kcj1kd4WpjAEuJgcxIqieedNzLDB7od7G0V3tj');
define('AUTH_SALT',        'e5dWPSyV3cZHnRH2tA1xZIjC8l9BsRvLc7Fh3jhGQQSVmEjs41lV3Jg7vNlMKWil');
define('SECURE_AUTH_SALT', 'OfIFT39mPYiLObw5CNfCBzyOHnhLzCwqxfnWB6udnqLtrZohp2fUFfZbI1xOgRNd');
define('LOGGED_IN_SALT',   'U0mJ2u19k3rojvX5Y8VBHrEqXegKgb31GXxgGdLrbzZ91Eula2JK5QjnkLqH5MMm');
define('NONCE_SALT',       'C5zTBuGFkbTBe8Go18lKyxie8YxizJ0PdJgvN5w7IX5cvEYNviGHUKRbTdK1iL5S');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');
define('FS_CHMOD_DIR',0755);
define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed externally by Installatron.
 * If you remove this define() to re-enable WordPress's automatic background updating
 * then it's advised to disable auto-updating in Installatron.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
