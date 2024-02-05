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
define( 'DB_NAME', 'u288447754_fTeJE' );

/** Database username */
define( 'DB_USER', 'u288447754_lkEyi' );

/** Database password */
define( 'DB_PASSWORD', '55saaHNigX' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'ucrB(jku :L&m&~os0h]9)RyyqC5/Pp}>,,>,;qB[H*hK:B#!xiLPNsf7H|wXtUq' );
define( 'SECURE_AUTH_KEY',   '>JMaicqk>]_rf-#3oiya!C!d(:8X2bhxPm5YC:I%+Mx7w?=,edz-Dvlri]D$i&C9' );
define( 'LOGGED_IN_KEY',     'zL;Yx!./2IPM=[rRyI5G1~e#@Au9oN&{>%7L4uR}!61r.9|;aDZU}PN1yMW)[ln<' );
define( 'NONCE_KEY',         'i|h3PXkT.Fr[2c5>kbk?0K ^&p2r:Fn2fq:o,MilIVlpg;x}m6!Wq1/GOJ&}A[-|' );
define( 'AUTH_SALT',         't.gf5!tCPOYX@5p-{p1Bw?$QoNl#w_IuY)t]2%,mj@yZM_OE!a<~T.@v{d)KdD?K' );
define( 'SECURE_AUTH_SALT',  '1:@{,.Nk,9]i*OaZ+QA9x*z2d.w|FayZ5@[PK73{GT!z%X1v[Gu;kA)[?E!yx8-I' );
define( 'LOGGED_IN_SALT',    '0a]V4t?J@~nTmYIaF#Nv#Bk)AOy/oTbE6$II&>-9<*k(0oF AE+6S/&h?a2S^[w{' );
define( 'NONCE_SALT',        'AmB^:^.,2%IT6z:/Z$9$8 OPS+f<:<6Oe`8Zb`D*uMx@~Wap=IP=L3bfwq9/(6H$' );
define( 'WP_CACHE_KEY_SALT', '}dH-LRa;A^-~AX[$5} s#BAIx~V@f1$uI(G<00r{XpS3:&5V|tCi-PZOHB.sgG{k' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
