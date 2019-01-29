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
define('DB_NAME', 'woo_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'secret');

/** MySQL hostname */
define('DB_HOST', 'woo-db');

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
define('AUTH_KEY',         '=o/8gxB[o4C~Z.=)!!flzaw@wIvE^DNNr[?XkLdamWY*t>g-9G}Q53IF3wS *9qD');
define('SECURE_AUTH_KEY',  'BX<<K)VWU8m.4V~~@D4#H:WWgJ @2<nH0;-=]|Fw516_%LuQl4yHrmlLU7?^2o+X');
define('LOGGED_IN_KEY',    'M%fB%SCj-]>768sjZXSoxfq og=:CAQLp0MEX8Yq3~$I;f;ri]1LqY1_=tBpoVA{');
define('NONCE_KEY',        'y(GkNz0f`$9eX4{8wRT=}+aoA7)p[PQX}KHR6qw`1?Ts=;fC$Cuv}lOk 1J:1bjc');
define('AUTH_SALT',        'T t~h3p9`(KJ|u-sqh9tK,7C?c}:JVGQ(E5f%e!Oy%LIC-.4L$0LH,$kum1^}bSa');
define('SECURE_AUTH_SALT', 'u~=~QN:bo ;8]O E3K&ZQ V9]^Hl<TK|rX$L0T3dKaXld_?h>GI=j=h<8<Z+|nU`');
define('LOGGED_IN_SALT',   '/7?WOpVL;Wgj!LQA~7ONvW<e8eQ&V*rR1ZCBYja[d.8?N5?k`;[I,#Ag,vkZO/bD');
define('NONCE_SALT',       'x&GHDqZ@Hx,/ky,0vt9PYd+~A}aHuB`J$fX[a0m,m?^EngD+<%*r{s<8jXR0xK|W');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'woo_';

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
