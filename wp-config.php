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
define('DB_NAME', 'glitch');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'HER,< IYsdxK#1Hy%ONa{!qWo2GG8]sJl)xqcBxp>3:w-p^*`J<.=`aI:8%ljvdI');
define('SECURE_AUTH_KEY',  '5RS}h^4n?tMPrRXS?n280u:7}%|TOUSxkrp*22 r]~A!3RM:YE3bdiw7S4H].AS{');
define('LOGGED_IN_KEY',    '1_FX>>$s Jq0I1zykfVt^MM#P^)WaR.tZ[)W9-V{Ntf2xbdOO%jGpIb.vCy|#Ut4');
define('NONCE_KEY',        'TVoxIpOmAG?XGXVh>]VTC-6an0i;w)aYhEv=?U3K_g?jso[.!+2]<8_AfOEX65Lq');
define('AUTH_SALT',        '3tG?Jq4n8Y*DDc4E(nUxwiXp{WnO/RD=sT+6V8)crcFtEfGTVUh9PP]T 6gJQ=V{');
define('SECURE_AUTH_SALT', 'Ha@h@ w%mChhKLD--ihw;wERWRUY^v-Xn|GoMlhK-DcF,v|=W23j)eAI5xO3($tK');
define('LOGGED_IN_SALT',   '!e>c7b!6(e248TcTt($&]v#:N-w[p]BQ$F]0hJIL<3qeQ.1@4:D14!kJc)96M<c_');
define('NONCE_SALT',       'z7tbA}2$ie35Wa1Y%.7qD#iaBbci(j^n` G+p&Ot7obWv;fO-u QbbHmcP~5X.{v');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_glitch';

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
