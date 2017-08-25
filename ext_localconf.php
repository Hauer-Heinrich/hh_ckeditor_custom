<?php
if(!defined('TYPO3_MODE')) {
	die('Access denied.');
}

call_user_func(function() {
  $_EXTENSION = 'hh_ckeditor_custom';

  // Typo3 extension manager (ext_conf_template.txt)
  $_extConfig = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTENSION]);
  $rtePresets = $_extConfig['rtePresets'];

  // own rte ckeditor config
  $GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets'][$_EXTENSION] = $rtePresets;
});
