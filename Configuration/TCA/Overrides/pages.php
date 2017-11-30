<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

// Configure new fields:
$fields = [
	'tx_pagesaddfields_customtitle' => [
		'label' => 'LLL:EXT:pages_addfields/Resources/Private/Language/locallang_db.xlf:pages.tx_pagesaddfields_customtitle',
		'exclude' => 1,
		'config' => [
			'type' => 'text',
			'rows' => 42
		],
	],
	'tx_pagesaddfields_ausrichtunghorizontal' => [
		'label' => 'Ausrichtung Horizontal',
		'exclude' => 1,
		'config' => [
			'type' => 'select',
            'items' =>  [
            	['Zentriert', 'claim-center'],
            	['Links', 'claim-left'],
            	['Rechts', 'claim-right'],
            ],
            'size' => 1,
    		'minitems' => 0,
    		'maxitems' => 1,
		],
	],
	'tx_pagesaddfields_ausrichtungvertikal' => [
		'label' => 'Ausrichtung Vertikal',
		'exclude' => 1,
		'config' => [
			'type' => 'select',
            'items' =>  [
            	['Zentriert', ''],
            	['Oben', 'claim-v-top'],
            	['Unten', 'claim-v-bottom'],
            ],
            'size' => 1,
    		'minitems' => 0,
    		'maxitems' => 1,
		],
	],
	'tx_pagesaddfields_color' => [
		'label' => 'Text Farbe',
		'exclude' => 1,
		'config' => [
			'type' => 'select',
            'items' =>  [
            	['Schwarz', 'claim-white'],
            	['Weiss', 'claim-black'],
            ],
            'size' => 1,
    		'minitems' => 0,
    		'maxitems' => 1,
		],
	],
];

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
$GLOBALS['TCA']['pages']['palettes']['tx_pagesaddfields'] = [
	'showitem' => 'tx_pagesaddfields_customtitle,tx_pagesaddfields_ausrichtunghorizontal,tx_pagesaddfields_ausrichtungvertikal,tx_pagesaddfields_color'
];
