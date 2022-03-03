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
define( 'DB_NAME', 'new' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '/yi=}Au{f`rD|YL~Qv3d!!mD7,9jU)Pr[!5:Y#&:[pRy3guWfi?$u*=:)]XiKEr_' );
define( 'SECURE_AUTH_KEY',  'DXSwTKw%bX[A_-;fUdN->pQVy.?p! ~%nWqWH@5[tiuf!3H{4A>E>Q>LPR#zfd#%' );
define( 'LOGGED_IN_KEY',    'N8eF:J5Kffo*)IHCRN/c|jn=+vQ)w{ua,= ,-jh^Z5(A$`!p6ay, Q~<H*RS2@Oc' );
define( 'NONCE_KEY',        '}zR-46kX_qBer:-yv2gr6i((qJl7y`XTI+RZz&o1z+(-:.`)}7!.[S+_D}N^iEXL' );
define( 'AUTH_SALT',        'VAglgi%_A[ap.Q:I(;TUyvT[(D{iaj)aRtl_Tp@7[]VhT=*&-,),G`m<^dpFdmKy' );
define( 'SECURE_AUTH_SALT', 'KcB_|*<wGkAL(y(:*YIkR%A|{VogZrb2IQR9!8i)(=~&^IxInOwXb+3>#lJq].aK' );
define( 'LOGGED_IN_SALT',   'b6PC|MS0*8p5vA>0b]We*F(fg$6}CMH @,HsGE@&ml 3]t3)x}^G(xb54K82.I3u' );
define( 'NONCE_SALT',       '63*CmYiP`vjlvl7MV)Y_^!j!^*E%e4u]-P1)$qd&]<HZKa]IgFgFiwonA*@wImtG' );

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
