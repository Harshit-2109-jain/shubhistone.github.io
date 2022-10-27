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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'BXV%$%50C04{,tu)kYK(:9@}r/tNt=kh.^],2wJb4G~WHwJO1MtA=c}T%6oi$ROl' );
define( 'SECURE_AUTH_KEY',  'Av@]J1#HkP%6F?SGzK]@B:b_qOASjvY2V^9[Bk1J0{L?!uP3p@{!oUiZ.SAN<98,' );
define( 'LOGGED_IN_KEY',    'kB]F@jhfT%Hl:jO>_P~S=0tUn1h&Fn GKwq+_UdI C$H{]OoK#Hm4@:p[/_&YcVF' );
define( 'NONCE_KEY',        'KMt`@VYscYrU/ bO#TJ1O7{Qa5OYDSWm93#9Y/A*fJ<,K Xt;.@=u,!Xye>bKaCN' );
define( 'AUTH_SALT',        'SwL@+z7Z)2T/hJ}xd|^jXp8ZB4v+%2!u,Mz{vt+GsbMZ^=:AnI]`6Q_z7GMRV@`6' );
define( 'SECURE_AUTH_SALT', 'E{1rA}gz[$IaKhC<B/(sqK!?oI<x4|jGA6}daA*w,>2Nt2v;h$S+zm8g(nrXSNse' );
define( 'LOGGED_IN_SALT',   'zT(P[<A5!f83Mw.bTAh*^3sI&~dQFtCr90g4+HO9kh=3NpBt++3tVFh72^sKq`W)' );
define( 'NONCE_SALT',       'f1|jGbsRW|d`3ET&c//pay7%J/WzxEQjm`HYEz%>r:<TCa<!04Wy`E5DUFFQDuNR' );

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
