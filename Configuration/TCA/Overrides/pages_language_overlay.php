<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

// Configure new field:
$fields = [
	'tx_pagesaddfields_customtitle' => [
		'label' => 'Claim',
		'exclude' => 1,
		'config' => [
			'type' => 'text',
			'cols' => 40,
        	'rows' => 15
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
            	['Schwarz', 'claim-black'],
            	['Weiss', 'claim-white'],
            ],
            'size' => 1,
    		'minitems' => 0,
    		'maxitems' => 1,
		],
	],
];

// Add new field to translated pages:
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('pages_language_overlay', $fields);

// Make field visible in the TCEforms:
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
	'pages_language_overlay', // Table name
	'--palette--;LLL:EXT:pages_addfields/Resources/Private/Language/locallang_db.xlf:pages.palette_title;tx_pagesaddfields', // Field list to add
	'', // List of specific types to add the field list to. (If empty, all type entries are affected)
	'after:nav_title' // Insert fields before (default) or after one, or replace a field
);

// Add the new palette:
$GLOBALS['TCA']['pages_language_overlay']['palettes']['tx_pagesaddfields'] = [
	'showitem' => 'tx_pagesaddfields_customtitle,tx_pagesaddfields_ausrichtunghorizontal,tx_pagesaddfields_ausrichtungvertikal,tx_pagesaddfields_color'
];

