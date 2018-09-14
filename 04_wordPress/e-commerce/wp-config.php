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
define('DB_NAME', 'ecommerce');

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
define('AUTH_KEY',         'HF:Bk%<*}x1]XO(#Kjq<D[J`:+v%@DvF]cNMar[hKhR=,D/esE1KR:G~{-Zvn% s');
define('SECURE_AUTH_KEY',  '4K(wapXx)Jtt@Oi?a?fM@ B4P,+Dv/i2P*Oi@KZ$y#KTY^uIzG9$=}8og+vGxgTu');
define('LOGGED_IN_KEY',    'N6a$.<<UAhh7($dHMb7^VZ}Hh!?Z[$kuxp8}THl$r9ZY+K*ua}t]qGP%c53Q1?6H');
define('NONCE_KEY',        'w/_a&W~S~^Y</ke,/zK:E7]j8Z21FyGj.^<3T.`@XAOah!MQMGFa{X7*~8etHHfm');
define('AUTH_SALT',        '82W_Ac rd2V:0lquU^*wxF$z>)B[O@:!nsd@t/BHf*JsMl!vsHjjz=hVD,dV`wDq');
define('SECURE_AUTH_SALT', ';{TrU0QG)`%%vk3PtE><@mrs:w16HB9jW>*Jb*b[.pugM,eDi]cT<2sf!Ma_tO[<');
define('LOGGED_IN_SALT',   'cRNe2eB9W=FY7Xkmt6KWU=r;9lg5l-dB$z+{?M/7M:xG2DN-<#(QG|>hxB@T.D}t');
define('NONCE_SALT',       'w9`ci+}L{6I?}W*B0tq@?OH4$]&k.rZ?f?[C]YO~3bSWWwpW*:U+7o<8P#KlXrow');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ecm_';

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
