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
define( 'DB_NAME', 'myweb' );

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
define( 'AUTH_KEY',         'IJbBD]s&&L`U`~TY29Kr]ABO=0YM &af?178D?)/$z[t3G?eGc|nfmem*GSMm(Ah' );
define( 'SECURE_AUTH_KEY',  '|{Vmu5Xx$KSjeEmk[FIC/yfEUA?/^sak@lo%&Ec*EGMhs~X-^!^N{@G m)f7.CzU' );
define( 'LOGGED_IN_KEY',    '+Q;$?XC]Y%#{!F&q(pn=f}J$P([04:}<(C2_w/`~V`TPq1S;|1lF?Z0T&$iTF)eu' );
define( 'NONCE_KEY',        '>IcR$g:r?n5?fLD6I_;tj2(P7!-c-%wdH=*@*_iC1`f^|PZ%/?sK+O}t^To)+10W' );
define( 'AUTH_SALT',        'TN&@LV`xp[5KYV0PzGc[yw t}s`g:LwTDCTZm||0d?@lE3B1[c1:{1c;r1:P*KZr' );
define( 'SECURE_AUTH_SALT', '2+yOY7F63]/gOxH+oDJUy:b[w9_jY]!PH,4`&we$(H3<q0M/n-p;bZgE1{RUqMS/' );
define( 'LOGGED_IN_SALT',   'Zzma$URM|%:YTA:|{Z{dIyHBR?pP$ccN$bhDjd6jgoAhpGc.ce$TM/r)n:8Q=3l>' );
define( 'NONCE_SALT',       '@dvUkf2P{?4ueq+y.lVrvgfmtml=Y3Aoe_@tQz= {_kCP&`5C2Hi=;NXI.}F)`5e' );

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
