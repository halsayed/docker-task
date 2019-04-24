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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'test123' );

/** MySQL hostname */
define( 'DB_HOST', 'db' );

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
define( 'AUTH_KEY',         'Ac)IQH-<NbzZ@Z,vi#:H9M81C+hI>_E3{(8[C$,op%[)Ln=?DZ:fNuobZJg&N`;q' );
define( 'SECURE_AUTH_KEY',  ']~z900Yq[3w/)4DxzJHmom(CVho4s-Q{0kpmP:wb/BY]O~t1jA||)/bb><V@`+W0' );
define( 'LOGGED_IN_KEY',    'ZbL6<IPk9(X+n_(N00}X1Xd(:^IRwGV8^`$G 9Z<SE6Y@{SQPm;0u,wgFl~LDV?8' );
define( 'NONCE_KEY',        ':}$at%;NfwogpE,*D:ZjFC5!S${IreWUs[ JBnuYioUWirjKoDO@,AO+ljod2{8`' );
define( 'AUTH_SALT',        '}xvB$V)u.1-W?%DM>Luf2AAf{lRZiz]zg^!Eu3e9|TXzsK9 M.s?UM/!:mo$?-Bj' );
define( 'SECURE_AUTH_SALT', '-Yz{zHb@Gd.@+&[pqs<v>){M@!2:SrFgDUdmS0S>^8iFrwn~u6#2wzhiUAOoG)~=' );
define( 'LOGGED_IN_SALT',   'nyK?6b+-,PB3QZ@9@/GQy,_hXXWxntdPkq+JXc:36V[UJ)V[(Dq3a,Z.zm!vrQI0' );
define( 'NONCE_SALT',       '6*,k_uPKw5]+Z_IXd[BELvv=Q&rx^c&qPb90gqp?^Zs(GZ%p5$%!o,w,$N]~V1@4' );

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
