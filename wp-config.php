<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'myfashiofashion');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'myfashiofashion');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'rZJbqc3RD78m');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'myfashiofashion.mysql.db');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ';RLSKo(97)nn0T-!u5;-8?^j~n=h~2]|;BaP5kmCW._V5r%B|}J}hQw%8zRLX!-|');
define('SECURE_AUTH_KEY',  ':.99T^f@dB5RWZ*W}.N`nWEZ(XRs+c;+oKF%ms54F2F_[GUl.7Q*Am WAAz|a}ch');
define('LOGGED_IN_KEY',    '`eEMQv|||FM|Qn:?AB(|d b`2w,7l,MAd O+[N;u^|w,=$2)>^kvG3eFT4f?W[q+');
define('NONCE_KEY',        ':+LHgu -&LRb#h+UU+r4OflM. !+b>IiNq.3^5J5|gv`$0+q0W*Fi9.9!:-yr?p-');
define('AUTH_SALT',        'H&+rVepza rgx3!wSfe TxAKlVXhQoDi}!,--kq+F0tgVmhw|R]LmE.3Vb*+.7KQ');
define('SECURE_AUTH_SALT', '-NmuqYj2$8/5+oIt,P59T/ -r iI0&]I^&bI7rBr}W*g?!Wta`HB #QI@%e%`9w+');
define('LOGGED_IN_SALT',   ' 83mvGgSDvq+&.%D&Bo4P+vE#Z@sq[a/S4cL1hO9mU8kK9,1N5yU &V%#rmo.xso');
define('NONCE_SALT',       'yn~&#+Ll<*XRZ+5!p|drw!.O0q&+8-0bt?^_&w&qO6EJ-:c<..7-DL.m.6wB%jr7');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/**
 * Langue de localisation de WordPress, par défaut en Anglais.
 *
 * Modifiez cette valeur pour localiser WordPress. Un fichier MO correspondant
 * au langage choisi doit être installé dans le dossier wp-content/languages.
 * Par exemple, pour mettre en place une traduction française, mettez le fichier
 * fr_FR.mo dans wp-content/languages, et réglez l'option ci-dessous à "fr_FR".
 */
define('WPLANG', 'fr_FR');

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');