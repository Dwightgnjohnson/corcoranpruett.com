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
define('DB_NAME', 'corcoranpruett');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'sT,a|iY++H|)%I]8t-Zr`b_BzEv0fuFGmSFULJubz?.~:z.fgfR9[+Hc.v#jlgbX');
define('SECURE_AUTH_KEY',  'g|+U3U^)aiSgM.o)su^O9JsQ:PX3;)Wq(y-,9k2H<~Av&633#|U)@JAOm]A^!/>>');
define('LOGGED_IN_KEY',    '!9#naj<v!l]e<L$$l|N!^LP}/{P;H^OcliiqIM+|BOo!LK7muzH>^kHr={ .lWut');
define('NONCE_KEY',        '~yBV>p-S}U4c}|MRmSI~s/#{j*{)=boZOV-T=1?tF7cDJF&9n]JDj7|H+>/gk_0u');
define('AUTH_SALT',        '.+Nl8b`V.^h>d`],=.2dI+H%:0A2CPPQ5,q2;r`K8{2ZMihLzrHP$.;cL!46j_%+');
define('SECURE_AUTH_SALT', '(]=oYGx:$X:iUGF,qh5O$[=+$P<,6KnUockiOc0~-0x+KM5X2;7wG}_IoU[b}>gK');
define('LOGGED_IN_SALT',   'j]0s.^lA*(8O]e2vW d|vU9+cDy$[#_Lx3?yxx++ u{bHVtQK?-+Ehg~rtjN#-G>');
define('NONCE_SALT',       'udKP1ER+>,7.E|:l;qKbjKJAr@WhOBtm%+4Izy(|%#6ZP*U8p!]ti@u%::=Ingq3');

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
