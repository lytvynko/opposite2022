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
define( 'DB_NAME', 'local-wordpress-base' );

/** Database username */
define( 'DB_USER', 'Agrr' );

/** Database password */
define( 'DB_PASSWORD', '12345Mt1036' );

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
define( 'AUTH_KEY',         '4k2r}n&;Ayk{2q=zsmV%B8b`7lnfcN?JVK#h%)OPJ|I9F&K:``PSnQ=BEP4#Tr7f' );
define( 'SECURE_AUTH_KEY',  '27.=F6Weoj:ho7tJ){{r376u:}6e;8?:8^d}hO079]_mCGMKE>R7w2{BDrS@B1Be' );
define( 'LOGGED_IN_KEY',    '93>n)7*wB[/,I/*~HCsB3a:ZK]Ng=O^bESfk2h`4XXW-~JS3pY%fsQVsP wGK1rR' );
define( 'NONCE_KEY',        '=NOIV&O8z<c<K<j3U,Z<{U9tK/|Jz+_Wk4. !7cv^RpRhA?t+X3_(!#]UU(!NPoO' );
define( 'AUTH_SALT',        '7;NU4cP{?Og^DtlNRKU;~Gwgw8`B2bowMswaIS@L`ANZ*~&;59jE@W ^Grx$Dnv_' );
define( 'SECURE_AUTH_SALT', '>`db#_tQZh{-<0?=>gOmPei=RIfu?^t#aQSu$u~LxT[PNF34RsX]N4oEoQEWEjw^' );
define( 'LOGGED_IN_SALT',   '{+y`m.sf`Y7IZRsj3kI5T vrfqnK[E8Sc9]CL. h!<u6?nCacd0:+L.f*MpYyFEU' );
define( 'NONCE_SALT',       '/#t@k@jQ!%A0I5y06  oVK[guU.&^kT&5K^B9HjyJwt=2%Mt~iYoO?MkzG|lOk^`' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'local_';

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
