<?php
defined('TYPO3_MODE') or die();

call_user_func(function() {
    $extensionKey = 'hh_ckeditor_custom';

    // make PageTsConfig selectable
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
        $extensionKey,
        'Configuration/PageTS/CustomCkeditor.ts',
        'EXT:'.$extensionKey.' :: HH ckeditor custom config'
    );
});
