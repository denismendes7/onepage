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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'bdteste' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         '/U]~+Ie,?4;}pYLnp1(5}Yn*42zZG~I,jnx=!y7v-tgRTAC<cr7:oo^Rs!jvLAA_' );
define( 'SECURE_AUTH_KEY',  'E}Cd-tkWoj@pr*q*/X1Ob$]xlKncZ+Y}ZEYFnxLrd+n8R-.)1(T>$WmK4?Y~po~!' );
define( 'LOGGED_IN_KEY',    'pW0te>eBB</UddK4{P^e&~bml2J.3IfX30TCPIdGu-z*1T2v9{[H#MD2RNd$kt5i' );
define( 'NONCE_KEY',        '$.@)_$F4|_o&pzc4zUlReu?{7u-a[3lH64E]O*G/Lq{DQi&t]yYt]4R=fH}$m<hu' );
define( 'AUTH_SALT',        'X,Ka.b_5<,[w)9i%L@IWLsbDl*U/G~j=RPgdJD,pCZos z 26[=.Y5kL,xUL!g}A' );
define( 'SECURE_AUTH_SALT', 'Ow)*JElt0R;l@-w1e?MXS]kNO_wW `ClcMe!C2=-OAf3tpU*fZXb1?~[sf K)Ex(' );
define( 'LOGGED_IN_SALT',   'O!Zx1u+c9VhRYyM4VWoi7S?yNg0FraQZ]B}bHG<V8,j)B&|:mWfb(i;Fb =8l%?y' );
define( 'NONCE_SALT',       'm=te:}6;o()WO~oK NAcPj5|.vvxFUqk)T{B{$J_#jk^F&12UjR!]ld2)A]0Tf)(' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );


/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
