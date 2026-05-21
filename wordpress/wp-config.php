<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_test' );

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
define( 'AUTH_KEY',         '2Mi/5WiVGuHmo?wP;%kUQ%^zK3cec&%m<xh.xSURZ1Cm+g0@nej{C)>tTxN>D_(B' );
define( 'SECURE_AUTH_KEY',  'C~=|a3Tnk<:RJsBRG%xVW}/iQ/mkZHkd@sbbL{BB>T|>Sfrc<IQn6m9GMuAUO~c:' );
define( 'LOGGED_IN_KEY',    '-x9?QJgtrXY4^C!dUQjL1t0@=C[AuNGxfxVdqN;=JYTl7;iE%>NL%J3_Pm3R5mjt' );
define( 'NONCE_KEY',        'QYgY9UMh% e?lt2pBu:XS|FI`TFku:a#27A<S]y+@}m2TfEIaq,fvNK?6TuQXF{m' );
define( 'AUTH_SALT',        'G|?j?;<9#9m:UT._c:=t.k!OFC8P2wOCg[;/4@f=]jwDA6G/-UQ1,XD)X5i-jFdN' );
define( 'SECURE_AUTH_SALT', 'nM~y)8/j,intD=wM,!`gy0R/O*N+`=1|S!?r;.#j%N$7A@1|052Y_v%o{; a+OUc' );
define( 'LOGGED_IN_SALT',   'SkRfIjd![0^]d<VTn1>+}*X9AbC sNrxIRpA9)^%,su]Gw<z.gU[?a9a(|uj 4W,' );
define( 'NONCE_SALT',       'Z]w^T+a6FmKLVH#Tm8 pOL8IN-Um!`}k5UA>*mI7y>mXI!@z:*J`g!FIc;my>#M4' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
