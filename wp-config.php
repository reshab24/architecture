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
define( 'DB_NAME', 'architecture' );

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
define( 'AUTH_KEY',         '|`GoCeGV81H#Z>y@ar]4D5fhsl:=(r~::CDdW()w_[RA+`wMBfJnIyTj{%=KA9#3' );
define( 'SECURE_AUTH_KEY',  'kfB6(`b}L+E9I0sZy(odm#/PX=|jehc+}^ID{Wty_2d*;R/#oqR+^HuEO);3(cD$' );
define( 'LOGGED_IN_KEY',    '_ A`#r)S1k>(|f;WR0asAW0/bN_@QVGou|R~KIit#zLpYK0Tx2:h9e8rR8Wn@=qi' );
define( 'NONCE_KEY',        '+F37l?qPC}6PV.S)lEJj|2RPm8aCl9Gn(%{z4rgCd6wE6di(>lzoFJ5Uh51KlNs_' );
define( 'AUTH_SALT',        'iuJ^=QM8d~R*b,|f(>/=n>H#oop%mzE>ORYu@q`ez+b.<N_|Hr6xer^vP}t>/hX)' );
define( 'SECURE_AUTH_SALT', '5NIG0D&*v68j+~(TT,0o8y3;Ch4-&rY;}8NiemhIdIO:]Uf~rVIK:^r5Ce#CC1 5' );
define( 'LOGGED_IN_SALT',   '4979pw@a=JU329Am?Z^&/wwZ|mF<UjyhE^ d1i=*,.A&Wt!5sPxvVPuL+o4jZ5|R' );
define( 'NONCE_SALT',       'Z1J[p2/au}U<1>##/VNyFWTnU9^ o@`skbB|Zg()e_v3^VBY&(Jj[(F`{QqD;#.y' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ac_';

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
