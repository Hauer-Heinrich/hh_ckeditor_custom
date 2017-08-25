<?php
defined('TYPO3_MODE') or die();

call_user_func(function() {
  $_EXTENSION = 'hh_ckeditor_custom';

  \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    $_EXTENSION,
    'Configuration/TypoScript',
    'hh Custom ck_editor Config'
  );
});
