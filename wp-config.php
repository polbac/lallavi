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
define( 'DB_NAME', 'lallavi' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         ',::]w17fA{8?KtRQWRa1g]DI:`}f:iUjvB8BrtN6WQks@RnIs Au<<5K4hk_~>+o' );
define( 'SECURE_AUTH_KEY',  '1l=h.7pv6G!D22:C(_3V2!CFY_D{TvA:K%@8%a}rvArVv/v^egL30>[+)}GkqnsA' );
define( 'LOGGED_IN_KEY',    'Goxg@$2o/^wpy^]u`{J;q1zgHBA7ziknm2G:L#_h)+38w16UXtC,nytMem8P7BZ~' );
define( 'NONCE_KEY',        'M.+]I.T0@i. 6ntG#mVK}]]D:XVgHG[F:|VnVd?:a2N0$l^j3ygQ?6HDLW4[lMtV' );
define( 'AUTH_SALT',        'tw~QuAqI|/N0{EN;2;y<>c(&L}+@slWS!2_y}}do 5g-1Pf/%7 6WKZ;/l>FD4y^' );
define( 'SECURE_AUTH_SALT', 'mD*><Q>a4q9Os>D8JhEYn]`<4t,irxpdPiA|0;2^2Pq]F8D.PA%n+y`q#2W6g0Vo' );
define( 'LOGGED_IN_SALT',   '1.j:}CONn5-)eb|R5Z{qo@7*D7i`DWq-HE.=Hb.=1HbAlax<jJe[XJjYYaAT.=;)' );
define( 'NONCE_SALT',       'bw&}C%Ea@/9.%3;v/t+* /1aTl<Jxq{Qw*gF=+zteHQ;yb?=H>bmEYJC~=r>=GVl' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
