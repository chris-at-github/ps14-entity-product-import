<?php

$EM_CONF[$_EXTKEY] = [
	'title' => 'Ps14 Enity Product Import',
	'description' => 'Product import based on extension external_import',
	'category' => 'distribution',
	'author' => 'Christian Pschorr',
	'author_email' => 'pschorr.christian@gmail.com',
	'author_company' => '',
	'state' => 'beta',
	'uploadfolder' => 0,
	'clearCacheOnLoad' => 0,
	'version' => '1.0.0',
	'constraints' => [
		'depends' => [
			'typo3' => '12.0.0-12.4.99',
			'entity_product' => '2.0.0-2.9.99',
			'external_import' => '7.2.6-7.9.99',
		],
		'conflicts' => [],
		'suggests' => [],
	],
];
