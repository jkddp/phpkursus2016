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
define('DB_PASSWORD', 'student');

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
define('AUTH_KEY',         'u-/* _tt~/m>sPy09rK|!nC2|d=Jl8JkNR8!Ou61X5#^G&ckvB$cA|}}i|F-;+oG');
define('SECURE_AUTH_KEY',  '5l{+lSUE5bSkNMP,$8w!TZSOr[*AZc 7l}HCs0so8,64VcEBRWKQm.1^jrZ?<,Z@');
define('LOGGED_IN_KEY',    'p}+-2ybA,1w&90?IWvo;VK&:kBCp?!:`W?-j(6I0nI%*DNbVqcQPZyGw}@V-[7z=');
define('NONCE_KEY',        '|fr^p.N$$De_g:}ci*W#!}t {n|c&P&F33#WmXnB[Fej(|d:1G|mmN+na8xp>>]r');
define('AUTH_SALT',        'K/Pjh+(&xsv7abDs/})1nn+Cf)wE*$W0C<5cAtocb#34!4YsP=gro*`uC.T?Q-m=');
define('SECURE_AUTH_SALT', 'uFuxj@+=6OGo;([3]*!Bj{i-Uko8m{y 7LSAbpEW}eC!nL`hX^c--%tJ}+Y>~d M');
define('LOGGED_IN_SALT',   '!6+#IlStI_-ciF,a+b-9|:;R|%LqYnh!%|Ozh*Y=|8eChk|&:+V[{K5S(M~hA>NS');
define('NONCE_SALT',       'OHgeonv|+b8*D+|+6q$N(F^P3.em_V34y_r* pJ?6 +{q]&9*CL}~o|qWKn2EX+5');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_phpkursus2016_';

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
