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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'Dh`Nele1K~f+hNPe ~IO-S.:t^S#y+&^r_&Pg+Jc?F*CQ!u? Nl9%?18*ErFFvW[' );
define( 'SECURE_AUTH_KEY',   'X,boJPJ;tv$5~p4l.mnZ4~r{S9BSz!R(2m,3PbIZfOrrxj)@57DO*<.+um+(5xXr' );
define( 'LOGGED_IN_KEY',     'SuQFo/=Rb|.dsZlz-sTB}(=)?LhpK*:8ky;g3EE2GNX&1rQqe{r@XvT[e-@sOeS5' );
define( 'NONCE_KEY',         'J}X}fWOE_:NjSFbjp$+cKlPq_Q!51CEBj%Je{@r|1W-x1]O#gS%p1P=!AYE} E^J' );
define( 'AUTH_SALT',         '60}cJ*&wU(MM-aXYR,*rVeUgnLW]zZ,+;g_Cf/hCmS.R<a_/$^R/u,RlAsa*3AIB' );
define( 'SECURE_AUTH_SALT',  'vXKpDO<MECwLuU[cMGNj@RN8nP%oy0<bt05qYDIWWlexs4:JEHCBh<em=MY$U`uA' );
define( 'LOGGED_IN_SALT',    'ODI]v9NAD3jhDo{2H;ODmqoU En+CQ,6#&F.nCNla,|%nm#G(Sr<<X-|`Gm9-2|p' );
define( 'NONCE_SALT',        'g(<]:Q0A2hk!*Tk%P(g$OWK1)@8gU7gZc}P^t6<$=2hGJ}</?2Vt@y|LY*q&QAG&' );
define( 'WP_CACHE_KEY_SALT', '&]: D>IKFJuK){aF/5JCBwc]=nc0+y$-b~Rd_{*Dx LjV~w[oi3Js`~V|^4~#c~A' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
