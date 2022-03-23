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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         '#%EN(pk!!^HdEvQ02*sYY V^i&=(7NV1Nxpg2$9PI@J_zrp_bWO#<QX~f!A{X<9t' );
define( 'SECURE_AUTH_KEY',  '}P@l@2K-,);{|Z2tPfJn~fNur,=0|M9h6[Eh5z.OJYEy$S5[ZCK=w41MM^)NsP:f' );
define( 'LOGGED_IN_KEY',    '>ih` xl2e{_4E<e5IYpeN`d<mkQU2,3#;l;ULQJxRV!<jc8uhX+{WE8UoUyax^p]' );
define( 'NONCE_KEY',        'r387$cC0gAlsJs}Eu$ q?M^xl36PsC(@Dz]~%mzLL7<=K]!y6Eyzk+X{ow:_a)wB' );
define( 'AUTH_SALT',        'XXR;4//=YBcJ*DY?e+B}3w)KENnA*o_rZb+%&cz1~(Km+taDI^ArMpC=h5BJ[!>u' );
define( 'SECURE_AUTH_SALT', '-`j9Eu8I&{HFJulHE~.Duv9Yg(Ze$X}T/CYVzJQHSP!0XS{DXz_!-m?@Qe1<&P_:' );
define( 'LOGGED_IN_SALT',   '&~1&nxNw]>b^v_,Do8|- MgoMR05CRoVx*{80_?phvAaq1?~A$++okp%@Sd-r3&f' );
define( 'NONCE_SALT',       '3.+41 6qLq.Mm&@lq:n xtd_sRX(1qW*moOA:Me/!V=Uk@C([:z^nonj`g/z2XkJ' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
