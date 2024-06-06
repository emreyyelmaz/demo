<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'demo_db' );

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
define( 'AUTH_KEY',         'KZ|pqGP_RTbu`A5XJm[i-:=^_Za+2B^Wu}Q0J9wKr>*:$W`If=u|nszaO{v*@Zmj' );
define( 'SECURE_AUTH_KEY',  'q1KWBd9f!t4;e:CC~Y2ZCdDu3Of]+l3O0N>zKX=a(m]u,97;MP<($~_6lZS0=eod' );
define( 'LOGGED_IN_KEY',    '@HI*||K(5_O8GAr[xt{Tygqqj$$Ls.lX,P3<x9&b*?*seo2L/C:Nq#zyJe3diIQF' );
define( 'NONCE_KEY',        '.G!{Bi2>nU1d>lfE;Tk]FL3FVH[ R?eA}XqjKj;Ht0qKUz#aL{f/^<RW H[GBpu>' );
define( 'AUTH_SALT',        'E]E2c!ds;v$#:{Rl1IB]u]$R$noQPQHYn.p*]<G/,j:rXRbQZskI~VY Sy@:Q9FV' );
define( 'SECURE_AUTH_SALT', 'Y5$R?I,1f1]IC9HE4`E3CBS_XP`wZG~_kz0NR5g@nnp(3f7He!RBa#HLZ/TO|s<2' );
define( 'LOGGED_IN_SALT',   'd)QlZim~R5v4pkf^l.s+ZB)MX2u%:n!@CRQ9yZ8m%R5l8]kSpc0/SxJyG)%Aa$;3' );
define( 'NONCE_SALT',       'Y]68~4My|niJ?Z:rT@{ctdZZNs;Wv+Uyvax]y+`bC9qWp+VQY%%)J{:qt2>?[|Kj' );

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
