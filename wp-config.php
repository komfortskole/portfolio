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
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         '1jzIKtRgr;+,EY%)!^:9mey)yyF%;hoGLNEbd;~L8x^!7v!2FI~r)hk}Aw&4l0Ob' );
define( 'SECURE_AUTH_KEY',  '7WM&iBYJ+C~OG5]9fU+]ZEPKtG,< =,_Q`5wcK5yd-h{N`6$;sh.-t/VXMvq1+8|' );
define( 'LOGGED_IN_KEY',    'C%dRQvMYc;C8HM/3R;)W?d_]RW0r*2R}[4knIJYBW9OZslM$r9aeqhECD=7(n5OX' );
define( 'NONCE_KEY',        ' @#>q~xGtq[91y4k2pp^DnZ GC9H+xpRizpnF:1O[8+)yn/FaAV9i=Uts?Dc{/%1' );
define( 'AUTH_SALT',        '#9?DEAV4<qLQ+N`lR*ONmgIs[G$PN{#X8,N8A)QH(mcd>MeeO*]+tg*HoriXq?Cc' );
define( 'SECURE_AUTH_SALT', '_k<crT_{Wf;Rr2^GX3.&NMLmaw4BO,MsZPD!cF`k{?G0hoZP#y-r0EB8*<vKuV*x' );
define( 'LOGGED_IN_SALT',   'ip~W$E}jJG&m8{lo5f[9F2U,s2*D8LgKI0v^.KrT&T+r~@#Oa~eY$KQcGH*KIfv+' );
define( 'NONCE_SALT',       'suWQ%L7!3kpO:P6$8n-4ZOgD@*58lCZYL5*W1O9h?zBqLoSKw1hdl|W&Q3<T_kk ' );

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
