<?php

if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

if (TYPO3_MODE == 'BE') {
	// Connect "postFileIndex" signal slot with the metadata service.
	$signalSlotDispatcher->connect(
		'TYPO3\CMS\Vidi\Controller\Backend\ContentController',
		'postProcessMatcherObject',
		'Itandtel\MediaItandtel\Security\FilePermissionsAspect',
		'addFilePermissions',
		TRUE
	);
}
