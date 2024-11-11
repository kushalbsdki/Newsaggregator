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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'K[Btyr//qJEgFoz5_n&BsW8MBCQL&b0Q[(Jgy).qJ^r+LF*)B,A-wl/3gH#V~[s}' );
define( 'SECURE_AUTH_KEY',  ',IV-[U{9D !8E5@v?- Oq:4F@lY(2%x1?&a_XlSdJ1n3Rr2)Zf?T:!LI*+]R} vy' );
define( 'LOGGED_IN_KEY',    'jr->J 5pT=zm_Tav^cQMHvN/gvB(hBA53(~mV`qSJZfIR-FOp=EPB6%3<$nGMgx=' );
define( 'NONCE_KEY',        '`p2<xmpmPAkG$i7Os-O[SX8s(#FO fn}!,VPpN4F9 y:F*$t=8vB>y0,G.0{>/_B' );
define( 'AUTH_SALT',        '[qz!AlseGcHmLlfbLBLxg(%fKg (nKjoub9%20=bXR#w zsrr!uCCeCvH?-/XG@S' );
define( 'SECURE_AUTH_SALT', 'nyoI+uI>rKu u*ja12NN#>Lj9mHopT!Piboih<n@_qbs=;.+:If#DA IH!8pDZj/' );
define( 'LOGGED_IN_SALT',   'tEA?M|dCjCW*r4hB].2 lP% fJE9WvB_GX-+]>e0S*_TRj^^H>|aHLVutd<L|ejs' );
define( 'NONCE_SALT',       'li+pwUW/GJxC[1A,nb-Ub-aZ.aqzn!LHBvXvRV|i!$j:Z6Y&nf6oQ.7Lt2d1u2p%' );

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
