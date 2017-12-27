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
define('DB_NAME', 'myblog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Pipl?123');

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
define('AUTH_KEY',         '|rPu.>/v+E&`w~ghUGTxz)yd/0PISX2qyaIy:~F;+r5tg18!q}eU^*WBR=V9}L[t');
define('SECURE_AUTH_KEY',  'ooi$$y9Ek[IFm|CZJhp0X6Mfj0snLlUAUvS6OcJ@d,9{/ 5nZ0({lyn[]hW.VYVv');
define('LOGGED_IN_KEY',    '.& ;E6qKh{3K%a5yCQ &nm``uw_*Z0CJ81$&f7>>rCe9$_15<u=J.tNpxcGo<ILH');
define('NONCE_KEY',        '1,#!+m[L($EY)47)9SLSI/s*SE`,UaP)=yuBthOdaO2(U+i-T&#As=&9^(sg*k0+');
define('AUTH_SALT',        'lZ#B_yj4{1!h:7=vN7 X~2q uMH|{phPisG7In mqNZeO!kuEN9KzxKhpK-F&#.I');
define('SECURE_AUTH_SALT', '-r C~1Zp`OT;q)!LjzszA[)% v5`teWa#P=5*x&;2@J*}X%[N:K0gq!U3sE2*D#t');
define('LOGGED_IN_SALT',   'sSNaA+)LkrugY.1_F@T]!z;R(ZOlC{WWH3_x@Fv#M@9[hBm0FYc$+OUl(o(BP@J?');
define('NONCE_SALT',       'Uv&aIU(&Hq<aN=1R&rQJQ%d3*jY]Nz.qdSVzE.rH<f>&V KF[^)!x!Isx]sR`{m#');

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

