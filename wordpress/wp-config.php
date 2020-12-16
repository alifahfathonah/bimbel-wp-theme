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
define( 'DB_NAME', 'wp_bimbel' );

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
define( 'AUTH_KEY',         '6gIoa<]GsFiDuT0E<<ds3rY/T7>( 8?;&!Jz3sLyRGCw{)b;fl@Ll.a?h__MMVc@' );
define( 'SECURE_AUTH_KEY',  'NDr3oI*FN<X*IXYlRa]O~@,F4c3w7+#|=k/=+il13~jn$,P~qo^xhc+8%:|Y=-b&' );
define( 'LOGGED_IN_KEY',    '[=A2]`~3{`ANBV9*s;4vG;CFFug4Q&i/ev$Q>eg~d=[M1k#VKg@c/XYW9M>Nuoi$' );
define( 'NONCE_KEY',        'h}A|uO&Mshif<<!X9CL7y9PY3(lUBO@y2xR|{qind=[uD&3l4;Ap>Q6g^wdvslD$' );
define( 'AUTH_SALT',        '1VR2uxJ 4gfR.2%wej+h@lN@;8R5P$MzY+#49D|t=mcl1;rhqi3S&S{.^9s=m600' );
define( 'SECURE_AUTH_SALT', ' G^Y5h`#~1Z>U6nfV|>LCoH~0S^{]^! hpncT bh#{I6`[P,wbA03=dq)kU12)4f' );
define( 'LOGGED_IN_SALT',   'Bt@@{bFcp|}A`R}sUkF.BP{Zn:J^!&^(g5nTfhDTv/M;q,oloAg84bvGZ=<JBwee' );
define( 'NONCE_SALT',       'd^I`?/ou.Xa1:_y,};F*MTHMO(>v3vJnf3Y6vj[t,`vx?u&#sjAhNb49yj*WV8FP' );

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
