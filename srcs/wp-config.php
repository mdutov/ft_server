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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'tcynthia' );

/** MySQL database password */
define( 'DB_PASSWORD', 'qwerty' );

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
define('AUTH_KEY',         'y!>~->Vj!],W=8_2z+=/|1xPl.d!LPzRYg+;3U.?F^8H=QwC! ]&Hc9<vfpBFZxu');
define('SECURE_AUTH_KEY',  'lfw%n?;t-r0|) Sdj2ah@t?3nFQ7@~&3Ds`a@SU6q-_NF{,z{a.?VA#gJX2k=&+H');
define('LOGGED_IN_KEY',    '#zX>x/-{b+;GzbA;p1u6PFQ[Jtkv2fp@WLrp$w{|sVIyfS<CyU7ndlWB8-e.WAo:');
define('NONCE_KEY',        '!W8Fp(L`0mp|Sr[p8M[abn}:bD-yekfhJRH`iC1Xi`ZC+xVjo+]u} W?HO)ezuU`');
define('AUTH_SALT',        'Q{*maavp=2||11W*)``wFEd;+96]VKXtu.hHi5Y`BJ ~Ld8GI~SGED{3f/g0J:Th');
define('SECURE_AUTH_SALT', '0vSrb|E)tg:ml)-6ENwN.a &?`-K3_+*n59nZQ?@3.c5<ds)_7tX/M-*d7=X=wPp');
define('LOGGED_IN_SALT',   'l(h&U3p;lFb~,:mM6mE2azX+ 6|wz$-U7-62%mN}.nj9dc`mc*8B~v 4-U`0 i!B');
define('NONCE_SALT',       'MpkfC)[(>[)4/}f>u^._Mw+amU/~Q?s9Uml!_V_q{NlR{Mwi}L^{Bd3_UIwu>N_U');

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
require_once( ABSPATH . 'wp-settings.php');
