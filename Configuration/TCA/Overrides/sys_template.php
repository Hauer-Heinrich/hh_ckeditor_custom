<?php
defined('TYPO3_MODE') or die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
  'hh_ckeditor_default',
  'Configuration/TypoScript',
  'hh Custom ck_editor Config'
);
