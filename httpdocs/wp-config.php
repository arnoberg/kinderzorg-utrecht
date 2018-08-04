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
define('DB_NAME', 'm1_2be90f46');

/** MySQL database username */
define('DB_USER', 'm1_2be90f46');

/** MySQL database password */
define('DB_PASSWORD', 'xbcNPHu3nh');

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
define('AUTH_KEY',         '>>lDSU;% U@@m5nq7.xrQ,7 las#x38)mjuhGs}/3(GgOyanbbJGv:3!cADUG;Z+');
define('SECURE_AUTH_KEY',  'dzr;pi<)cX;3E^uR[lYTDLj?&`t~L%4@))qWs,<-KjR?B{i,H=~^y-l<{U.7YfYJ');
define('LOGGED_IN_KEY',    '&x/VL8QXLW6ud0D7~8_V9;pqH;h[%{cmEb6byi#bT*-MNh.lW4iK9;BMK6d5hxez');
define('NONCE_KEY',        '14&(G:Dw#c}arjNER!EBuwoESuE@{E)<mS/E,/s }U[~SB]aH]SG$N9rVczn$hE`');
define('AUTH_SALT',        '@Lb_pQ.zYpqBNym[a@p]4gIt(.3gyd:L.Etp7ml&XKD&1&~sB$CY,[l3qSu_a}uh');
define('SECURE_AUTH_SALT', 'bsc-m#Do2Dq]}mE0M5HIJ<c[jcgtZWLR0,KuW%a~4=ca)6O*RTECu]<]XeM0dYpL');
define('LOGGED_IN_SALT',   '%s|qRq{;,/0T*vhN8W8|Gx[vfw7G;4Ne)b~m{wRjn>-^pR2e>k??,Ym2q]P.=l+j');
define('NONCE_SALT',       'z(]E?9:T#QqE,V0M1$q#8:z:xo}K9ym{MZ-{_OFT:Z1Q^SMc<.ywa[{u!bn,Y663');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
