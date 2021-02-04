<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'discophore' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'BV`C=a<:]_9/,NE3>Wv2tOc}^E=_u|qn:a?;11bO#y{AEz5eF;QwI]QNQ73TE^qu' );
define( 'SECURE_AUTH_KEY',  'wS$_DHH<rPXdX<dhmnr3ZvrpQh(MJh*t3+OUrOM6`_<~.raUNFY~0PBze~@c-T&2' );
define( 'LOGGED_IN_KEY',    'BXCdR>q]]Mwwu.%p]C#6lBIn_>hH]aN2hlz,1*f)+0w&=_A=Mh3/foUNBknlc{y`' );
define( 'NONCE_KEY',        '-u*MWg{.X%jh)M-L{>cn9Raz:%OK|HCb(3Kni6tZ3OCN$pnlr;Jg[pxjg?Vzfnkj' );
define( 'AUTH_SALT',        '6I{EJ/uS|.Rj~,@ubx!Ir?xWeb e{;q~ZOj1a ;di~g4|_bw7.`I};f{ElwAr@X3' );
define( 'SECURE_AUTH_SALT', 'Zg,FDsIAii]R8LEIdQJy)@ImC?NKAFn])b[U8:YqC?2Q^>[Yl2TZL=]b_]{kg P|' );
define( 'LOGGED_IN_SALT',   '7WTr/_nK`9|um(>FQse6*m,<MvpPeLLe(sbRR5%=m7R1R;)4N^EihpytW`t1_%3b' );
define( 'NONCE_SALT',       'R*JRR4Wl1zk+%Nz?`?^h<yrHw3nF$Ut<H+B$m]z,]Ni@f0Lv{Vx=[VvjKZujIG{@' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
