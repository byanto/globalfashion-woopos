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
define('DB_NAME', 'globalfashiontest');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'QNHRx}Vn+k0de!>=JY)^#LCmx@ 6{l[2l_?Jeo`y*BkM*lR0fa%8vs*bxyyrbSeX');
define('SECURE_AUTH_KEY',  'W,?2o]lPjhC*yTm@Sc 9kA=NTXrYo{7B2C6fzWy!_4g~HV}&R&7[[yaV68h3{Ch?');
define('LOGGED_IN_KEY',    '3E5VcVMh*zfAj>&7z}Ex>27<sgTGo,=!CzS+f21MCM:d#n!u?dwYU#yfe(Re}[H0');
define('NONCE_KEY',        'haja0OoXk(WN~5UI4&.pQ-LL8{tp#$b [AGdN1F)+.H@)zT?E{=DOPEs)U~x1bU+');
define('AUTH_SALT',        '!4P,_Zw-`5G}bYW;F*#&a 8?}IeIW]arhDT<hB2I?^;a~zQ57iB~GM]u,t!gv|{$');
define('SECURE_AUTH_SALT', 'o+RD3EhvLi0&t tn<#P+7uXC#J%UCH0%< r,a/XeO%vo3~|h*kyD}.,R!)_xZ_>.');
define('LOGGED_IN_SALT',   'oj4s>H9voEgCPW4@Yk-9SZy06~{u<a90w!2+dTAhQ6!y_Ab8D!K@eYOu rc#]o&4');
define('NONCE_SALT',       ')*saU$%$Wc|,_6Ki%kMrC5 X/^c]dY`s*)Rl)6^6hQ(eY9DmKmucqeVy#1CE1|yL');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
