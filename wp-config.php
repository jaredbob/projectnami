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
define('DB_NAME', ( getenv('ProjectNami.DBName') ? getenv('ProjectNami.DBName') : 'heavysignals'));

/** MySQL database username */
define('DB_USER', ( getenv('ProjectNami.DBUser') ? getenv('ProjectNami.DBUser') : 'jaredbob@sql-heavysignals-uc'));

/** MySQL database password */
define('DB_PASSWORD', ( getenv('ProjectNami.DBPass') ? getenv('ProjectNami.DBPass') : 't4VcgQBfUWd7sb401TER'));

/** MySQL hostname */
define('DB_HOST', ( getenv('ProjectNami.DBHost') ? getenv('ProjectNami.DBHost') : 'sql-heavysignals-uc.database.windows.net'));

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Y<+8U%(`l{rT|wGpQ])Xct+M%#2?T9|WX1i)zw!|K%:d|D+N[ED(o~Fy?q)*U_X+');
define('SECURE_AUTH_KEY',  ':h2!>!L TGIS<Y;=Qwf.xavMjzEd&7_9|NIJP?&-Z=4kG<i-_@|-3{I{~v`r~P0D');
define('LOGGED_IN_KEY',    'f,Gg{H%x^qt#!Mv(MMc!e.WUu{En-E2dNyV+TR[+*ev3fNu8v&HbDgJFd1(hG<Iy');
define('NONCE_KEY',        'T<k#Dn*)vG0Q2V=5CG#0@<3iWus*.YLd0b;&_CI_FJvvr=Qys<r/C0m1tmNzfJF ');
define('AUTH_SALT',        'W#NSEC8_UJ)(z^p}h2TzS7z4]$z  zO)o-T`OG[<k<{9qyg/0H;vbkS|xX+6C}?4');
define('SECURE_AUTH_SALT', 'uJj,;$i#&{ P O`{BTmES?B:f3-MBL+0-m69d)Iva8R3 1 <-tb0vpnvqayxw@C)');
define('LOGGED_IN_SALT',   '`mO4t1PjjgPG^9LR{o1LpxLf,[LeBKt]38owtm@2o4VCbG+Og/rob;l(++|}$f{;');
define('NONCE_SALT',       'Si&Dp@kkfyP$?gN1?U>B{=U{;tBE|F;Q!#B7!@A23AmwP5X%$fl)@L7Y)V>YFd-|');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', true);

define( 'WP_ALLOW_MULTISITE', true );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
