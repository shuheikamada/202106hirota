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
define('DB_NAME', 'LAA0132369-hirotajp');

/** MySQL database username */
define('DB_USER', 'LAA0132369');

/** MySQL database password */
define('DB_PASSWORD', 'h5zub3fngplb');

/** MySQL hostname */
define('DB_HOST', 'mysql116.phy.lolipop.lan');

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
define('AUTH_KEY',         '-!#RpfByLuY.?98z6A*{Tg~#{$gZC?G;3k+30g4Q.BaGu,$5jW-DwgJ>jZbOH^OT');
define('SECURE_AUTH_KEY',  '`{_kLuF885)dhs{S=/edtFV9;>b-h8EVv/Mb1nu)RW(.]zMEHHv85jZ3n-#^R?t:');
define('LOGGED_IN_KEY',    '/j=Kji.(L5UjSKI8sZPI`YRraNnGdLS9l6k{>VN+f[PDOIpB&M5y:s8%Io}WqSXV');
define('NONCE_KEY',        'y:Z~H{#(k~QZuE@SKCQ_**}~Ex{Z/b{P|9z?YQ}IEY1a_.d7s^jzFMa.-&wXH.IV');
define('AUTH_SALT',        '`,8fNz9Nsx|iQQb_RP #=&TzprmWX>F&^?W<55Aml/H.V1FB7Q}Li`Gt~ ?h=yRL');
define('SECURE_AUTH_SALT', '22ZIjwy-/kPYD5 XzBkB5_>Yu%CMfBWCdAU:7Bt%G(n$x}a?%PFh8Z,4}STX}=Wg');
define('LOGGED_IN_SALT',   '<n:t>VU3Wb[zI(339ce`Z3Y#4AcsYWP::_)aY&UV)=3Lt^A;/Ui~6y{|:oGz+/JX');
define('NONCE_SALT',       'z^*fOo~((IC&j+^Vp_Tsy+PE~d)sovfsbCtK+p%Gl6}*xw*2^swxE1Ik/L]?.XI=');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp5_';

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

define('WP_MEMORY_LIMIT', '200M');
