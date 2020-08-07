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
define( 'DB_NAME', 'coopers' );

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
define( 'AUTH_KEY',         'Z-b@;C4~?tu;v +31-5#!1x_MH>5HP[T/{}m9i;v9^nU(%2]4DI[R[_OU%&4l{(^' );
define( 'SECURE_AUTH_KEY',  '96lG,N`j(}VOc&[Yy10o;$&pQoW8TJ~F,#_`AU4e$T|E&ym4V1qQKm2t`x26@#R_' );
define( 'LOGGED_IN_KEY',    'Q[+TUDgr&@]u79VkHAo6(3%<V{AMDWdlr9:j]_H@uA,9]Vd<&R-pQzx8TT~t4)ku' );
define( 'NONCE_KEY',        '} FJb9fG@],;sjkB!aO}+,lB3$5HLfir4`hi(c.:Mmr,D*g3_A(OpI:q^YE%Yhj8' );
define( 'AUTH_SALT',        'ML,KzzRH8#b/_2GfUYdK2ZVj~~}fcBTM$G6Z_Ly$Zc-(wWpvRHg~Gl~o2DzzzG&&' );
define( 'SECURE_AUTH_SALT', '4StT?7*l@AA#,7r%%^Pnj)HG+dI-Wsx~XOAyk8c( ^@yg1suDLt5G^|0Ad/zp2^)' );
define( 'LOGGED_IN_SALT',   'Z:<;utBM5?$P^j5J)&w#YYDfo.zyo8GEHetuoHY|jkOVxC#hicL+SNP/Utpfr?|q' );
define( 'NONCE_SALT',       '4=`l<ovR4Jz_+ .)G7/1PS{LO?[h.Y?YL}>gnk90{]RfWH6(qKUcz7rxVASl76))' );

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
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
