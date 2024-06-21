<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'mccartneys_db' );

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
define( 'AUTH_KEY',         '%5kQDlA2y$73G%$I<{]Ig`}l=us|`usT1,s%+nAh4&{%iKX]f9]lPRnn:T7#*@xj' );
define( 'SECURE_AUTH_KEY',  '|XBN)tT-|bn<t{saoz@n3/^XgB}R(xV`h^O`g7%(@1nXJr0*D5={dVJ,X=GR<eff' );
define( 'LOGGED_IN_KEY',    '><0j_$4`!6M7mBZs~yzk7hLoUeoA>=]8[{x=*yrHwJett)X]Q4*E5ahHumV;-@*q' );
define( 'NONCE_KEY',        'z_>&x$(-o,*jdylgYli4[&g!Bvw H!okn2AFF-<;k/3Uh.Bu/D:!Yzpx/*F%US<j' );
define( 'AUTH_SALT',        'v(Y_i*1+jn!^$]iI>T3hbU}YBQJ04Kv**uilJYA3TNxcaB?!g]]IVi}1unqOB:,(' );
define( 'SECURE_AUTH_SALT', '*9o%KAe>,;<~(k58TeD -Oqvk^i*}ZfCHxzr3Tx{3/2 x>>|UD*},dP 8N[z0w3@' );
define( 'LOGGED_IN_SALT',   ')hr?1zrpMxfiMWzYmIE<]qOv`U/)zOP/KD2>f$d)-~@QOY{nME|}Y#?>6S@`PkZU' );
define( 'NONCE_SALT',       '`gA5s6_hyP)H=BmJ#iN|9,]gYaaZq*>6^bk-+BJ&(lvd3707W98)?C!nx)/]`d!x' );

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
