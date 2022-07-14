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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         ';Eqpv&_=In2bh6Q}QO6bDl15q/k1$hHT!7%jdaukwJ10c(zgEfkq~uF>?&gDwur%' );
define( 'SECURE_AUTH_KEY',  'YPN2~+}2*tT [ywp#N)-(ZWzb({Cl9/E->Pe-hDLebzp2`BE(gXg<Gid9JqygfwS' );
define( 'LOGGED_IN_KEY',    '0bc6*IzuNjjCPq:_&=rc7MzWiw5)uWVK=bzrln6%`|dPCo`;zJ2X3#%Uud9~o^CE' );
define( 'NONCE_KEY',        'x(/MF.YS=/2[2/:jG[%qkDs5( KT6u;%Zn=e,Xz{w655/D>qZl&6Z={%A;%0aRWB' );
define( 'AUTH_SALT',        '~A^:TQbpn$D*u$z4#{weael5{(8>Eg&raejTn7%qX<j3XT003O=3`O]Hr`vL[r[0' );
define( 'SECURE_AUTH_SALT', 'C?PK*JvdLj`kl#3k7WSf`5=*XSya[76 T/}+z1bQ_l344zjH{dPv)h`?}+-WVeA[' );
define( 'LOGGED_IN_SALT',   ' :+|$?lFWm|*R#_xhEZ6+Jg$l|TzH,Z_db3Hl.8<}:FIa&>=Ro$y&cgF (ZER<fB' );
define( 'NONCE_SALT',       '^|`upErR}gN$wXbG<3LBxQR5 9r=bg}DlC~*S?0|m&RE=2MbYe$+<^~62:F.f7[W' );

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
