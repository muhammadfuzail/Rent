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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'rentdb' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         '2JW?M+X.0NSOx5H-+C/`gI/>qyJuYy8@w:oMb-^zegKuDGCo(eFoqB[QN[f>RCNs' );
define( 'SECURE_AUTH_KEY',  'xepP;WlL![Jy!_/klsA~4dHM-,^w(w-pyhi1bo%)ZXH#-bs:q8jU5BQxcrO,kA&&' );
define( 'LOGGED_IN_KEY',    'F5>k?C7ne4hH:$>1Yl/>gy>)|crCd_tf5N|fKbu.GN&#]o_wS1kMC{A2PzpJ(6v@' );
define( 'NONCE_KEY',        '&4gM5jnK}(FPS.waA}`if_M_aw23sB35kUOHzQ.+}6V1d%{@s-ws|GP2+4g(+},1' );
define( 'AUTH_SALT',        'N@#~lxWcYJ6k+}sJWJI<JVh5.`%,PYk>?-JR@=`Vv{kct_C8k6`e@xt#_J Mt;tn' );
define( 'SECURE_AUTH_SALT', 'B}w(w#/.M3B:U/3UscH9T-]V`b%]%cnnnP#{zGClrvV`$)>l`|-SZKBnW~9F9)/+' );
define( 'LOGGED_IN_SALT',   '3KUly_-N<Wo hAD>8;gkY<Zx=H@l8d0A? W2|5T.9Om4I/]ERxG3L$$a80dP~Hp2' );
define( 'NONCE_SALT',       '#mvMXkq_0;MfBx9Fsjww!kP)s/^.a315Gl4%X8Vr7F:q*6!Z35;p/cgS]-5hW^=?' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
