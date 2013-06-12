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
/** The name of the database for WordPress */
define('DB_NAME', 'wp_npe');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'n&COm1<zt6EYkgX{Xgs@lEDLylSoY9Bt;AC32<Hz&KFsadYHkt)~ePv_R;Eh1vu,');
define('SECURE_AUTH_KEY',  '8])rxtbT_YOqi#7mQ#MmJ{)aN* _QDg(-0w`K=~6,YcBpB+t ff|% $PA!:m`A4K');
define('LOGGED_IN_KEY',    'o5vS&vEm&F:T#Dv?;>e:p>_E*Xr!BUC:s.AZ(gvW*0n-%f;kQ~tc?_D8-g1Xl$B#');
define('NONCE_KEY',        '%RDSx|VsT+=+,@_E{x@Y8fZ$gm}6(f3;c?k.`v06Olm/tbnOL<AeaEUsq;wkyB2P');
define('AUTH_SALT',        'C& :SlSc`2%3]+u._hW24TFAZU^2)MOG`?5xI+:3_}QD}O%YJoa4K@LC>^Gfx%4q');
define('SECURE_AUTH_SALT', 'd2ODl`?[qrTr+AB=y{ $,>yXjN!Q8?1{Rb|_ zh.@4]K`G]|jHD=nozxc*%(ESv=');
define('LOGGED_IN_SALT',   'Xx^4+mCX$(I1l~|ZU|Uz <w ;O4bx1c=vTIU*N1tVazubLiDCk[wY%:B00SW^U4E');
define('NONCE_SALT',       'K_2,OO>pLY_T_3I)3vw7&9;4(zpE]/J@CC>t45knYbgp)Os$79Jt[s7A{M5;%zD+');

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
