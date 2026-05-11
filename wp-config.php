<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define( 'DB_NAME', 'cs2025' );

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
define( 'AUTH_KEY',         'D-unO}|NILcbl9CeZ%^3d4f,dJun+PrOSHr5$tr|q/%}P`T){QJ8H6WRn9%96*AU' );
define( 'SECURE_AUTH_KEY',  '.S37a6*J$`!GvT,TJ&vKF4Xf>LwyFQjV4H35BYU77%!Fk6LYGQ.mE8@sdoij#2aU' );
define( 'LOGGED_IN_KEY',    ')PAxMy4~FZv#k!K5xOUbd4dAm(`]5!I|0C%n(zDB8]7oD7D432CO! 4cANt}|7AN' );
define( 'NONCE_KEY',        'L_mJ>|UGI1Ea2UECWQrNoxtZ4T[M?e2VAC+Zw.-xCU1#321z&+-=Z&WQ(}{l#:3~' );
define( 'AUTH_SALT',        '*@0sD04=W_AtlAUPmLzy>$)m}wr>$q0[SvIfohK{d!rGqM-C_Z-[6]X%:owOiUT3' );
define( 'SECURE_AUTH_SALT', 'D;qyy3L22xIIxY&M6q,4SQh$Kz.t^HBo/lKABMDz(UU%c{o{`)$3?g;~xn y3Mt<' );
define( 'LOGGED_IN_SALT',   'QS,NXRv)j,~nHK-|zIM+Iu`D7eDo#yW(@B,9b0y0d4/Z]6.%cBL-OUKvKB/?}bV$' );
define( 'NONCE_SALT',       '8,VN+8Nf[[khl*>>::_@xp=IT y{5psBot+_Hp.@sbge++UnIIprpQk>0[gN)Yr-' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'cswpnik2026_';

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
//define('WP_DEBUG_LOG', true);
//define('WP_DEBUG_DISPLAY', true);

/* Add any custom values between this line and the "stop editing" line. */

define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
