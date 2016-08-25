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
define('DB_NAME', 'allouette');

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
define('AUTH_KEY',         '-h e5{8r) Af`8PRH% [ _k3qb)UpsG_m&e7()RN*G`_uEf*d;m?1q_W6=gUymas');
define('SECURE_AUTH_KEY',  'I;*0oVNcXhPW;F/)qh{D>aT{#S^UjU7GTi44hG_<v%mpiIDXpcW.$h3Hg|D^yiUs');
define('LOGGED_IN_KEY',    '(5{w3+fvK9&<douCF%1Cd0gcVOY?n?tT%eI8?gBmWlTG_08S#!}1JJVMA?>UF,!!');
define('NONCE_KEY',        'zT]9?RV:UYR,:y{4>pFJBH/hGWo*~CODN.)Q~k~5]~),?Eb2<?4-zwqpU8=@GP0g');
define('AUTH_SALT',        'rrex[tzI {qY%no34c,RXe$i1S7XKAj,zR`3Cr?(|ik/5uUgr*G`e!VSUuud{JwD');
define('SECURE_AUTH_SALT', '#I>`90q4;1XoDpR=GsqWPSj-OUY>VEVOtphFS/nST)s@*#};KkR{Ll.B`5!yav0G');
define('LOGGED_IN_SALT',   ')OWGd;9nU_[vne^t]9);%*@vgiBRLbR5Gm{P<Tew+zE`f)xvdmc8ndDI=K]&%MD5');
define('NONCE_SALT',       '1%:p4-B*#[Jouy(Gaa^PbgnkG>MF%+xU(Uhi+O[7,{GqzJp032b< e&d IoMT/#@');

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
