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
define('AUTH_KEY',         'kkC8gA64NARHtLu1xkHe6qbGcQSPJI4B0lXkYhsdIsPS4q1/kMxJH1vc6zeq/T8hNzwI/ZagDyV5uRH6dpGbkQ==');
define('SECURE_AUTH_KEY',  'PU/+6QvqwN/Dx6u4qdrRUBJicOtyl0R54sN5U3HFVvgyAX5VvOKDDlyr7xDhhukV7xt0/noDUji2xFGOmsWH5Q==');
define('LOGGED_IN_KEY',    '9HdnVngGOaugDoQl3EWTy8QStLc5LBUwSOFBpSo72GL+AFKmF5ar8xq0sFRdHqlbSLCncXE6AxReu5tpdxPF/Q==');
define('NONCE_KEY',        '7e8XWIOv9MDF5Qi/G3/BCF0441uFUDNyTnWIoUCQhIBMcME0a82mP8Yrlby6Oj+AKKQmwQGV2owvOQFQdxu2Yg==');
define('AUTH_SALT',        '3WnLsXDEaPydWFsUesibWS/slvM0WxTFlrodaKgsYPH50ZokGAX+MEfTEW4yQG0K8nuFB1CXgiG6QwzzXVBeCA==');
define('SECURE_AUTH_SALT', '55+1+nWYC4nledNYdAW4aEqjS6Fw3SOrKYBcI8pcywpiafDZVbAEqkUtUhyo14wwCuRXhU8O//FK8X0W3EAq8Q==');
define('LOGGED_IN_SALT',   '/qSr+sJw7UZqqT4iZToI30nxEQfHtsrvM/KzT4iVpYzlMiTUaecRYRP9HH0UfgcNyeKcYuaxAawzHV9mLmaVSw==');
define('NONCE_SALT',       'ckHXpioaJKL1GeF9ZX+9sX1qyDaF57ctu1Xw9jzQD2bOCWpQsSqYg1NDam+Lw+KTIXlHNGlzJ+b3ilxQhOnh7g==');

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
