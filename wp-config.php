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
define( 'DB_NAME', 'hublxrpn_wp651' );

/** Database username */
define( 'DB_USER', 'hublxrpn_wp651' );

/** Database password */
define( 'DB_PASSWORD', '.wG7S(6p21' );

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
define( 'AUTH_KEY',         'foc1gdxcoifivhn107kvxncrtz4u9eq5rd7wsgbixo03o5iabc4ascewtu6dfysq' );
define( 'SECURE_AUTH_KEY',  'clfqn9yofkkxfuo1qxfgnldbpfzrvk5dwbjvwgzol4qz6vyf148rrw3vievnttnf' );
define( 'LOGGED_IN_KEY',    '5rdheqko6azhowkk3whexd9raq7h9v4bid0dtubmfeootr874jzsd7zumyizuhzg' );
define( 'NONCE_KEY',        'zckbxto77rli31hzebbfzvtvlsyxtzquwhdo2sgd1ko5yrfrszwrccukoaqtamc2' );
define( 'AUTH_SALT',        'recof1e5pdqkcjge2iycxdsy8w48lhsuktrljisnedfpzyuujfhgaeloblrprd3s' );
define( 'SECURE_AUTH_SALT', 'l1lxmq8jqo6ywdfwtk1nw5gi3csnsnfnrprtmlfhlalvzaps8uwvkvchgc82qki4' );
define( 'LOGGED_IN_SALT',   'yczyajbhqpk1kprpr8nf7f47jrnrp0ybirwzrvxelbvfb9itflcjq8qk4mkhr8me' );
define( 'NONCE_SALT',       'xfjqqww3j6dpgvzlwjmicc4wlmd3lb6qaopqh6vaiqjrknmahowcz7wxe1cgkvq6' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp6b_';

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
