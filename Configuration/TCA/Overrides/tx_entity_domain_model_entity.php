<?php

// ---------------------------------------------------------------------------------------------------------------------
// Neue Felder
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tx_entity_domain_model_entity', [
	'token' => [
		'exclude' => true,
		'label' => 'LLL:EXT:entity_product_import/Resources/Private/Language/locallang_tca.xlf:tx_entity_domain_model_entity.token',
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
$GLOBALS['TCA']['tx_entity_domain_model_entity']['external'] = [
	'general' => [
		'translation' => [
			'connector' => 'json',
			'parameters' => [
				'uri' => 'fileadmin/import/product/product.json',
				'encoding' => 'utf8',
			],
			'data' => 'array',
			'referenceUid' => 'token',
			'priority' => 10,
			'description' => 'Product Importer',
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

$GLOBALS['TCA']['tx_entity_domain_model_entity']['columns']['variant_title']['external']['translation'] = [
	'field' => 'variant_title'
];

$GLOBALS['TCA']['tx_entity_domain_model_entity']['columns']['short_description']['external']['translation'] = [
	'field' => 'short_description'
];

$GLOBALS['TCA']['tx_entity_domain_model_entity']['columns']['long_description']['external']['translation'] = [
	'field' => 'long_description'
];

$GLOBALS['TCA']['tx_entity_domain_model_entity']['columns']['technical_data']['external']['translation'] = [
	'field' => 'technical_data'
];

$GLOBALS['TCA']['tx_entity_domain_model_entity']['columns']['technical_features_description']['external']['translation'] = [
	'field' => 'technical_features_description'
];

$GLOBALS['TCA']['tx_entity_domain_model_entity']['columns']['options']['external']['translation'] = [
	'field' => 'options'
];

$GLOBALS['TCA']['tx_entity_domain_model_entity']['columns']['accesories_description']['external']['translation'] = [
	'field' => 'accesories_description'
];

$GLOBALS['TCA']['tx_entity_domain_model_entity']['columns']['air_consumption_data']['external']['translation'] = [
	'field' => 'air_consumption_data'
];

$GLOBALS['TCA']['tx_entity_domain_model_entity']['columns']['seo_title']['external']['translation'] = [
	'field' => 'seo_title'
];

$GLOBALS['TCA']['tx_entity_domain_model_entity']['columns']['meta_description']['external']['translation'] = [
	'field' => 'meta_description'
];

$GLOBALS['TCA']['tx_entity_domain_model_entity']['columns']['og_title']['external']['translation'] = [
	'field' => 'og_title'
];

$GLOBALS['TCA']['tx_entity_domain_model_entity']['columns']['og_description']['external']['translation'] = [
	'field' => 'og_description'
];

$GLOBALS['TCA']['tx_entity_domain_model_entity']['columns']['twitter_title']['external']['translation'] = [
	'field' => 'twitter_title'
];

$GLOBALS['TCA']['tx_entity_domain_model_entity']['columns']['twitter_description']['external']['translation'] = [
	'field' => 'twitter_description'
];


