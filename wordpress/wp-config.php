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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp' );

/** MySQL database username */
define( 'DB_USER', 'wp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'secret' );

/** MySQL hostname */
define( 'DB_HOST', '172.24.0.3' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'X;Xw.|Uh@8&Mw?PAnv.GvT#z}b[~BTm}e=d3zY$4(wor*-t+9@GVb1PpVw%dC M%' );
define( 'SECURE_AUTH_KEY',  'wV.wvp$|hU#lD{x6ZEZ-^+}egL1=>}uU?=jEpI-$Q!54Q@]dEl($QYcl79+lxSWG' );
define( 'LOGGED_IN_KEY',    '*}|J!Y)jLER61_lF,@s5FR2Z=5Pmh6cUXA*38CpO.n}qPUqYMjuY6qOcHi@E1stI' );
define( 'NONCE_KEY',        '_[]TaA|Rm-ou+*d}(?2kW7<6yE6Q/nCh+zWCL}s2/~`vgl@5h=8X8MDx5C4;6EUN' );
define( 'AUTH_SALT',        'v()!U/5Y*R3iD>vlI@cq2Qh(Ctu<n8a}8M&uoD1Jx;1i5y)0UC{6Yu]^$x.%=.{w' );
define( 'SECURE_AUTH_SALT', 'SxR*@?vL[(CK$tnCvdRFM6f,WmWz[m8U9_zi`@d=+j%*$vz&QlF&s&F%*1z_mc/k' );
define( 'LOGGED_IN_SALT',   '7y5]J>%S1R{FMM[m8JldGJ,[tLI[imCODn@Ew61 kcyC1ipqxx~SZ,*nn1vhaoEN' );
define( 'NONCE_SALT',       '83oH})]`JWq)zy7@qUllKS]IO-r7#jNq[h.zmB3^~F9e-a;+IVsxH!WC:g9kB{c_' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';