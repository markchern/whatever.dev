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
define('DB_NAME', 'whateverDBtl799');

/** MySQL database username */
define('DB_USER', 'whateverDBtl799');

/** MySQL database password */
define('DB_PASSWORD', 'Vx82umdUpg');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'D5#aLE;mXeP<x*2.]+PD7<fQTEyjmy{*<yM6^UFM7rbjX{$,yM70@RBJ}gnUYjQ^');
define('SECURE_AUTH_KEY',  'la:9#[w_S9;A.TeLP6HtampW#2*~]xH;9+MXEEP6mTeiPX<ux.qA<2,q$Q37Ibn');
define('LOGGED_IN_KEY',    'f^}3$MYF0C>YgNRYFvcknUc}z,,r@N0B1-|V8KN0CsVgkNZ[w@!ovG}_[wGS58K:d');
define('NONCE_KEY',        '6+mpSe;+_yfm6.{+.TAIL2AqXeiPX<u+rXfy,<u$M3AE{3jQXbIP^jujQY>vz^n');
define('AUTH_SALT',        '|1Ghlwd[5_|s-K19;+#S9LL2DpWihOa#t~_pxH;5{xHP6AH;emTWeL+<tt*m2D]^<');
define('SECURE_AUTH_SALT', '@sC[44!}cFRU8JvcoZGR~lwwdo8!:1-|V8KJ0CoVgW9K-dptWh1-#[s~O59G:dlSH');
define('LOGGED_IN_SALT',   '},B}BvcVgN@kwzg>4@NZFFR8kvcw~l5D[:-_S9GK18pVdhOV|s-pWi;+#]t~O5DH:');
define('NONCE_SALT',       '-oC[48|Vw~p_[-SC6#aLWH+pxi5#;~5{6*PbIL2EuXimT.;+*mxH]6{yITAEM3jPb');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
