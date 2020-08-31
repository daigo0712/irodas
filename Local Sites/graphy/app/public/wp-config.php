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
 * @link https://codex.wordpress.org/Editing_wp-config.php
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
define('AUTH_KEY',         '81tqm7GSeWL3ssfPEJqPxDHFtHwUpxkSPoZHnlKUL5v7twQiOTCjiljO2+uhuunZ7crEe//FYi0nSKBdx2uOIA==');
define('SECURE_AUTH_KEY',  'j5IE59cQ5Z2WoTOchm69qPSGsD1cPcCKy2dgb8aootB6vtyVcTf+YtzOZHXYqfhBVtSujZOnEZNv6OXycHUYRw==');
define('LOGGED_IN_KEY',    'pMiR4doKCzHtnMGIQT7AC9nRcz1QhpGLBJE2xRqh1T+njnybbN51ft5iJSAAV1jhWY/VJ8AT2D40hHR2URtg0g==');
define('NONCE_KEY',        'DoUNsVttYD3v36wKcg3+hx677tgb9x/SZiedorXiEaDd3b2E6Td6poRNIVmM2HZ8EMe+BvVDRxoEQYwoxuGo4A==');
define('AUTH_SALT',        'U0zWnxnbKOEAmIr24369qmBD4C82DR1lT7iO9k3uFzppmXPOfPXZVzQKmf4Q8+edEFVQoVs+wIzXPEUsIIggtQ==');
define('SECURE_AUTH_SALT', 'kDe/5MEEMSddSo6cBnn7OVvw8ITMJRA1VsRupFZFA8NDftepq7uZEmfdAh6hdU4Re3h6NcWDi/5tdicHKrmMxQ==');
define('LOGGED_IN_SALT',   'k/SEIAI9nm8RoWpVULr4Hp5Vik75xvCxVw9obIgQsx9tt8wCmVMg4TuL25juFvfuth/LzwERXzlAxa5I26iApg==');
define('NONCE_SALT',       '5pp4KWzmtpydHF/S39u3rpFMKk49gCIX81hKbLYXCoTMqF+owdioqplLahtZaQooAmgw21bwdZArJJW/RwvcKg==');

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
