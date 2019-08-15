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
define( 'DB_NAME', 'humescore' );

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
define( 'AUTH_KEY',         'ZF[mZ)JJ_Ki(=?V&s!euLE,GL>2IsGEPJj$zk8w360:QW:]PTGDqSdfX3ORU}hYl' );
define( 'SECURE_AUTH_KEY',  '?(Y[BGm]]6`_7R[DAdNSnBng#*yd%^wej1:!;B<zCu<<{}qd5_z![XJT0Sb:tuQ+' );
define( 'LOGGED_IN_KEY',    'JcMi:@bFTb:x=mr!BB`r0{Vr[`i)J>AVV{oXl]8s[K#)lxmb,vx>1Q5(0u-oy1SR' );
define( 'NONCE_KEY',        'ucT+5.AOP0-&G,`ir43lzl@_0~Wz(RcX]GG{n4:%h_.^oo3`y6!ZFJoj3L,#FBR2' );
define( 'AUTH_SALT',        'Uv[!#s`/8yH+^t-C/=<h;;M[_3wHA{EidGgu+R}G(r`3u7<es;F?jzjdT6fpJ]Hz' );
define( 'SECURE_AUTH_SALT', 'yD)PPDZ1kxB4FWgw?-aAo|@ZTk.>gH[*/g{z? euyn]nrH6fF+LH38&VDt$_J~R?' );
define( 'LOGGED_IN_SALT',   '+0pi:l4[2}ku1,I(3ZufZicb9BMMJLoL d<`EHIS<~x  O8/:}@Wu#36A!)$@.RT' );
define( 'NONCE_SALT',       '<EOb.kPmm.-K]?QL-j0(35^|rd7H36B}u3]b]=)Ud RVbHOSsQYjC6cK}@_n(6yp' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
