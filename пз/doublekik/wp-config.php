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
define( 'DB_NAME', 'doublekik' );

/** Database username */
define( 'DB_USER', 'doublekik' );

/** Database password */
define( 'DB_PASSWORD', 'doublekik' );

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
define( 'AUTH_KEY',         'C8#3,:.x9(ZC]RJc%[8+2N3fv1~A1W0@x[DWbYi Ga>)AkC#aN4?KxaG {x)x5lk' );
define( 'SECURE_AUTH_KEY',  'Ht7tr2RDHgv|.~}:PJft;)e2Ai`.ra5kJSMBqHOr8,6CK.02vw>VSKkmwjhV~X!D' );
define( 'LOGGED_IN_KEY',    '::Ky8Lxk`ND|81]n_c![-kCL Y*LK]~s 62o4+u5!u{sOr}nCU_Ic}0T__AA(hM8' );
define( 'NONCE_KEY',        'a>>s`9Q@:t3,YCw&{s/4:P:<Ha!-V.0|k+oW*/3+r-]A_d]JS}d.Vr1@H8Ecrt@=' );
define( 'AUTH_SALT',        'l.;7(@WyYZ*7 ;]7(xdn3}u3K/7|r54[]isYf<*!{<=gWQs4m9UW)o(9k_[0;/}v' );
define( 'SECURE_AUTH_SALT', 'WO6N*_x=5@1A1{iQ7Y8> j@EhR;.&$tw2YfQClrKjZu884gZ6fwTF|K7lMaw|_5!' );
define( 'LOGGED_IN_SALT',   'A~c1[$2TRWi|[_@%tOY_X*vY|G~%(PzkSS]P>8V>`4XYk6&13^f~f/t?SJ/I<c;(' );
define( 'NONCE_SALT',       '*o4~`3-U5A|5$gO@RS)VOqg`c5Z#/[b6X`r_mR8Uz*rZ3I<QfvS-0|VX/Ww wAWo' );

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
