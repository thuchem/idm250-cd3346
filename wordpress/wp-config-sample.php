<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/home/dh_ge7axz/thuchem.com/wp-content/plugins/wp-super-cache/' );
define('DB_NAME', 'thuchem_com_1');

/** MySQL database username */
define('DB_USER', 'thuchemcom1');

/** MySQL database password */
define('DB_PASSWORD', 'NGH!vx8Y');

/** MySQL hostname */
define('DB_HOST', 'mysql.thuchem.com');

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
define('AUTH_KEY',         '&WKy9j4!kW%lSl?t7v~;83Abzh:erG6W6(N~?d~#$L8Mk!`cDpH`g`au3`3w?CHw');
define('SECURE_AUTH_KEY',  '@N3Eb(_b9!ER?mnA0+(mjByj605pydm8HaMX`F"V:s7k#B_g^%M%:2LEI8dOx^WH');
define('LOGGED_IN_KEY',    'ty%N|j@VqSbhK4EPsw7:$$JT5eb5a21Tr2nNKZPVrbWIKy6S@YIVDjnJ*A`VPegG');
define('NONCE_KEY',        '&jtGzpj&`%#;/2F`KU|CF)Row!"0k1gef4#!Llt;BM|W_hnj$El7fIE0nkxno:^k');
define('AUTH_SALT',        '$7#p(ieT#"7@3jA4&UoDudvCV:xHQAB924stoJwrzHZ6T)`wK$21CiS#jt)iplf3');
define('SECURE_AUTH_SALT', '*`t99BNKKvcIN6)UIzrjZ?g?#6F(AqtnV#^"2hNb~~+1kWW;#z*ZW9CK3nTCt:8B');
define('LOGGED_IN_SALT',   'cE1)$$CZp2Cg1|nOa/Sp0o~cxdWok|ndyir`1X|LgVI1mXdv3Hv+U2uXpt6)#04y');
define('NONCE_SALT',       'QB?iaUr"l$2oK*__:Pc7bMF;P4vH9/Ylfv;`s1+HK:a"Nz~QRS!Ejq;^upEx)dDz');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_rxjq5z_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/**
 * Removing this could cause issues with your experience in the DreamHost panel
 */

if (isset($_SERVER['HTTP_HOST']) && preg_match("/^(.*)\.dream\.website$/", $_SERVER['HTTP_HOST'])) {
        $proto = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";
        define('WP_SITEURL', $proto . '://' . $_SERVER['HTTP_HOST']);
        define('WP_HOME',    $proto . '://' . $_SERVER['HTTP_HOST']);
        define('JETPACK_STAGING_MODE', true);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
