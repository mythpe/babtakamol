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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'jendolap_wp1' );

/** MySQL database username */
define( 'DB_USER', 'jendolap_wp1' );

/** MySQL database password */
define( 'DB_PASSWORD', 'xpTmt1kgYrml' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'aS7sui?F1WJ:4~g6Y:oc%{vQ%hDM4.c^kZ`<:5(1y7(k?^]:9enB^~uHPyT(uH32' );
define( 'SECURE_AUTH_KEY',   'aLXDk_3qL#d(<o&&#DDtUTu[mB4:(+0fqf3Mfog7ytEdx<^%8G#3-l/V7I]-tH_V' );
define( 'LOGGED_IN_KEY',     '/w~2opCMtr@& 3V/=RP6Co =j|hvQM GxTkRK /D$U(JWslZt^*NX)wUbh3Fg,^x' );
define( 'NONCE_KEY',         '%Sk%(p<J7w9k(z1GAp_G!kGX_4IDSh-lD?k Hz}{`p4c~; !Ak~M`m)^k+>&AKuj' );
define( 'AUTH_SALT',         'bjqWS_G,%R+B{`lC~VR7* E3F6^FYnzVySMDLUYK1C1Af?>9e#$cpjKeU9H~nYdP' );
define( 'SECURE_AUTH_SALT',  'B~BCR/rZ@rK2Y>54rqhT)ts8U>bUC)BH.&^k_x,VHWw&ocX2oR91<JFolA?Nk!]}' );
define( 'LOGGED_IN_SALT',    '}Y-TLXVB6hdkIAq*il(&qJ1sCpt)8[N7ZPA.|YwNfX9y->U3ut@uD(Y~F,=e3J}*' );
define( 'NONCE_SALT',        '/uY*$.s8?HBGrdFQytjAW0777U|Qk@?xCYlYx*j?0=OpR-?>>,uSY5OFN5Vy,65+' );
define( 'WP_CACHE_KEY_SALT', 'pG}KWJq/h;BF1a}2{uR4?+RU3~: w+m+O+JSv.&na%u-U>`}pK`>tqtIVr/K5gTR' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
