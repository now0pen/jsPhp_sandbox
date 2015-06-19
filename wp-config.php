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
define('DB_NAME', 'wordpress');
//jims-wpec2 db is jims-wpec2db

/** MySQL database username */
define('DB_USER', 'jim');
//jims-wpec2 is jimsyyap

/** MySQL database password */
define('DB_PASSWORD', 'Opportun1ty');
//jims-wpec2 is .()

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
define('AUTH_KEY',         'qAn7yG:)FNvd;79] ]3mmKwYKL; K>Y5LO;h=FY{kxoM|DNnuCp!r?;i`-NICH*2');
define('SECURE_AUTH_KEY',  'TNpSOK!aTj18VPBb@3|RNck:Q`0Yp1aucRO>Ifl}uDp_]ZZ&m|)dEf9^+{$5W YB');
define('LOGGED_IN_KEY',    '|#P/+mbr?wwT9b`{)+UblUc1A+T@pha?63q;>3sYK<>k1|S&+SokR/c8~ix$|pxf');
define('NONCE_KEY',        'Q~;|EXsiL-#l`JQf`Esbaw/SpXa;xFtrA7#hAfyC~uHZ-a<Ok_DcF(c9vL>RF/To');
define('AUTH_SALT',        '0WGDm*m|w~hIW=etnK?Cj61>vI~,[PTZC$*?r@E}St!kS2UKf4Q1_QK-y}:s=iM?');
define('SECURE_AUTH_SALT', 'E+k_ouk/ppX!E?F2$-nR,ocrD5Rw6vq{YBMB-u64%&OrVDLnj0 L`en?|_Z}R~-.');
define('LOGGED_IN_SALT',   '@Ge^f7EDi6?O==$x}WvLMxU#||BKB,i4+7!hJ0G$kt+#F,>ovEgu8;MSKa4@~Q-d');
define('NONCE_SALT',       'i]^`Jn @^:mrF+v1>As=eIbUR6/kU]ZBL>/S=[ajoUqjheabZ G(u-fi%w)9<e}(');

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
