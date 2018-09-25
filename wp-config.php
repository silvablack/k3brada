<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'k3brada');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'password');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '&c4ZOXqwNp|g7*{SA0@ZAYpTh]rlVIL/q9Ln QOu{]dbZXFYfaX1]U)zs|{8&A{i');
define('SECURE_AUTH_KEY',  'V,&VLECnr|U4nm!j}7[,H4y4@t+FD?oU^|Cl#a>$8p1gm >Jrn#:2Z(aZF}3l-[S');
define('LOGGED_IN_KEY',    'C+<=:23lz?d?,p1[ixDC_jL~`:O,!y.pEpKdfo@S4!T@O1f&%h&jmc3-.$HO=ac%');
define('NONCE_KEY',        'CfoDK{6~/XPy#3!_#raUeM,i}+G~E(V4=[zOxm*#8`|;x%3@b9Y#C8I=w?xPxUkY');
define('AUTH_SALT',        'Rn+I8g:7yf#R|r&5>?Hn/Bhnh0:@-)Yb#s{J7$^BND48PqD*Ew<M ,PTqQkl&Flm');
define('SECURE_AUTH_SALT', '{+wSNMpR0cApP6sWsE9;aMp_v)],T,2?i~`-:V<&L%)Z6k*7fYuM2*G*nGuH]QKz');
define('LOGGED_IN_SALT',   'iCLS,zyJq#)F6Lj~bZL4@<2:eA@`HRDr))[P2|UP^[*8CBt`mU b^6j@)#vHx~-0');
define('NONCE_SALT',       'n}5b@t.^NK9Lypb#{FX:Y@L*V/=STh^g]B(o+oyf0F>EhIeECs:hWg$q~=34:+~|');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
