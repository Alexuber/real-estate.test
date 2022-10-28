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
define( 'DB_NAME', 'real-estate.test' );

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
define( 'AUTH_KEY',         '{X@1 giJnP~}9E0|#>E8_zBymdGPo:uWIyqDj%]ka!ta@m%8TnN;Hkr@- K(AB78' );
define( 'SECURE_AUTH_KEY',  'P-K_An2x|?<{iqvU3D(:w2WdcA>k.x)Ukc-WO8|pUp9&V#C<d,#foabUktZcz#8A' );
define( 'LOGGED_IN_KEY',    '_N#|2]3Kwtq/.Nln0`dLF#|qH> ,~B;Q`{iMSA|~F)5yVnIm&,cfEf$76R:Xmjpt' );
define( 'NONCE_KEY',        'f0MQz>OZrh_JY/B=}P=F+jD5u4@g]!^e~uY[8z9,7[~F6{XdX_{uwAx3jHP8LeG{' );
define( 'AUTH_SALT',        'QQv|w&U#+p8;rN5|S0!yF]hD:SyTo`DtQxC0)~2jz>~>a{aY,bD),m{u&-mdSKJ&' );
define( 'SECURE_AUTH_SALT', 'E?pV/[F_6Upx<>G]I1r5Uc2@1.nKe]LpTtV^)Ku,IUT0KZlVP1]~p0|ehGA<T%[/' );
define( 'LOGGED_IN_SALT',   '2(~/RK^Tagr-)exu=YmRq?;^UO6y EJb@=HGk5yPxmcB3(&.K@SH@%)D]dO$e8[^' );
define( 'NONCE_SALT',       'P-D7.0_$sV:R+{CKx)yh+[#-f} qv7S#ka=MF9_ 6//J;32ra:qFN3@F;a.jdlVK' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 're_';

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
