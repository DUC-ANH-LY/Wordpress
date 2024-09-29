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
define( 'AUTH_KEY',         '|lJcKy|;V)vEw|JQD*|0y~DY?ll/c3!A8b?Kx<#p80OZDUXEVYLs_BkO_dn^e`.O' );
define( 'SECURE_AUTH_KEY',  'O>W#*Dl> f!CIvH3xf(%},liZ!ctYQO;Wp-7mN2m,]4GI4A;N?x]8_Yl$56JvpM<' );
define( 'LOGGED_IN_KEY',    'k+:j<U@k2F}s-+!Fs<4=dUj[a_B]gv{sDI!AlXm52X^P^m)G]QtKElWqSLnfyamL' );
define( 'NONCE_KEY',        'm0qb1s}bi=J% BzYj:3l;1) GMpV3h1DmM3ePHNrS1{vOdMc)*b5Ma3>nNI(eB_*' );
define( 'AUTH_SALT',        'l#Ht<>g*a@ZrcIH}s+]s2%-(P0DcKq|z2&~MN.lEq~*Bo5Z2H qms<vbzgli4ha|' );
define( 'SECURE_AUTH_SALT', 'I!`qtkbnZ<s6|0$l;vMRJHY}/5U#<.MvIl;rntIo)S{DAK1os{rYFWprZK$nD:<_' );
define( 'LOGGED_IN_SALT',   '&(pL5-f_>C(F!UeRoqEwP3l(;t!m9=#`eynwG5Qc0*(9[RxCmMfpkk v8tby/P1W' );
define( 'NONCE_SALT',       'Q.NAXd {SoCrgoKOI68.9rKC?&6]M&VX7zarlD%3f&IK74)<#~1*6-f e@LwfE5=' );

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
