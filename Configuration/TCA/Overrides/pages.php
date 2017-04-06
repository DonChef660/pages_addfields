<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

// Configure new fields:
$fields = array(
	'tx_pagesaddfields_customtitle' => array(
		'label' => 'LLL:EXT:pages_addfields/Resources/Private/Language/locallang_db.xlf:pages.tx_pagesaddfields_customtitle',
		'exclude' => 1,
		'config' => array(
			'type' => 'input',
			'max' => 255
		),
	),
	'tx_pagesaddfields_customsubtitle' => array(
		'label' => 'LLL:EXT:pages_addfields/Resources/Private/Language/locallang_db.xlf:pages.tx_pagesaddfields_customsubtitle',
		'exclude' => 1,
		'config' => array(
			'type' => 'input',
			'max' => 255
		),
	),
);

// Add new fields to pages:
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('pages', $fields);

// Make fields visible in the TCEforms:
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
	'pages', // Table name
	'--palette--;LLL:EXT:pages_addfields/Resources/Private/Language/locallang_db.xlf:pages.palette_title;tx_pagesaddfields', // Field list to add
	'1', // List of specific types to add the field list to. (If empty, all type entries are affected)
	'after:nav_title' // Insert fields before (default) or after one, or replace a field
);

// Add the new palette:
$GLOBALS['TCA']['pages']['palettes']['tx_pagesaddfields'] = array(
	'showitem' => 'tx_pagesaddfields_customcheckbox,tx_pagesaddfields_customtitle'
	
);
$GLOBALS['TCA']['pages']['palettes']['tx_pagesaddfields'] = array(
	'showitem' => 'tx_pagesaddfields_customcheckbox,tx_pagesaddfields_customsubtitle'
);
