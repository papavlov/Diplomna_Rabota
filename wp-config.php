<?php
/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );
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
define( 'DB_NAME', 'diplomna_rabota' );

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
define( 'AUTH_KEY',         'CFaGcMw,Wo__ceCI2$SRM!~9Mo,lV>TMjH}f:M>HJ$$bk@b(}PL/u)){X9IWo)3~' );
define( 'SECURE_AUTH_KEY',  'mEecz{;PD<^W4oUXKyYG@tjLehC.^UMN>0V`7ydk9K1F{`zRI;11eBNc`P1[% |A' );
define( 'LOGGED_IN_KEY',    '[3;A!+YjaN+w|I&auYNFr``O YY7HMJvfqQe?j,T:~ET$y($KXx):S>UVQL kRt$' );
define( 'NONCE_KEY',        'Tl~6ZvE/3J_bJ#?g2Fc%NMpI3muF(#_lu?3<rK!3IL[8]:?Y7lG4zC>Z[mMksB@,' );
define( 'AUTH_SALT',        '[WB]:iz%LNi~$0}{^4(U;}463[hhw8;}V].@)-(Z{6t0M-*DQQt,jxR(~_f][ROq' );
define( 'SECURE_AUTH_SALT', '&&+7~tUb&-sB9O.asKEt&MdeHxbH32:ldHIrKK9ZigXC+Qp~ _HC=_n0icegT.0S' );
define( 'LOGGED_IN_SALT',   'DYxnSzc(i-s.Ld.,<ZKF2h-YX1#IQm6Shd8AS?){||w7_<r_uxw?Zonw&DxetS% ' );
define( 'NONCE_SALT',       '3l[2nipgx`8mR_r{A+;LNU%eUV=[O?v)Y2vltt50~>%:dBRo+YkP](@s``mzS-TQ' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
