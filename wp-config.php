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
define( 'DB_NAME', 'wordpressdb' );

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
define( 'AUTH_KEY',         'R)c=L-h|-{;Z7W|Wv]{F]quQ5Ofh,2)L}jqs XGu3O;AeDkL:ze;xHnA:QT~68Tp' );
define( 'SECURE_AUTH_KEY',  'muQxgM7UQ`_S.oD=k[i<.4:;mW#z;Mo6NY#<siwJh< 9>G!AI6Y4P5&J{{w$T_vV' );
define( 'LOGGED_IN_KEY',    '2-3>Z3vGs0uL;N4{Zx#<9Js3k@6PRyoO,>||_s:9/G|]{8:7?%[1zgle%j9)RhzG' );
define( 'NONCE_KEY',        'v`p#y#S}Zz`JMX++/]s  zarqh.;{IZ7{8h5{:7P*:<.Ws Q.lzCM u^qwJ1?2IZ' );
define( 'AUTH_SALT',        'mR[!lz``6ct!`I.dMvb-~]$&YyXfsPUde)>T>KzCV#Y}ochXue(y4N!:TVs1C8s.' );
define( 'SECURE_AUTH_SALT', 'CD!O&S1w[K?>K=>VWcMUaSWeIq=US$f) y(+A-rRA>p*;Uw~s@6i;H&zIc,%PhD4' );
define( 'LOGGED_IN_SALT',   ';,G$]c{bB8v&2ukwQb:i}jE.S%fC$D1DBdu0>Tvmo_w]=SAq!h~U4y9HF6!H^Z_1' );
define( 'NONCE_SALT',       '.Y^sm^Z~RfeDFpCX_uluMRpw[nBubU$dP]qjh<!F0z=R3+a=DdcmRyB(&ks3wQ_{' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_mus';

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
