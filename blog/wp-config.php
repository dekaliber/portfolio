<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'db99751_wp');

/** MySQL database username */
define('DB_USER', '1clk_wp_uGYZL8A');

/** MySQL database password */
define('DB_PASSWORD', 'cmUJxlHo');

/** MySQL hostname */
define('DB_HOST', $_ENV{DATABASE_SERVER});

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'ptw4rNqP shtLbO2F urgEaVp6 nIo4e5RW 2utebKUt');
define('SECURE_AUTH_KEY',  'IYC1l2QS JJlC1Vzv O3cpF8EZ RIlEY6j5 v6MWXemB');
define('LOGGED_IN_KEY',    'pql7rlOF bKa5IC6h L4x28WLI 8GJlky2X DpRllyH4');
define('NONCE_KEY',        'O4dxzTGg mhJj42oa DRHhwNYe lkXYQLHl aMDY8tm5');
define('AUTH_SALT',        '88QfEp7v gaAeXSZN lmyOHnEa 6AIVdTcS vtCRigXF');
define('SECURE_AUTH_SALT', 'xaBEZKxh 61wmeZYs bmotxjFx NcuUgUJp x1ayfmiO');
define('LOGGED_IN_SALT',   'ROK5Jdwt tRj2FuGF csmPm6Dt cdXGSCFq MEpbRXhc');
define('NONCE_SALT',       'U8tZpZeN Jyk38KdF PyzJPZMx MXkTyjes 6cGleEzR');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
