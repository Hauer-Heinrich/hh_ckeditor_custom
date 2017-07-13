<?php
defined('TYPO3_MODE') or die();

call_user_func(function() {
  $_EXTENSION = 'hh_ckeditor_custom';

  // make PageTsConfig selectable
  \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
  		$_EXTENSION,
  		'Configuration/PageTS/CustomCkeditor.ts',
  		'EXT:'.$_EXTENSION.' :: HH ckeditor custom config'
  );
});
?>
