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
* @link https://wordpress.org/documentation/article/editing-wp-config-php/
*
* @package WordPress
*/
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'amareshwarcollege-31393549e0' );
/** Database username */
define( 'DB_USER', 'amareshwarcollege-31393549e0' );
/** Database password */
define( 'DB_PASSWORD', 'AmaRESHwAEc@2024' );
/** Database hostname */
define( 'DB_HOST', 'db' );
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
define( 'AUTH_KEY',         'U{}|yRSjY+qGoyK!^#5u9?kC0[q&J$UifA9XmqY18HNk(hCMJ<R3t+A.&6,tU7Wc' );
define( 'SECURE_AUTH_KEY',  '#rH`+-Q*qb8%2*oAnOHr$gcdX{8kq$HgrW>]ZUsx!iIfvW}~6OI!t9U@{[Y`qG/S' );
define( 'LOGGED_IN_KEY',    '({klaq$M)m~ff0:$M{jY8}N4~PXngGs{]vs0^jphy$G{Ek{,p8zln$dLe-%k_BqD' );
define( 'NONCE_KEY',        '~==*pQU#qg_!njBHtrP2@f:Z_fso4Qa1$G_Z%4{5[SG`EBr;eoq3eeUBDQk6WX-n' );
define( 'AUTH_SALT',        'y# j+|<I# YPC3wJ]vurL[:eH3*;QMZovMm}iO ,K(J,}IHH@zUjdI=dF!5Ae8MX' );
define( 'SECURE_AUTH_SALT', 'PNTgnA&JQ.Hs^24b!})U^WGBm0-#b8c}eQ{@M*7p5} o,<I0/?a!vrGQ:{4{ms6r' );
define( 'LOGGED_IN_SALT',   'v9,i}paVYm=TRxb`N-e`#pP(UP{N[->Zm)(tC:wB,XiB2|t3KTO?2G nQX/4_|NV' );
define( 'NONCE_SALT',       'D#6Od(Xwg3x$o%A.T0-1^M%HJ9K:.AM&<(hwuQ;t<5|)$tU(s0o:>pd;}. +=XFO' );
/**#@-*/
/**
* WordPress database table prefix.
*
* You can have multiple installations in one database if you give each
* a unique prefix. Only numbers, letters, and underscores please!
*/
$table_prefix = 'asc_';
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
* @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
