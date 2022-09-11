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
define( 'DB_NAME', 'tvuckovic_trpkovic' );

/** Database username */
define( 'DB_USER', 'tvuckovic_trpkovicUser' );

/** Database password */
define( 'DB_PASSWORD', 'L6Eh{.8)&el8' );

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
define( 'AUTH_KEY',         'R2)%7>]iy2gUb.-^-4rktZNiQ|1{Oy!>:aNd|^<-|5kEL8)2zfo|:fBrnw!JWv=~' );
define( 'SECURE_AUTH_KEY',  'F;3TZ!hp-^=!Bzfl& kiXY9@2*3g$X]*/n/W/J@=S;w0`6}7ovscVM&@f1+=B MQ' );
define( 'LOGGED_IN_KEY',    ',?m^:}Zc_NA_<`hTHsli^-e>pwSOML/oH@vVL[&~s>H4zVgua?t Z1e}vT3oky h' );
define( 'NONCE_KEY',        '4U>[UzIUJ,py2l*W.a7e(CxL?zN?o88tk@_+bIM>c,<cb;*Q+NaF2G X)K|[&)!z' );
define( 'AUTH_SALT',        'bPUfAT$Ce<aJ]C5$@(=ve8&6vV(Rrr;[z{ZnOW .=q L@{DAw*@/<`)mnme?Y}#q' );
define( 'SECURE_AUTH_SALT', 'v2DlU)GQ(QojlEK^n=E2c4GCb8vxz7)@i8~ i=`csH7S=iEqaNnH]R}_B)]bzs=D' );
define( 'LOGGED_IN_SALT',   '6i?_HtyMytEn~V;;6spA{>3H%=[s6rcO=F(RdMkLDDQo,}msiZKGp8I_f4nkj4MY' );
define( 'NONCE_SALT',       'K}<2d!GRcsgsz4ayEhPf/*n7sTGsTmNNHn324[`_=2na#M 8DYp1i^~f#u.`a=/}' );

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
