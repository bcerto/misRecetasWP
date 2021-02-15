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
define('AUTH_KEY',         'CZwcSc446BieAO2PuVRSpxzwuRGsWEjhd6PvEvlkuX97nvyO2RC08EdE7JuFd9zJ2sAkMIA9S0YPj2O9G4LLrw==');
define('SECURE_AUTH_KEY',  '+eQxn5MjIWWy7KXVoVjjWIDQVVaKWtYcOX6iD8TBFlE6zyz5eFw1ZPsMPgYDAjZo79keK4Tt7kgQCPZPGQkXgQ==');
define('LOGGED_IN_KEY',    'D/bcFK86EkvE6i2mLQjnP+QngUyhEkGGII7LTaHs3fHoOJ80Gf2VS2GsVF+wFrtWLDhR8AaxfWJQxLgz+gvVdA==');
define('NONCE_KEY',        'Sq3/Xs1y5hjBVmKiqyrPTt7/q+uh/W5SjKJreW+ZgajD3ZvUixR0j+lUBjwklKqU/79oOcZRW1H7UArxse/tBw==');
define('AUTH_SALT',        'O/aWIiDgrQywPPaV6LyDWecSgRNdhCJnUAuQB2qylHzgqD3CSM4YH1HLZiRTofm7Nqf6/faiF7FAL145cL28Ag==');
define('SECURE_AUTH_SALT', 'SL/pkVsS5kjW5g+Dc0IFFlwFNN3PQWzRvpvhmM8FABX2Emd/eGtcUpsrXi20ZYKd3kZZdzpSRWXNcD3MRWCiGQ==');
define('LOGGED_IN_SALT',   '3kcpOSYGnmow72WkpVDUbtJ1/HGMWkKsJZNkQH/YbTGmqB5FTbnrff9cdc/lG1TzFXshoz+AuGrlS5U5FBRhnA==');
define('NONCE_SALT',       'n6gjg0uvIy6ifC26x1kuIFPj9mFEQzWHD6ca2FdB60bWYvRBsDGQdKeSbewBz5457q7+nn1WZUlbo7p9iPRjlQ==');

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
