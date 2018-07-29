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
define('DB_NAME', 'blog');

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
define('AUTH_KEY',         'ZyfYV)mTY+h{T?R[y6F#w~LP]:*8uC!4me21}l<aRaw7lE(,cLzcx)49w/2,^r5e');
define('SECURE_AUTH_KEY',  'cj8@^!V40p>IXrH.7s_~sbC[*{Fr(v];n;hmYLCnHL$<;m.tVr CT([88{KU1rX1');
define('LOGGED_IN_KEY',    '0jM~e-n`n20~G% uWK5moM%>} jne}~](q9Z&?x340Ye,0ujiKhfES X0Y#Ca6M3');
define('NONCE_KEY',        '_}:l;]c)51})`k]4/1e?[fNPw^( 764D<Ge~VagD}]U2-tPH|ynN8W1 j9W+.FYZ');
define('AUTH_SALT',        'w~Zxme,&%VZ]F;#T0v3{<;Vlh0_{G /p)Lv8|7v/]E<FPG;=4AEgVLu>=/*93dwp');
define('SECURE_AUTH_SALT', '4n0X3zwRJ49I2fr]-B}<gK$MI&5}:GUUk{1<Ra+muJ xfPc_agdx^~]v@ ]G;mqh');
define('LOGGED_IN_SALT',   '(+YqYS}kr87qUoi=!~oNeV9%mb[8*X&VvasCs<2g0CI)G`n~oq#cS6qh3X$(_!1_');
define('NONCE_SALT',       'GjTrS9Uafp|iGT+0f#6fz,MVh&f~~z{t{w(bH.toTX).@k{>Y83T+uvt3~Ldr@QY');

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
