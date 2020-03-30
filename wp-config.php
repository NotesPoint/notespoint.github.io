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
define( 'DB_NAME', 'brightnotes_db' );

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
define( 'AUTH_KEY',         'z|^rp;P>f!1ue23OycxKWRf #0zEx*zN_07AN{[IF<ooK[JnYll+EHQ7%{pd6]2Q' );
define( 'SECURE_AUTH_KEY',  'a]xnZu[UCd5II4Nn@D<)l5_Y4`<*;}G)W.]eGD[M(xnkgFtao3r0Xn|gMk5^gdu7' );
define( 'LOGGED_IN_KEY',    '%E}]@Z; V%@<k*BMR!E#vX)rts{P!W5{EQ$[uq3&]rf}C9*%Olo=THo~]*9/R@1>' );
define( 'NONCE_KEY',        'B{[Ib?ll0FmpfoQwK|M03u{v{^*jI#f?VR*Mra!5+}v),T0%zAwF?5rU3E`qOeOa' );
define( 'AUTH_SALT',        ' [QR2&fT`$2QpV8Db$%J>]ewMK:}zO-Y4GI!~qa94-/v)U9a:J{eQXj6E307re=5' );
define( 'SECURE_AUTH_SALT', 'Ni[fO%Vue;Z`mUP<eYaF4.N4B0{1sy-(eOU;#?$t!at(OFg7ndZ&g*1J:-qIh,)_' );
define( 'LOGGED_IN_SALT',   'A%36o9_,Xg+s*O*bud.xoe2<*zGMy.uw>7ZO99/xQnpyU`hFvJ#x0!1&Vt3%rIil' );
define( 'NONCE_SALT',       'YVr|&YAg0SIa06PrT.et0r-ZI/Gzyjz@V0^9M4L?B7D |_bFg5rN.s@w*&:jwU:W' );

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
