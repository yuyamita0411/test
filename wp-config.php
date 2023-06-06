<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'vwxst_lifecareerplan' );

/** Database username */
define( 'DB_USER', 'vwxst_yuyamita0411' );

/** Database password */
define( 'DB_PASSWORD', 'Yuyamita@411' );

/** Database hostname */
define( 'DB_HOST', 'mysql6.onamae.ne.jp' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '5yuwXg5LEjV;sW5ttjEWd.oql:;_l>!D!4VV,F9KUW]TygBHHS}`yQJ6VHi>^PS>' );
define( 'SECURE_AUTH_KEY',   '4(FN#ToNzL:Q^`g3)pTb6x!$+B;2|m&z/X*z@&To-8lQ_vm}|tQys1nIY=&p-ho{' );
define( 'LOGGED_IN_KEY',     '-LE*Sk./3@gzfLd-C~Nli+E]7f2j=keEkq>-jOm0Q_q^O*>!ky1;Mi5wfS5q G7`' );
define( 'NONCE_KEY',         '?R`FqS}kDop]93([Or|MS>aX/T:F;:*rH9z LXWI+^v?VnR<RI7x/b]DoE_W!?;M' );
define( 'AUTH_SALT',         'md}cVNQ-pH^qO;YAsU,8%jK_rn]StbA1<r/UQ~#%xO8c9Cr2v6$um[)![pn&IQn[' );
define( 'SECURE_AUTH_SALT',  'w7$5s,!Sps{*<RN%EVcV|rt?g1swFqBntRaiJS+u<%IY8Ga6+ro5W9k?_PTP3-,>' );
define( 'LOGGED_IN_SALT',    'D Aohtu^-ezk-$4KgKloSc>#,xUX]Ws~[2k~K~e]qI]6a  t?1b7LS%F!/!odv;i' );
define( 'NONCE_SALT',        'sx>Rm e|&/<%lUDHr@xzf*KLV!{X^qK?7r2gPGPV|?!]n6jWp9K=ETqy?ku1W0xR' );
define( 'WP_CACHE_KEY_SALT', 'Z.lNPgUy}SS:}F;o)ZnlOk[%}HOf$1Q?gX]CVo$s}UvH3jXnAB=b*IkE(uIDbn<%' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === "https") {
    $_SERVER['HTTPS'] = 'on';
    define('FORCE_SSL_LOGIN', true);
    define('FORCE_SSL_ADMIN', true);
}


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'RS_DASHBOARD_PLUGIN_SID', 'U9R5wdJnSx4_TUkbNZWpoS8-Nz4HHYhoqaugvI6KJlf1_JSgYlhoYBGcnKUht0AqjJu2cG-y3iOYjnRRpfdaGg7g1eyIsrS-WsDjR1nSHgE.' );
define( 'RS_DASHBOARD_PLUGIN_DID', '3EidGuvepl2Ei-kRoPMMwHj1-VXApy6RO4xbIHNFCEVv2BcSZyrVjaLloE-IbYcJGwpJ-3WKK6yAuWBZfI2hO3lki4iXuzx8Hgf5nELLFGk.' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
