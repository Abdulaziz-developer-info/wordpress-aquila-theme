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
define( 'DB_NAME', 'aquila' );

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
define( 'AUTH_KEY',         'z;RF[2wPqQv8HKC4M$]g(b.tnQLk2o!2+u:T<=O^CsaRe&FwXs4C-ZaMym><+DQO' );
define( 'SECURE_AUTH_KEY',  ':`Hl=6~5heJUc;TDKS6?-KqZnJ@(SSv`MEJiw?};TRm.g;z:]5a@CPP5HlOZ-Vgx' );
define( 'LOGGED_IN_KEY',    'J,^1Y4IkvV67qd0kY?hPDhTjFDLP!xX>O63(V{g55s4&Fl*]Q78$pxbV*~_ZJEj=' );
define( 'NONCE_KEY',        'lJ#b[;QD;3}r37EGLCui+fW }1VuE,94da!KWF*jT,S7,r38J{XaKD8K7j[y1oqE' );
define( 'AUTH_SALT',        '=:Yb,.As~0jFJPO6unkc/6a`1>BpJB=[{B[+qxvfb9ozwO|$]w`yzSNX[Vb|H|fM' );
define( 'SECURE_AUTH_SALT', '[Y@Drd3Cbr+Hn]>*eOje<)d&i{$e6dQ2:1onen)qR7R[E`U,(pO;YKjR$}M`U[gb' );
define( 'LOGGED_IN_SALT',   '<9BL8;bZ!0m#xp~%#/z!+z$RG`}rgSm)b^nrT1fsBYO@NNIGU+S.liH}#<_jo259' );
define( 'NONCE_SALT',       'Zs/iX^ZD>&?|Q=R:2cb;ezS&a;xk/K*JTZG @!{~?IJ!4kU>eP}P|4oNb&Vk<;wK' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
