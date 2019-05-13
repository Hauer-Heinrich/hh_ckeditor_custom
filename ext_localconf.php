<?php
if(!defined('TYPO3_MODE')) { die('Access denied.'); }

call_user_func(function() {
    $_EXTENSION = 'hh_ckeditor_custom';

    $version9 = \TYPO3\CMS\Core\Utility\VersionNumberUtility::convertVersionNumberToInteger(TYPO3_branch) >= \TYPO3\CMS\Core\Utility\VersionNumberUtility::convertVersionNumberToInteger('9.3');
    if($version9) {
      // TYPO3 9:
      $rtePresets = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(
        \TYPO3\CMS\Core\Configuration\ExtensionConfiguration::class
      )->get($_EXTENSION, "rtePresets");
    } else {
      // TYPO3 =< 8
      // Typo3 extension manager gearwheel icon (ext_conf_template.txt)
      $_extConfig = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTENSION]);
      $rtePresets = $_extConfig['rtePresets'];
    }

    // own rte ckeditor config
    $GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets'][$_EXTENSION] = $rtePresets;
});
