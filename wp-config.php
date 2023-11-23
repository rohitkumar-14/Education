<?php
define( 'WP_CACHE', true );
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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'education' );

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
define( 'AUTH_KEY',         'rP?gyg4@=zd=ys-=MV$2^x?ks6<]:^~uaIJqq+vv}qwfX;E{Q=v`Fg[>rbPqP#Y>' );
define( 'SECURE_AUTH_KEY',  '9-HvP,p%HJ2k#cWxXRGb: -H_}-K>g,]_O7ie)~((;*ZAFZ0?ll@:~6u>Y^`>az+' );
define( 'LOGGED_IN_KEY',    ' :&+j+G8-[STvFU$S.dmnD7VMy&S.yBsM,?n$>5|M(z?ieRkN+_1t$rV2#/4wk01' );
define( 'NONCE_KEY',        'h#hMNz~otV[H-=veUdBP?,4GDNvp)dz:jUUbc~/khdT$Aal/D]I4d=9YC^v{WB1^' );
define( 'AUTH_SALT',        '1`F[`!b>]{v.W<~}&6~{ 4@ifGQOh>Cnm#`LJdCLw3DHJS8#)|`tt0G+*rnvJGzn' );
define( 'SECURE_AUTH_SALT', 'K9F^c-iePmz;%* 2W)g0hu B{n%M^Jsm8!6>bCX8Xr,?.AQ~.R(!CX>LXkW+12K_' );
define( 'LOGGED_IN_SALT',   'Zf%Z:LDC/po8[CYn/>Isc1b$)kN7;0GwhM~0mSn1_d;eRqdAjS*HN@_2_YJ@38S)' );
define( 'NONCE_SALT',       '94AJZ~Mcp]3a2InTJ<44bs=xe@NK5bQfsQq$JK3}o-`YO+-BF^WDaDJD aDz;3rf' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
