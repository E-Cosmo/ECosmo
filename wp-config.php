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
define( 'DB_NAME', 'ecosmo_db' );

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
define( 'AUTH_KEY',         '*JfKb`Gm3_6i$4iRuH+cnJPnMM?@6(>0a:5jR8}QtLtVS5;mv==Jqmc%)n4nQA_j' );
define( 'SECURE_AUTH_KEY',  '}#9>CjuD*`5!7G[Y* Rp8~0TghU^9 jf6q:M;KUDSDSk}DRP#^H,6A%y|,r4Hu~g' );
define( 'LOGGED_IN_KEY',    'NW:iF{n`+=kN$[$[K`FvYS6Zww,Bi0cz)O}qCg &uh(DV~9gRP0KqH</2Y(:c&$-' );
define( 'NONCE_KEY',        '$4({1P%rb6jbs0^8cF-1=5[YplcAt%I,$wd&IwC`[R=eJ6R&QMpj}:}3M]1DlDy}' );
define( 'AUTH_SALT',        'h8/2qge viAr.a^u9h-UOlH[27k3J:A$o#Q|UPqDFZ-@g2<=c@ GvO&!P94rd_%B' );
define( 'SECURE_AUTH_SALT', 'Yb-#Z3;yF]V0-FXz.QI>kTXgujt_}7^#<_8~r7R@cWjr,rjYkN!mTK{&n-)Sl4Oq' );
define( 'LOGGED_IN_SALT',   ')D+lgs^IwBkQ-yKV1SoGp3&qpM3ngKccITo.CAV=k|N;9cjbvF&yW^r%cA5G#lG(' );
define( 'NONCE_SALT',       'M:N@q{i;Z3{oV`[AjUz3]+75ti1MrEj_TqVpN]gqjN[B3:hV;|i<&z8I:Vx88Y#:' );

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
