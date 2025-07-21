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
define( 'DB_NAME', 'concord' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'beftq9od2x9e2n0ae8k5wzyth6f60ey1d3ga1ktmdyotvxmwm2ufkhxcjaq3iawm' );
define( 'SECURE_AUTH_KEY',  'w4rg4hrxtyrfp0rvzb3ikd9upqa8tg1szc1uolys1sfifaiw7lxflyz3llonmlky' );
define( 'LOGGED_IN_KEY',    'odz4lh5wvvsvxdqghcnc92i8qxpsktyd997hv2rrhmfl5fsh4escfaw6yvxo6hr4' );
define( 'NONCE_KEY',        '6zuanltzm4bw8olnbolypgzqar2rq33woavh3c2xdz7kjzyzfw1p9v1mjqc7phtc' );
define( 'AUTH_SALT',        'som0utwahwtdng0jooqdfsbnjmj1wfmeexrr3a6gpdwgkwzswumbqgljdkf2qhve' );
define( 'SECURE_AUTH_SALT', 'tytkjyxxqaxolmhfu87aecwz2kgborcdwr6lvl9ochb0k6y0tpokc1mpxwrevonb' );
define( 'LOGGED_IN_SALT',   'fkmeicujjyonmsfqwl1ak3uj3akejmllljpkxmoduqtvvbmaqqiggaztpmnfmopm' );
define( 'NONCE_SALT',       'wt0eeu6fyasiai6jd09imrft2zpc67hpgasyc9uuxaompguzddf7wscwrhyelp7d' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
