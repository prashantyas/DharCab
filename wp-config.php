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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dharcab' );

/** Database username */
define( 'DB_USER', 'vyasprashant' );

/** Database password */
define( 'DB_PASSWORD', 'prashant236253vyas' );

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
define( 'AUTH_KEY',         'Pinb0@(JH/;=B3AZTA.kju|L<GAxm>+UpzA#EE_1,0Kl(I}x+7qjkRDoo}eR?R;^' );
define( 'SECURE_AUTH_KEY',  '*P2Awk_M?f%_q(l3`3c(UXeY61QqwLx#tD8/EV<7h{Sbl!}pyj#3%!$1IwBnLYp(' );
define( 'LOGGED_IN_KEY',    'b&9VjhelaE6Recdz&V1_l+,$b^qOpum~n*8,<a9VvmqTYm2$*KKI78k]SN{&V.m}' );
define( 'NONCE_KEY',        'g1pQ7RK5}-n/fyTHEH6[gwaprj90@A[dv(sd5Dn2#^-+Z#M:$wv)7]alK.M<aNHn' );
define( 'AUTH_SALT',        'e$06viXda5z8&pI0-bI?easv~)).5_5Ws`~!d):]C$fxs)-/o`9fC|<{ykp;,HTa' );
define( 'SECURE_AUTH_SALT', 'y|izw:q{{t;ZO2`fIxRj2H=f<d/6*r6Uw$Ji?[PbFE;d>;:}2:FnANy(,>mAB~wo' );
define( 'LOGGED_IN_SALT',   '/N?MK,}!Z(/~on8ChpX)P%Eu^rt,QnR{@25f.:6X@m$L.,Pp~UsY9jr^pxg}?.G[' );
define( 'NONCE_SALT',       '(9DYO3O(sm;a#H,GjxT+Wx}}On}5q@}g-M!gE<[)$<iSPL8b-53v5)DrPNXT`f d' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_wordpress';

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
