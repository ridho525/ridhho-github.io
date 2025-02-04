<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'rdho' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'pTH3l0PY13QRCQy67yenePExDY2eCUd6fvLwcWiUqxsamuvDFBa7jAeaJGhheSkm' );
define( 'SECURE_AUTH_KEY',  'Xi6JGn3WadWnBAmvhyREQsGrvwbfmhIDyYlnQgD0WdjyslDGC9HoSm0d24LqHY6F' );
define( 'LOGGED_IN_KEY',    'PrWTfnGiaWoNEv3byCkNeRLvI30w9bwfMKrSMVJJo2Innmt6XYYdnaVtUUCc4al0' );
define( 'NONCE_KEY',        'ms4gqf5lzswEd301RdHS2Em065yqVSZSsbhInfHZPUoVIYGbYs8PQZ8P71EhRplJ' );
define( 'AUTH_SALT',        '98TdNjd4peNgWi9PM4uUYrGFMcbYlaNirwLF96ddhEe3oHUevKrfCIO2gzEFarrl' );
define( 'SECURE_AUTH_SALT', 'INGJLuhwU4Hj4gHTZsYI4Ys2uu933gAnXV2wwhzHIfWIzQRyoWSNUfo7WxVkm8ea' );
define( 'LOGGED_IN_SALT',   'qNQxkfJPDvbKf7dsZuF2I1BORldqy04m7h7stfHG0hKGp3kn3xUgQfIABeF9hHyw' );
define( 'NONCE_SALT',       'GyBhX8rUp94vuF8xVuS6VMfk6CveiYWhVucG8lEjSGodlFNID7epPdQ71MrfMYxR' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
