<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}


if (TYPO3_MODE == 'BE') {

	// Special process to fill column "is_localization"
	$GLOBALS ['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][] = 'Itandtel\MediaItandtel\Hook\DataHandlerHook';

}