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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */


 // a helper function to lookup "env_FILE", "env", then fallback
if (!function_exists('getenv_docker')) {
	// https://github.com/docker-library/wordpress/issues/588 (WP-CLI will load this file 2x)
	function getenv_docker($env, $default) {
		if ($fileEnv = getenv($env . '_FILE')) {
			return rtrim(file_get_contents($fileEnv), "\r\n");
		}
		else if (($val = getenv($env)) !== false) {
			return $val;
		}
		else {
			return $default;
		}
	}
}

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', getenv_docker('WORDPRESS_DB_NAME', 'wordpress') );

/** Database username */
define( 'DB_USER', getenv_docker('WORDPRESS_DB_USER', 'example username') );

/** Database password */
define( 'DB_PASSWORD', getenv_docker('WORDPRESS_DB_PASSWORD', 'example password') );

/**
 * Docker image fallback values above are sourced from the official WordPress installation wizard:
 * https://github.com/WordPress/WordPress/blob/1356f6537220ffdc32b9dad2a6cdbe2d010b7a88/wp-admin/setup-config.php#L224-L238
 * (However, using "example username" and "example password" in your database is strongly discouraged.  Please use strong, random credentials!)
 */

/** Database hostname */
define( 'DB_HOST', getenv_docker('WORDPRESS_DB_HOST', 'mysql') );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', getenv_docker('WORDPRESS_DB_CHARSET', 'utf8') );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', getenv_docker('WORDPRESS_DB_COLLATE', '') );


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
// define( 'AUTH_KEY',         '@bYTJ$7nM72Z<N@F|^_WcKT6qd|?c3*^`h^U:&q7zq{+f6R1&7ZhQikI!gR;%qYs' );
// define( 'SECURE_AUTH_KEY',  '>d:AiT1zWl20W,i((V*+J,JfLqu$xgR(+|lvIq6;&cWZ7GX~t`_i(ZTJX>+--!/]' );
// define( 'LOGGED_IN_KEY',    'v)&1~rsLd4D-mn%.4b5ARp^Bzo9uT-K8#2$:i|oun&{0>RE8V)HK!kLr#uP<!vzb' );
// define( 'NONCE_KEY',        'KT1X=L*q^X#Wj=:ubeVoQ.u*s~jeRa%|h.!q:Kq-bvW:vH{~snW~I?ZevF2l]=xP' );
// define( 'AUTH_SALT',        'o`qu?SO!thXnNO*5.y%E66QKzBzmd=Du.=kWgcD 58Z)-g;-Ol?)x?CV`E4u/B([' );
// define( 'SECURE_AUTH_SALT', 'pnjZ4~5frzBt;9>+R}yY%!iIY2?QO?@7H0W%@]oqmlXku?;d:>{_$|K7.b# $C(2' );
// define( 'LOGGED_IN_SALT',   'B.CzUezXsu8OLM$3*N$aKqZILofjC`&P-}LmLi[Q4Za+tpC6#N7*MFJcGg2:yRJt' );
// define( 'NONCE_SALT',       'i.)@ulhrpl?Nx)fJh`(kbG7A=tP-!>9[$(Wl>,j-O@DfR8i*1>eBIIu?MyzXEPp&' );

define( 'AUTH_KEY',         getenv_docker('WORDPRESS_AUTH_KEY',         '@bYTJ$7nM72Z<N@F|^_WcKT6qd|?c3*^`h^U:&q7zq{+f6R1&7ZhQikI!gR;%qYs') );
define( 'SECURE_AUTH_KEY',  getenv_docker('WORDPRESS_SECURE_AUTH_KEY',  '>d:AiT1zWl20W,i((V*+J,JfLqu$xgR(+|lvIq6;&cWZ7GX~t`_i(ZTJX>+--!/]') );
define( 'LOGGED_IN_KEY',    getenv_docker('WORDPRESS_LOGGED_IN_KEY',    'v)&1~rsLd4D-mn%.4b5ARp^Bzo9uT-K8#2$:i|oun&{0>RE8V)HK!kLr#uP<!vzb') );
define( 'NONCE_KEY',        getenv_docker('WORDPRESS_NONCE_KEY',        'KT1X=L*q^X#Wj=:ubeVoQ.u*s~jeRa%|h.!q:Kq-bvW:vH{~snW~I?ZevF2l]=xP') );
define( 'AUTH_SALT',        getenv_docker('WORDPRESS_AUTH_SALT',        'o`qu?SO!thXnNO*5.y%E66QKzBzmd=Du.=kWgcD 58Z)-g;-Ol?)x?CV`E4u/B([') );
define( 'SECURE_AUTH_SALT', getenv_docker('WORDPRESS_SECURE_AUTH_SALT', 'pnjZ4~5frzBt;9>+R}yY%!iIY2?QO?@7H0W%@]oqmlXku?;d:>{_$|K7.b# $C(2') );
define( 'LOGGED_IN_SALT',   getenv_docker('WORDPRESS_LOGGED_IN_SALT',   'B.CzUezXsu8OLM$3*N$aKqZILofjC`&P-}LmLi[Q4Za+tpC6#N7*MFJcGg2:yRJt') );
define( 'NONCE_SALT',       getenv_docker('WORDPRESS_NONCE_SALT',       'i.)@ulhrpl?Nx)fJh`(kbG7A=tP-!>9[$(Wl>,j-O@DfR8i*1>eBIIu?MyzXEPp&') );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = getenv_docker('WORDPRESS_TABLE_PREFIX', 'wp_');

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
define( 'WP_DEBUG', !!getenv_docker('WORDPRESS_DEBUG', '') );

/* Add any custom values between this line and the "stop editing" line. */



if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && strpos($_SERVER['HTTP_X_FORWARDED_PROTO'], 'https') !== false) {
	$_SERVER['HTTPS'] = 'on';
}
// (we include this by default because reverse proxying is extremely common in container environments)

if ($configExtra = getenv_docker('WORDPRESS_CONFIG_EXTRA', '')) {
	eval($configExtra);
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';