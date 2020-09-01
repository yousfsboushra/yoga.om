<?php
if(file_exists(__DIR__ . "/.env")){
	require(__DIR__ . '/vendor/autoload.php');
	$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
	$dotenv->load();
}
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
define( 'DB_NAME', $_SERVER['DB_NAME']);

/** MySQL database username */
define( 'DB_USER', $_SERVER['DB_USER']);

/** MySQL database password */
define( 'DB_PASSWORD', $_SERVER['DB_PASSWORD']);

/** MySQL hostname */
define( 'DB_HOST', $_SERVER['DB_HOST']);

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

$SiteUrl = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['SERVER_NAME'];
define( 'WP_HOME', $SiteUrl);
define( 'WP_SITEURL', $SiteUrl);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Yc2ZBlK59BXg,Ms{!Nxw>xv<G]oKPpnZr8v^1psTc>>Ki3HgG&gT:h^eSR+n2,^o' );
define( 'SECURE_AUTH_KEY',  '1X/%u_~-KC3K#O.#8S#mF/0q_dal- &!F.6Ei0e-~Fk#8_#(w>IQ]e):{NvazrX,' );
define( 'LOGGED_IN_KEY',    'Ua.]EbKYYWwBp}aE)1]mg`Prm;oxS1!A)jpzo~bdz.tVR]D~dEIXN2(_n8ujTg;v' );
define( 'NONCE_KEY',        '{_!ObY&oYjat!5tpTa`h4qRgV8qzQH5@-z:v=35@(mg1Zu0qnVPX+zD@t#,<&1v9' );
define( 'AUTH_SALT',        'CefX9Hbt7B$4oy%fl=}wD_dCLfAD<53_Ru^ 5lcP?xnVz`agYxjrp1RZL_]d*npb' );
define( 'SECURE_AUTH_SALT', '!zy yiHSb;2tXoKb>SW.&ouV/s<(grTnkx5Ra}#dl0;PL.zAJ<((PwI(z4[[+4n(' );
define( 'LOGGED_IN_SALT',   'l ;_.d4I1BCqPeh>))ERIV)6T`<IjMg?fG}zZ0qo7>/CeTEG<zt77p:;wCglO-<z' );
define( 'NONCE_SALT',       '~/Z9([09AoJrFBg.ybZcrXyT.i/E0;ONUy6}p,fCGJPmat,<3Hvaiy=$3&t7+oZP' );

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
