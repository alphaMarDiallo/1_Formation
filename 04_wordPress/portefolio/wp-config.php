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
define('DB_NAME', 'folio');

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
define('AUTH_KEY',         '/33B;SpE<,7I<1qP!pvVQwtbi9ae&=TPR^2/SC6@Q92>?+pnO]ZI_X~nY6;8^(T7');
define('SECURE_AUTH_KEY',  'u)&.&EXP2O],-n9v+qPkxJcO[OOGKjhJevZ4g[diyK2%J}}9kReaaF $Rp(R#?{h');
define('LOGGED_IN_KEY',    'P@nJ|>bBfLM1,5,E)X5WV?Wf:JtoJFIqsc`(Io;i2/X=PrM4[>&nn8gH*phjrX?S');
define('NONCE_KEY',        '{3]|&-~liYm@?uj*:;5wdCf(9h&p3dWqwWA]v5tP`=%j!z#eAV18}DQRCY))-8m@');
define('AUTH_SALT',        'vE0/e 19yY2;l_768F^bs=X7AjBaTZvb3gLCT$gjV@dy43d`cs] +O4$Y@g<0,=|');
define('SECURE_AUTH_SALT', '!$w4r.LZET6e:Ov.b%N.6fTaT,(_+{?Ba0<~{_|D&YnU8Y%7~eIXi,mz|rH}abFp');
define('LOGGED_IN_SALT',   'TP.,X>l1De3*6!?8)e*w 1G_td1KUi~Vnf{_-jy{%luamF@+8D{SPIhV8P8c<xrC');
define('NONCE_SALT',       'm^P7juj3vJBZ$(M_<1a=qdk/N2S X4GaL-2?m,I9PY.8F9R!YHdkuOH+6@Eg3TUF');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'flo_';

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