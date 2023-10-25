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
define( 'DB_NAME', 'wordpress_tahira' );

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
define( 'AUTH_KEY',         '+6?$L.pi4Qx+6=!#:f1`Rd,litm|U|F-IG2k@soqn5(;JCT8vgo7l>z%nWn)KkVm' );
define( 'SECURE_AUTH_KEY',  ')`4&p8RKsWp%}$K$u{>+==Vv)ZMQ|`DhpBL%:Mlt=gxCd@mh9XQn+*^Nb.l{-*vD' );
define( 'LOGGED_IN_KEY',    '|R+E@aE9V?f/@mERQC!li1K~HM>,bT`< zp4H3{0Jx!6B3bz5R2:H0_~F$S6)(c.' );
define( 'NONCE_KEY',        '03!jlg]q^j/Lic(6}3f_>V4W/#[[G.ZrR2%l|9{Y``f L+kLe@ie!FnSG<VQ_KtA' );
define( 'AUTH_SALT',        'MTuRQtZl-mv5-38l|=F(g9jWrfFw>`]P=][3Z5#MOD9;X4|i><P_d~=LGUf*dUM*' );
define( 'SECURE_AUTH_SALT', 'of,@.8W#?$-^g3TDuz=9Tyk8*rfe?UO?N2~eoqa0N`7On>p7F.r[Jv^=V%Q3o$r}' );
define( 'LOGGED_IN_SALT',   '*]0PyBTavHXS B}&-u*1ps+(JWBF.0!{XqBn`[pW{Z6=Kv7ENHj!zg.>=`N.(IUV' );
define( 'NONCE_SALT',       '6|[/:Wh=(dD(GM^x+(SJB/:9gj i/e}A6GFwY52:,l@?ZEKpwD:GD04gb*n/Cc&F' );

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
