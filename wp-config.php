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
define( 'DB_NAME', 'itwordpress_db' );

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
define( 'AUTH_KEY',         '^&XTTR:3WjO{VL)!?e&J@wgr)IieNAu_[E-sY-ZSbT&;rM#y20n1T1C%yw q.O N' );
define( 'SECURE_AUTH_KEY',  'xI5S[p:rX,+l;b[|YM #z_IWuLqot,;nr)g*54t?W|zM`4J-e pK=pi{Xc=C!gC`' );
define( 'LOGGED_IN_KEY',    'bZiny&h(o2T!p%[s3^GmpR@p<yxv]9~8&cD}P}5786/%k^4c)Dc>=.TQ%sHk/9qD' );
define( 'NONCE_KEY',        'B^=.an~.z`)@&0Nt{efmje0qMf=F85IHETzact$iG^nUw4&Reh$yw8xz;<v5&X+x' );
define( 'AUTH_SALT',        '8TH;8gtZ~M.!V51I>?TC nEn|Me-7b>c_es.Ab9|TJS[RS=%PNpp@%nTadYMPc[F' );
define( 'SECURE_AUTH_SALT', 'S@KM[V_zO<xFGs<(spSFW|@9.$U6B#wDZQtHSa9)))n!)p26!XF.k#RCN !BC3;M' );
define( 'LOGGED_IN_SALT',   'i%|}UeB2G8A-%#zG4~Pk+`RFETl]dS!h,2U.YZZ4I #e5=>$,+q_Q1K3V9N}e*5N' );
define( 'NONCE_SALT',       'd,3.|F`r9}F6g&#UyNy/&*e.(_L5&aY:{6v?#RtgAB./XaUFa!Gf)u#F:saU$uv|' );

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
define('JETPACK_DEV_DEBUG' , false);


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
