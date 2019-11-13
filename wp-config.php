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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'xeni_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '?4>_=/m}V>lx%<?B@{6]U|^:u0y*@vU@aN&qq):0?c&6i|T+St;ks)mu$F/E}!Qf' );
define( 'SECURE_AUTH_KEY',  '!&?x,Q4TDg!4d@xKk:jm1ED.z?lu>HDG c.o7/FvW)!r%MTmRh}8$.Myp;Dny;IV' );
define( 'LOGGED_IN_KEY',    '1+Bj)bsee)naas4O6>NnM68P)oM99=XQS[L3<9@25-M[S&5m`gE2z%:H*W/eBrNm' );
define( 'NONCE_KEY',        'Xhos#O[@1<uT*-};SPcA+<K5AE,DO9*T^4CSL_sPgo`2DJR%w$Q=dlO2~/@B!gtc' );
define( 'AUTH_SALT',        '42|.3yB0iH|LM;3~|==#M9n|jfzIH(C1C~O|y1*le.(Tr4<RhxGnuEWrY/Oin;K@' );
define( 'SECURE_AUTH_SALT', 'vi+P(h5._c(R2rB@vgE]A<GveW#.{Y7c_BE L}]6-;~xmtK+iQGJ2g4XZN %*]6P' );
define( 'LOGGED_IN_SALT',   ' .C1uepBYb>e%jJirM-c|_ynE sL!tp~Xmj8B@c~9WJm^Y$( } 0((J.ujGzB&k(' );
define( 'NONCE_SALT',       '}gv&SQ?|t3xZW69g08fI2m?>(_@7z4)d+4S0FSW:Edy6in?-*mWVam41OyaBi=.p' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'xn_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
