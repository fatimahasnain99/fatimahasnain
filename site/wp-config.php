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
define( 'DB_NAME', 'fatima' );

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
define( 'AUTH_KEY',         '>.p_:G/CggJKpTny@]3mCY.$ouJ$7:|+xg5mb`oA^J~j)e&GJNxHN=>P0gzP##L)' );
define( 'SECURE_AUTH_KEY',  'k!L~%=;VGL#x9Fj8UnBQb>IB7`#|*:v]yLhT|DVbQ#!L;iPV-E+rrz!f){FE[o2+' );
define( 'LOGGED_IN_KEY',    ',3{+Xd#9iVoG>%~Tu_)0M.Ox5X eVhK*`8BETitn~SR:9}I:9F>5f<U9mzJXqyUf' );
define( 'NONCE_KEY',        '%~J2#5ln5c@I$7hZYgXw/q-Z49Kh3F!V5k+{Ms`[(&vs.^<j`iygsrUXQzu6``DT' );
define( 'AUTH_SALT',        'Cds7OMQ/X@MOF}ucU*An>A[n/-g.*d)o@ca.;-X1d5H7=%ow[WHv!18b~u3j+rDS' );
define( 'SECURE_AUTH_SALT', 'G|N9D8%wow9jtc15.|UuAIIXON`/cYhF}D$#xLbVhoTx+FgF|^?1n3X6XbK7U:n5' );
define( 'LOGGED_IN_SALT',   ':~:c-R%{:O;jmA0 aJ%FWFB$.|nTbNn<9|s?f-OhTsvC*b?Xdg7x7tD#:tr?!d@ ' );
define( 'NONCE_SALT',       'J]Oj!oBzvJNQ_&1=rSUscGycc]BwJc%h[bV0FO/^F:Xe>Gd&z}m|G`Pse?HU8{/5' );

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
