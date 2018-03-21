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
define('DB_NAME', 'domsters_playtime');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '{j{<_*JWT3ORT@xDFL$wp<0*8Hy 2]=lVw!$I@~V.e&B_z(ql^]7W[t&.UVEWb_y');
define('SECURE_AUTH_KEY',  '<ex7J6JL|E%7kuvqo!Sdv~A+_T;4*z&iBf)u7E gvucEqGQQf$bux>[{~H`:YKhx');
define('LOGGED_IN_KEY',    '?K8g_]&{f=xnEMiy2!gcy,o1ZIqOC/HQc_6L(y5SIo=}zx(Hx;vE|vfS~r[06A39');
define('NONCE_KEY',        '~VB92NGPmXAABp/AH|}OF>RAtO]FeR)JPQnT,x RxXtDTnWx<HRu_4coI_q80J/=');
define('AUTH_SALT',        ',}qKRu(#!ksmkyAV,kC.BDbAPp5<?;sdmWDmg||wA,1sh]{q$ DKM^Rq3+ZMGK#M');
define('SECURE_AUTH_SALT', '.4,d_5B*NsU,Q~)7T<=jfAb%3V%aCK;ZA:}UbroA8zV|n-e-{2[mS[t$yF1&!rFG');
define('LOGGED_IN_SALT',   'q>qqTo!{`Xrk (?`C|+Zqb(G%G@?<M,p(t4p=FtbBe@$h}6b_wbKs%h1yXHVA`/d');
define('NONCE_SALT',       'l*p9JsE,k4Ntgg_f`nZg1_-VzI|`_eB8qmeB1W~sd]kIMM/R+N2g[SSw#p@le2C#');

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
