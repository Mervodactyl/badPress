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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         '2e[RS=JhA=j;`:chwGk|QWC[C3lw#3])9E]4,fY>PNBmPe 4QO0ojsgj0ujU*Ivi');
define('SECURE_AUTH_KEY',  'Jt3-*!K;-ujb?ThtY?5+NZc4vv@/^j?U<dq=_7/p3Oo|>+?$fH1n$D~-biMb>07E');
define('LOGGED_IN_KEY',    '7Ls[<`@[.-tNWuF?@AK*Xh[|Zik X]{#K|=y|2cOLs 9EVp@u*l.rbY0fb{_R%3S');
define('NONCE_KEY',        '+nFlFGlzQlM*Cy &Yh([oYk|#ZnIVJ:<P|P1 zD4w^$U:~q}Q=:)4/|( .5{<;NR');
define('AUTH_SALT',        '_c[UqYkrki+Ee{l<R|Z*Dal!7nsen#Z(uO;<Qg22afjGAT>8dHrOvlU?naf.`A53');
define('SECURE_AUTH_SALT', 'eT_b+tO5Fi0d4k}Rh/0iTkOeLm%tA[2KXwHGc<WRPz_sdnzqh[Z#3]~-_knqj>lr');
define('LOGGED_IN_SALT',   '5&Wz0 tCFjO+[mEcf]lao*P8K?!FfP,NU%)pqUZ#9F}tcV;b)*E~[i+31+!9z)p/');
define('NONCE_SALT',       'a.SXVa/ hF^I+-{nX=9OOcm~TAYCTn&2AJ4G3lg;n{|JT&_=@8o6qpOJ>s dakUd');

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
