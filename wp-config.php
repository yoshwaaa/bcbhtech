<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('DB_NAME', 'NADA'
/** MySQL database username */
define('DB_USER', 'NOPE');

/** MySQL database password */
define('DB_PASSWORD', 'NOTGONNAHAPPEN');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '^@69GA+/@K~<:Y9 KGdthw0KUeO4o&!OCj@xWQd?T.eCsRGUxZ{q]U_8zVuLD2D}');
define('SECURE_AUTH_KEY',  'r>zTs%&Nl~<$Cslkb6.(A8ONf@{EjH@1I>WSsmUXemnZy{MMH>V]$JUvhaXsP-`S');
define('LOGGED_IN_KEY',    'hvmf}3eNzjb*(0Oif{YhY rff1VGQHWxkUMzMZ&%J?+nAsTEhNOU<8%zFEtBDVe:');
define('NONCE_KEY',        '*xcmH.|RtVw9,M09^^eIlATkxMx>A_=u1JF{);59PZ 6IJYes9pM!)r}Cb1pf.o@');
define('AUTH_SALT',        'Gx2>W53Yq3g-ENL2Ef<4XJ.&>`[rNp]NMtcR$n_):7l^{9r?@xAJusb+;53o6?5#');
define('SECURE_AUTH_SALT', 'Yi3LE/~9gpRQh.2|[%pLV|O`@Zw)j@`$4`xcqS;(./<NqY-d&p.M8f3`~g:.t=dG');
define('LOGGED_IN_SALT',   ' >PA0bD[ak3:$nBAV*xZkoXaB~dxL`i!IDMvwp|LA:OVSd-Wo9|7PL{kAu{Gp,Fv');
define('NONCE_SALT',       '/+Hg6[d|z@8KdUt>m/KKBSC:_[|pNzRY=b%@DU4fMF:8:E}WQvqTRBF|uW_Bvd~1');

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
