<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'pages',
    'module',
    '4',
    'after:--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.miscellaneous;miscellaneous'
);

if (TYPO3_MODE === 'BE') {
    $icons = [
        'apps-pagetree-folder-contains-section' => 'EXT:template/Resources/Public/Backend/apps-pagetree-section.svg',
        'apps-pagetree-folder-contains-singlepage' => 'EXT:template/Resources/Public/Backend/apps-pagetree-singlepage.svg',
    ];

    /** @var \TYPO3\CMS\Core\Imaging\IconRegistry $iconRegistry */
    $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
    foreach ($icons as $identifier => $path) {
        $iconRegistry->registerIcon(
            $identifier,
            \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
            ['source' => $path]
        );
    }
}
