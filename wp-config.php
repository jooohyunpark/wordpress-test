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
define('AUTH_KEY',         '+rbtGawCnDfwn7E9y89vsXYUWPhyI+L+3ZPYz/hSqredUt0iVFZuX9e5s5iF9//M3ILAT+Tga7Q57DpmqoO1gQ==');
define('SECURE_AUTH_KEY',  'luUXvVmQG9rE3Qz04f0os1GeXqwYYvfQ4w25M78zS0TXsMu6tETrH99ysu1pnXHj6yVak60hQeqbKx3Fm0uimA==');
define('LOGGED_IN_KEY',    'WtBxegkfMb8eFVH4BoiXEx6xL+ffrIn3TGMnF83lKRkRuPIpyrE+qHc8jPll8B3OHXP5xY9W7ZG+TOKvhd44Bg==');
define('NONCE_KEY',        'aW+e9jX7Y5cnMT79mfnmn81PvF1w0jU+sf2LMbsDtomgWAKY8wqgQD/rp0i+6XqagSTltWMlizYmQgVQH1ELow==');
define('AUTH_SALT',        'aQ15i4XG7WDrqDxV01Ng1Te3uj4T2SmAoajjB4J6L61EU9+SqDIbvslX7Qy/57DB64Opphrs0ebqumdu3ebDXQ==');
define('SECURE_AUTH_SALT', 'LZ5l70awXihksW2Av6SQ0Ok5KpufebUXy9maPKryw7w4e77k2n39HlRuChMiBDCsr0R3SFZzidGBCcqm3Jf70g==');
define('LOGGED_IN_SALT',   'ssqF9gfnGP1BNQ1LdrtpkQx/w+IROy3ybL3noIRcGqUtFnUami9T8ihm44mzniiRDmV4orkv1EMoMSJAvZzewA==');
define('NONCE_SALT',       'liXg7pWCGqyW1r3ZiHKoNqWbjzOleiMLHoBBP3ri+jkE8z5DCwirYw0yeFAJ1KKxDOPcHda4+w16No/E7opKZA==');

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
