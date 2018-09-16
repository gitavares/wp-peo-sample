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
define('DB_NAME', 'wp-peo-sample');

/** MySQL database username */
define('DB_USER', 'gitavares');

/** MySQL database password */
define('DB_PASSWORD', 'wp-password');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '#_lmq{d+T(|Kga+qSp}?*lA1|P+]}sLJ,hk6`gy(ZNS;5o3T1u>7y/QaoHjk0(i+');
define('SECURE_AUTH_KEY',  '37~&;(-Br>){9qu+T*O~n<|V-r SK|m0kQ?Hh+MW^zX+XG42aOm sUA=X/E5S,e;');
define('LOGGED_IN_KEY',    '$M5#uT[O.ahM^pWKOfU+Lgj<YwKOnE@mNev4@tVVpg#VgAt/9)rw&oa )wQ36{k*');
define('NONCE_KEY',        '>/Q?HmQ2xyG|}LuO}0 x|*sxh/lgRNoFDdJH V-Ol/</sFqj1q_@z PS?T!!8Ewr');
define('AUTH_SALT',        '&n<)%=d_.mU!]S/-H;%[O}xU.[+%Pi@fQ]x|{Gma5p;rpEZ%fm5^Yq~RCg0ej;sS');
define('SECURE_AUTH_SALT', 'D:$JjFI7&S{ ,p^/|[6W!OiPk0^5&HsD-p)u[zRjFt6s!%zkwdWBa)j^|z..xT%b');
define('LOGGED_IN_SALT',   't>}`qJpeQL?#j&vGx#|jZ!d|0x@2xvvhSS!.}|r&>;-pFBa1qxcGRM-gf232@A<a');
define('NONCE_SALT',       'ujDP=|tb$r+suEcYFgI{#0aj8)!ga?X^(Uzi ;BG{rP,a}GPB{U`*|H=&?-jzdVK');

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
