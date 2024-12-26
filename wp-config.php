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
define( 'DB_NAME', "longtaman" );

/** Database username */
define( 'DB_USER', "longtaman" );

/** Database password */
define( 'DB_PASSWORD', "Longtaman@2024" );

/** Database hostname */
define( 'DB_HOST', "localhost" );

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
define( 'AUTH_KEY',         '~v/N/vr;2wgIkm3q,3lJ8{EA>Z:q1IStHJ,J-4ykwM|(=f,Pm+*GKN@Iz*e|Y*s|' );
define( 'SECURE_AUTH_KEY',  '*g~?@}4$4D:MWq:w8W3t&pF$Z6zzv)#}7<[feM0Im>QA%RB)T*Wo)4hX0:0g7$%s' );
define( 'LOGGED_IN_KEY',    '!md5WUeQZ+_Gp)ikL,#OU27q^D80r2S5n@m,Z[g*u0|zOB&^j#GP8YX>$B$p8n]M' );
define( 'NONCE_KEY',        '7@F:^!5.$K`_6Cl~LqSMh;`wYm*MuTWehHWdD1k.~hi2gJMrq0]L]%5%ox<$A|4k' );
define( 'AUTH_SALT',        'GiaHg7[E>?+;{B!MP+X+~0j)lMFW`_pcwj:n-zw<UlmO&NU>e}p1R2n4EWfQ&Q$%' );
define( 'SECURE_AUTH_SALT', 'q~)3[!*mjL=b*f~!=C0hF 6qEq,(M,HTFq9#(A|TH7>)`!cry)RiS819[w:~M@#;' );
define( 'LOGGED_IN_SALT',   'o}[Qxd]a.w|~Z;9s7x`T6t+pB?SC7W>37JDg[:=&bn%4v2kl57$@2wC4k(-]%,_L' );
define( 'NONCE_SALT',       '$NYQk*Q{Hmg6@x`(;ZE/;JkXyD+kDQ>x);|Mvcwx}jH[eV,[j:W!G&do&q*zq^kO' );

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



define( 'DUP_SECURE_KEY', 'k?zcd,RC3kR5v0Ks;69gZAb]lnCc)gzQ.tLH-G[#bkr!U$5U;GU#94%cpA?Nv@,n' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname(__FILE__) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
