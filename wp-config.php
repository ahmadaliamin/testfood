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
define( 'DB_NAME', 'food' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '#%cSWWuf7-t!5[V]b4c6G]E=90bAsasY&7WFW9K~sgCr$$^*oZ8T+~i})5vYVu$_' );
define( 'SECURE_AUTH_KEY',  'oR^DM;-&P(GL6W8(c{Py4)zE#1~)Is4b5+0$_bjK+q/miqqG5zsi~qxv4Is`kh_+' );
define( 'LOGGED_IN_KEY',    'U3Dc.J9jCDPTDUVVHS%)}g6iF~,G[:h>U;I8f0797ZbmGn-JMBIF!6K%FDZ6Is].' );
define( 'NONCE_KEY',        'h5w# ub6%o+swaeJ{lLv;0WE/|Z/BB&$6%AB<#jECLBlV/x(fYO*xqLsU*ai~E94' );
define( 'AUTH_SALT',        'sUDYVt >P:X-JKHK|@`y9B6lGW:_:yF48BnU4@j*fcR>LB;HIzrngdZ%:)LW$|5e' );
define( 'SECURE_AUTH_SALT', 'q,&#P;-_8oZfz6ZV`YO/.6`,A%lr-n(Ww<C8:FpNE9?f~dgyQRGin.VmRGiGV^];' );
define( 'LOGGED_IN_SALT',   '3i#Li1RuNzUaWi:[->KP!gGd&Mze~},H5l@.6boTNTa3~`es2o;t{anb2z%Y`.D0' );
define( 'NONCE_SALT',       '@iah-gxEf2WTU0}y@Q8J[`|r J&Z=CoXT-QbW}1+e}J:U3pcbY[dT1cf_9i)t&t}' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
