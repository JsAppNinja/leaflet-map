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
define( 'DB_NAME', 'bogidope' );

/** MySQL database username */
define( 'DB_USER', 'user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'user' );

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
define( 'AUTH_KEY',         '%+EH_H|H+D][YbMQ)wrN+u2nc/<d{*;==I6DBBoCa%0$ctxuJ!)tg6+hN.C@?BuH' );
define( 'SECURE_AUTH_KEY',  ')A+n`|:Mlc)9]}5rL[x<g6um&Vu/=LW|R%,_+w{@u#~P6s_]u-S-o?Y!G8})b=Nh' );
define( 'LOGGED_IN_KEY',    ',%SPngev_C8ghrg`bRE&^%h@lH.byT0!V;XQXTyg&KL!A<uZ(OVfrB*(%~9M[9n&' );
define( 'NONCE_KEY',        '%[rlv,H{y27c|6D~K)-XqHF;Bw~%SG#auJTC~[_>{#2|{hx>,nK`6MqNr<UZM-@M' );
define( 'AUTH_SALT',        'Z^KHIDXrR<$/E+9xzOc$t> -@[C9xUf+>fW+|YG9Ehq#|q~H./Rlt)z`|L>-`kh0' );
define( 'SECURE_AUTH_SALT', '!JD)/@kqgpUgXDJo3y7$hkQ#sBe-+N8, z?}8-C)2[n*-Q!gHkanz:OiG ?+BS0.' );
define( 'LOGGED_IN_SALT',   'gN!M;L|b)A|6jib=6/1KD^~3zR@q-w=I9[Mm3F:K!X89;v)dZtF2zQkJvO$Ug:Pm' );
define( 'NONCE_SALT',       'f?WT@JMcKclUnF)E$+%x(x6 Ho4_#U!a-oE&Ve&]D&2?q<l8?vU]*aSyq2V[[YRa' );

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
