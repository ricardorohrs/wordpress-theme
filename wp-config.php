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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_database' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         's+-CY89b+6EO2*T_W=:UY+/TdHWT)M|&^YYs786y4^e4GYigH:LO*aq;8LvM*#xm' );
define( 'SECURE_AUTH_KEY',  'J]WH<rn|O~S NoVbn4#5se_:PzX?>%aYR&KE][/^*-8=.y$*s==|X:s`*)vl/9yd' );
define( 'LOGGED_IN_KEY',    'uxLE()k~r{:P!+si93ir#!bl lO/[X:5fn#$:g>-Kc3WA:H_<s(G2X9$p:ZKtc@w' );
define( 'NONCE_KEY',        'q?Uy#gcwf%,Cg(ChSN]4]1.yM.`tVG+Bxb|81FDCr<;dC:@4mX({DIRqJOdcXq^v' );
define( 'AUTH_SALT',        'y7f(W&9{GksX1jvnKn3GV,]3E2Hyw o4i!7||o`bI%0RA1l5}uI6TM:dxIfZC;o/' );
define( 'SECURE_AUTH_SALT', 'n,}P=l4.hC_(X!BE8FPAO~3B2|Y+ii>,e2Q,{w!>tXqqcc}Ok0dE8RuNNO)!O&J9' );
define( 'LOGGED_IN_SALT',   '56mRGh@/C9`VM3EK05Nd;U86hR2m?8<[*)T4sg?Ds|DT/G9TFlu<aMGv Dg#N+/j' );
define( 'NONCE_SALT',       'yaS,=TuJ2.rZ=LRcej!XKAI)>Q<[NKzO^3Zj:BB[-g>^ANE5JeI&%enC-j.)QAA-' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
