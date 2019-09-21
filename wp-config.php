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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'chk_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'p-(`cx;A78 P1~D`%T#+%G/Vg4!mk`kV%.?+{i~A.l1.G_v&850CJ@xwioOE8 x.' );
define( 'SECURE_AUTH_KEY',  'G}upzsAD:/a4_Ug/mwSP%?4oax6CO-TLaAAzx9rDMvDGlD!.&SA7fQ])|,/b(xs@' );
define( 'LOGGED_IN_KEY',    '^k=.]=>o#c~M<k~[6fgR4aFW7dy/j;@p/`Z*`tGh:n)K<>G]b]MuO^D/2hx7e0iW' );
define( 'NONCE_KEY',        'C3=$/J8C;T6s4GsJS@?G^C=7hb7{-w+h60u[1yZl0pX:YstI.)5U&MBNgqkCvInW' );
define( 'AUTH_SALT',        ' Kh>{=1hD1(79kR|G<bZa!qWQQ}`$SP+IsOfh|6Zc)H~_G d ~f@YBs%=R_-OQ8 ' );
define( 'SECURE_AUTH_SALT', '*v@LB 0RXKeE6TDlLSIhVehs~m[`U*<vPe.4&/+GC=]!/53$H(^wb=k_WqO[JH*,' );
define( 'LOGGED_IN_SALT',   'AiLr$T*kV(^g2M&/,t]J4JoC$FeFT.8;Q{u^Zm:~}5+-AU^ARwCh3D|ma=-H6ZD6' );
define( 'NONCE_SALT',       '^GY@<9ZPs*hVg~/eh}]9!yyj{%m<W{Is_-?;&1pgB^H.xB`l`OUcE^+w}g)6_t]N' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
