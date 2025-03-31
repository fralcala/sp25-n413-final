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
define( 'AUTH_KEY',          'b{fi@0TjTk<o`3!jg,x4]#<FS2IyNU#I(]^2D0syGD,8hm1uJTziG[n*`T?,3}~R' );
define( 'SECURE_AUTH_KEY',   'Nf! B5&wrpnP17B]VP:*gKF-zm:q/  =q:*}}GhS66pDgsxwRE(m,Jf` 5TB3Y4j' );
define( 'LOGGED_IN_KEY',     'SP8NC7D=w@14b5UB%Y5!6dql=;sw.8a*Bey;Nze4Zf;R@>vq+CTv}VnLc!,L{sND' );
define( 'NONCE_KEY',         'j{8R=[tqDjqP/_(O5p1yy[7F[!A|X2DCzz0E,[6W|ji*{`)5upfAh]DL_GS(%zG ' );
define( 'AUTH_SALT',         '0KBRHuJ&JJ~kiMO{(ZpKNzS(OM8d3]fa4HFu|F.I(lxk8D9,BIb2I@:9XR&eZu0+' );
define( 'SECURE_AUTH_SALT',  '2l|9?s$|q=W=Hx|&_]*??mh3ro?y V|iVb.}ft}Hocj7E{ohO~8hetnRtjXXlon(' );
define( 'LOGGED_IN_SALT',    '1rY3k:).M[:%sbhG8di+y=[-i*96i=2pYZ)SHD~]VY0u{mfG)2wI$)1[oRQ4.w z' );
define( 'NONCE_SALT',        'eL1=gI>A@i#mb3.i90ev[yREkeVqbcq*Nfon]:2XSAHq>z6_-wr0J1v~L5y=FIVb' );
define( 'WP_CACHE_KEY_SALT', '24+ez $6z{kKx~KFkOP4u/NW[Nq+wVZfBv<{UoHP)x.BqsgYo5&S,W`%<=t.at4Q' );


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
