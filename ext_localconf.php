<?php
if(!defined('TYPO3_MODE')) { die('Access denied.'); }

call_user_func(function() {
    $extensionKey = 'hh_ckeditor_custom';

    $rtePresets = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(
        \TYPO3\CMS\Core\Configuration\ExtensionConfiguration::class
    )->get($extensionKey, 'rtePresets');

    // own rte ckeditor config
    $GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets'][$extensionKey] = $rtePresets;
});
