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
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'WELCOMEONINDEX_UPDATED'					=> 'Configurações do Boas-vindas No Índice atualizadas',
	'ACP_WELCOMEONINDEX_DONATE'					=> 'Por favor, considere uma <a href="http://www.phpbb3bbcodes.com/donate.php" onclick="window.open(this.href);return false;"><strong>Doação</strong></a> se você gosta da extensão',
	'ACP_WELCOMEONINDEX_SETTINGS'				=> 'Configurações do Boas-Vindas No Índice',
	'ACP_WELCOMEONINDEX_INFO_PREVIEW'			=> 'Prever Boas-Vindas No Índice',
	
	'ACP_WELCOMEONINDEX_INFO'					=> 'Texto de Boas-Vindas',
	'ACP_WELCOMEONINDEX_INFO_EXPLAIN'			=> 'Você pode editar o texto que é exibido na caixa Boas-Vindas No Índice.',
	'ACP_ENABLE_WELCOMEONINDEX'					=> 'Ativar Boas-Vindas No Índice',
	'ACP_ENABLE_WELCOMEONINDEX_AVATAR'			=> 'Ativar Exibição de Avatar',
	'ACP_ENABLE_WELCOMEONINDEX_DAY_MESSAGE'		=> 'Ativar mensagens de Boas-Vindas por hora do dia',
	'ACP_ENABLE_WELCOMEONINDEX_JOINED'			=> 'Ativar informação de registro',
));
