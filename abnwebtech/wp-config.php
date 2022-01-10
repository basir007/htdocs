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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'abnwebtech' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '`xxC<llvRc3|e[z,;m)yQ_JO)bRA-y_[HjPp0FRt`c2$oBzUh7;u)/?hUlL_970K' );
define( 'SECURE_AUTH_KEY',  ':;~k)w!V@~J)*P8*&(MZl(PNezv+>k^P`#;FY[#b<3@h8-9}0Q/V@Dv|-iDWdEMU' );
define( 'LOGGED_IN_KEY',    'Zrud8h),R^sH;:GM0IRHw#xB;#V,d?208tDQ+Em]_w}UDpG4]UG@kcE%J.jpuZh/' );
define( 'NONCE_KEY',        '23wQ7K(:AOr/wCSBSk|5&2D4_Nx2YA;@3JA!es|j)[M3qv;Dc#37wF97L??K:NsB' );
define( 'AUTH_SALT',        'P5qizmdTZt&p>/5/`DwPUW?QyfYD!Q5N8[~J-bMA!g@DHoE |At+m-+:^j54JZ{.' );
define( 'SECURE_AUTH_SALT', 'a? v[rly6[GGq=o^6C1GR}_OicuYUb-u_]h}}bn?:AX!fA29`5oT9;W$NNfE1oI:' );
define( 'LOGGED_IN_SALT',   'Ay^JwT0(r|H6~B_7QNo~QdiBqS1rvlpI~Hjq%_^KC@:~AQdBR4x{x~>xU]F1T.AB' );
define( 'NONCE_SALT',       ';^61hlN~@+sC+IluqN8FLLRO<LLqouc]2d5LRBDe@1pl`F cdfKM!op[>2Sx. V,' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'abnweb_';

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

ini_set('display_errors', 0);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
