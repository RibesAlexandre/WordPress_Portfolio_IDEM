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
define( 'DB_NAME', 'portfolio_wordpress' );

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
define( 'AUTH_KEY',         'w4sM&m9W8V L~Nc_~-Ch9l~_rGa.8`fx3j~KgB{z> B])-|AZe-9<=xSv`<2{HDc' );
define( 'SECURE_AUTH_KEY',  'KC4[176l/b&=?^v^BEVJ]WvVqW&LCVqK,JN!S}sUun%<P7PnkHi}Q;O~kXc?}zma' );
define( 'LOGGED_IN_KEY',    'ZH%+#tRuiW@K,r`#ib)R0Pf&BtkcQcRsClF|IcV4Yj+YUdOr5)K>B{Q8Is>R!M v' );
define( 'NONCE_KEY',        'rY><#ot[h#{kzkU3hm;&!0n,nyAuw9P)4?+f|u:u2)G/m~yUAS0+H85z&;s/3*NR' );
define( 'AUTH_SALT',        'zJX!N[X`PwmEhUdQ41AT~zEXi9`GdC}k9P|GjPln2{$&)*:f~AZPKqUTcf?&krv&' );
define( 'SECURE_AUTH_SALT', '&8,=1lSu/y{c3tu5&o%#Ej3y0o6ekTLx_<muTS)194s9O(kZSQ?P<RS+I5]FMVaY' );
define( 'LOGGED_IN_SALT',   '@j1A^@YjLFot4J?CiaIK=VkQZwb}Xs{#i%*H>0i0UMgzY{qT~K:<Ck8BQG-Q,cC6' );
define( 'NONCE_SALT',       '[-#pgCQpJ]Ac|1^&vO9!~1|ZKJ<}|],H3O_EjO={(qMAreXda-Bl=WR0j%B`(*ui' );
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
