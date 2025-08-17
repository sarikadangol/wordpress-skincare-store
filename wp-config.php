<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '(ojt^.MRR6Z,<3*3[vEYF:Pi`CM7l@DQP :c0V@vb4R{;dZA$4u!/;!V7K_3rq^i' );
define( 'SECURE_AUTH_KEY',  ' AR+PTO ([^o>NmJ,*}9xjss:wXhgQGppl(iE26-em^Y~Tm|SV;&&`7IKQ(iH*}o' );
define( 'LOGGED_IN_KEY',    'LTqBVcRSFv#zd3Y ksYnZe)H6d1m;WestlxK[/eY6/~rklG1?#Z<$6F[7PXrx#;h' );
define( 'NONCE_KEY',        '@h.9o>h+:=4pHDw1Qu<yHI2y2A)&J&>0$bH*T*XJ(-JIk{r2;p@U-LIp|<Tc3REK' );
define( 'AUTH_SALT',        'MYqXSFNVdGoq8,Uis}Zsy@Ku:.M+|iePa^J-`LwQbJY#H8V|oMCdn]h_yAcfmP6E' );
define( 'SECURE_AUTH_SALT', '/G8WXyxMF?P[[mY(e+7rpIAht//wu;xdtv.9!ES(7,+F|3b)=U()/)*_(C)T9TGA' );
define( 'LOGGED_IN_SALT',   'TP}6C_IYWDMp??yY^BWE$T)9j>A%Wt,h=5o;KeK=4u0^v@8![*2f[9E6ES;;3v#L' );
define( 'NONCE_SALT',       'Eva%8A`}|d$e[7Tj]X~_RZWnNx>3 Eh&)Sr5Z,TP6?@~j&j2ZKEea{Q8BT>d,y16' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
