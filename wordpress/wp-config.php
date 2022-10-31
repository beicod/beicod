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
define( 'DB_NAME', 'beicod-db' );

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
define( 'AUTH_KEY',         'Rvu@Byax(~/cbQB+}yPV#}vl f.5XNv%EQJ.6NRn5tSA+jx=g))Hhq9OJ^H!x=qr' );
define( 'SECURE_AUTH_KEY',  'dcp0.Q^DVJ;!OCoSZhb@hSkU~fwoKvH]:!*(bUL1[9D*V?Du54u~n~ve*O(Hd`*R' );
define( 'LOGGED_IN_KEY',    'L)/gdf*paJ^D:6e49Kzx4^b-qElgw&nD3UYVWoQ~Y$:k]02}qW}U3rfdxB)Tmlee' );
define( 'NONCE_KEY',        'JqX_/I*$ft<dCW1$H~X)<U5BM|5W<4ZX,2|F72388Wz|-ah7*IXkj.?]@p20=35Q' );
define( 'AUTH_SALT',        'B+wz6zbc|vVGS8z4v{lkV (9nTa2u(fV#a3RahZgx]~o^`k7/j9qc.nwVe$q9Y^^' );
define( 'SECURE_AUTH_SALT', '%:W-B*&S$ V_xu:ruV}Nf`UFc4f}Ud(<l{>F)bY9:be4D$b7[BX^Ig{l#JtRsJy[' );
define( 'LOGGED_IN_SALT',   '*de+E`L0PXM+QhtttZN8K?ZW!5:rc(8M)O[yCm$G7}*ya!nIOnms87s@5c7+6xlq' );
define( 'NONCE_SALT',       'B[$}9tz7zR*j/g:Q>{nH24OktLL^``znsPL$X%JkSaO(4>(6oN2_^~<+ W}?Qk*]' );

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
