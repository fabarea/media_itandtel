<?php
if (!defined('TYPO3_MODE')) die ('Access denied.');

$tca = array(
	'columns' => array(
		'is_localization' => array(
			'config' => array(
				'type' => 'check',
			),
		),
	),
);


\TYPO3\CMS\Core\Utility\ArrayUtility::mergeRecursiveWithOverrule($GLOBALS['TCA']['sys_file'], $tca);