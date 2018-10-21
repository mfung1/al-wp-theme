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
define('DB_NAME', 'localhost_al');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '8>=u[j^=z4)iE1_la~;TSxEJ[=*T^=(|7B2j6K:W3i0$VuoGY9yxHYT$*NF9{C+1');
define('SECURE_AUTH_KEY',  '!SNOOO{.;{xTi&L>O3cYN6CJ6zR4N]SOR?zY`Zt3/^m8}$H(E|5pFPpeNPs%h8U7');
define('LOGGED_IN_KEY',    '#eKp0xWM,;=ff<suVLvxmK7`S`eL~BBAWV4G4?iexSaZ1HWE{Z@*^me1d{gXrW[$');
define('NONCE_KEY',        '3.:/&`jZAT7bnu0EB`gaR!sp_p1t.Xp:}L%YRA7a_mY2m2(Da@)U-qMZuIJ|8zcE');
define('AUTH_SALT',        '=:47p<}8pe,,P))=.h8/lrT}ZI,bOKUk5BOeA:fLnE|6*q[[tSdoJI2Q$szEl(~!');
define('SECURE_AUTH_SALT', 'o*{`n5qO.O6J0<lHJo;YCU.V9sAt6rl]qGETR)O1q/e)(Lv&,f)X Wie?!((%E7.');
define('LOGGED_IN_SALT',   'ac3D,j,YY)e-LGA/R|PJL9T&/5VJ3=+%J-|w7kUBs?~6![xSL! GFm^Tt?73/*yH');
define('NONCE_SALT',       'v8;($HR5o{1xNf0w<,<%:l|y(l.t]wQkU1~/Pmd?=,K)FzT@<FDLTnh9uw{z|a$d');

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
