<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'proyecto');

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
define('AUTH_KEY',         '+xYYs@[9.~{]S8oR@KaK#-LHcSAsl0W: ]t)JAB6:uT*PmK4SZsxHML-]G*`}dhK');
define('SECURE_AUTH_KEY',  '6Zj9jwG:M$`?Wi^I]VJI7Gx{ b||Dm#qI?lMH,^l=ybP#?hD(]PGUtd#43%wgR7P');
define('LOGGED_IN_KEY',    't-`Kt9ZE u!b^!.VPZp<0_a$um#{-5W}GFtq_t!L|E<kwxpN4X|DJW6Nma8FSi6f');
define('NONCE_KEY',        '.eR!D(lAfoYjG_mq3U`Blp1S8`LmzaScpexrMH#s/zJF{LT3sm6]_bw{g|,/!uh~');
define('AUTH_SALT',        '@Hl0XXakIv?p@OWT;?D>S4&auqs,H1=R]XxT/ARgrk3[Vh?s]*XbX<o@biJz-Q!5');
define('SECURE_AUTH_SALT', 'JIBJ~2](f!^{jCOff)^BDU`|(&zqkOFP`1IhdU/$x}o!1?:}m16UL+FP #H:;x;6');
define('LOGGED_IN_SALT',   'CO:XH,B%7SYjC1}}2l! x;YR2]Uf[8l h2l{oFM1T-,r({v2l2{u@3;ol]PJ[BUA');
define('NONCE_SALT',       'p8E)B~L? qQ[((>|D55du7+=s;^4!Z1NRRRKpM5jZu+[1]j}|J`3x81)-ln7rHKJ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
