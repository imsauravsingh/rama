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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'EvjuZ)=B[XZ?gFr-wYY`tNRKPe2w}r9xYBJ8Yi-.)7R~&.c0(NHgT@~EK+it7`GI');
define('SECURE_AUTH_KEY',  'R6AZe=72/vMHkJ*.NnQ}~g$kx[p$IJf=tMNX|:Y4JLG&ih.n!QCv7F3OU2fR3=%d');
define('LOGGED_IN_KEY',    'y|/;}PcEAd&|I[geAOrh`$Yx,s#[0E].[A`TiC!wze86;H+{%I5>39`D|wmN@3jP');
define('NONCE_KEY',        ',8M:rs=P#@UK>:1n8;hpE*%22pHBLj4-E>{/Q}GfCH45S-nu!XnH=GKuM}|&!:_C');
define('AUTH_SALT',        '`; M~`f(&}{LeEyL:*od2aS%RN<[Lwm ]J.|q2U$n>4mt!G0tMW&SL+?y]0Zc6o;');
define('SECURE_AUTH_SALT', 'A^}fB$8fZ7FH{{^8},%-F&|_fMdgX3x7QcVt+O;Tx^nm&4hXOXCAsrS)9j(g)fnZ');
define('LOGGED_IN_SALT',   'E>E7lJH?y)eWoC$` pod>f8W]vti/~cGbU?$3^F2t/RFJqp():/{-}2bJgixUQ}?');
define('NONCE_SALT',       'HKcKe6h%:]@*6`s+,{6Ef<T~Cf-kM5qZ.6A[3*^DH0H_fW&9|/G7t8t;=mJ6*!0M');

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
define(‘ALLOW_UNFILTERED_UPLOADS’, true);


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
