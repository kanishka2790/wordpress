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
define( 'DB_NAME', 'wordpressk' );

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
define( 'AUTH_KEY',         '2Dedip37;@ZmiB^A%bs@.3q{}f+Jgf[P2{A35xC8o21,QMSYvS&+H{l-P8?OSUKe' );
define( 'SECURE_AUTH_KEY',  'P$?,7<h*dJza%Nz(->->.=!N k=BrEm>,uN!,whHH=RvsfRXPvfg(aafGYQVl-8 ' );
define( 'LOGGED_IN_KEY',    ' nuP^k8so0i<fgyl3}Hje]Sp>[J_iVv0QP]*]wXgu{[z3*|%Go9|f!_e_$LqTWik' );
define( 'NONCE_KEY',        '#1UM&P g}wblk+hIM,Ns}F;N><@0=`5E*2n0<Eh+&+EXfq|*OTf!o ]+KN.;N,e+' );
define( 'AUTH_SALT',        '=}]bFs,tkqxo>2au*W(0`Z=cGgCjp@deCM0kcEadLkJX(:e LqdX6SmgU#txd8CB' );
define( 'SECURE_AUTH_SALT', '%dy$8-wE?%]x<3Ot$N0DNNMc<Ors=G6PP2RvQ0(mKA_V}b:xt{8S`A_K?L>r-z4N' );
define( 'LOGGED_IN_SALT',   '~./>Tt*p!@A{*$JGwt1Cq(+.D}ugWcqpOhA,fUmW}SHi}^|z:-Km)^nm)]=>+^{6' );
define( 'NONCE_SALT',       'U<|GciR1:3AO`zEbG[;^h!0XAEs%$-sPWfsEF5tRq1vIKEfoX<xiu<@7B| F(l}L' );

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
