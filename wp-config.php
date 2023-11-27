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
define( 'DB_NAME', 'jhuccp' );

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
define( 'AUTH_KEY',         '@!U)z@So0h$*zB}/$&%)1/l8M+2&(5k/LW[tv|Vjm5O$:0(9aF#-S<w,bVnA[j,z' );
define( 'SECURE_AUTH_KEY',  'XPt<R}V*/q8_W!LC`$OBv)>ab6aSns3YVCZwqI4s~Q}Mm:ve=Z}XQ+ 0?-q%w)iu' );
define( 'LOGGED_IN_KEY',    '{CI1F*U0z }KGgT6`B2jZ?2MpVP1J_RHo:Nn+)f$^zRq@!<-mo5Q/e4**5f`2CWZ' );
define( 'NONCE_KEY',        'LSuYm),gtzm#]Jo.dFO3E*/R?KXDrz#ekA2$~(E[=p-V(~/as,?xLlE(HSLW]8Ne' );
define( 'AUTH_SALT',        '/8p5^Mwi@MD854(pq !9?N7H:f]~M1Z5aT;@0sP<ixtah0kbhXoH3rjmo!mL#?u;' );
define( 'SECURE_AUTH_SALT', 'R8.A)yAG* HT|Tn ^m.Dq,MV{SMD].Ir&&&]}?t]O!~!he@b/Qlo@OM?#zfqK,;L' );
define( 'LOGGED_IN_SALT',   'La1zXfKulY9kjX_GEYkZ+~#Y` ak%ecxxBjHw/Pq}Xj})c 3nIWQK$QjGmtK;XKK' );
define( 'NONCE_SALT',       'Jn:{qAx>4|nU~D:5]W u!DZV0s.`([LG7iR=,@vv=4F{wDbY4aVAAWzvOmzMl_,w' );

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
