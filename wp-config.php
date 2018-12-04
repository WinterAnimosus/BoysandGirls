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
define('DB_NAME', 'db_a41b4e_bgc');

/** MySQL database username */
define('DB_USER', 'a41b4e_bgc');

/** MySQL database password */
define('DB_PASSWORD', 'bgc12345');

/** MySQL hostname */
define('DB_HOST', 'mysql7001.site4now.net');

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
define('AUTH_KEY',         '0PW>L}Xr=tDg5<Z:*JY_EbK~[)?]%~6[2N{ x$GZiMn=SFk[)9r21zAeu$Ni%NW ');
define('SECURE_AUTH_KEY',  'Qlpofy5wXy0FX(8T9F%yJUN$Tbk%V`q(Z2hahBh3aC)IXr=X~f&>p^mqz;@>-kSN');
define('LOGGED_IN_KEY',    'E:sh*t7zK]X<59g2u;qv@.;m]<jK%U?zU2X`/4AH0-{F~5GFzGBQSFwtK#$D*GN(');
define('NONCE_KEY',        '^`9Zu(68v^K@l=;rO.#J,+O={i/plER+5@J?n87Z5W!gnNP0g a&u>];04CbeBD]');
define('AUTH_SALT',        '``v!/f?LdM<8gYKy}7HEmT7:v^ybDj/a3D!tbElHAo1l|B~=@yaKQ3{1ODcT^Rw3');
define('SECURE_AUTH_SALT', 'Ij>^/YQp#_E>SO XD,;A~Elpw1sX,xY:O,seP3@Lz@?{Ry_A}Ng=3nfm-S_sO~VC');
define('LOGGED_IN_SALT',   'FFGZftOW#V9JWIIZ&!1b?~DE(M NC^Dbqfn-/(VPqqW::o{.nVka`Kq#`6QYv[Nk');
define('NONCE_SALT',       'Z/r`]~VUlN C*5Da;rx}5={|&(}NwIY$]/y0>;BiqG^&@U[j.fC#A`5Fe}zm6$DW');

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