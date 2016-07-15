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
define('DB_PASSWORD', 'houlijie');

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
define('AUTH_KEY',         'm|$fA`jN_5zk1_d<!ih5+zBc6L4V6@@*s~9O{A! y#oT[9Pzxr5t@jtmhzqa{Naw');
define('SECURE_AUTH_KEY',  'Q^J[)`JjV74C_!Cr|I5F.U8S_wN6uJ*W&Em#j%[Zn7D0POi|0dB,6Y7idc.([<{N');
define('LOGGED_IN_KEY',    'G|?ef94IJq*dwCZ9fEhDTJ5!iYw]E{|sbxn)M3L M`$`1U}}Kdph<$J10?;RVE>^');
define('NONCE_KEY',        '6i^0]0x@/DV@yzeAJNs8fsZ9ep*LBnQdH}Z7&8,RM7MmV@QirVt0*jqtMS3g1~0[');
define('AUTH_SALT',        'PQ/30Rv2Wb%Wl|)S!BDj|a1AFe!oi}QL{FLXy00BqSu*AsxjU.]Zh8$vVfQxTIbG');
define('SECURE_AUTH_SALT', 'HoZ%9A7i4-8+M1PABpo&%.7P+0:!q:`?)M%bS=qZtyN[){h5{Zx4.=!cugZ}-;[r');
define('LOGGED_IN_SALT',   '8(Mux3SoaHN#+TR/:~{WD)NK4?mC? ]UP(X|#CA!S*O[nv#7hc&j 61(]sKTndk?');
define('NONCE_SALT',       'Vh*|0^]{=X(Nx%`KSQjvSL8APVUuR>pz3TL_x#9;~#>@Z<F_}N5J_$Y/!ejB0.%o');

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
