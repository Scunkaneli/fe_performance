<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "fe_performance".
 *
 * Auto generated 10-06-2013 22:33
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
	'title' => 'Frontend Performance',
	'description' => 'This extension improves the frontend performance in TYPO3 6.x. Currently adds JS minification (JSMinPlus) and some minor improvements. See readme.',
	'category' => 'be',
	'author' => 'Felix Nagel',
	'author_email' => 'info@felixnagel.com',
	'author_company' => '',
	'shy' => '',
	'priority' => '',
	'module' => '',
	'state' => 'alpha',
	'internal' => '',
	'uploadfolder' => '0',
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'version' => '0.1.0',
	'constraints' => array(
		'depends' => array(
			'typo3' => '6.0.0-6.1.99',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
);

?>