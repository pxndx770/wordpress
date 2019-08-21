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
define( 'DB_NAME', 'Occasione' );

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
define( 'AUTH_KEY',         'Hf@-~~-7Z-MG^5O#5RxFc$0*n|N[3VD@|8o,I)LE3HMAy{i;Y~d.mseNLR<{jxq(' );
define( 'SECURE_AUTH_KEY',  '@DTz]>2.J6_g/AY%Wfaj9z]mO*rUaZj,]&m[RJWM~]+Yjo<<i88N_X;mkH-/pRCA' );
define( 'LOGGED_IN_KEY',    'Vg.P,PJt>_dlVh&{?=y3r<Xl%gl99>XflSAtdr@yb}o OpVUNAhN`Z3IK%TE8C5C' );
define( 'NONCE_KEY',        '@!f=~fJaLP:oT7W)GJ,YIy-2slIrX_f^9e8--<:dkwe!F>{25ceMOq]VU=RD_^!R' );
define( 'AUTH_SALT',        'Tiog-sWT>J[i+F3jZ[yZY:r6pSff;#!wgwXa$1%&HYhZGc9}n>;wP 6^Ao/rp!g]' );
define( 'SECURE_AUTH_SALT', 'k(Z.)V~GZ}x7Y1IXT#wmA+?g2t_Z{7z[Q*;}j6DBNCh)Aybqs}3o%F(G6M~q*v.y' );
define( 'LOGGED_IN_SALT',   ',NglNY>j<_-H[lq0uWE{EMCKK&gHxwX8?%gZX8lMbP+v0<iP0VDH=U7#RN_Jj|6B' );
define( 'NONCE_SALT',       'HSQ$#1Jfk(?ZGTa$(t!]`0 X(%s[yz1fEpkf#F~}r^{%I_8Zi`8J/j`E~(7!3Xtz' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'tb_';

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
