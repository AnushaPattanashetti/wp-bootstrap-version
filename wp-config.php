<?php
@ini_set( 'upload_max_filesize' , '600M' );
@ini_set( 'post_max_size', '600M');
@ini_set( 'memory_limit', '600M' );
@ini_set( 'max_execution_time', '300' );
@ini_set( 'max_input_time', '300' );
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'firstWP' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '4<RmrWd(Q)!z6TD2E{I3j8~;8I.x1.5xnuY(]7RM5+,6aJ3Ux17$*P/c@8631r4r' );
define( 'SECURE_AUTH_KEY',  '(,8OlU_)pq4aB7/(0]L>F;!nNFba^;ThH&jIIT&X 7|;NN.)J:o^1bJL`u!EES|=' );
define( 'LOGGED_IN_KEY',    'g$TpI;N<{dGb^Lj]|-bAAk)/_YW 6~o_(O(1,f3eQ__b2M5ij@^T~;L&$,xQ###Q' );
define( 'NONCE_KEY',        '2fQsl^U4Pa<KT `@[C81^IHa%>xK7+/m(u.Z=t)luTa23_7I32d}je2xr+BMqi2^' );
define( 'AUTH_SALT',        'eZ`e94ooe*JPxZkl&d5Sy&(`X:Iwg=L|atF.Bs7rUNLRmj)Z)Q@Wz_LGZEJaC2q=' );
define( 'SECURE_AUTH_SALT', '1]JL/~k4$*LOd]V[!<O~xvH?@7p,AmDY?Q30@?rTZ=VdoBdG[k[b!wqVXi7oD]x]' );
define( 'LOGGED_IN_SALT',   'mr:89KtHh0o~hj6#pu9w!<l?9LzSmHDjB6_85RW0bV4,NY}InHRW7zSM.^t~ Ix;' );
define( 'NONCE_SALT',       '8;Ba5Lp}xei2MG0X3DN,+,Nd<=>[a*Zk-(h!!N/Q,#o+Xp>^YXhu:E55dF;h$PMZ' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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

@ini_set( 'upload_max_filesize' , '600M' );
@ini_set( 'post_max_size', '600M');
@ini_set( 'memory_limit', '600M' );
@ini_set( 'max_execution_time', '300' );
@ini_set( 'max_input_time', '300' );