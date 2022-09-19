<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

/** Enable W3 Total Cache */
/** Enable W3 Total Cache */
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
define( 'DB_NAME', 'tvuckovic_projekat' );
/** Database username */
define( 'DB_USER', 'tvuckovic_projekat' );
/** Database password */
define( 'DB_PASSWORD', ')#TNr$t&kTQe' );
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
define( 'AUTH_KEY',         '!:qs;muMv&+heG<~t}VE$/i)-m1m1%%%]WgPN^Z:u;wotIyzyxt?meSj0jfm@x8r' );
define( 'SECURE_AUTH_KEY',  'k+o1R;{^hjnL}w=loQ)g6O%5pHHFbjk#IGwS6EUk:`fJ8c%27HL wP1~;-c%{bmY' );
define( 'LOGGED_IN_KEY',    '~A=|h(7nZ?nW@qqT`,!:6X0XSKw]|3cFzYu=2| >i%1U,<4eEiYjf>PY=z(a1k4@' );
define( 'NONCE_KEY',        '*YCw5f 0WMAlbs&!Ni}cwdl%R)$dq8S)a{0@l)9|_(@f!P+WW-f._$K<Qjxd}8E3' );
define( 'AUTH_SALT',        '}|@EZfX>eeSoY6vcfsHmK^~GNw__~e/-J}WH&|{5FD-IFLJpi<15EuI(&ntEQxqg' );
define( 'SECURE_AUTH_SALT', 'x/w.ag+qcF:aTafuGW#M]Q]tQ0q{yxNML5fAynMK!bh5l0PKpQ(`QkFcW:lD 2do' );
define( 'LOGGED_IN_SALT',   'e#7Jf>S/PWys0inH(*d/>Gn[tz(EhK4wBJu|v|I~?E}@Dgif%lgO=zn7(}-d+=;J' );
define( 'NONCE_SALT',       'AUf&vL,DH>e6H]nxH1&^v>))MK~>cNV$G0&{X9qZ:34:hfTw+RA7`oyW=-xYy7(m' );
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