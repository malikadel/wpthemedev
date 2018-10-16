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
define('DB_NAME', 'wpsite');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'password');

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
define('AUTH_KEY',         '~+?G&S7V4K(0y~GHB98q2hq:tkN/|W611R71X.1h,}[LO]yTxa(Z,rMC=%&pvWXh');
define('SECURE_AUTH_KEY',  ' ~]!+T8EKJ*wVJ!~sH.zM~by^LWYKsc<qKqqW[q*D#{o&Y>.:`st:s.P`6{^4x*}');
define('LOGGED_IN_KEY',    '$`Kp@z[72l%oj8]C{f/W!s%{X[>RhbhJr8(8_`+3c<oDJoz%Yz$I,FxRU~_F@mxf');
define('NONCE_KEY',        'r(x!^7rwqCcaBHUd{IMKf*y~5W*ootA-wE.{&coEC8l!sHRbu8FgAr=GL2[j(J4}');
define('AUTH_SALT',        ' #sceL-3$9S?3{(EiSGl74zC*gsOAE8Qg]m|SQSb&kAD3)WlQeTC42;|fOrVd--)');
define('SECURE_AUTH_SALT', '_.)0ebe[R0-!Kpp);Ye)JF6DYT^$ 3voWszs7Ns&|.b`Oi$nVLFLNoml6K)x$f/0');
define('LOGGED_IN_SALT',   'w?vy2x= ?SFJ=0S/Ok5l%BNzKo*`f(e_M7oU#ll_Txcr-ra6[AL1KmF@IQ#AL{#V');
define('NONCE_SALT',       'mKRZ>>!pZ5^s..3eJYjNYJXX+;m`5)8/IvF^Q]hqk:L`ytMMsy$k_E{$bsl9#h_[');

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
