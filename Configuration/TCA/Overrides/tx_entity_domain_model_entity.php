<?php

$GLOBALS['TCA']['tx_entity_domain_model_entity']['external'] = [
	'general' => [
		'translation' => [
			'connector' => 'json',
			'parameters' => [
				'uri' => 'fileadmin/import/products/test-abc.json',
				'encoding' => 'utf8',
			],
			'data' => 'array',
			'referenceUid' => 'token',
			'priority' => 10,
			'description' => 'Test Product Importer',
			'pid' => 51,
			'disabledOperations' => 'insert, delete',
		]
	]
];

$GLOBALS['TCA']['tx_entity_domain_model_entity']['columns']['token']['external']['translation'] = [
	'field' => 'token'
];

$GLOBALS['TCA']['tx_entity_domain_model_entity']['columns']['title']['external']['translation'] = [
	'field' => 'title'
];

$GLOBALS['TCA']['tx_entity_domain_model_entity']['columns']['subtitle']['external']['translation'] = [
	'field' => 'subtitle'
];

$GLOBALS['TCA']['tx_entity_domain_model_entity']['columns']['long_description']['external']['translation'] = [
	'field' => 'long_description'
];


