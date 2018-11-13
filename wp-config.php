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
define('DB_NAME', 'wp-blog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'admin');

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
define('AUTH_KEY',         'nWHrPgD:jPlJLn}n:>_iiDXkY6vFrPUUrFC)]k@GnRqTfdKU:tBodx6#vbm1`9=c');
define('SECURE_AUTH_KEY',  ',Nb0hdg0:C$][2?:]dQ+HpAaUDvZH__p9_T<btIn6/swS+Jb-FYmiku&<#J~<I5G');
define('LOGGED_IN_KEY',    'I+jx:ItQyKng.bjH<Mn|t94W`z$:`YqdO23PvAaB~%aZpQz.f|lH5K:L,y_Br.q[');
define('NONCE_KEY',        'Y]ts:1`j7yc8jq][v(sxb|0>2v?@/~qsqg2*!b_#2)n|r+l6`j,MDlgL+RLmRMi[');
define('AUTH_SALT',        'eZ7^>~lW18Gv*{nL^9Ig`Z,$kU?lBS?bth_XVY:vG@8|+8E[vGYaMpuJ~)S6,xHg');
define('SECURE_AUTH_SALT', 'f2l(jBUe:/Pj8^ePYr$9&+TiTbAUat0km<SB3NnFE.kbi3ksD $+Oik6!W;cb2Tw');
define('LOGGED_IN_SALT',   '}8} 8 >iRc+dNKHa8GkdP5$w>P# .UT|T^5OCbcm6<nFR<e<p3mpoMG@U8Z#T=/;');
define('NONCE_SALT',       'z+w# hQcG:r3=e_f,{| C0kCc 4UZh=~S/m>D6Sx5?+v?L7E_tc;g[?kW29{Rd^v');

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
