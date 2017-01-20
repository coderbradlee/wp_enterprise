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
define('DB_NAME', 'VScjMVd2en');
define('ALLOW_UNFILTERED_UPLOADS', true);

/** MySQL database username */
define('DB_USER', 'VScjMVd2en');

/** MySQL database password */
define('DB_PASSWORD', 'C7DrOtT9w8Ct');

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
define('AUTH_KEY',         'j6ksPIb1 Tx[b8?zni]GfGvOevnkXl&FSuZ;zY;u,-kZ%6ZT=vA/J<;R6~,T3x{i');
define('SECURE_AUTH_KEY',  'tU,%q 7a2C4VDUI~Fg7jr,NW|do&@h3VIxL=[<xRTHu)C6fT6~8GHT{60{5S;&l%');
define('LOGGED_IN_KEY',    '|[%dlz 51$f+vK&TVoIu8zO$QLi)v~GZp:#y[.D..u,0i,7(qFuPQ>@V.;a3K<+9');
define('NONCE_KEY',        'o|<Vu2Ewyt8#(VM@*^O}+`ipmUY-X `xD[,0U.5,)hx%C`%)=zUt5=niC@_xY&jK');
define('AUTH_SALT',        '}i^yPVr-Tgk$%DTum`?XMrXDM ~*Xt!pSpFo~]PxjgW/(lHgBFO}Uj;-ine$I*l}');
define('SECURE_AUTH_SALT', '_~awf=q(m{]2WrFtm>9j+#6-qExC!P:YJv2zD<6l+aE$e-Znwg1AD2cqeM~;w`kL');
define('LOGGED_IN_SALT',   'yiA^bd`T1tNPB)zM,%e<+^f]Rt[ER{vXuQ_``68.rfE4=%HF/^$,*IjFm l<f!4]');
define('NONCE_SALT',       '.(?GeYyeyuj8w/s$~p](o:<%m/-kU&9;dD&F `T]?KLh u?vu!V6F!wkzQ%X2dgb');

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
