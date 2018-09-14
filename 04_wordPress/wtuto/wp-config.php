<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'wtuto');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'm(Y5Ik9 VblJe5rzGI[%_8%83n]3$v2q1nS*^lf.(X$)/iCH LMnb6c<*7Dee,M_');
define('SECURE_AUTH_KEY',  'b8}1HP+v.d ?*cTCuK]hj>X0L~Ai9|{ej}^(|{ek{aCl9Z&N,tdG%jZc<21pBa%>');
define('LOGGED_IN_KEY',    '[;Ri!{n5E~GE7dg2]NcuLtB9z*So_hB<~ICIkH+8+-<C$zi6]m:yS0G1P73#:++q');
define('NONCE_KEY',        'F/5YD@+tb *0N7D6=/rN#,SrWu(?8XO-`[1~Fj;A*|_`2:t--9 O<b ~sS7B-Z.L');
define('AUTH_SALT',        '2@tp?*-sGKCV4Wti|5#Ij0$BGkRsGQK?l`B;$aJV7aO!uiuc58@/%mj6j$Imr=[s');
define('SECURE_AUTH_SALT', 'Nn?LpgD/_$pW7]#dHdvo/P3Pv87sTD|_(R&baXMZ^FDl|||<`u[/?6;4~/<*j$i&');
define('LOGGED_IN_SALT',   'qtv77V]lAg.RdpqljicLwYE?j]/5fy5kCc#illBFVK_PU1?9IF2Gx9O.[FWlCr{V');
define('NONCE_SALT',       'v`@S^UJ;84=QMLjMSL3HX}_ey2QPyjH24y!qz^mN`[GGvW]{jjXdi?8[G_|1uYY&');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wto_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');