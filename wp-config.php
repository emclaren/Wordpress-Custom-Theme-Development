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
define('DB_NAME', 'le_red_bread');

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
define('AUTH_KEY',         'Rv#}4FD@lCG*eypqwT2i_Hkp:J_PFvyjYmjA/T P{b&E*P7tEOa5D7!AD|9QJa|B');
define('SECURE_AUTH_KEY',  'OKaFthS@mTJS?4MTPpVXM:Y<_S:EebGv~?|=O0$.c!Y>NT)|}+[)eEBB%]QI-LZr');
define('LOGGED_IN_KEY',    'cTAH/p5|66^.Y245eSf^5mLls-GhW+|b>K7b.F]l};d(KXuk6gI--`/c$|^8r05>');
define('NONCE_KEY',        '3V !)5Q^Y kZi-sm-l^rE.-!M0Q:kQ<T[+Bv*_zB/iazs1%z|-t3(`6GPWZ<okX ');
define('AUTH_SALT',        '-+mivEp,(w+;YEJi908lD-y4ytf3p&cc.$KvRVT|4P2ufJRP;]DpR3F++Tx <g3%');
define('SECURE_AUTH_SALT', 'T/ayuRdg7%VMX|Tr+ PO}Ca~~r8dN>uZG|+`-:p>hykNm9_La7y*9f>E6Vj5iul9');
define('LOGGED_IN_SALT',   '#1W8QYZRNi y TWN*TYescUpxrb) e@duROE$DO.2y4qw[cd~CE0a/~3~&Pz5Qa$');
define('NONCE_SALT',       'b%F3Ejw=FPyCU2:1>XS3|wx9gS+D;qn&6B}ebA-bl`-!xO6RGN1g}HZJuK:E&}Py');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'rb_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
