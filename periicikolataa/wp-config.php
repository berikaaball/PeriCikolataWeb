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
define( 'DB_NAME', 'periicikolataa' );

/** Database username */
define( 'DB_USER', 'berika' );

/** Database password */
define( 'DB_PASSWORD', '123456789' );

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
define( 'AUTH_KEY',         'F3%e;=8h3FNtj/3UOwXx/qrE%e}/$mXxHkmwAkWraGyq~G$Yn#!TIAzP{-5Zd1L<' );
define( 'SECURE_AUTH_KEY',  '5Q$&Iq-<~ojD1`~H(Nt`Qcvte6 mqcjhhz3(}0ja@[idVQ>2n aqeHx`? $j6R1;' );
define( 'LOGGED_IN_KEY',    'b-J+J1h`X6s|</$S_]KN__DIARfr*[g#ruH, LlkiPFJQ2bcUqO}&@OY.dkyHW8u' );
define( 'NONCE_KEY',        '}_t;BV#!wV=&%{&#,]R4Ip=k}mF$C,IG:jfKr!`U.aZN4a*oD8[BKAlOe#u:z/5J' );
define( 'AUTH_SALT',        'P0EV&W(hcG@x?>,3tyKO?7-$U{.3SGb|A_bs6r[}flU]i.HxFu:t?h41j.:!iO^`' );
define( 'SECURE_AUTH_SALT', '(Z?$nlEsdPO^(@gZS.Gc}9|cQ[98,t#BPF91:RuBa}Vji,y=qyRtm!_JoK^VwRIT' );
define( 'LOGGED_IN_SALT',   '9Kwv%(k.#_K?J3vj9jRQd(QTN%HT]&22A>?XFKJyl`!|%`}Ez,]48xd2L#HKG6eX' );
define( 'NONCE_SALT',       'm8Qa^,( ^uoHPFuLAtBI4k!<[kJw7~0* !vxzj/Wf*Ton`rsxrNPJfcS!#TTXhn*' );

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
