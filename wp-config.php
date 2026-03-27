<?php
define('WP_CACHE', true);


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

$env_file = parse_ini_file('.env.local');
define('ENVIRONNEMENT', $env_file['ENVIRONNEMENT']);

// ** MySQL settings - You can get this info from your web host ** //

define('DB_NAME', 'test-lucyan');
define('DB_USER', 'root');
define('DB_PASSWORD', $env_file['MYSQL_ROOT_PASSWORD']);
define('DB_HOST', 'db');

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
define('AUTH_KEY',         '-v+KtwMnKgmh>V^AFRHY@F&|?_@w_6?JgLE-YIVrhDr-L{=Bb*lP8taV&PJ;,8{+');
define('SECURE_AUTH_KEY',  'd:DlDS|L*|(iCFdmR)OF2<nbO1ur3%PCQ]eW=qEwzfPAdl%-Cv|%jG^tOxNz.v&U');
define('LOGGED_IN_KEY',    '>)InL%$L/hl>69+i|T^x~vUYMjrhUil)q;^bGC8+l-A@58^&|uqb)tl8y~v5)1B^');
define('NONCE_KEY',        '},HEYW6DD}qTwLxP&}S(4.CB8nS1?K|7}U`!GMEXD}OK57f#>wJ]e-hl[[7F+|(U');
define('AUTH_SALT',        '% [<xP97ZbpRGM5)M`dOW(_-Fcl^F+c?dr~/v+g&}-(V0fnM>S=l5&]d[uISH`QP');
define('SECURE_AUTH_SALT', '-1/=#XGACB={^+?#lOMW{m{t<2 BqD%%|U;$HN2yT1, jV !T.o1/_T58:ug=^^k');
define('LOGGED_IN_SALT',   'V@i,|SeB2JDjh%7+<n#-dr.P<F1&Frj%]$9zC)-[`Xu>w)<U]8}|+kaHd62G?HP_');
define('NONCE_SALT',       '{gy|Z>?cQ3?gQ/4]P/t,#BST|nLAV9DbS>y4k7[z9;IX-@J)Y&L$EW+;5D`E-`DG');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'mod675_';

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
if (ENVIRONNEMENT === 'local') {
    define('WP_DEBUG', true);
    define('WP_DEBUG_DISPLAY', false);
    define('WP_DEBUG_LOG', true);
} elseif (ENVIRONNEMENT === 'staging') {
    define('WP_DEBUG', true);
    define('WP_DEBUG_DISPLAY', false);
    define('WP_DEBUG_LOG', true);
} else {
    define('WP_DEBUG', true);
    define('WP_DEBUG_DISPLAY', false);
    define('FORCE_SSL_ADMIN', true);
    define('WP_DEBUG_LOG', true);
}

// If we're behind a proxy server and using HTTPS, we need to alert Wordpress of that fact
// see also http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
    $_SERVER['HTTPS'] = 'on';
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__) . '/');
}

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

/*
 * Disable auto updates
 */
define('AUTOMATIC_UPDATER_DISABLED', true);

/*
 * Prevent WordPress from editing files with its Editor
 */
define('DISALLOW_FILE_EDIT', true);