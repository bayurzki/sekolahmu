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
define( 'DB_NAME', 'sekolahmu' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'QfgFPGekr[B}?DZ?:.UShi|a`y%Q[}s*i62hP=wUP,)jc`rWnYr%L3Bd{Yhf,0u:' );
define( 'SECURE_AUTH_KEY',  '7+XqmTb2-9},)Ipu[_0oaY)}{Z!sbFnWN:~JsJZgs}~ scR3@qH^V!F)k$U0Df!)' );
define( 'LOGGED_IN_KEY',    '@!N[13VVIXK,qn:}mU3Xd/os_xtl[N_1, l| hI(+~tHUAj2(qy! bDw2^29jvU:' );
define( 'NONCE_KEY',        'N6.#3wSy7}?uxeX0:w;PUCLdW50tw/k;H*($Xe#bG6/#E8:oZM&6=vCuHvjV>kRL' );
define( 'AUTH_SALT',        'EHze[qG+E?ZI(vex6$?/kkah[NmRgB@0nHu|%InH1UG`(C@9pVF:lzF-wYQ%S PD' );
define( 'SECURE_AUTH_SALT', '`,%]JH/y-$#WR*bZg%;/WLhvM=vjC6+|u(yByQQ7a{$A-7:tXxo9_@Lq<gcncPDd' );
define( 'LOGGED_IN_SALT',   'Z0q3JK@+qqs#jsGDk~OZ~mG~XwVf_++f+pj@gzTkY{j4?[LqfvK,B8bDy{Je%a9p' );
define( 'NONCE_SALT',       '.6P&m,z8+W?FqQFN#DibA1l/]6n_}v)(Ag=ae,K*3@&KHXRvepnI@K2 a^vi?p,q' );

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
