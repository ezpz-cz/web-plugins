<?php
/**
*
* Who Visited This Topic extension for the phpBB Forum Software package.
*
* @copyright (c) 2015 brunino
* @license GNU General Public License, version 2 (GPL-2.0)
*
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
// ’ « » “ ” …
//

$lang = array_merge($lang, array(
	'ACL_U_WVTT'		=> 'Can view Who Visited A Topic',
	'ACL_U_WVTT_COUNT'		=> 'Can view topics visits number for each user',
	'ACL_U_WVTT_POPUP'		=> 'Can view the dates of who visited a topic',
	'ACL_U_WVTT_PROFILE'		=> 'Can view last topics visited by users (in profiles)',
	'EXTENSION_BY'		=> 'Extension created by',
	'WVTT_DETAILS'		=> 'See details',
	'WVTT_PROFILE'		=> 'Last topics visited',
	'WVTT_TITLE'		=> 'Who Visited This Topic',
));