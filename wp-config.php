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
define( 'DB_NAME', 'setupshop' );

/** MySQL database username */
define( 'DB_USER', 'setup' );

/** MySQL database password */
define( 'DB_PASSWORD', 'H7XCQaN7' );

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
define( 'AUTH_KEY',         'Qm9%qT$dvzo:{[i_N,Za-.K@RTn93pM6BZ^URPH2;K?B#T4Az,JoNt&{*^x;9,^?' );
define( 'SECURE_AUTH_KEY',  '92}LG;Z/,UhI{W%-#,n+#e/J9S[_cpR[2,_{yg.[7]6lAl85{,t #?5%??r]H}$R' );
define( 'LOGGED_IN_KEY',    'rI1!Gx^PTxklo{emM{p-k)r9s9@|$Bq^h6nF8c?:7Q{i_FbYw qA]c[?BkNk(*Mm' );
define( 'NONCE_KEY',        ':t-_T8<G#Ut=m]id*-2qd~(,%@M(o)+!LG#V6Jw%MeBu8U,kz}7IISG`Z]*SWr:Y' );
define( 'AUTH_SALT',        'Y4#p.0`W6R>L^n66doMK2Ne9d%r}%l/u,v-%t~KN{0N-E-}cQ>>M,{gL0*S-K2YE' );
define( 'SECURE_AUTH_SALT', 'eweF9~zb^-)6oOkfo`FbrC6$*wd[3nh[aJz(5<i+L4~?P#x1Rx_|IfgL@2X*(?T&' );
define( 'LOGGED_IN_SALT',   'VazX=0dFbFE/tl;I=Cse_)A.1o0PKUd,<t?z1OjZ[}sZ{+xD+E_4Sh.Ar:Sy#TDX' );
define( 'NONCE_SALT',       ']N3gmCV)r/~;<NzPy:H+Uz&~@WGYc1?o.&0,M.:*4X,H2,[ssk]/.Ca&w/1[z%6v' );

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
