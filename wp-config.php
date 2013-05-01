<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
if (isset($_SERVER['PLATFORM']) && $_SERVER['PLATFORM'] == 'PAGODABOX') {
    define('DB_NAME', $_SERVER['DB1_NAME']);
    define('DB_USER', $_SERVER['DB1_USER']);
    define('DB_PASSWORD', $_SERVER['DB1_PASS']);
    define ('DB_HOST', $_SERVER['DB1_HOST'] . ':' . $_SERVER['DB1_PORT']);
}
else {
    define('DB_NAME', 'your_database_name');
    define('DB_USER', 'root');
    define('DB_PASSWORD', 'root');
    define('DB_HOST', 'localhost');
}
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
define('AUTH_KEY',         '>rXBR[5=Ui|/4/amn%Op3)d)&qp&}/E:t~nV!w..y:4+@(j-my=b6z>R)?a1?_f[');
define('SECURE_AUTH_KEY',  'H2zilj~K@f.`z*0!*/CW_@*P1fF%o&BPP1 m?cr!H6a+B-4}KoUyc}hI%>h[(xcC');
define('LOGGED_IN_KEY',    '$ofr 0m=#3EoCw S!7smedt)UDE),kEJKeRE.Q`q$j!{aNYV=qAU5e6&c=``NOXy');
define('NONCE_KEY',        'Zqgi}dm)<smL`RIBH{dur wcXxT`icQB2+K7xTC*QF,3+h3kBtEQy-|Eh#$izpf4');
define('AUTH_SALT',        'GbRkuF?!AsrDQ.=E-MK>~].0NRsS5,v:=C0C^QZ32A_+}m P-}ix#OQO6+ANz-k ');
define('SECURE_AUTH_SALT', 'qu_/FL}!am3W{`~V&;kY+yGxWCX1nR&PfEakfd[CF0?@6ecl~u*4Gwo{%&&(T)6&');
define('LOGGED_IN_SALT',   'LH04kwX+y$P57,Z%@S9zELt3_]D||+M^F:Dbc3NC+Ke{PRx_StDZ;^5@y9T;+ (W');
define('NONCE_SALT',       ')&0..l8J-uzk{xWcxA:pQa4xz2uaw6EOR<`hd.4AW@nYkS:8WmX#WZ/TX)iz66]v');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
