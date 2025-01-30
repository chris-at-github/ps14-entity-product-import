<?php

if(defined('TYPO3') === false) {
	die('Access denied.');
}

(function () {

	// -------------------------------------------------------------------------------------------------------------------
	// Hooks
	// Automatisches Setzen des Tokens
	$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][\Ps\EntityProductImport\Service\TokenService::class] = \Ps\EntityProductImport\Service\TokenService::class;

})();