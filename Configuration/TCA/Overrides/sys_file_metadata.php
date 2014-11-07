<?php
if (!defined('TYPO3_MODE')) die ('Access denied.');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('sys_file_metadata', 'localization', '', 'before:description');

$tca = array(
	'columns' => array(
		'localization' => array(
			'label' => 'Localization',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', ''),
					array('English', 'en'),
					array('German', 'de'),
				),
				'maxitems' => 1,
				'minitems' => 0,
			),
		),
	),
);
\TYPO3\CMS\Core\Utility\ArrayUtility::mergeRecursiveWithOverrule($GLOBALS['TCA']['sys_file_metadata'], $tca);