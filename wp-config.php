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
define( 'DB_NAME', 'iglesia_w' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '33D44dasha' );

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
define( 'AUTH_KEY',         '9VTG3{A Dd+ YYi;NUz#=Ahv>iD&Fzv8ARfpTN}iinsOPFO!]vl$3v/[zS2~WZRZ' );
define( 'SECURE_AUTH_KEY',  'FEz57*2g4LPywqAo|,hv{I5g%y.3Z3hq[@][|MIq_uhBFhS5,YslZN>*T}1j51Zx' );
define( 'LOGGED_IN_KEY',    '!c`;1g^<E Jd8Gm6PK $TzQt!!O6RPu]{WL?gP|/`s%WJ5VD1rFLQMTc,(F[eRM*' );
define( 'NONCE_KEY',        'l0Y[llA5]&kKc8<]%YZwtPwF#[YIO}z&K!2 :cmY)E|yab>o;XF22iS5KHSRUlL>' );
define( 'AUTH_SALT',        'fj[nNHn3;a.rx>7ZJ ,^KNF|a `>-ckqJT${Fv}rQndU;jIQ}][$WWKm#7OJ!B)J' );
define( 'SECURE_AUTH_SALT', 'dnc9P=>%Gs+N=pm`$]ZnmB6[ps>jk!/XnH.f?W!evT5@V_2x9Qo2yVu*f%|f=T3U' );
define( 'LOGGED_IN_SALT',   ']5+u#h4bFhDrBR0Orqs(;Vn*lknr+4&bi9BNkNMUi-N[Ylt]q<45{b3ai:=KO.S}' );
define( 'NONCE_SALT',       'Q>*g^g5Pao`X(1GQN&uL2qiG.MEg^:,[3;@ox*e5^dby9zTJ;Ri7(rm?G#?,7=JR' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'igl_';

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
