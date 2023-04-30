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
define( 'DB_NAME', 'watcherx_development' );

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
define( 'AUTH_KEY',         'EZqvRMI?N()iBNo;d[NeA.tnsv7@)0>C8D~FQcb#*]-1&A[b292wT)@rV-D&Ws=c' );
define( 'SECURE_AUTH_KEY',  '2eC{*2?]?;j;J~&j2;B2=7S5/FwLw]`:R49{b+kwNHS_-!W]T2jck~D%_y9JLMeg' );
define( 'LOGGED_IN_KEY',    'Tqz73@&8w4[-9#Abaj+Od4jrGqkwu6(eJXIwZYU>h?q~#qNs?),Md064pmpoQBTZ' );
define( 'NONCE_KEY',        'K8|s2exbZ-.:nyooSVY >a+1kkYb0T^7:L[%wN~/C8[Sr8q^r25[qn-|+B_UYPY~' );
define( 'AUTH_SALT',        'Kb8W{Huop7Wr Hg[X<]XRi!YZ!gE=ZU_pjD$s}SF,[S4^18a9D4C3d$h/(=7A4aT' );
define( 'SECURE_AUTH_SALT', '#B<8U]<PsRIMdR9#2)Lxjv=FDKIh=*Zy>x<}-~LS``y+&8,bC{b)Yjm<@mGH5MQ,' );
define( 'LOGGED_IN_SALT',   'r%2y9SmJ[XD7:3;w[y2VqhL@iz4~COEfi6WOKKof*sbplhxwnU1kR6TfA&lB8,5C' );
define( 'NONCE_SALT',       ')QNePB>|qEZkmj6A:aDpf8 p<^a_H4j@H;Y`/kjoM-O:d@=&_$)cl%RuU704E@Vz' );

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
