<?php
if(!defined('TYPO3_MODE')) {
	die('Access denied.');
}

$_EXTENSION = 'hh_ckeditor_custom';

// own rte ckeditor config
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['hh_custom_ckeditor'] = 'fileadmin/' . $_EXTENSION . '/Configuration/RTE/custom_ckeditor_config.yaml';
