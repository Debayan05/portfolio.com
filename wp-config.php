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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dg' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'xgKYu3:W=P+5K8pBUO1qbFY-,[Ip!)]Ddl>a6lrq%oMyJ&78cL]h?1//~[l/cHR+' );
define( 'SECURE_AUTH_KEY',  'G#64|;adtIL({n{]3_0x[;;K$#_biSr$~4<kypZpFXnp{|bOT><Y$ZT}#80GAG,c' );
define( 'LOGGED_IN_KEY',    ':h[e*!Rc6FWLq FlyLt&i7lnC:qCG-;H{bh|17&[hvm4HiLb5D z{.4zKuC}sG+6' );
define( 'NONCE_KEY',        'v=aLjd^Z/|D2ca8soL3<|Hhw(57V4hX&z}`f-_|1i2Y|HYiLX/RdhZT.[`1rp:.S' );
define( 'AUTH_SALT',        'bhf&.=,GUEn[cCL}BW|H8is}ks8kCws$Hu&;&|4u?R>ZgoYe$nw,$lq#!38GENH!' );
define( 'SECURE_AUTH_SALT', 'K<>jkv&U(>u-l<?L[Wnex/ss`hfV(^pdi2PH_;k7niiOQ3*A62.$H0/=0w+W:J_V' );
define( 'LOGGED_IN_SALT',   ',_&4nvi|yo-7LLn7DS4{qqsc}Wp2ftY4MISqr6IzWh?v(7xvn5$fn]=ov*[.DK*=' );
define( 'NONCE_SALT',       'at3%=D![#&W>*nU8A,.(:&nQ;w#wzGC.,Q@I5^< `l? [R?vcsB,pNOD{JdrYG?r' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
