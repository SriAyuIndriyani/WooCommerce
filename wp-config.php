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
define( 'DB_NAME', 'db_wordpress' );

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
define( 'AUTH_KEY',         'v(F5+P)R% dd1Q]9Edx{as?Gp$k`k/%^OYUCM|)8<&L}p^?<XpMY]!?:pUpsZa=4' );
define( 'SECURE_AUTH_KEY',  '*ek*_jwybV}i`il5ZQ/08a++b*_q@qKY:r+ts6,+YQdoF!]YK`30g[=o2};M3L[_' );
define( 'LOGGED_IN_KEY',    'zKvO2SG@p1InR^&08}{bxWtu/9/EiTCIt{.j!=%[mPQ^yt`X%6jG#g-,gkC0}R=x' );
define( 'NONCE_KEY',        'SFcr;n?KVaHL,k8&h~<sSP;)&4tAuy3Fc;S*`kc!GtKUm:i*ZWP(5lt$$4<~@:1|' );
define( 'AUTH_SALT',        ' 6~1PH3nk_NRm},??N3@< GD//nf+|<AX{(22KAZx=c,P13$^*NfP+H^P5NQg]hS' );
define( 'SECURE_AUTH_SALT', '2jzF9>~NqAFo3yvW%yUauGN%B?^oT^VNRJE|gJWHF3/]$DyO-sN^!Biyoc0jKXt~' );
define( 'LOGGED_IN_SALT',   'u7cKY&:r:N0eO~33YQ_H?^Xqp1E.C},>GR+E+w>^GruoWx.B?YB >E7 XRdPB#?h' );
define( 'NONCE_SALT',       '2,^zN5,#qTKwJGQf9%vF,NLiG)n~nFV(9=bMGE`l-2-oVEkOy:Ps8[MGOG4>J%qp' );

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
