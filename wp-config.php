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
define('DB_NAME', 'ims');

/** MySQL database username */
define('DB_USER', 'jake');

/** MySQL database password */
define('DB_PASSWORD', 'password');

/** MySQL hostname */
define('DB_HOST', '192.168.56.1');

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
define('AUTH_KEY',         '%N1IhyM/#p&~5hNi%%x(eZx?7_q}W9o{wf7 z>Tcg/<~10~L5Jv-iLg?+:VV4X[)');
define('SECURE_AUTH_KEY',  'HW+sm~%V.+(Svyl(k/02hM<QD#,n~yCVk@scIMEIpf%4GZVj~%r[JW?x7oB-g>gw');
define('LOGGED_IN_KEY',    '{5tKpC8$@pp>bJNRXb`Yz/>gSZt<:RWRI0k*-N5~}S&6K1=^jsXa2e+6_$RWf1-{');
define('NONCE_KEY',        'Y;@z}g+&w8sL=ZHpg^v0|z/Bx~VGIi#fuBxP;,=|.G~fA%puT_d0w?Vn:IYMzQJ;');
define('AUTH_SALT',        'uy#OBvlFv];&VYs-C%9@1aPGLjdS9~4Slt8v(9]#HOW?J=-bxC|7TcnPU}6|SpZP');
define('SECURE_AUTH_SALT', 'g1|y, cyK:9>|xS&dwq#qqq@&6|c`r;EXo+UZflo^nsp{let<M_F!mwK,[)@83*:');
define('LOGGED_IN_SALT',   '3|E-N~>h}g6d_&i.0YfL63a?^834F,uxg*>t$6?@sS)>9L`,bU4(96?iT-v#erwT');
define('NONCE_SALT',       'sk*F@YMjzV_yd%`G.BVIz_(xhRvmTHU-^hQ8* ~,z@ZiqFmgqe=wwXIsQ?5|gP!e');

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