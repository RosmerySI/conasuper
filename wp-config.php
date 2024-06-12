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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'l:hln$+QNIn(QCS!+C_^Gf-LYF8tsK18/kx3dmM*ibX&s/!Q$MZdtKsJ!D|=.ap!' );
define( 'SECURE_AUTH_KEY',   '`ky2J3%?0?eE=tH{<qII}260b71A7X*ZKGN_M`WL_ta>Lqn@ ~c9E?IV+`b<hh!I' );
define( 'LOGGED_IN_KEY',     'gZ9OtN-lrgeTT8pn7I*.!D`&rB*Sq79j{)7u3j~%.~H$(QmNDM8MOx`@02nu]N4&' );
define( 'NONCE_KEY',         'EmERtkWh4wjX]<X]53W(s$-Y<BxOT3 H_na#w1VwKxd0PL$8qK2yf/,RH|&s^s_B' );
define( 'AUTH_SALT',         'nQ-bG<u`Ut<p/9K(@0c Mis/`4.feLY^. t7`BkKA%t5]$At%1sq^KgN8Dh=q!UU' );
define( 'SECURE_AUTH_SALT',  'T{B iIqMV]1 IJ5&0ar8c4Y!(o0%WL<_)<!xGJ<;xOqPV&JECmIOESK%uW1s k4%' );
define( 'LOGGED_IN_SALT',    'g/J5R3VPzq(yln>U6iu!hRr^??Vnk#5zt>1M= ck:(.uj1d(2)Y ;QMJLT,}gl2w' );
define( 'NONCE_SALT',        'RC>uyP0)=IIQJJ53i&YJbdT!q2BrdEDX pgS=B}OU3zdGs<p0Gp24C#WSUz(M g|' );
define( 'WP_CACHE_KEY_SALT', 'R6R;-&BYR5F7,{:XuGM.@H.Eq~G0s/NGP)hO5dZ47|QFuH75R<j|2LTBkw _ZN:>' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
