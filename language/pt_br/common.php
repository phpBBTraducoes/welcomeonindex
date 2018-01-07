<?php
/**
*
* @package phpBB Extension - Welcome on Index
* @copyright (c) 2014 Stoker
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* Brazilian Portuguese translation by eunaumtenhoid (c) 2018 [ver 1.0.5] (https://github.com/phpBBTraducoes)
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
    'WELCOMEONINDEX_UPDATED'	=> 'Configurações do Boas-Vindas No Índice atualizadas',
	'UP_LATE'             		=> 'Você está atrasado %1$s, Não deveria estar dormindo?',
    'UP_EARLY'             		=> 'Bom Dia %1$s, Você levantou cedo hoje',
    'GOOD_MORNING'           	=> 'Bom Dia %1$s, Que manhã agradável',
	'GOOD_DAY'        			=> 'Bom Dia %1$s, Nós esperamos que você aproveite seu tempo aqui',
    'GOOD_AFTERNOON'       		=> 'Boa tarde %1$s, Finalmente você está aqui',
    'GOOD_EVENING'           	=> 'Boa noite %1$s, Bom te ver aqui',
   	'GOOD_NIGHT'           		=> 'Boa noite %1$s, Hora de ir para a cama',
    'WELCOME_GUEST'           	=> 'Visitante',
    'WELCOME_HOUR'           	=> 'Hora',
    'WELCOME_HOURS'           	=> 'Horas',
   	'WELCOME_DAY'           	=> 'Dia',
    'WELCOME_DAYS'           	=> 'Dias',
    'WELCOME_MONTH'           	=> 'Mês',
    'WELCOME_MONTHS'       		=> 'Mêses',
   	'WELCOME_YEAR'           	=> 'Ano',
    'WELCOME_YEARS'				=> 'Anos',
	'WELCOME_TO_MOD'			=> 'Bem-vindo ao',
	'WELCOME_PLEASE'			=> 'Por favor',
	'WELCOME_ENJOY'				=> 'para desfrutar o conteúdo completo deste site',
	'WELCOME_OR'				=> 'ou',
	'WELCOME_AND'				=> 'e',
	'WELCOME_YOU'				=> 'Você registro-se ao',
	'MEMBER_FOR'				=> 'Você é membro por:',
));
