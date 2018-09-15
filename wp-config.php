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
define('DB_NAME', 'ajpol');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'rafa2112');

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
define('AUTH_KEY',         '|HTi(WN[TV(`cbc(4Dx^$M+5EbA&ya?KKI=Ug>G?PEf,|9E1dejCem*yzS780}mK');
define('SECURE_AUTH_KEY',  '<,8uMno{F&&Swa`PABp#EYkGnXOlR{$1:B;$$8}KHrVVv6(:Z#&*A tKSp4)AnTQ');
define('LOGGED_IN_KEY',    'eWqR6;0v$6knDKyu|jJ^J{y0Ghe]0E&(RGaFpLZ,lZs[|D}R-akVk+S+Tgs>^/|Z');
define('NONCE_KEY',        '3o D=VFH0kOoBWz-m+d7n>wDe-zKn!k6]_Kj&g$)12F7Yr5!9o$w9|Uru2CP~RVm');
define('AUTH_SALT',        '6fd0|xnv#ts$wP%FnbY~Ur.j.06c9mCXK>sW3N n0V(pazq]7| *$SMxtpXO/{E%');
define('SECURE_AUTH_SALT', 'joeFwN?_CW`cQ^PRenquO!&^ICwi^H~e!TI(CBc7#R/M. _(GoooBHdL#f]P+ Ls');
define('LOGGED_IN_SALT',   '7arbBlI,D<53jCm|[Qa~b#|dih{c2#jW xkq/3hu@C4!?Wrts1tP$YI&eWne/#@G');
define('NONCE_SALT',       ';8kwXas7h|qgJ?VWS><%gn;HNaE@wawH5{qBYl})q1UXs[ mqOK0{{}h>]pi,1F^');

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
