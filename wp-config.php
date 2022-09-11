<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

/** Enable W3 Total Cache */

/** Enable W3 Total Cache */

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
define( 'DB_NAME', 'tvuckovic_portfolio' );
/** Database username */
define( 'DB_USER', 'tvuckovic_portfolioUser' );
/** Database password */
define( 'DB_PASSWORD', '10101986tamaravuckovic' );
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
define( 'AUTH_KEY',         '33/mlwZAQiIr##aJ>bQA%~))h%7&/agXLOw8mk<7*t,[J{|n`@-=} x)EUvbB`8|' );
define( 'SECURE_AUTH_KEY',  'Q?70!hKN6|}G.>jv$~,/xI9A|j+G]Ku8vQ|QZKAp)]^}o.kzO$h!v_$yJ-eBWs;U' );
define( 'LOGGED_IN_KEY',    ' C/0QG|NPB(du^Ug?&%G{G~m`#NK$988A[]jHR)Q1Vn54KKr5=^8F`298APzNd^.' );
define( 'NONCE_KEY',        '!61o)BI1l)I5qO:V_ 9Vm8r(=AMCj x/dZZ%31Cf$O-p6JcI#=l7iKqw6^?I9P93' );
define( 'AUTH_SALT',        'Wk&X4t8K2P<$ReS[/5Dtr#m3*j@<]3=0ixU[k}0z.l:S_~BPHZRyzB0u=~~X VF^' );
define( 'SECURE_AUTH_SALT', '(XzK}X;[N1c$C6D69|f7& D^>w5jdV$UYe>gD6-amu?GTG%b*mnzuD0Xv_sKg8Qw' );
define( 'LOGGED_IN_SALT',   'oKV{cSq#L~iz*U93#*z?XI/LvJ]_gjhx/yqAmEDnQDmVN1-neWPf&V[sT+3<kNO1' );
define( 'NONCE_SALT',       'j7i:bqi-a-]1o;i5PV/<6g, O0r`z10K>`P:m8hUl$De}&sA)Nu<@ioqx-8^(5#y' );
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