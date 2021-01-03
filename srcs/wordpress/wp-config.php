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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '6o3ft8(Ms6aQ[PB=j6TW.|>Bd}Z)Yy+}51#LSFC:O#e6[&+?|c{}ijC_-2gZ#=Yq');
define('SECURE_AUTH_KEY',  '~R|l@b2dP`^8nzP~nM6yn-EG+${:114JNX[T^ g/]j.>amBM~-v=c.ur25vcxKYW');
define('LOGGED_IN_KEY',    '<`q{MSI^WgO|4RQ*)z<OoIF}l>kchNtqUuC?3,=mpr0ZgftLECry=MAfjkMgC`te');
define('NONCE_KEY',        'n%ArF?4p}Ky5zMM2:tN8(vsak?@Llv$T2DM+R3,1)7= nM%nm<~eB$ZM>K |`gTs');
define('AUTH_SALT',        'tJXE&f}d!N%Vv!_ap_@{Nf&{ID.GJ>|L%A/f>A[+B?-q5}gu)#?LSe&k8W@weMXo');
define('SECURE_AUTH_SALT', 'vUTenVmWs.K#Sx1&/6(4di5eX|K&2TghH_~M8BjGN>M9l(EL!b*+$@7cg|E3OG!V');
define('LOGGED_IN_SALT',   '>5l*MA>O+-=-pPf2xH`Y}E*FMzNqLT_8gE0q%[&P9bA%TrbD YS-I@@_(fPn-1rd');
define('NONCE_SALT',       'Ynv[d<FaHjiBGsH9~+]o&,e}L+=;K u9 G(0I];y&P<r|b[+d9r PTNGbQ-5ny$|');

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
