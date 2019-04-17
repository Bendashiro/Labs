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
define( 'DB_NAME', 'labs' );

/** MySQL database username */
define( 'DB_USER', 'igroum' );

/** MySQL database password */
define( 'DB_PASSWORD', 'labsmdp' );

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
define( 'AUTH_KEY',         '>nP|mm[{k}!#t5bvRLFzGTAe0u,)b3#IH%#e<TF@P8$s/`,0}Mlw;5(|fB2;P4{$' );
define( 'SECURE_AUTH_KEY',  'XbVymzq Lb0:|U.-`SApZ5md?j)Fm5E~uj+3VM@8WPEg$aa@xsSJT4+wy)Kv3lI`' );
define( 'LOGGED_IN_KEY',    'P$Zd/JYKC2iYo`<Y.@L_6LM#>`tb<!^kh& Oez#f)Q#m,1Vd?fDEe{H4R4 `hJ7X' );
define( 'NONCE_KEY',        'sDF@08AH9<gBr$^LF++ef,M:eIV92wn;2*Z=BI(C}r^BRC_oM?q3_%1=-?Tu[y;3' );
define( 'AUTH_SALT',        'CSl[,cuY3Le/6h+6}Z6s 3eF~lT4&{0>`w]|O<|v+|&2Y2c@IVi1e0CtV4J5JmnP' );
define( 'SECURE_AUTH_SALT', '+ve)vY$;D~5BQHRJb5ZkJ|2N>f@K1p;LrY:E{41?#n=Tm$Y.|>O}8L-2J2-d3xsK' );
define( 'LOGGED_IN_SALT',   'w%yv*oQT;|eBq$H^z7[Z~a>8_#= %9~A}ys}-$hdGie*4.y$_V2<RZrY/.s}}zb/' );
define( 'NONCE_SALT',       '0GeR@x<C$1k54$qIo?j]XJizS%J%rU^=0sdZC LZ;_0FQ^2yB@78U9:V@e0C>j<P' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'mg_';

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
