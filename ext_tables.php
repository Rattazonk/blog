<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Slimblog');

$categoryPageDoktype = '48';
$GLOBALS['PAGES_TYPES'][$categoryPageDoktype] = array(
	'type' => 'web',
	'allowedTables' => '*'
);

// Add the new doktype to the page type selector
$GLOBALS['TCA']['pages']['columns']['doktype']['config']['items'][] = array(
        'LLL:EXT:slimblog/Resources/Private/Language/locallang.xlf:category_page_type',
        $categoryPageDoktype
);
$GLOBALS['TCA']['pages_language_overlay']['columns']['doktype']['config']['items'][] = array_shift(array_values(
	$GLOBALS['TCA']['pages']['columns']['doktype']['config']['items']
));
