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
define('DB_PASSWORD', 'student');

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
define('AUTH_KEY',         'S9&y$)&D5y-P4#F:c2>NR+j4mcU1w]0s9ngB;Ml9G>werm*R=;*m!LW*:l[.VZ/_');
define('SECURE_AUTH_KEY',  '*+du)Qk[@?^jFStm{C@R+-PY*yd?B`|zR:EqVxA?1[]eF_|Vi-a2KTrI3Y,nRrb*');
define('LOGGED_IN_KEY',    'cmpI~Ej.{{2JfxIo?j;OhXa^r;-Y+um,|$7TEqeed,+=e8zNH~GJ^+i5+U_BlTf2');
define('NONCE_KEY',        'QFS-wOQ|M|?$/4[h@P):6e|C(SNe=tW_rqbt!.&SJElG?6_PVWnTsXzO+<-oH++r');
define('AUTH_SALT',        'K~tCz<BfR2_tMs6; r`CRvYW|a}>F~8.QpI})2x(k)GUeVo))>,CF+N@w l,-<-P');
define('SECURE_AUTH_SALT', 'rGd!Z{d*Y6|y+NixBN~$agntVx7D>#v]}B2r|17kilky@J[at?M~?&vPnoCESgX_');
define('LOGGED_IN_SALT',   'aq-YqgWW2/=PMO.uO:m-Ic%<vy|jG*BPO~WR: 2-0Gp`2j$$|>i?)1GUP$*:0Z#}');
define('NONCE_SALT',       '(ug|K#j}D3pa<p(l,9>fcFi.2yj{!=8u-Pyg0Up[T:x3-<-{f7#9klNMrcYQ8[ah');

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
