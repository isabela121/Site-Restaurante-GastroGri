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
define('DB_NAME', 'restaurante');

/** MySQL database username */
define('DB_USER', 'restaurante');

/** MySQL database password */
define('DB_PASSWORD', 'CRF8jjXQ3A5GA9G5');

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
define('AUTH_KEY',         'VkRT^fWIAO^)g=43koxy)mT$Jg_Zb(*18U`%=3F%izvPC#y/|`l gDa<bva0cu+<');
define('SECURE_AUTH_KEY',  '!a+5!O0dk;]cQ/0*s;LUnc7!Xzr,|5Z||y0DS(Zl5BqRh?{#(Tjy*2)30U$nEf^q');
define('LOGGED_IN_KEY',    '2$z!,~>B}js%OK]%?HWo^b9&I@+giMBtQ7. Y#ufxzS3:_`G}D^+gDYT_5,>f`&W');
define('NONCE_KEY',        'Vdlo8l!#M[9S0_/lOE5PV__8{I/h7<@m^^mGoN3*myUHi6BylO~b4b*2]4,GO_t3');
define('AUTH_SALT',        'r}PG(,^&(8~-p8j,joav).%{?ukW?YZf>!Y*4%T$.,6QnJuVkvZ/L_@K*n+QgpXa');
define('SECURE_AUTH_SALT', '9f?wk`un;#afCet>r.5[$xSzE,CD<wL7-t6gB0L/c]Cm}9#b>9%<+:*#FVat!)Z%');
define('LOGGED_IN_SALT',   '4T4.Yi>(BG1ig99~oX9sZJ>6Ir;hm8Q!@v;h}M:8_}_2p#.IxTu/P]ApSnu{^i1W');
define('NONCE_SALT',       'JDmeAMqu/8)>ti 0p/~cQ?D3rX=xyBHn]f7F5 7CnNX4QV!mrRB&4sl9,Z<CM5_$');

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
