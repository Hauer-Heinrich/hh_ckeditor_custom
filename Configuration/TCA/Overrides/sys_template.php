<?php
defined('TYPO3_MODE') or die();

call_user_func(function() {
    $extensionKey = 'hh_ckeditor_custom';

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        $extensionKey,
        'Configuration/TypoScript',
        'Hauer-Heinrich - Custom ck_editor Config'
    );
});
