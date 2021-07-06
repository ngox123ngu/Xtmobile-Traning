<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'xtmobile_20210518' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '!6Ge7#Q.=iN?PXl,oCPzI5(?cJa>E~k([IOuPqm5rf(i0X4%O<p7s&AUgsKI.|}&' );
define( 'SECURE_AUTH_KEY',  '=@<,v?cFG^kx6JW[`fh`(%LlldMZI7x_,.uwP8]>Ka=0YMC]ntuu!&{L;ho|N&9H' );
define( 'LOGGED_IN_KEY',    '=`clq_M)2;8TL)|M|1IO6 WqMv~l0N){vMb4(Puq4i?FW=AUJIZq@gQd<# oz4fm' );
define( 'NONCE_KEY',        'LJQ{:277GTYcn[aP](^tL4d[awg:D&{3aKG:Q2q6(5hmQ%C/%h6ws/+diy9zF{fo' );
define( 'AUTH_SALT',        '*WD^JzIa0mIu7sLuM-HFdv>e&&eY|?^p[/J]!=..%=q!`4vHkVwJ!HLCSO3.Xd|8' );
define( 'SECURE_AUTH_SALT', 'mGe?H4t$],*VW&I2~g!mDCV H%G$TB_jBp!vv9}C1Dv:^& Y&w5!66e>rwa@$~0u' );
define( 'LOGGED_IN_SALT',   'K>THNS1f$xl(ouy)|G<y9~nRzAb5]SSzk[3SZtn17:eag1i8if!XI@CL%L6aY5Z^' );
define( 'NONCE_SALT',       'liHAPe[g]bHf8j=3&CYh~sIGWVP KI$WUE|U/qOfE-]NN?y1mY,#zi-PPW~=Qh);' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'xtmobile_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
