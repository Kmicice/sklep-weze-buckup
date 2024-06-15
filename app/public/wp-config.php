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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'Y=s!~SAw7uY:a6GxE4F*)W@fffTs+mnz)Xo(Yj4jtfs2|{smO`8@[EA(;QV:>@3f' );
define( 'SECURE_AUTH_KEY',   'PaAtFK!vg(||dd~fC+K2lkY5B|zLyk!A!+l#TY#VV*%M G!Z(2j!y{Cc&uLKM+Xt' );
define( 'LOGGED_IN_KEY',     'IGkHI=zd7q};eD.+b]oxW(xvXli9PpHFp%L`r mU5Ebc6LIGER>d-Z]9J$h+2x)O' );
define( 'NONCE_KEY',         'Pht^Vs[?rhh|q8v1!C&q`qfO:dYNPc>@k,7*/Q,1/9q!]cvE8@AkI8^SP}s/!c|<' );
define( 'AUTH_SALT',         'lG7XMG#Kpft@Th[.^3(h$^/@nB6%TiEBc5g$%*FlAJ$bQ#i*KJ~Dk%?Jf3?KD6c@' );
define( 'SECURE_AUTH_SALT',  ']3QUqy^r21`R8F%YVXyE>][Bm*G01L&KiZ3M9HXX0p+ogvh7CIWfVSoMN9Thc<%O' );
define( 'LOGGED_IN_SALT',    'H@u98>NFpq%v}u?Y285SlE`yOzP]8y)-h-;<f^2&~gWCOnMK;rXNuIw_9ez-r_V=' );
define( 'NONCE_SALT',        'XLxIw8ChWLZI>SN#x,y/Q}G$x{a)cWo5Vdb&+d%#6^e!@ ZUPGyYs_J@ejR!fcjJ' );
define( 'WP_CACHE_KEY_SALT', 'wU2pR6=vDm[FH7{5Hb/g_|@#lC qRZeSaXdjd5v%OF*NWiO01]5RJy~47`w81Bm1' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
