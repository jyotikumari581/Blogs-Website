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
define( 'DB_NAME', 'DataBase-Name' );

/** Database username */
define( 'DB_USER', 'database-user' );

/** Database password */
define( 'DB_PASSWORD', 'user-password' );

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
define( 'AUTH_KEY',         ';NltKQb(2X4q1*9;WoM?~f<<L?{c7,TD4(1A&TP4zrn(,CMWcUDl|;GcafbmZ7-T' );
define( 'SECURE_AUTH_KEY',  'YqVX8)!8n[DuO5Jwee+L=lN=ONNHU2%t!;05&)TKR0QsZ,=+1yqt:dh_H[q!:Zig' );
define( 'LOGGED_IN_KEY',    '.s`-GogJF`QNFFL9_*C]m%i]ERAi}iTy?bC%tctYhbKbY_UV9o:Ds4|ZfR@*24:P' );
define( 'NONCE_KEY',        '/n$F}-1vgw!FSY?47]5}M^~P#9.?/?6JNAo}2[/E|a=erfJ_TpVn_SN[e+|;_QyE' );
define( 'AUTH_SALT',        'u:X&Z($aHxnZ9yj<lXsb-4EG6Ag~L2K1D=Xy721yBs3jFS_IrpKNd~y&V;Q[X*#T' );
define( 'SECURE_AUTH_SALT', 'B6bsdv}$mV6JD0&N1E-h[!LcF(V)VOChf+9<U@3&)*pLGF:|cI;Uw;O{i<UB.5LE' );
define( 'LOGGED_IN_SALT',   '.EbB|gf}:=3ET%&RH#1FB36=15WY=%vM%xhP~IV0Ku<eJacgio1lEN]nu@q?op9R' );
define( 'NONCE_SALT',       '[1kW~[y>GGbhmC-&E?No1YgsBkYxoZ{-/M@p2_wcX43brU:7X8[v|_cLo+aN0r*Y' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
