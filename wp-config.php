<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'game.bsantana.me');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'newlii123');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'wMra|}q{2UtrMy;S`rMwx~|xoa80FQ/i.7){tMP8Qt6hiYCBkxoHlP5}&-i9s5--');
define('SECURE_AUTH_KEY',  'Rpp$WQo.-ve!_FV4S4mi4*gl%lDw@f6g1HrbRXQ-hD>,NO=S30_Xo5,put$)k8-R');
define('LOGGED_IN_KEY',    '2(R|`m0<R{][4.w<=D&?X3Ah|o(kb |1RV8p.*6o#IV%)wI-d30(#+W~|eI84tP+');
define('NONCE_KEY',        'ydB.0|-X=gN0Dz$i$%CR%w^M7e6m[pw/(3>epstTp&]R=FQ[ aU% R+Onop]|=#8');
define('AUTH_SALT',        ';k-@Lu6Q11%5C]SXB(^^5J2R3>[1}[_OY9m* >v}[{4p5,Lg>=<p,diL:_SY8l,2');
define('SECURE_AUTH_SALT', 'O+wA:w,!G(dtD3,h{#gU]N2=*f+yMkAP!QcBMqVF?S@H@N{wt!!C28fP05f!-}Gb');
define('LOGGED_IN_SALT',   '|dH:*yo+^]m+1ZYeSz88-;bB=X3qUiYr&fwgx8dmLuY?f0ZW~m~!Q~n!JYQ/_>Zb');
define('NONCE_SALT',       'YmPonjW-#Pg[G9s8/e *It.<:TT;,ziQ0-~LPhsG2*53k:FSw|%@BS/I=k{N{Ei(');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * O idioma localizado do WordPress é o inglês por padrão.
 *
 * Altere esta definição para localizar o WordPress. Um arquivo MO correspondente ao
 * idioma escolhido deve ser instalado em wp-content/languages. Por exemplo, instale
 * pt_BR.mo em wp-content/languages e altere WPLANG para 'pt_BR' para habilitar o suporte
 * ao português do Brasil.
 */
define('WPLANG', 'pt_BR');

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
