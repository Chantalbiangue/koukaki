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
define( 'DB_NAME', 'koukaki' );

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
define( 'AUTH_KEY',         'es//@0~Y&mHN<)AWX((>P`4S-)Ks[hnSC~}e%Ta?Hu#1dJAR{A,Xj+351#lRE1:v' );
define( 'SECURE_AUTH_KEY',  'eP&wpvlif=.42nUEfXAD(69<fVgVkCR6<~hB86lB]-EneJ<: |P3;rD+g6mq5X}j' );
define( 'LOGGED_IN_KEY',    'auKsqb/$k1)S`L#Ht*IkXJo1V|*3Y pfRHDYBXn:6tYTVAqz-ov6OvA&~>6V>r&Q' );
define( 'NONCE_KEY',        'Km#%]$$j+tEOf@DcLn&!aLvIpaV>PGxWCF0xT/SZjCEOgoYQDPvgb;S}tqVEJEj)' );
define( 'AUTH_SALT',        's:!`9mKWTvT]^Lc0_wnFd[z#DIc}?,-4;$S9jOY]4BBuxW^ub6Su~a;6NQ2*r$q+' );
define( 'SECURE_AUTH_SALT', 'n%VI;h10.gB6s~~LyI41*Wvk`(yM0AE#rp3$57q` Pj;Iow.,vERug`*z+y5`1vX' );
define( 'LOGGED_IN_SALT',   'A$n0(cia7]O4RIl(3y03d{exzmSKab,f0c*=7TxH$XgB|%2ifl{V&Pnb:F5@EHQ9' );
define( 'NONCE_SALT',       'C-jI`,Ky`>0spPMck{ebrvVp/zLP/` !/!zqr@oE*w(/>e,>6M&8N@99hZo-(j]X' );

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
