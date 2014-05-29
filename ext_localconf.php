<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'Rattazonk.' . $_EXTKEY,
	'Posts',
	array(
		'Post' => 'list, show',
		
	),
	// non-cacheable actions
	array(
		'Post' => '',
		
	)
);
