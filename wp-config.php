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
define( 'DB_NAME', 'site1' );

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
define( 'AUTH_KEY',         '.F~@GhVHG.gAjE1Mb0!3Dsh*cS[}kW#Egl^0}]uuO[]|0(?~F;Z$7G?z.#i5yRK>' );
define( 'SECURE_AUTH_KEY',  'j>flHJM2CXD4teBZ+{U<bYd9aBO]M&}K6:N5n3VoqV8<VmCv.4-J4`0&`h9s@sz,' );
define( 'LOGGED_IN_KEY',    '6q#rM!b!9^F7$stl:#.18A*VBwB9p1rt$e9MQ>2[rur4+9exfHESsB?TJ[,uyj:$' );
define( 'NONCE_KEY',        'Fk]_Ey9jS[FY+}&bYR&@?4+JSy@vb%h^3#!72I1%N4}5P7b$;jzD{kfsbUlxyg{x' );
define( 'AUTH_SALT',        ';*}og_$&&i,v(rXuc06gIa2C)ZKDyFegqdlbv(u0H&ix-b(`.A29DmN~l/+!r<Rl' );
define( 'SECURE_AUTH_SALT', 'rWNkc]G}k!~XR0/_:!T<JEC*uQ8wtR<*ITej,T84Yes(a-$gr>rxJ8H`FhcD/#``' );
define( 'LOGGED_IN_SALT',   '_`%7KU$is(Bbc<hIU@<=$+.:>TWswf(If4hPYQewI3nZx3<u:)Dp+&?kKXmm2x`(' );
define( 'NONCE_SALT',       'S&+lJX7>-`3@&3Jh?:sG786ef;BrW[=[fvqhZpa>7Mz-H!GTmG23`%(e.Db3QCFO' );

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
