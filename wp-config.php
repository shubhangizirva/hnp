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
define( 'DB_NAME', 'hnp' );

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
define( 'AUTH_KEY',         '-f-)c^UX5pjzJIlo5e7lFx(Z|!#aPs>o#GJiO9dOl~e9Z||0?>2XH;V43ju3I^rR' );
define( 'SECURE_AUTH_KEY',  '8}ge]KH(A)|JFAjSq$tHS&++a(t&[Aw4^aq(,k!@Tl?nt#,EDD{Fo-Zk!csqY97.' );
define( 'LOGGED_IN_KEY',    'F`j}O=r<86Q0upU<E:NDH/?SX3WbzS7j}:;Kwur?wB&_V0oP}${^TB(OYkpQX6b>' );
define( 'NONCE_KEY',        'iDa~tbmp@ArgQ5|u5IA}r>%l<V},FDhvGw^iJpf-cW~oE:I:T(Fq|MLY)|cj03>s' );
define( 'AUTH_SALT',        '(!vJ]4),7rru?Z,&h8Uj{BT7{Og&CGHXgA_o~*:eh_>][w2U$z<*FRaL]-gb6*GJ' );
define( 'SECURE_AUTH_SALT', '-HaYZxo)Tg+J!iLg2*~#1HYDP=%B[se[|/IYQA!t(X$wYA[|.Qp>2UMP:/^O(7[K' );
define( 'LOGGED_IN_SALT',   '9w3^?mePVl9{v{Xyx2bDi[Nj.=}JucH`IL!#ob9cV*;;y^=d.!M8%XcZg)<E:Nj2' );
define( 'NONCE_SALT',       '_ilLI`qQ9tQZpPi)xFvGo]J^m2;mfQN2)V$<S(m>6}T_&LL})*(=@*<PA6oELt /' );

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
