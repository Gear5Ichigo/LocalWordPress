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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'xozPU8Jp@Q`ntLHCS:a- ?2IZG68Y,uS5>/:GqIgX3,y&qDcb4<@yO;X14R5rR-m' );
define( 'SECURE_AUTH_KEY',   '_Qhs-j0Q{:aHvm5;4Sl.,oqNwz~DdI~?qG6NlF83UzD1jan1F;&JqA%~5X:8VI%<' );
define( 'LOGGED_IN_KEY',     'EY$X& qnNT4+;g*k,`iSs5mn{B+pM9&O$LIr]3t|AZYBK%u052p%8P3oeO<q4<cI' );
define( 'NONCE_KEY',         '*]:}E&*?z4:LSOGm&YqM/~feL0MJzRBX[=_4>c:8GTi;={H.^6.CGHRr<=B3RZtF' );
define( 'AUTH_SALT',         '8`x8/?^BIZvuj8}wVBY_UuMh3b@:DFFyF|M!oS#3E`C$ciit;SA).eCj)v1S7g|:' );
define( 'SECURE_AUTH_SALT',  'L!:!oQ*9Y8oe}RlWDI#P>5QRx{ZHWVm|1k]kU[)Hhpk3=O*dHFp*Aw+.W+rlTES(' );
define( 'LOGGED_IN_SALT',    '!wW4),.T0#=t$pm](V9XV434)li4a 5g!J]u>YuI#u/eZ39?glv%ldM:b&`Eb6b)' );
define( 'NONCE_SALT',        'j~v=Y<(Iz&::Bff4qU}Cg2`R0#9Mf1-2Gq|.KACQz%BhO`2x{8dv;7Gg;7,ZWCqR' );
define( 'WP_CACHE_KEY_SALT', 'V/dpf! dlHbFgp2,LiKB]3r!r~nH&[^0)(QgQQzK{DSOYn9~hBTL%|3!7|TfTdcr' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
