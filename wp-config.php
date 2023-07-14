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
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         'X7eyn8PAc!Bg,/s2/6(2P@X2N6*2*RhjekZE-t}E!.21.B0*>M+N4M$hKQWcqWjY' );
define( 'SECURE_AUTH_KEY',  '9myzlSa][}:~tl![V/wOf~CE^s^fI9_PYo5e~<g:rROVZq^rwv(b,53hN4}Opg7T' );
define( 'LOGGED_IN_KEY',    'iuSoGkwI7_DlRoK;98G1i`O(&oKi/MVpM0aM.u#`*I~PDh)nJ%Z2K?rGEJArcNvv' );
define( 'NONCE_KEY',        'KoLr9c/=&N^zz?LbF4ib~lonIFn9a0H>h_W_9So!ltCjvrWD*I[ M#K>=H}9et^B' );
define( 'AUTH_SALT',        'aD8L^Av6wy`{CJd>.>$tK%Y,0hvGj+l%mY[L7]OMDQtJRx*7d9a57X_w!)t*C$)d' );
define( 'SECURE_AUTH_SALT', 'jTM /gb^vr>XTP`ymQCAI*mWbbw+Vf.v~Nm@68uN<n!`up}T 8DLw; V69Nn0Us/' );
define( 'LOGGED_IN_SALT',   'Hw>.&HfLc#dHz/3I:1*15<!y<tGYBS}K0154z[2J7c`3ZzXu0Y`?F+GZ@Qsy1qBD' );
define( 'NONCE_SALT',       '%Nf7-_jl+7G9{S<FVd|M,XU*jf: z{q1y(Ofx>e|f_sKML+>N$Yzngg<r`[fPf2d' );

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
