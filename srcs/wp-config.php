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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dbhamid' );

/** MySQL database username */
define( 'DB_USER', 'hamid' );

/** MySQL database password */
define( 'DB_PASSWORD', '123' );

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
define( 'AUTH_KEY',         '?2_y6`IZlgz5VT`d%dw]vzq/]{w9w|nbSmILL{n3Q;c+x4U0SHfKBPUN?dV4H@bK' );
define( 'SECURE_AUTH_KEY',  '$y0c9L!A1vddKlO<sE=kZTA)H4ZR,KLpa1lqxpJ^fFj,MX|BUfQ3{8=-,tPNQlO$' );
define( 'LOGGED_IN_KEY',    'B~AUNl4Re+8TV~qijDV=s]G&155~7r!D6d)N&@a,%sjVSDi3DvG/]Ztys!qMg.S[' );
define( 'NONCE_KEY',        'EKOwQNI,BF*^s-_,*t}m4Zw{emysY*[_0|1%--NG831fy9CpMUga$U,M%le|:SDT' );
define( 'AUTH_SALT',        'CoW:#HLC?RpYy>Z?Qs^J,0vnj/ixWYY.~R}.?44TSL2w()%>r3`YrEP&V{Q._sd.' );
define( 'SECURE_AUTH_SALT', 'qH(8_0@SrpPRnH~~s`;g=Q;k?Y7kqI~)xe()yJz_,V/@l+pn|_2#W=lvD;!Dm)yA' );
define( 'LOGGED_IN_SALT',   'nlK=6k74%,#Irt^t$GAK<O=J9mk2>Lm!}VuBfo9msa09rYDBk=p+}o;OQme]#U} ' );
define( 'NONCE_SALT',       'vYT[I5WyHNNa9_mDFKP*4_rV&&FW,u&>27vDkj0J Z5AZ;tlb/ g#BYZ03jvQ L=' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
