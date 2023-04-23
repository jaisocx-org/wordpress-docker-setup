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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         'v_pjv)?j)eJ5NUU,$?ySbzTFLHoA8AfCsW5r?:-<aMnt2ZjkQ.>kGO2_kyz8-xfT' );
define( 'SECURE_AUTH_KEY',  '-n<pQ!v7z.(f8AjcV*MkfXh^#7uGp&X_#`nf/LqBf!!sjl[f7T_#w~8]2L{Ne.)@' );
define( 'LOGGED_IN_KEY',    '+bUmv73vmn{Ie0GT!(L mo%TZu;2krlAF][%bd[&1ydhIw)>Ckv?|VsVO(ei?71Z' );
define( 'NONCE_KEY',        'z,B X%B+UDL!0w~,UIN=Jn)w-|Gs,hQ`/E$jr2USjgHe`Hv(*Mgu!XZ}=lK9VaV,' );
define( 'AUTH_SALT',        'HZHt2}3YwOfU%#~5-wjaEFG5?&x/FFB;|n1~}_--p6Gze9No:[mHA2%^]*$tn7,Q' );
define( 'SECURE_AUTH_SALT', '|7T*@hy.H]aVankW_.{xdCF0Z4fq[]K.bLs[tt8c``:zAcbS1$M3wG9=_7t6ID9%' );
define( 'LOGGED_IN_SALT',   'GOo+2~,<G^zh:0@~f$LMIYWBMs3ivEO{&||m8+jQ9w;`~;$Vhj^!0GGK+R&{Yc_D' );
define( 'NONCE_SALT',       'EbZW^__QE.,y2w:<JGV,OP|Nm220#cK$Subz:f%k`I;xOTq{W$tFKPQz]FqtrrV=' );

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
