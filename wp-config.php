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
define('DB_NAME', 'site1');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'pass');

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
define('AUTH_KEY',         'Z{?6,!iy1&r9yRU6xir|Hzk5[B.y>&{UZYM|(j)(,5IP3waSyD?ci1h=%m3 FFCF');
define('SECURE_AUTH_KEY',  'CniL&3Ve*tj[f?,A6XP:9}$QpfAh%eeO&is/gap{ee`6l!rf7$2R[r2]{$ch}OXR');
define('LOGGED_IN_KEY',    ']:n((9S/#+6K5i4|=I~R>#qTc[!am3_v4x2@6ea^Te&l-o,}5Eu @gm-iD1*jb2I');
define('NONCE_KEY',        'syg+j4sJsY;]Y# DH{M8A0h)|)HP!-=(m6YsdcB E#n8>Z-GI5#o%s(f{l6f}*Wn');
define('AUTH_SALT',        'QdeeyM42%HM6qr]eoX#]d*>t{~EM2;k,1H&9eg#-9`^<ER5y5oHuur^[6LJa)|h)');
define('SECURE_AUTH_SALT', 'qT+8uwiYL_q$+T<g5`~+sao#6j*:ev,K<YnyZXP8@$-ZA8g=QrL@6,NkO^)ZaU(5');
define('LOGGED_IN_SALT',   ',leoP0(Cj}%aG)*$#qYKVWZ9*q:?5{FZ)Fl:+P5qq*DYbpS5$Ekuet8wYg)T`v]y');
define('NONCE_SALT',       '.1HC>WFG-1sJ}l:0&,WHz{_:,0I T-ygVtNiQr1A.,MFmu{itrTiS.:jSaYspBB*');

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
