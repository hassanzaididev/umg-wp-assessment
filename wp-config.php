<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'umg-wp-assessment' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '-.VUF{a-5>!sw61.*A.Eu=_~uK-&motHnmw<`J^N@z40pbaikoRJHu>z0-B!d$ x' );
define( 'SECURE_AUTH_KEY',  'u am3{PymmGZ1j( Ub2c&Fdo^xivmIgYzX$p5v@ffU uR7?-2P[J_4?Fo7M)(&j&' );
define( 'LOGGED_IN_KEY',    '&(8z<0;`S0k1AYe~jj@.6~}Tp(yZ]^=x`#(+T4gOBAA<RdTPl)k1!u-NTM4e4 BL' );
define( 'NONCE_KEY',        'kgpA*[1o|3yyjY]g*A_C$)y1|$G;#CGtC8rW>,y!H{J,bs.#_JE8jD`[*mR%RmlK' );
define( 'AUTH_SALT',        'gnobB&/[b9zwFb8*B)>]G4ef!-9|b~*Pj=$M;q[&v286N>bbvm*~86DlKV ge0Y[' );
define( 'SECURE_AUTH_SALT', 'bXP[/n,l9.QKtrAS7 3bM[&$Q TA+??:aGp$%S-9*NYy*+Ls14}%>Zl1v/A=)>Ex' );
define( 'LOGGED_IN_SALT',   '-TVA&~_[mj@=?si)D!qLn%cgg5!;R+(#a= _<eSCT4`]rX<Mvmj(cRLUG?KfJD3e' );
define( 'NONCE_SALT',       'y[/$ *24yG#SUD|mX>8Ri4w+9(N=OZD6X_sWFxg8db}L~1oqi6)khG7;T&0*]{uU' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
