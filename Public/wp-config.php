<?php
// ===================================================
// Load database info and local development parameters
// ===================================================
if ( file_exists( dirname( __FILE__ ) . '/local-config.php' ) ) {
	define( 'WP_LOCAL_DEV', true );
	include( dirname( __FILE__ ) . '/local-config.php' );
} else {
	define( 'WP_LOCAL_DEV', false );
	define( 'DB_NAME', 'deploy_1' );
	define( 'DB_USER', 'root' );
	define( 'DB_PASSWORD', 'password' );
	define( 'DB_HOST', 'localhost' ); // Probably 'localhost'
}

// ========================
// Custom Content Directory
// ========================
define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/content' );
define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/content' );
define('WP_HOME', 'http://' . $_SERVER['HTTP_HOST']);
define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST']);
define('DOMAIN_CURRENT_SITE', $_SERVER['HTTP_HOST']);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Ap@3F5JjYzq5dJ,75m<Stv-j6QE,Nl=2Fa1i@1|sR+^Pz #<qM 3kFuLA-l~-%{_');
define('SECURE_AUTH_KEY',  'o[8MpyDHk0F35V8RC,& -vaa%Bvr7{@gGQ%+b1.6ruv%_>>WFH;dQpW}b@fG9k?[');
define('LOGGED_IN_KEY',    'eAVPkCv`cCCJ)yI,r.5c/9k35|ad/Y#6+9LiJNy&ecLTl3-Xs/>$//l?/Y3 _u:h');
define('NONCE_KEY',        '1paW(AxTXW501+ Z)M-v$jQb?(|ysb,L9=F|NuJCD]-D3XwpNe},I0pFH(zYf,b_');
define('AUTH_SALT',        ';_Nbs-lB>uV|_WGu9~Z|iWGLUB<&5p+/kmA,OCS.NbpGmE74w/KS|k;Zn,(@@kZG');
define('SECURE_AUTH_SALT', 'LtH8[@(_ykhcWBjYY~e!j+dpst*#Y*T*R4BqdhW/`Zk+2NAM@1  oH4STY(r@-l7');
define('LOGGED_IN_SALT',   '3e]hfb;F_86z(Go?#H%RR^bv`38;7/u+!e?eg2da<0/%&O<@(:b/i7&/b=sL3@2)');
define('NONCE_SALT',       'fh*#sT^v%s0Ojoq*/V4gM{2WjC!ch*?7Qi]qNP.2S%e4W)_7h`1[UX/WHQL-JG}+');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ut_';

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
define('WP_DEBUG', true);


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/wp');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
