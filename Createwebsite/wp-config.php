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
define( 'DB_NAME', 'Createwebsite' );

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
define( 'AUTH_KEY',         't,8*3:G8|$f7AQJ|~gZ1lbBLLYSb4C1*.PWCP(AMC14PS`79{RrK%y:E5 hy- |h' );
define( 'SECURE_AUTH_KEY',  'a?Rt1a[?J;Yd/cI/pl&XLF*uL{sv{Ftve[HpThmSp^I-[r&p lHuzA+7DP}5]uVo' );
define( 'LOGGED_IN_KEY',    'JJ^%DsZe+) 5Mv&P~w4^b({JHa^omcv4Qc@L&1j%*hy[!HBT:nQ#+L1#S#9zq&US' );
define( 'NONCE_KEY',        '% UTFX~K=ZuVbi*G:fU!NL0-y(D(vIT~PdBAfa(b}Gomif<_8&770{=8I}&W,Ro]' );
define( 'AUTH_SALT',        '/oR5hr;8!#(K+JVmOex0x:jTN2rG:>c;No[Ddh<[f$[iA$jGKo)Z][KE-1p3Pc?:' );
define( 'SECURE_AUTH_SALT', 'syC5@{+|2cWQ**%sXrd0Vf@xNx@M2WR}s_V$|3Usk^.U/~]W[:0y3ty@F6qsl(7L' );
define( 'LOGGED_IN_SALT',   '=O =$X[Ksn,c_msWy(/:>uzo7^Xfkm-2}-3K sA4uDV(:t=I!kdM?4h4Ja7h-B6P' );
define( 'NONCE_SALT',       ';55h)Ic;H3WvB8/Gl:0rRoRN.32r9bAPBUvF(ryB`W`M6vg:]{B]~niw?2Q(vzq.' );

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
