<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'leangreenwp');

/** MySQL database username */
define('DB_USER', 'leangreenwp');

/** MySQL database password */
define('DB_PASSWORD', 'L3anGre3n!WP');

/** MySQL hostname */
define('DB_HOST', 'leangreenwp.db.5985714.hostedresource.com');

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
define('AUTH_KEY',         'J1G_y*)DX>h3M?!;7$ r4<|8ud(ikhc<gHhmtBoz&sZ/&FLxijuBrC)fhF*YZ^2Z');
define('SECURE_AUTH_KEY',  'sLqrdBn2$mvGIBJI(CHY ?=!Mhz*zO?s=e-BW]h`A a.1s|Wr*Ddx~AN.K>#+-;r');
define('LOGGED_IN_KEY',    '-{L{o1a+uYU9IjITlg}9UAv6nq+6|E6$[O+-/(u&R=z.{Sz6v-*9M.R]>Vh:9i[J');
define('NONCE_KEY',        '#qa&nyqF]:^=/~oQ6BuxrCaAZPg?9j_F5bjN*|$)U)^S7LLR Q7bk%nS^_@}$wJq');
define('AUTH_SALT',        '2X8H||k{J/@MruET2qVk8;9,BEQ8]GS,6f]Zzl~pm{Q$J<g8edQ.zRP;+o[hcX0u');
define('SECURE_AUTH_SALT', 'm*Zc1nv.}blKdn`kF0p}2?nsycjOm4<~^UOswuq`;4fUc$I5d^@(iwW$s;tM/Ljn');
define('LOGGED_IN_SALT',   '@>2`?EV+1DJq25KxZq|N&9sVaK$(K3q5JdRBN~-Y/D@-S:ZH-CV{`t;R;h%j1!a[');
define('NONCE_SALT',       '?sUAZpa+JhX??A1N&Unf4>tc?[<c+eGEPwy$R-Z#H!(mI.Dm,|k9-k|B(xXdp]|R');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
