<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'lestherayala' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ubEi>={9?`)u6@+qH~x^A(/B{tkCSs&pV<=ZJ/$dAwCkad(ZCDd~ KD[yGP#b/cB' );
define( 'SECURE_AUTH_KEY',  'zDcSEj4<rcF|}^qOy,*/Z-HS~ws |GpBL.UgkGb__L]m#B1.I]KsdjC_PzMF_mhf' );
define( 'LOGGED_IN_KEY',    '/t7o22JQ6WJ?9n[{hi3=hSo3gW!2C_L2TIz>~d/S>05|jGM-BT<7zFQkXau|`Mr%' );
define( 'NONCE_KEY',        '~h3FllF$Zb/b3|MNw)sJ qm$3=}KN+>9+@k3O+Gnq*.TMng!Cwv.jC{n,*i;{WmE' );
define( 'AUTH_SALT',        'BmPcAfL&GmHluj16X;5Rf{eiuB0&Uw}Cf?DQ8=X>@1<&.Z_E3F_lz;g2[5[B?BJZ' );
define( 'SECURE_AUTH_SALT', '>5XLx=F`_0T2hb6-1Rgia`p}-CPI9@0A,h/Xab A##4.S3V:nmNl5SIz,H7;<7Bo' );
define( 'LOGGED_IN_SALT',   '`n<F5q?55E%P=emW;^!:hR+i]yk}vF1/kh+sN{_~>o[I+$)z>ga?;MG#`seR0 %7' );
define( 'NONCE_SALT',       'l<A^d(P])FCv,^L6#y1xq`iP(]19 2O%Mi;(ukatOuow!7CeGFY3p?qurY{E5C4K' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
