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
define( 'DB_NAME', 'fistilandwp' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'admin' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'plop' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '%aXk8>9`g&/8VP4z?Q7I()KHqUwG+$y2Wc6|?WE27o,{%E*nJ0tvf|ElaiakiJZF' );
define( 'SECURE_AUTH_KEY',  'vf1u[dkuIw<rpo^ETvCp*q-%TLC[Jc*[7*y}VU)^i0h$01n~#NYfyFBl9XWpn$Q]' );
define( 'LOGGED_IN_KEY',    'h~O/75m*8VXAO)ic^&j9:YYbHi,B*jDcz+i.h<haRTPJ_|OJ{!Yj4/{PB[Ho;ezO' );
define( 'NONCE_KEY',        '6P%o1<j0xrq]D4U8D,C<;.ieT)u~XaGtIPGJ&I<`n;_]@E:e25#rB.XRA*zU6CGu' );
define( 'AUTH_SALT',        'm1CWyxf>HaUs[n!ji0{j=a]@D:`]s@XTXbq%Iz;2?;)A}q][{_UFcIQM7MwNGY(C' );
define( 'SECURE_AUTH_SALT', ',cc4]5`qW={ T(*4Ah45`[DiL$O&AH5aquy-NkX+gMy[7Ht~@Q4R;H~WQ@^iJUly' );
define( 'LOGGED_IN_SALT',   ')_E&AH%X`n2(B^N2!?JXisf($)X;.X@-3z0F# }|k.P1!Ul?kY&8&bw{Z.N>,`H^' );
define( 'NONCE_SALT',       'h!,$;M(c-Q2t=E2&&.);vr:1z.>>*-{^FyE?h4Kqjkx%rW&P/O*Hg)`Dda|5 T&,' );
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

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
