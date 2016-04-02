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
define('DB_NAME', 'ciyp');

/** MySQL database username */
define('DB_USER', 'ciyp');

/** MySQL database password */
define('DB_PASSWORD', 'changeme');

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
define('AUTH_KEY',         'WxOm:!yMHIWf|3v-`Wb@f(>pA}N[w:])mZy|lsV}VGxUU$ T(O_e~~@){;rW|){m');
define('SECURE_AUTH_KEY',  'fj>4nA0M[/q3+3]8[kQz8BkzfFK=[Kj~%V|E^UHpsV#XZ&sJYQmv;02Abh,yTS.f');
define('LOGGED_IN_KEY',    'c?Q|xg TjVq36HH&;Wwjtn^/[;r*o](p_;W+GeiA!i+w?2e_n0?Xk|sL2Vs|tch=');
define('NONCE_KEY',        'qC>).rc#UkJ;@-U<z,.Vlti>^{3H |AXsZX-xLJQ6DMN{MDV#~J7<V[P5#Lo?WMD');
define('AUTH_SALT',        'yb](PI-G+Sfq.xi-o^U9OS)f_d-G;6s|7EA3N/7n+:N,GW:d)(I^-ya4&tw%,M<o');
define('SECURE_AUTH_SALT', 'b9Ceq-Nhx+F0[a+{Wc+K[y510#X7Ej^ZV-*R70SfVsqv2G_]B6R.}IJs]bUEZ5a[');
define('LOGGED_IN_SALT',   '$Z|n-@`wnc6FFlhR5K-XC-a{trWG9/62h-sp_Pg*0fLhT.c=+O;L;7,:t~O<BAU?');
define('NONCE_SALT',       '1X/e&iVdsNRpGMzx[DT;OUkzIofYOC<<LfN,fKxBv]~/&UjUFJ+b8rvs*&`g-ek#');

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
