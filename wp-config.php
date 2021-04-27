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
define( 'DB_NAME', 'wordpress21' );

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
define( 'AUTH_KEY',         'LzK^Uuzwz+1fU/:fvPedJ)1!hu]x,Z j!.Y:1*Mk2tGI.#LM/sGaz8s]Oush-0px' );
define( 'SECURE_AUTH_KEY',  '5*<~3+)}n]m  /n/RNax8?AH.M7gfsz5?.|t/oc(`qD3$&pcc^sqGXg&]St@bU_@' );
define( 'LOGGED_IN_KEY',    '_ f L2~ #dEH@hIrs P)u5]`~Qekfh*>GKwm@w= >:<`:NDB43Lr<x1=!(mZ+~0s' );
define( 'NONCE_KEY',        'B +53GFI f9JwT@hXBK+^LBr/AZA,El)cM70FkUi$nKSdoL IDDX=CgvY]hm:(mh' );
define( 'AUTH_SALT',        '1+nrc^]NwBpQ>[!KH8[KggEmzSbqn0a{JUDdj4=GoVomJ,SuoP,n^4FWA5:^0*-9' );
define( 'SECURE_AUTH_SALT', 'i%0l=FWry%LgTY@1DiJB1Q<GY,m2/;.q5dDEX8R5&.%t|]/$PvrEK9UKl~tOf#L0' );
define( 'LOGGED_IN_SALT',   'B{[]u__5!3}YCenv}8eQdyzGG9HXVHABMr^|jWr2Y:][<%l~<g+/M^ZMW(kr]`/W' );
define( 'NONCE_SALT',       ')iF0sV/6^UwE#V8kQXy-SDX!jl Uv2u?U0z^z.53@<.opfI:JvNhvhnLk/Xp5b]8' );

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
