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
define( 'DB_NAME', 'alive' );

/** MySQL database username */
define( 'DB_USER', 'alive' );

/** MySQL database password */
define( 'DB_PASSWORD', 'alive' );

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
define('AUTH_KEY',         '=x^%8+o]+&uDE/7<37[qY4{.1B*~w)rk@U$u/d>tJvf}Wn%4|b])@e.(-YRrKtFu');
define('SECURE_AUTH_KEY',  'pw+$G=z%t$i8O-{-gRi9Ug{;!9WR5EQP]DA|U]CfkW_Y|d`IyhX?+1]DO;!BI+o*');
define('LOGGED_IN_KEY',    'fYG+|bJ iHSF`R[CTS?+2{nIGK0kz3x#5(djc{X+jj{d,<.08HcM /3m~K};*=Ju');
define('NONCE_KEY',        'l2&/tL|2SJ}Fi,{kFdt`02Yja0[v*C!<ZVWF-MT`+7M |mc06O+zHu4g]b8<!QvN');
define('AUTH_SALT',        'Xg7Q*q@>>{#-.ma.]xS-ipA4e<,c@s7I62#>:gQu.u[lLtXsC%-I?]cEJ;!g `0w');
define('SECURE_AUTH_SALT', 'X|e]zE7M8w6=!7jV$BO)Muz:auxoa4nf-pws&r=qp60-t+jHL~NJzNsn-jQ?:6bb');
define('LOGGED_IN_SALT',   'v[@,)psDTM8]B]Vxlx%UFal*5HZ)Xp*%yd6Kpt!Qo&d;#IW|>y/R@$>xg6C[d$~q');
define('NONCE_SALT',       'Pfw#M7XAB|aDsAX]..uqs,3{wXs|tbxFAM3gD2&m1;e#gK4#(!xqNEu.I|l-doUm');


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
