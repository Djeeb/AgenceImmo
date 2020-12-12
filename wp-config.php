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
define( 'DB_NAME', 'agencia' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'QguLCh~.ahtO[yG*Oi5JSxki9V}[hd3[epyKQQNKO>0ddhe@9zH1=QvP~]k8WX{N' );
define( 'SECURE_AUTH_KEY',  's7t?W~CKnSrg;pb4PP5H7DEKk>RbSiNDU5&-V+>4b(??b8-B[!bLb6e]n$q?)2uf' );
define( 'LOGGED_IN_KEY',    ']wYK}*/+RD(t[b5G;L5N1p@a]HrbWR7m[w#<Aev=BK(3HUV~NR4CL0e&rkynQ3w]' );
define( 'NONCE_KEY',        'aL@IvK%mJ7?{Y?^ou;]oi5kD|b5N(@T~!~o:bxI`DOufLDL`yvcqY4Xws;}gE F1' );
define( 'AUTH_SALT',        'qLOETZuSs`^3sqSl]&;!WYs&l,zAR`VOAJYQL=BQBkbUh],Jd;,uPp4r!cZ&85Qz' );
define( 'SECURE_AUTH_SALT', '?rcSW~R-J+Ou.db8e8Onx:)<P.Z2v;^2X9|m3lV&E^3u9AqI~]z9&-dv{].voI0U' );
define( 'LOGGED_IN_SALT',   '9|#CRw!q<1 6y]:!f.]FK?-lGN@ _p2(J!jjiKyw@i9(%{lOy!}V$-G^Wkoii %.' );
define( 'NONCE_SALT',       '<:*<=W%,wSP?OZvH`F#md)5v(K(NVhkU:S?L0x#cUQo ?{43?4sJa{Fg&wvdqvY%' );

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

define('FS_METHOD','direct');
