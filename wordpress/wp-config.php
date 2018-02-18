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
define('DB_USER', 'development');

/** MySQL database password */
define('DB_PASSWORD', 'development');

/** MySQL hostname */
define('DB_HOST', 'db');

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
define('AUTH_KEY',         '%,Qk6lO9<*ZDf>_prxGA(tfg3x=frtE6;4c9nsvNiX9 F6Sp`MXv(voQq5};@Q{+');
define('SECURE_AUTH_KEY',  'V[V8Z|[.qTk3A2`~yUs7381>64U$SgPO$zqG9zJh8cShqv%pN_A13;Cp#B0RH&8G');
define('LOGGED_IN_KEY',    '_Djs;f?Y3b:|<!~{b-IOCu#pSG:yo4TnCgAT,Q;BI3sVZ8K9KXLC<aL}PZIF|O}!');
define('NONCE_KEY',        'Zs8aVB+BC2; FBIDlu.%4Qe8,VHYZ*lD<4?*@8_,vS[)uBv>s:{~fh3 EcS1&wEe');
define('AUTH_SALT',        'u$VO /.<OIB$~y$/C<=!!Y(S5Q/o49!I.I)OgV.<6ciqcOkPMYJ4$fK7ZP4%U([K');
define('SECURE_AUTH_SALT', 'jW21.;[P/XcHKg=]*idbo}Le>m#g8^[(d?O8VN A2k&7pF9!h?%)r1[d2W[Du8:]');
define('LOGGED_IN_SALT',   'KE4Z;_DC>j?4`0b(|$uFS%]<Vp%0=)>,6a?5gF+N2rMWx`GAYz}(({}sG22@|jJa');
define('NONCE_SALT',       '1P=t2~*rE&`]hpfWs x9H.JdI8voI>m`{,&@wdb% OEqfo{iA&c0o:*E?GALnM0w');

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
