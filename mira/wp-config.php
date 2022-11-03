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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'ObuwnCrgI ,%,}81K[=rgR(icUUfTiYTW2lAb*M1e|GrE_j!p}?.%BZu=|,,9Qhn' );
define( 'SECURE_AUTH_KEY',  'kzr^1g/c^DaX2U Qhd2lamFN5}--,^)2r9iK[Zo|a ~]Uyi;FSZ@^4)NFsgFpHOZ' );
define( 'LOGGED_IN_KEY',    '8<}DV!!aRcqL[_Ktfdi>qBt.@kXBtTa)Zm5>DeB*IXyWPLLy*_BxhXdIoes|t&#0' );
define( 'NONCE_KEY',        'H%YPB`Yw-twd|n&US6e8=TF.cNoR$>P_ykc{h~7^G5zO7Cp,{j^q:H/JqG&-a)Co' );
define( 'AUTH_SALT',        '9&d:>qs<wL{x$ru_;:e:4qkp@ mgZ2S2bs{XflW?+AuI+(XZS$SY<9|1BPZ^I`M%' );
define( 'SECURE_AUTH_SALT', 'n$k3qxGx}82eQl6;F)P<w!6%JP8KSeRcV?B@NXyVmN<uKunz2QD)_:qpF^^NT.u]' );
define( 'LOGGED_IN_SALT',   'ksCr?XG`fWXgUI2S{vT2]QI&R{kDE8l4TGvP+i~kmr?^6+@E80Yka}#Y>N<U~~F4' );
define( 'NONCE_SALT',       'f2l2bD2NBQG,wP4L8>KUoMo#bDGkm3[=5Ge_a]|SD+;8hU`?#2LM?RHH44`ABp?c' );

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
