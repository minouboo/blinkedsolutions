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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

/**  on est dans heroku */
/** 
*if (getenv('JAWSDB_URL')!==false){
*	$dbparts = parse_url($url);
	
*	$hostname = $dbparts['host'];
*	$username = $dbparts['user'];
*	$password = $dbparts['pass'];
*	$database = ltrim($dbparts['path'],'/');
*	} else {

*/

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'blinkedsolutions' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost:8889' );

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
define( 'AUTH_KEY',         '~n1u%MOPniGJ*ht*Z4_<fJ.O8NPF#7Irnsuay~34-b%)|+bBTy,Pmv_eIBR4 RFE' );
define( 'SECURE_AUTH_KEY',  '>E!Yb+OP EDS5PKN~Bs/v8?C+{1[3jz %h$icI(^}M^iBf9SX~j&)C<P3u9#&wvY' );
define( 'LOGGED_IN_KEY',    'SW5YLXwlQ| 94A@P3H9SyZoRH<;NsWtgwLuQWzA#hS&&UrOrAamyg&7:lVxz0EuI' );
define( 'NONCE_KEY',        '2BL/v@LrvO a~)}%#Pskeq`JvKVWuUt0A^wU[y=_1PLWhbi4# <nG`u4_v,(k%W@' );
define( 'AUTH_SALT',        'b%jdv.6h|7c}[29OUO]&b@@-5?^q&S%jTan.w.v.b#>>JAe54%)BY6mAH( beXva' );
define( 'SECURE_AUTH_SALT', 'srN^G}9jR1Oj2h!W4Ug,WhDCg;ZD$K-EQwar&92JvolT*x|:U>HsV%C}A5RZS<8#' );
define( 'LOGGED_IN_SALT',   '3FZKjwH-tj$tnRyaiT]OzeL&1?g8<uBg=:AOH-w_D&zT<vW{wMw8s+8m,&@-%=63' );
define( 'NONCE_SALT',       '$yrs==DqI&5p-8#,,:|Hi==7Rq7xb@o`MwfnvH jh#B#4PvcMTo>N4^@3R}|kgY+' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'bls_';

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
	


