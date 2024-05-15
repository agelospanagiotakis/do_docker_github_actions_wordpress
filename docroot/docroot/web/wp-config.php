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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress' );

/** Database hostname */
define( 'DB_HOST', 'db' );

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
define( 'AUTH_KEY',         'V-7Ps|BQ2CiSDf1w[[U2!YL&tUVrg0tjcP-y-s3ibb$,Xe<6K`p[I!*tCCX{c>iv' );
define( 'SECURE_AUTH_KEY',  'mtiXw|3BtEU?=}{Cz[a8rDPmS(t<Yc,wz_&T|SWUBw5RH(rMTbh~SNZjJQ]epvs*' );
define( 'LOGGED_IN_KEY',    '3IXXiAH5)#ma0*hN+HW W}jdH]%t3ZF}8>{2|Lr+: %Pl~s[uNW_rh!7^!TlSX(j' );
define( 'NONCE_KEY',        'k6LIOWAc+o#qa~[ZALj`TG15p,uhrsnA`6`5*f_}S+u;;v~W)dK:2ow<DxY%p]8 ' );
define( 'AUTH_SALT',        'Bp-noS4`>g~@^Ot;Qs!>WV_uCw0]R8VB9?}MyZS7kMo5]y#EXb~i){_)B(GNGWp?' );
define( 'SECURE_AUTH_SALT', 'wIz(1w38:Y-$_^IoHe_Orc[WPkRbBqOaj0i&zCfAW-T#-us3u0QEuxd3mO;!1J-e' );
define( 'LOGGED_IN_SALT',   'GK3Js3Hd;&I~rxnbIFJOR<t3a}Z/T5q6=wFesiv}e w)+>9Xcg!:=Ycv3%O~3(3-' );
define( 'NONCE_SALT',       ',S(F`{aug2nubKA7=wN1r?O$+As&W9M{<iyX5hz6r)#E}1NZZ1bp,8[Zn`YC2/}&' );

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
