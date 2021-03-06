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
define('DB_NAME', 'itgmsi');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '(y`MI5OdGBpmmyTi&A*iwhIyuq`-Uv~4OM2d9;-HwVR@[}?.Sm3}vG!|%<AmHK!P');
define('SECURE_AUTH_KEY',  ';:*(GZdqwKhkwH@=}EBQHlKo&)X@S[IqAaWkng*W,m0PtYIY12>tlK-uD`AWG B3');
define('LOGGED_IN_KEY',    'I] (_}A&!rlGp-9!QAQ!hz{#uhd.|hw^Nwq_m-$w|NZAABkl0u3^k,EBI-l*7->(');
define('NONCE_KEY',        'F+v!hm?5RQYlswD0d#}rz{|.U,J+K45yt</U4y{9D [5r/1^}#uax0Eu/>^uI9%V');
define('AUTH_SALT',        'IA`=z(L #Bx,6mG4_6P|A@5u~ya@?ym5M-j.~N2I%Mxz}edId4>g+c$0&;OO628O');
define('SECURE_AUTH_SALT', '))+JF*f<X+K|=S .`sbTB>Z_vf^hw9UkzTTvi=Vdy5WVFwg+w_7w#f3lcnOaI,.S');
define('LOGGED_IN_SALT',   'yXd&F6dD=REBr,zww9.r-U!-v!+T|kBZzNT8y*y@QrNY?u]+bW|JsPTmrqD3@Sa<');
define('NONCE_SALT',       'U<UZy*^(dr Xr}/jP>C{0O}TbJ/ob>aQ[JYoBQ$a>l>A,vg/1o]dex@_soU&83cK');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'gmi_wp_';

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