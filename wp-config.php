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
define('DB_NAME', 'dr');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '%?/sLN6v*{D*9,xBmqKO1;M,,Cw69x%]1>L`6z!U4U?KzcRiB0J<X,rq)hj#ktt0');
define('SECURE_AUTH_KEY',  '!&r@y>S,((y7s|[@Y}%I20^z,/.Uy1#x5c5) `?x@]{s$GqZFe=UAb3rmv(fJ98h');
define('LOGGED_IN_KEY',    '%O5YjmNX,[J@^:G0mspK2$S+X1}g1DIC7vf2)+*uvR`l?wc{L`8EvsTXsHjl%SR2');
define('NONCE_KEY',        'q h8 e$S/Jx;_Luk{0-t+$awDe Th;.8H5^Qx9@F4$NwnolW8AKXc-WS6a.g qpP');
define('AUTH_SALT',        'dw,61B?+uzeoVb3!4O0y]g.kS`%OLbB^j?P4oSd( cu?c0(L4m-E#Xtc_sK-O+e>');
define('SECURE_AUTH_SALT', '*J ]3t 3]MnANnYZoopiw>c_VPB5X,zx>+rJ<_Dh4jsG1Sg}Lnq<{&SobvkLeIc9');
define('LOGGED_IN_SALT',   'o]>.NvY3;:ru:!M)Y836<mV?IcG%x/nrsq_:2ld.W7/gq+M-]p18ygP&~g|teqo#');
define('NONCE_SALT',       '?bPx;0u9|-0{42X%q1UT<ug0u`_rwF-[7O71v) 6{9Ir<IDS_RDq2}OtsgC<,kpj');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
