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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'p2' );

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
define( 'AUTH_KEY',         'u*`**<YiC!:bHn+sQu_V1i3{i:E`J9<.#|VfDvo2KfCU*&S$P6!P~jXzG:1nNFN6' );
define( 'SECURE_AUTH_KEY',  'l!LD_E{Wy:,P0%4#!%)P<Y~V=?3qrHU.!nk7kX=l-yZ{}Uk>Mva_g$0P >MK!jXK' );
define( 'LOGGED_IN_KEY',    'rB@InT:88O0>tt.%8k(M$^ U_>BIZ,vmoTV*wvi<;&!Awfv7m>&xP}5b*zRM9G5/' );
define( 'NONCE_KEY',        'ApKH19&|r{&K#^D|_vV-Igeys*F1[lzjOwZV:JMN.8r>Xf?XBiJ#V{y|gdt$WhlW' );
define( 'AUTH_SALT',        'vA7=t]b^=4}+uT/ILf/Y!@y+6`{${O~r1K+/:nhm#D]9f[s)1xoVp`vaJfcg*K[&' );
define( 'SECURE_AUTH_SALT', 'n%&ds~,Y`0w3z*ja`g+5i/LiEA6#Dn^qf(f(PkzD,<U`r%[Bd7`tk%B2%(C0C41/' );
define( 'LOGGED_IN_SALT',   'PSQWO=j}1=o1VG~7b71^^{3G`)Ynk6mT^qK/Inr/ney`}@PP;K9ay+y%RMfIk$e7' );
define( 'NONCE_SALT',       '[GYT7WWG+f`%qzi[cxiJVH2dd,RhYdf#ckn7aU(l$Bi1|;JCl,8ikxoH1`m-47dr' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
