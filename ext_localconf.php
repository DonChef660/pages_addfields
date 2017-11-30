<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

// Add new fields to the list of fields which should be overlaid on page records:
$TYPO3_CONF_VARS['FE']['pageOverlayFields'] .= ',tx_pagesaddfields_customtitle';
$TYPO3_CONF_VARS['FE']['pageOverlayFields'] .= ',tx_pagesaddfields_ausrichtunghorizontal';
$TYPO3_CONF_VARS['FE']['pageOverlayFields'] .= ',tx_pagesaddfields_ausrichtungvertikal';
$TYPO3_CONF_VARS['FE']['pageOverlayFields'] .= ',tx_pagesaddfields_color';
