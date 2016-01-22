<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "bsdist".
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
	'title' => 'Bootstrap Kickstart Package',
	'description' => 'An initial page tree will be imported and bootstrap_core will be installed. A collection of files for the website layout and extension configuration is included.',
	'category' => 'distribution',
	'author' => 'Pascal Mayer',
	'author_email' => 'typo3@bsdist.ch',
	'author_company' => '',
	'shy' => '',
	'version' => '1.3.2',
	'priority' => '',
	'module' => '',
	'state' => 'stable',
	'internal' => '',
	'uploadfolder' => '0',
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 1,
	'lockType' => '',
	'constraints' => array (
		'depends' => array (
			'typo3' => '6.2.0-7.6.99',
			'bootstrap_core' => '1.2.6-0.0.0',
			'scheduler' => '6.2.0-0.0.0',
			'recycler' => '6.2.0-0.0.0',
		),
		'conflicts' => array (
			'bootstrap_package' => '',
			'introduction' => '',
		),
	),
);

?>