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
define('DB_NAME', 'wanshixing');

/** MySQL database username */
define('DB_USER', 'wanshixing');

/** MySQL database password */
define('DB_PASSWORD', 'iRZ70gpZX^Hy');

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
define('AUTH_KEY',         'V5IIb82-e1V)M?N?JneHHM%7)_<SDh~GT3pAm,Ea@W2a<r>5cE}%Nl(Su*wqf6fc');
define('SECURE_AUTH_KEY',  '8~xH &s34xlfR[@#&YA%]6PPth]DJ7 RCP0LFS*5L>K[HeymCTje-:+vyj?IT:H,');
define('LOGGED_IN_KEY',    'PExvNp8otiM.UO]OJYe8Uy:`3F|ZOz0}OY+(.0F=U*Wf2>h&Q>mB9$c1epBa3iXD');
define('NONCE_KEY',        '%aHBs|>w17sy.Tfy[IQ.&S}kw%P}D&,!8.?2/}vX+}O5c/dJ)>Sg^.mlX_^itE@+');
define('AUTH_SALT',        ';-RTR7p|1o}5JxM3.Th:Ze_uvipRUOc#o !NcqrVv#4R2R5X0#J}862V[OYkD@om');
define('SECURE_AUTH_SALT', '2K:&32Ff`jXC<@wy7<%J=36{S/YaZGo_T)i]LBJ;3=!sEr2/YW|0XV+5vF*UYw#6');
define('LOGGED_IN_SALT',   '@v)LYT6G>;1:StQ:i%4I{WV0A$3M{S:R)R|T$]^oYa,0f&H[hTO2I_$ex>~;-8Cf');
define('NONCE_SALT',       'F_}&I]?5~walpfwKS|XjOEjYx<eV.!(p=6{]d=s|n(^/2A#]?HvRxpn%V}#d]Pfe');

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
