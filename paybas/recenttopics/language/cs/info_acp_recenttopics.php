<?php
/**
 *
 * @package Recent Topics Extension
 * English translation by PayBas
 *
 * @copyright (c) 2015 PayBas
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 * Based on the original NV Recent Topics by Joas Schilling (nickvergessen)
 *
 */

if (!defined('IN_PHPBB'))
{
	exit;
}
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'RECENT_TOPICS'					=> 'Aktuální témata',
	'RECENT_TOPICS_LIST'			=> 'Zobrazit „aktuální témata“',
	'RECENT_TOPICS_LIST_EXPLAIN'	=> 'Povolit zobrazení témat v rozšíření fóra „Aktuální témata“.',

	'RT_CONFIG'						=> 'Konfigurace',
	'RT_ANTI_TOPICS'				=> 'Vyřazená témata',
	'RT_ANTI_TOPICS_EXP'			=> 'ID témat určených k vyřazení, která jsou oddělená “,“ (například: 7,9) <br />. Pokud nechcete téma vyřadit, zadejte “0“.',
	'RT_MIN_TOPIC_LEVEL'			=> 'Minimální úroveň tématu',
	'RT_MIN_TOPIC_LEVEL_EXP'		=> 'Určuje minimální úroveň tématu ke zobrazení. Zobrazí se pouze témata vybrané úrovně a vyšší. <br /> (0= normální, 1=sticky ,2=oznámení, 3= globální oznámení)',
	'RT_NUMBER'						=> 'Aktuální témata',
	'RT_NUMBER_EXP'					=> 'Počet témat ke zobrazení.',
	'RT_PAGE_NUMBER'				=> 'Stránky aktuálních témat',
	'RT_PAGE_NUMBER_EXP'			=> 'Můžete zobrazit více aktuálních témat použitím stránkování. Stačí zadat „1“ pro zakázání této funkce. Pokud zadáte „0“, zobrazí se tolik stránek, kolik bude potřeba ke zobrazení všech aktuálních témat na fóru(není doporučeno).',
	'RT_PARENTS'					=> 'Zobrazit nadřazené fórum',
	'RT_PARENTS_EXP'				=> 'Zobrazit nadřazená fóra u témat zobrazených v aktuálních tématech.',
	'RT_SORT_START_TIME'			=> 'Seřadit podle času založení tématu',
	'RT_SORT_START_TIME_EXP'		=> 'Povolit seřazení aktuálních témat podle času jejich založení, namísto seřazení podle posledního příspěvku.',
	'RT_UNREADONLY'					=> 'Zobrazit pouze nepřečtená témata',
	'RT_UNREADONLY_EXP'				=> 'Povolit zobrazení pouze nepřečtených témat (bez ohledu na to, zda jsou aktuální nebo ne). Tato funkce používá stejné nastavení (vyřazení fóra/témata atd.) jako normální mód. Poznámka: Toto funguje pouze pro přihlášené uživatele; hostům se zobrazí normální seznam.',

	'RT_VIEW_ON'					=> 'Zobrazení aktuálních témat:',
));
