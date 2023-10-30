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
define( 'DB_NAME', 'florita' );

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
define( 'AUTH_KEY',         '_ybDfUTOa>(F*m+EIu!jGw2)&2m(m)T-VYQ*XBJsr{] ]v^fvKr[y-GO$rxxyVb[' );
define( 'SECURE_AUTH_KEY',  'JZ=7l{|Qi]XlNk|w8OaW1pg>(/+T|8py6,ljv.#Q1X!MuE9pMZ<kM1M*[7kSm!%n' );
define( 'LOGGED_IN_KEY',    '>bS=9Yz? ~!jR0>&kxbn`xfA&tnIgzR=p=GA`7&V]@f91A#+84(5elq!%s|Txk:u' );
define( 'NONCE_KEY',        'x9ftM{P$updfL0zd9z&]36a$~N0+t1tcdDRE#PXylU2pNnYc^`N}n8tQ8^ZIjF?k' );
define( 'AUTH_SALT',        'YD*(@XB_a7s=Xl6Q-TX1<eb0hvaqVm~CkAdnjb1{f02&bqeP<$6_w>}piDoVpZW8' );
define( 'SECURE_AUTH_SALT', '(Lv ha3u`#HjN|m,oFWar|Bs(`UzEe{Q-Jeel5Bn*-%`*bVkSNbQZ9XCj=a&AXfl' );
define( 'LOGGED_IN_SALT',   'KC~L)TJpf=A>#Pnq7[[s^`e2-7DtTke!knd~C[ Y,6m~W9JB|y5gd)<d:F$g8.I_' );
define( 'NONCE_SALT',       'Uq?n{<4:CbS0Jii7(5e#[z~rg^Zd~NDOPq[vR5y3Dj3:=6]:EFUSM)CJ*4:O0Qz:' );

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
