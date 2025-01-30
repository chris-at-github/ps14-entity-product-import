<?php

// ---------------------------------------------------------------------------------------------------------------------
// Neue Felder
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tx_entityproduct_domain_model_keyfact', [
	'token' => [
		'exclude' => true,
		'label' => 'LLL:EXT:entity_product_import/Resources/Private/Language/locallang_tca.xlf:tx_entityproduct_domain_model_keyfact.token',
		'config' => [
			'type' => 'input',
			'size' => 40,
			'eval' => 'trim',
			'readOnly' => true,
		],
	],
]);

// ---------------------------------------------------------------------------------------------------------------------
// Import Konfiguration
$GLOBALS['TCA']['tx_entityproduct_domain_model_keyfact']['external'] = [
	'general' => [
		'translation' => [
			'connector' => 'json',
			'parameters' => [
				'uri' => 'fileadmin/import/product/keyfact.json',
				'encoding' => 'utf8',
			],
			'data' => 'array',
			'referenceUid' => 'token',
			'priority' => 10,
			'description' => 'Key Facts Importer',
			'pid' => 121,
			'disabledOperations' => 'insert, delete',
		]
	]
];

$GLOBALS['TCA']['tx_entityproduct_domain_model_keyfact']['columns']['token']['external']['translation'] = [
	'field' => 'token'
];

$GLOBALS['TCA']['tx_entityproduct_domain_model_keyfact']['columns']['title']['external']['translation'] = [
	'field' => 'title'
];

$GLOBALS['TCA']['tx_entityproduct_domain_model_keyfact']['columns']['description']['external']['translation'] = [
	'field' => 'description'
];


