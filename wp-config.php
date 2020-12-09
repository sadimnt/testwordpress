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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'textwordpress_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'JH-nA!x^dzjI3R-PLrPO{IOC~|V$VRb.kb!+Di:w8<hJu&t}KT$T3KLV}C!QIVbl' );
define( 'SECURE_AUTH_KEY',  '@(;`KQ~Wq-joSb[62Vb-,g~j+xMy-JE*y74N3Q@-Gab^:b)23I[.+5`G)P9RJ0FV' );
define( 'LOGGED_IN_KEY',    'c%,h&}qDS/ncg%A:QR:[lS{i*6}jWsSB[Ew<3)xE.@C5},!ixy%%B[sAiD7c5pz?' );
define( 'NONCE_KEY',        'O N|^KV+u2k@ALR;f}Dvg_cj199`Tsu9enr~%-rHc|,94J^7].@p}x:!St3G?#(r' );
define( 'AUTH_SALT',        'WJ+{J9^2<RUV:sN^lMG~RLy-cC!iaJa=HV2eBh]bXzAIywFu(Me;52:NyQPFxZzF' );
define( 'SECURE_AUTH_SALT', 'ep{r&?lzAfv ,{Slu]/PwX_@C4wxsohC?Wn!h}1H}b-1~%/{ji #[$2?DT;<:Y]7' );
define( 'LOGGED_IN_SALT',   '4(z?9lW),d/[}- uplNMWs|B&x%gju-HEz^Pv:;$=%41|p7!w5&(9TGJSL]9Ob8=' );
define( 'NONCE_SALT',       ']D{e]jWYZCW)#V>,G=cPSd0gF-s:axtz:tJL~!*}}<<|~O2!o%#/3~*^yYS-XhBO' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
