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
define( 'DB_NAME', 'wordpressTest' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'wordpressTest' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'wordpressTest' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'mP0!?J7m^fnO]Cb8Gnwilhhh3VbtxSHBE.VuLr5}]8<F5M(bRCG;oluDz@>N:$Cb' );
define( 'SECURE_AUTH_KEY',  '|s &QXYPjGSt6mPMq;_8zJ,]$3Iah+Fv(sl%r4IFLO[7-,DQsUv{lch+9!19y?rm' );
define( 'LOGGED_IN_KEY',    'E.j9:mf$esw<<(D=_UnWNZGR?t b3W4y%2o=iRXK4No1ha!MrcH@,.d0J]<#18TG' );
define( 'NONCE_KEY',        '{68F+T<syRJi&=h*V+`[>1!zd24RX0$&n?eOw%(Bv[jFK(DCm2PpvF7?sW3r;5<f' );
define( 'AUTH_SALT',        'yA(e7o2qg%X3YQTF_jXZaAxK| 0#R?ys-`5{<~pn|[SxVuBEK9OKWJ<5z?5pXFK+' );
define( 'SECURE_AUTH_SALT', '{(>`hgoh!{=c2 8~H1;sQi> ?%eX`l+a[n9&_C14ANh,o;#X234Qv29w?a3SxTWY' );
define( 'LOGGED_IN_SALT',   '.WTk@x{{KIt78c.tC(-?X(KF/$U;8>zwVnlNy&P~8OSH_v7p*$jZ,YO<-D0@lg}T' );
define( 'NONCE_SALT',       ')uBj<SQ8p*DnvU_,v(RMnVWJS~i?M;.(&l7LEQ>tUf!%rkqWBa&b?]%[>=hjIW]3' );

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
