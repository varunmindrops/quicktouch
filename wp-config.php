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
define( 'DB_NAME', 'quicktouch' );

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
define( 'AUTH_KEY',         'O!0zJ]j)&>sR>UAx3;m*S+YBjz>G`VKfMF4?>bhsmC?HhA7%p`;ktj[~`9KGuT>p' );
define( 'SECURE_AUTH_KEY',  'G`55w?O(p[6^DUzxdZ(,^+f;vmFk >FMw<%Gzv8<kZ7$=a RLfxnTz^IOMIFHCb~' );
define( 'LOGGED_IN_KEY',    'o<Cdf!k}3H]N<)|JF1_/1.nB~q;Axmo0[(.pHVY-,py#b57&$q70871|*ro-b0D}' );
define( 'NONCE_KEY',        'Na!!I/.pegC$W |]0c+$z/>.hK+m%n?aX_NkUl-6v|a@3NJ( 0M<Vu&Y[|deAD9D' );
define( 'AUTH_SALT',        '+n#WO4U!dyDZD^~~`/>c@:~]s(8qZj52vO<.W-f)BM>7)Mjh-KxVm,jAhxIdi(78' );
define( 'SECURE_AUTH_SALT', '?on3q$.<RpnI2{W%q?W4q/3*fA:_(3SC$}&iZhVL pNGBV@_<JN}ICl:`i+:LVbM' );
define( 'LOGGED_IN_SALT',   'VmH8}2K5Lndyp0K&~*_(`IFPx5Fg0~Oz4@vX>#QrUm$k2t4CDyn8)vGw!Nk#yc-q' );
define( 'NONCE_SALT',       'MVJIm@5>.Sq:Zu-/!Zw[nyhm$y uY7buZpY_%K~0uLIEs UMKx^8HYG<b?Kd(B#r' );

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
