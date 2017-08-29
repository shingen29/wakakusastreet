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

// ** MySQL settings ** //
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
define('AUTH_KEY',         'l7vfEgjKdWC0/ohEPbfB1wIg5gGN97A8Vbf3X2+dnTSvle8M+xXQ3J/iWj+/qVXbIWkDY/COA2LpoofYEwsZZA==');
define('SECURE_AUTH_KEY',  'itiSsROrqQvd6v4L1pitwyVBA7pnnV5qW0IDNpCu0slDuaVRu/rtH9IVI6yA13SduVO7lY6uBe6dRPG7ryccrQ==');
define('LOGGED_IN_KEY',    'cjM9OrIbAAa73pJvjWzOjAfVd3cdsLN5rZTN/2Lp5/BLsXvJtRFraoSz07qvLKRBYimwqh53I0JlYr9z9NDnog==');
define('NONCE_KEY',        'pKljZ5ROcGdnU2anvZENTrlLswJJ5e5S7Z5Yg/mk4qUgodRsl7E0+zMXLmVuthth5aG/ii81eVrYTxhX0ddpoQ==');
define('AUTH_SALT',        'XCBI1PPr2RRwld8pPlNPSqRLQ+ZxzzZ4/prXgiAo2gnDNIfaCOqzyNEaWgmYoqLww4Qqxl+NEavQWdbo3N6rjQ==');
define('SECURE_AUTH_SALT', 'y9N+qEzQM3n4e58/QB03wccexya4Idw+8LpAHXO3umhHUyRtVc1wWa0Ysr8oXXLPtEEC6ivTO2GTOij3uIiufQ==');
define('LOGGED_IN_SALT',   'TCjTzu41VKz94hAqb1YjMxVudnxAkJuECRrsEiKSTPjz+d87p2RAJsWxaNV+UZvHvVgg/ESjD/oxcB7qKryvzA==');
define('NONCE_SALT',       'aJ1Yfm2a26jdfDLgFr4A2PVWmma7QdHXoJOla2O1tOKPcljjX+E38YGzh8GJ4Zgw7K8i4CUVy81G2wzWxl+96w==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
