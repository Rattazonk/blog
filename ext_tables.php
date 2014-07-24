<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Slimblog');


// extend page attributes
\TYPO3\CMS\Core\Utility\GeneralUtility::loadTCA('pages');


// add category page doktype

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

$newColumns = array(
	'tx_slimblog_author' => array(
		'exclude' => 0,
		'label'	=> 'LLL:EXT:slimblog/Resources/Private/Language/locallang_db.xlf:author',
		'config' => array(
			'type' => 'select',
			'size' => 10,
			'foreign_table' => 'be_users',
			'minitems' => 0,
			'maxitems' => 999,
		)
	)
);


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('pages', $newColumns, 1);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('pages', 'tx_slimblog_author;;;;1-1-1');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('pages_language_overlay', $newColumns, 1);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('pages_language_overlay', 'tx_slimblog_author;;;;1-1-1');
