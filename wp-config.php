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
define( 'DB_NAME', 'digimantra-portal' );

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
define('FS_METHOD','direct');
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'WbIcCRP.qMh0mf#Z^NdbAQ-$[{]]rM[.`.WWjyt(B,E&!pQo)VTXgv0O2/Oz&`tI' );
define( 'SECURE_AUTH_KEY',  'dF^_M>!oM*3Q;,d>8Y6,8|[xg7?a2*8n]GFU=#c0wEyF: ^w$};6wBzn&)Cvi`t4' );
define( 'LOGGED_IN_KEY',    'w8$W^NuVKTIrqBht:piE{S!-mSq,(lbmulD]Tkwm`JHA]:*~z-0[~Q8yVfK1((}y' );
define( 'NONCE_KEY',        'fMqg8~5S0h~9T^O&#=5rVG5:D+hjgL[A8^av7;!tNjxGnTuEqBl>CLZsc(S2+5PM' );
define( 'AUTH_SALT',        '@[fVCkmXJnF%&]lb9OV=sU&R(t49[p~wtzTr+).C^M-H=:Qf^`p[{7Y9eu0eoNM`' );
define( 'SECURE_AUTH_SALT', ')W/|t{&voUbexazZ:Xzl;pz>!:e(ar|D!XCeCyc%u~Y%ZPR`J|83W9#K2o&6|#Y5' );
define( 'LOGGED_IN_SALT',   'Z1ou,&BgnZtmf%8I*01i;u*?+7AmLj/vYtTR4TrH#-1^B[U&Aw=I`kVYWilUxN]7' );
define( 'NONCE_SALT',       'V77kPL)!cotkVjNU|zD:4b(dW:yQtKtIS:up#1kqI/8h.K7UhYn|,LyQo3#S+|DJ' );

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

