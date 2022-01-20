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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '36bftlO5mfj8wvxNadQrxsu/ooTI/doNkcx828h/KYDwMpLRnoBW1Roq4ZKHVpWfYNysZfHhXrLg88U47RjU9Q==');
define('SECURE_AUTH_KEY',  'q/qHzqS/E0bYuAHDRspc31Q/vRwceXIN+8JVpMaXCildVrw+06T3Ht02YstxflfXa1WiR8eZ8XPIOTezCIuDOQ==');
define('LOGGED_IN_KEY',    'SpsWPdxtKp4hsPl4lNdpagvwB27tHuunEWPYEqlyMTU7qX/4kNHF+1DmQZLno2f/fBpc9ZUb5h2AYZW9yRb7VA==');
define('NONCE_KEY',        '+EDHfbAXS5/hQuigw2fAPyoQ38TxDI9VGBapR9++M94jYHraVHbS50KkUBDMt7R8aWTHBzJjGuDicosVvxIifQ==');
define('AUTH_SALT',        'UVBEaRlyacMeeLjJy0cBE4oW6McOV7NOSV8ApQTDpAodC1nG3qNiL5D2mmKqVpmi6PtRIq0Uu2Q8xL1qIPpkrw==');
define('SECURE_AUTH_SALT', 'X4zcqTVjUgnjHG/LbEHwWKbSULHbAjlCFPU8ZygVjTZgDnuYymXK8SB4pDX9tmQ8Xn+LGKWX7K6yzYSWba0cOg==');
define('LOGGED_IN_SALT',   'isV0XCWo5y/TjRUw6ReJt6i1ZLqLq3upVVgllC0oLpFGZfuWoH4M+qIC6y4CzuUx/OM4Xy1ifBlEj8yMC2+5pg==');
define('NONCE_SALT',       'UuJKvhShe58qb6b8dElyLgZu/PrJBXW7Y81gLdycr5xk7bK4DBbrOszRiO+nGyZBYa2frhcjSXmc7ejC+urgCw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
