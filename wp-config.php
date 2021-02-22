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
define( 'DB_NAME', 'cdh' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'Dz,noPxLOcSnUqX#x-o~DPxJJUr2V=9Z}RxPQ]i[$j3I:TGwCu^`{l#$.0LHm~q>' );
define( 'SECURE_AUTH_KEY',  'E@;2.r&o-:fpH:yS02>FMCEROwo}.FdG*t-a_;:-K]?jHk@}4|,m*Rwx2way6Y^B' );
define( 'LOGGED_IN_KEY',    'H?c&@G+#RvH9k8aL3_U)~Hpu4 ]8h@pxdVtMqAHw!ex7Nj66^1,b?CWr+||y2K3f' );
define( 'NONCE_KEY',        '~-M n;pEH0>fWx|(8dq7L2N/E>aL@U7BZWwrXog-<@7_![w[ N=:uutC,_f4-5xY' );
define( 'AUTH_SALT',        'E2v)rj%?C|kw~^9dM?[.vY=)jbL[_EaH/bR0E+BihjP:T3AcVU[.qPb0<i9=lS,O' );
define( 'SECURE_AUTH_SALT', 'x{u6>7w:{o<DT+[Q-Lsg&U@sk,)a0WH}P4sD@l9]{5xYu89muNdE9C@A[ (c>;on' );
define( 'LOGGED_IN_SALT',   '~a&-&/u Hy808il+MHt5[5~^dz__ZK9_8jT3I>c}QZ4)kms=V<rE}D0:6L3cn(- ' );
define( 'NONCE_SALT',       ';K_2:wJ1av)>z$0g^YEI<HJI<(1vT$OrRjBW.%rPl,<1tV>mNw#BVNJ$TxI$i,J*' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'cdh_';

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
