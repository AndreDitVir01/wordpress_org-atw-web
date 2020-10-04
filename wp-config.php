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
define( 'DB_NAME', 'kreasisampah' );

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
define( 'AUTH_KEY',         '<f@!:jiCDx[]_=sxLEo?9vfrw@Pe<4g&9^84o/js$vVJs-U?+qtX/0xK:R,c/0Zx' );
define( 'SECURE_AUTH_KEY',  'dW&Py3yq8AzSlL96LLaLH)ZF6Y8D^_P+T;Z2{Tux_Cv6}{}:BVrE_sR@@1poW2J$' );
define( 'LOGGED_IN_KEY',    'Z<p8o)aTcYD5:GcUVMY?}6iJTqu%:ai/9;A02bAX.4P_#Ln(2-/pe1&OBK1o0CuD' );
define( 'NONCE_KEY',        ',sEWnTu9.Ci}_7EH?E;ZT+ J2=BuC.lyx;8[14&AV3odX7=#5Wjs.mu6?KhP8~HA' );
define( 'AUTH_SALT',        '4-L^CXotx X=LB-WRQN|rK+fV5N4f<XM+av9tRR0@n_Bkvn7|tc,aUYB_f}U02Xt' );
define( 'SECURE_AUTH_SALT', 'xkXQk`8o55J+1VE2~Mc|9Uxf3y&+. 1JuWO]odmDjMsbriwgYQ3!74/w^|Im.^Ct' );
define( 'LOGGED_IN_SALT',   '^-J_BEs?;oHac`wWu6*dO{3a5/lwYVcc}:466$Y<| 57>VTX~Ie5VyU)0kNm|kRw' );
define( 'NONCE_SALT',       'hF1AAgjZ|iemMrR{lb_NF+uGWNrYAvhF;S=Bx<lFccty`_HI2I.IA[zpEIe3XS.t' );

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
