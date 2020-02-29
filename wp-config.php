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
define( 'DB_NAME', 'gxpsvdmt_ninjas' );

/** MySQL database username */
define( 'DB_USER', 'gxpsvdmt_ninjas' );

/** MySQL database password */
define( 'DB_PASSWORD', ']p72]SAvP5' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'fd0lhddjzfaq2eoeynbajmivdteiorzflsylsyovyyiy9vkkbkot68tnqb5b5hlv' );
define( 'SECURE_AUTH_KEY',  'c6ku9tbv2kj5jxtsooepgfy99oizorsdxa5qvkq9fyagyjtg8dxdwlfer1u33owy' );
define( 'LOGGED_IN_KEY',    '0s6eucn0pnfcw0ggfuitopo7vadoc81tshrbegyt46ioicac7ymqt023aka6fc6r' );
define( 'NONCE_KEY',        'awpot2022ebeoyatlaubvxqt6mxfvebmczvth4cy40wd5mlocpsq0kaddqtdmsej' );
define( 'AUTH_SALT',        'vdpvkvvbhksutvokulwuv1jasmdkhzrhqfso2ijkjxzattfersotbgqxadaoklyu' );
define( 'SECURE_AUTH_SALT', 'xngwiddsfwlkmx30ktvnvjjggbnenehh88hndxgtabd2h2ufhvsqftv94irzbim1' );
define( 'LOGGED_IN_SALT',   '5sgnhqln7u5icixx7o2nwajjoimcfozmqyzgctvxolpkholharrtz1zsbcd2mgtg' );
define( 'NONCE_SALT',       'j9987anksb3utpdzovuruufo2jtpcannbaqdfmqg6ptubey6rn5mcpjqccm9vlg7' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp3nnckk_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
