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
define( 'DB_NAME', 'aps-test-for-wp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'Q1dA8XHqmRTbmBzPjaUn2tHU28y0lGXBfhqJVn2CS59dOkcVUVOjX6e9OXwYWEG6' );
define( 'SECURE_AUTH_KEY',  'zF00XP6Vdk6OvsviAfIaKolSp5z8n4vc4e4cQwGcyoV3EXMez57nqTFD3aKEMD7L' );
define( 'LOGGED_IN_KEY',    'N3DzqmZ5dhZUjNHMEOF49lz09Q7P0anbfqqprCfPc1oHQllDdB1QjT5tls5GC4lm' );
define( 'NONCE_KEY',        'iScDuHs7H0rm57ZSL3BfP978lQEK27fHaYDgBbyyRQyvLBM7jNLApaGuQDXPDY5D' );
define( 'AUTH_SALT',        'ekxG87K5Vdn0AuyIbYhDAbR5UK9LdTsmRlGliTzYyF1kxAvgxSAYfvWtMRw3h2bG' );
define( 'SECURE_AUTH_SALT', '88bAXdlD4XxLAqFjI6Qg3tsj9o4DwgkAIIlobJc0fMpZs3saSf8ph8OJeeQFxCxu' );
define( 'LOGGED_IN_SALT',   'fyz4ZvGRBWP9J8DTQrQRFKLpH8d8rgyBTZCzf5miYLYeJBq3JqQEBDcQE49BhZZk' );
define( 'NONCE_SALT',       'J8IipUjqKas4mdakWiWxUDxU6lXZmu8BBB9pFLELHFhKzz3eTWH8X00QLDefAkG5' );

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
