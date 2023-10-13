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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'estudo' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'being' );

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
define( 'AUTH_KEY',         'WqH b/%vP{cE.NK]SdUbTWj0Cd0A/Oq#H EC_=PVR~fdk]1Dx(,R@d%9hgGi]@(Q' );
define( 'SECURE_AUTH_KEY',  'wg.(W3fQatT4>{b9IFt%cP>2`m~n(~,}pb:;IY! dS;J)xdh=4SpQUzXD|H :!ac' );
define( 'LOGGED_IN_KEY',    'd2~H^=GO*AW*Sk2boUIN*4>effu{;Don+Poi:R=VKT-5,Dtm|$^<[Pf$85loQ;U>' );
define( 'NONCE_KEY',        'W21L]`IW}6qtKUI?^^8gyKDY;(J#tI>-G6KiKL*`W<.+]&p#0QgEi.0AUInNLaCw' );
define( 'AUTH_SALT',        'qV&Z^l1$l08|zR2FvA 5xB=bp~l$)*JNK(EGt7KD G|lL:fouN(&Zs[0A~twfdkn' );
define( 'SECURE_AUTH_SALT', 'E&ge<TZ=)^CAHKqP vq$G?F^Khx%(L51a<)d3X(+i?l-PQ;&0upk`l!gkS^7HL3o' );
define( 'LOGGED_IN_SALT',   '_546s9 AS%Vc0Q1^~9FAh/qZHx5kh{] $@c/wlE]g=z;;.x)O53)VZ[%%@dDutZ-' );
define( 'NONCE_SALT',       'OsJ3|B#rf9r,@pL(%v-A5qniD*a i+{%PiM@$,E?MM O4~`T*01fjKsp$SF&tEFf' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_estudo';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
