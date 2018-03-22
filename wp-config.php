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
define('DB_PASSWORD', '');

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
// define('AUTH_KEY',         'put your unique phrase here');
// define('SECURE_AUTH_KEY',  'put your unique phrase here');
// define('LOGGED_IN_KEY',    'put your unique phrase here');
// define('NONCE_KEY',        'put your unique phrase here');
// define('AUTH_SALT',        'put your unique phrase here');
// define('SECURE_AUTH_SALT', 'put your unique phrase here');
// define('LOGGED_IN_SALT',   'put your unique phrase here');
// define('NONCE_SALT',       'put your unique phrase here');

define('AUTH_KEY',         'QyG{OSm,Q(0EI(Z[`XNyG>@<}&Ft^#YJr`n 26tp@DFq{ZNg99.d)Zqa#x.:{0z$');
define('SECURE_AUTH_KEY',  'C0B&5Q4Cr0!-RbY|UI|+b2k0?&P.3]eI(FTY4usAGMhL3*vs^1mYT3fowKu{*<_3');
define('LOGGED_IN_KEY',    'O@~il-us;|8s6gbrW,ve6?$bqm^T+q|]&IU*Y+-F#Yk<*#zXitc1SqADXq9Ssa+.');
define('NONCE_KEY',        ']PiJr8)BYkF#_!Pm6:0-0Q7(rTZb>fC{A__g;nqw3+J|eG.r#maAvkh(Ia9ubW(-');
define('AUTH_SALT',        '[:c|0*5;V08x`:H&# XS8rY).dZ+W&a*{b6C8CWqA)Hy.cN18_Fb^R;j8-i%#vd.');
define('SECURE_AUTH_SALT', 'j2T7qcUo&mKrm5AC9,}1Q+6,LLf4mLg+P@EK-vDE]|8ld;x)z{YJd1zK9_-$rGwy');
define('LOGGED_IN_SALT',   'Z8>%P(e5d%/zl7&`l+$X=m^MYeF9/~UN:;5CrZ9hlfdDafvv^b2p_}!q7BM!AvxF');
define('NONCE_SALT',       'g$;I*(@OK Bbm~3k]R/>-$,gn-jPP6G2}ECBQ7E5<q0OIv0P-^lHG~z$-,J%%AA&');


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
