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
define('DB_NAME', 'shop_formulas');

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
define('AUTH_KEY',         'Weu Do.:eF%Tsttzy4f;c{TLi}`HQh2Rx&v;gSmCBcz}pZ1|dzw=fXjQ:;uYJ[1E');
define('SECURE_AUTH_KEY',  '2.(_F;drv2}$evd#a*$rL#-jmm]SZr~u49gc`J;P1;mmux[B:z8b2YyVaXv7c`fb');
define('LOGGED_IN_KEY',    'pL#rbi9Xlq#Df_f9vDk})@>)|/AZZDthyMcL:wE:~BnIw>T]DI5.fE%q`)I,&U%c');
define('NONCE_KEY',        'KPsdMWb5|e.!4ci*ePQ_r*`$-39rk1Lv3Br8C:#`Ra!+/?}ABI)0KT@ct[9F1g)B');
define('AUTH_SALT',        'W3fj}A,;]=:d,!Yc#Ia[y+5O1T!nNV(z,R]9d@Qp,YZ[(e%FIkXcCSmu}tjfGdka');
define('SECURE_AUTH_SALT', 'zTgZa55&H%/L1@h:S;qb{]#I}(l9.kV06t9M@Y_ZBV)4[1H&Q_Vkhe<%de!xPIk.');
define('LOGGED_IN_SALT',   '&tPKL^=LU:(HrNFC}fdE8RR<$VT=mL.Kdt#)@W&PK.C-Ai1lJUzY U.#5`nWF|JE');
define('NONCE_SALT',       'm<Xz#1sGZ75VG.q})MSv+<@O}#PI2J4`Uqc3UwD7lZ9udjjr C[A&GobyYm52~Q,');

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
