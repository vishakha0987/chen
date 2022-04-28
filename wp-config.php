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
define( 'DB_NAME', 'dev_wp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Password@123' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('FS_METHOD', 'direct');

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
define( 'AUTH_KEY',         'O[#D|gA/(Ie|`up|IN+La [,By{T_`m$!/AF7(([I]yMusS^Ln%4}3} A<5^q:@_' );
define( 'SECURE_AUTH_KEY',  'au6`-Et61?SXf{44Ag*m+PnL]E%wd{AQQlwf*bA|W# G{gnK][@4`7!%B@IE{QQs' );
define( 'LOGGED_IN_KEY',    'P8Zwdu~#W.tzL=+g2eoY2fgDXq5%hS*8!F#T:3E5TO/0aI/ztOx9A)Q_uZwbC^Ul' );
define( 'NONCE_KEY',        'Yj/&^f_1~Tkksw/VaY6$|0G(xhOGT86qb(VIO5}sK>al~!#fMcf@qoO:9Zffw:=t' );
define( 'AUTH_SALT',        'hA/jJ)_bHz(.0,s~8-Hq N7w0GEL5wG{/Gqf[zt$(Ys8)mMk?!KFXqW|&)BsteiF' );
define( 'SECURE_AUTH_SALT', 'J=;6Q:6hndcfNi<,*|AK&0FX|uL yV(.!6=A@_U;}p&7Npg~0 ky3vu&OYj}z^.~' );
define( 'LOGGED_IN_SALT',   'y 7O|I0x0zB7~9ke 4R?}T|o7;lA,z]@B$OZs^d%NK@_Os&,Iy*_b5qIxDRD92~*' );
define( 'NONCE_SALT',       ' 1Dc]^2m|c>x_pqlgx($=1n-tl]6d2{l$&3``:dOQ%@`cc8o)oTc #YL{l(w~$LZ' );

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
