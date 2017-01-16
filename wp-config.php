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
define('DB_NAME', 'devtools2rezende');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         ']{ou`qri|Z:7./281DPB7m=TgmFBLt DnFdJ>v91~`bqW7>HivdPR6}CZr$L2s%C');
define('SECURE_AUTH_KEY',  '_[akHc|d6rDmk$l!M]NTIZK|tonqD5C>K?&XAms&FgLT};b1cV{5*e*u2uQf;C;f');
define('LOGGED_IN_KEY',    '6$#ekKXdi9@TlFppiPp8<`lxwTpLcE*.= OJ$lDt[*d)M T[zq/N_`i/N=C=9hnv');
define('NONCE_KEY',        'RUQ`ZS7rr4u2|g&J8+hvd,.!tkRYHAfjC$C}Jnp|ipA]Oi2oyl1k;?G6u#)R):}r');
define('AUTH_SALT',        '[^=oIG&hULHan#r6.+@X?#rx|Aq5T+s%Q>~=C TzS3BhBaUxYzUd2(E$,2J$J50?');
define('SECURE_AUTH_SALT', 'noj&#3Y@o)),*0sc[_~,5Nx9W2#$<7pv*aJ&!8{!LcRwc4@ODV0nece)2fI3V0ht');
define('LOGGED_IN_SALT',   'B;JBo%VnI]6C9<tsHNf%f$@n?m!8=--L|ZM{sUjlP0ob UUk`mcK/oCP[W~.0Ozd');
define('NONCE_SALT',       '?Purb}8}04,r@0-o8W^NcMu70s/D6AU {kv+p_s%A@mSM[V?iA:%Sst`SAvf*)&{');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
