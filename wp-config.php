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
define('DB_NAME', 'srf_tires');

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
define('AUTH_KEY',         'CADGdLdCuT$YfC9/EV`%?2.#HUrEwY:X}d(KlTZRGQD-}8w>6#w)qtLHV0m!k,_I');
define('SECURE_AUTH_KEY',  'cu5(_lI;fB+W/!R48rlFT1Md,S{cgrDoHyl92`DH/H?9MIEath9`)ondg)HSXv#P');
define('LOGGED_IN_KEY',    '&Cv, SO<=j+6|BXd>WK9-w0bs0J,OLsm?sw)bcXm^T}eh]K{a027@Y,z`Hg`.$pP');
define('NONCE_KEY',        ';s`kc@*c)FxI6I@F^+)OG0%HfivbX}dL>jZ4t!~>z27e?baMa&*N(AM<ICNI?O&W');
define('AUTH_SALT',        'AEhNQy>k4y)*U WA^IwYas7wp/=0KC8<$YA2y&oN~7}U^2ErRgxYu_]bh;BG;n.v');
define('SECURE_AUTH_SALT', 'RxNGG#Qsx|uS3(wU)?gno</0jjw,363!nhJ.6W(hPx~]XNZ1|*jkeZO?dWjzL.).');
define('LOGGED_IN_SALT',   '*,~DZy?+KPYbb6P(PNrWhU~S)JE@0rltwI}(Buz9(.T*E2`urh7C|{r&Z00{xRi.');
define('NONCE_SALT',       '=Ry IaUl4WYI9?#kv,1!A6-@oTH4[n%Gx9~.G@YYyYG!@+&e7dDK):dx.3uEmr~}');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'frs22_';

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
