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

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'coolwebsite' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'Y;6#Q:j{v:&wO#]<eLyne73jfDl*Y76X+DV;n0[C%So[RdP7JSX_0Zk/#ClXtB3R' );
define( 'SECURE_AUTH_KEY',  'xfSYO_)53x18pw&En3VZGWUwb@H~)j@NmogAFnz6G5|?>a=rW{5]^C:nVcsP>ATA' );
define( 'LOGGED_IN_KEY',    'j)UHL:b?0LvmV6jiRGNU!{T^l21!>r7c,dDmQ<9XJ]kd5VfnZ*i%M | Ixd^{@z5' );
define( 'NONCE_KEY',        'IR=Twp38Q6h<:3[CYDB-EVvJa4N&g)D&A-~;uFmBBuHBeh=$KzQnEB hseB%f CD' );
define( 'AUTH_SALT',        '^jhF$b5Qn6zzDk- T&*Bnn_f)c5y?T3L/t*mpw8:lJVWQ-;Djv$BekEIL(NkPo[/' );
define( 'SECURE_AUTH_SALT', '=E6uCKe}>tda_: Kp(yy;cvT.4]d#P:HE=qY=jxzO|t1I^,=~)2e`2oM+CH;Ewgb' );
define( 'LOGGED_IN_SALT',   '0G3Q[T&wu@AR,q6hhlkg7dP@(0U:<u<YGl;S:1^*Y]9-Ii%6Cv.JU^slQI2ZmD>v' );
define( 'NONCE_SALT',       'L*6iJFl_L%Pl/F7fR7~T/*#;m){vA9P$},GkoDr5MT/uTi_nCh12IQ%$N=u(tHm=' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
