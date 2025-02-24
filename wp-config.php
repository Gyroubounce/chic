<?php
//Begin Really Simple SSL key
define('RSSSL_KEY', 'MwGciXth5Eq7kYBPsdNlWJZ3gH0HJNIsk7k8Wyg9ebg4VHMV8HJAqcmJwWkcSNVc');
//END Really Simple SSL key

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings
define( 'WP_CACHE', true ); // Boost Cache Plugin
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
define( 'AUTH_KEY',          '}L[tE,=jV|Vs&0];;<::3X5pyUdWahQ4uq/RlWb1EY=O=;I5~v3DUu2sq!CGI)SH' );
define( 'SECURE_AUTH_KEY',   'iSNNUM4jlJ:/B!J,b&SH4qR}veD4()V,d.?1oOd N,hL]|yKd}vy[N:W3qup>sxb' );
define( 'LOGGED_IN_KEY',     'FBqm8;$An+qf~`G0)4__=,~rt_qpIY;AY`N.0g~?M%4n)n-jP;ohI9;o^[ .fSHH' );
define( 'NONCE_KEY',         'cYi)*MxY;wqvDQ{6d&9OSHSbp`qH8$2:OFaBcNW f3Xo#i5<K?Yzx3/BuiS(kj]H' );
define( 'AUTH_SALT',         '3w&IBEbd<f+i]hIDFnAvk%JKGGv`0v(mTb,TsBRR& Pv*y!]A8C,E$Z13),Skf~=' );
define( 'SECURE_AUTH_SALT',  '=aClW5SeuES&zooS04X/v [y*pR<vLy~&LaL< b9vbp!k3IZqqFfr&|Icsq=acW_' );
define( 'LOGGED_IN_SALT',    '589=hB_Va@1R7/lZw?H*?`{a2%lfHTUh q^mWizS?Q7%X<4CBG%I,S+raS2B{kAU' );
define( 'NONCE_SALT',        '(Om}5G-RR<b0+.W[?ntk[@*..f$rx,L?K_O>!n6Rj?b2xfS%7nA;^Ion0HlI+5{,' );
define( 'WP_CACHE_KEY_SALT', ',Dg|{25n%G!6VZA!Q|NF`Pv0}#-tg_GKI+*rG>_,*$,R (9Sy5Sz_h.YMH#yskxb' );
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
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
