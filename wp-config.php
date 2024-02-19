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
define( 'DB_NAME', 'theory_bd1' );

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
define( 'AUTH_KEY',         '2MDsi)=cp}buwZ4L?m0l.M0M&ia3&W(,~)wn<j>o/$C+C@J7gtSZInf0019 J%Zb' );
define( 'SECURE_AUTH_KEY',  ')x!r[?(W{-:SWsf8xQi-Q;k1u&vFSW8K<]ip=>wzGbnz909rwrb{t2$9*3#$xx;x' );
define( 'LOGGED_IN_KEY',    'X&EOFp},4LwJj)nXol%9Me+r1cVjd^*1[-f,vFT%kNo:XX~]h70A3!$hIFi{G=Rm' );
define( 'NONCE_KEY',        '^aWgfYx-cTu^Ps6mD;{O]0lz@`3}0o]K^{Z^N-s#xs1EzyI*!cf5{+1E9b8+wl=c' );
define( 'AUTH_SALT',        'KVm3+R~GJ/KW7j::v`C#G-~-3e9!)X;QsLY0yv.2+0!tlU[}U2nQ%qN%ouy>&GnU' );
define( 'SECURE_AUTH_SALT', '^`cYA0x^,3xCgonq=Y^Tpm,xz}n{A_dQ`#PJ?/xz2Q5+q~O7C3Md`gDsX,k%@CL!' );
define( 'LOGGED_IN_SALT',   'zl}kiYU-*g(:y#WT73?FRM7&aL0=_Jo{doQo-gn1eDyWh7G8*o:CT]LGSqcy?;Ze' );
define( 'NONCE_SALT',       'UI^g*C^1?H+&a|5t3_0[}71kI 01o1#jJkQb]W@s%PR3TLC)Kc<[t;OYxzf;fOT%' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'theo_';

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
