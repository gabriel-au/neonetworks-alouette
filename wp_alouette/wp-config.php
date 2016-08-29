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
define('DB_NAME', 'alouette');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'apqYY+RtY67$?3yQ+@NCH ~wwn;7Y`e1C~7uf_b91<}+hbfDSsK[,)KSGS+zQ!2#');
define('SECURE_AUTH_KEY',  '03Nqv85Yy=g:MJG^ydEy_y$jw7qPw)U~O$0L6h.;/llpRS_VwZmk/f_BE%gu2*Wr');
define('LOGGED_IN_KEY',    'l$)l%Y(TxQ3m:w`;bUV,Z_/Rx*$W@+.H1aNcucqBP|JHZ1}L)4KH}Qo`]?qp]X#E');
define('NONCE_KEY',        '/:GZImWD=-yorXMI>}qnrIEIvokwI0HbzHNy34}KhRfE4yfqKTqG|XgNTY<Dej_I');
define('AUTH_SALT',        ']!didf4O<muhed/hm?s!ZOxQ|w_E+gXOI_ $}D8!p+g~2=ZF1yxx7_NfEnUNtc A');
define('SECURE_AUTH_SALT', '!BsD7fv] U9qb6O;ttV}mhCbzA{]ECnI|W!i)*zpG@%im c6jDPiJ~Rl@i. PAA[');
define('LOGGED_IN_SALT',   '@cQcuBE&,-q18L=mJ_.d{+<1GLwt^47VPt@X,|bqjhrVp[9-Xt&:YDv|]*v6a29*');
define('NONCE_SALT',       'cq`<_b]@5 wy6#s(W:m;n(i0p%9$(;b88w4$*#p5am=H_W%m;OI~nK?/m`r`fc`n');

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
