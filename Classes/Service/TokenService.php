<?php
namespace Ps\EntityProductImport\Service;

use TYPO3\CMS\Core\Database\ConnectionPool;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Utility\DebuggerUtility;

/**
 * Class TokenService
 * @package Ps\EntityProductImport
 */
class TokenService {

	/**
	 * @param string $status
	 * @param string $table
	 * @param string $id
	 * @param array $fields
	 * @param \TYPO3\CMS\Core\DataHandling\DataHandler $dataHandler
	 */
	function processDatamap_afterDatabaseOperations($status, $table, $id, &$fields, &$dataHandler) {
		if($table == 'tx_entity_domain_model_entity' || $table == 'tx_entityproduct_domain_model_keyfact') {

			// Uebersetzte Datensaetze bekommen vorerst die gleiche UID wie der Elterndatensatz
			if($status === 'new') {
				$connection = GeneralUtility::makeInstance(ConnectionPool::class)->getConnectionForTable($table);
				$sql = "UPDATE " . $table . " SET token = MD5(" . $dataHandler->substNEWwithIDs[$id] . ") WHERE uid = " . (int) $dataHandler->substNEWwithIDs[$id];
				$connection->executeQuery($sql);
			}

			// Fallback
			$connection = GeneralUtility::makeInstance(ConnectionPool::class)->getConnectionForTable($table);
			$sql = "UPDATE " . $table . " SET token = MD5(uid) WHERE token = ''";
			$connection->executeQuery($sql);
		}
	}
}