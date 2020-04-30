<?php
if(!defined('TYPO3_MODE')) { die('Access denied.'); }

call_user_func(function() {
    $extensionKey = 'hh_ckeditor_custom';

    $version9 = \TYPO3\CMS\Core\Utility\VersionNumberUtility::convertVersionNumberToInteger(TYPO3_branch) >= \TYPO3\CMS\Core\Utility\VersionNumberUtility::convertVersionNumberToInteger('9.3');
    // TODO: "TYPO3_branch" is deprecated, https://docs.typo3.org/c/typo3/cms-core/master/en-us/Changelog/10.3/Deprecation-90007-GlobalConstantsTYPO3_versionAndTYPO3_branch.html
    // $typo3Version = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Information\Typo3Version::class)->getVersion();
    // $version10 = \TYPO3\CMS\Core\Utility\VersionNumberUtility::convertVersionNumberToInteger($typo3Version) >= \TYPO3\CMS\Core\Utility\VersionNumberUtility::convertVersionNumberToInteger('10.0');

    if($version9) {
        // TYPO3 9:
        $rtePresets = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(
            \TYPO3\CMS\Core\Configuration\ExtensionConfiguration::class
        )->get($extensionKey, 'rtePresets');
    } else {
        // TYPO3 =< 8
        // Typo3 extension manager gearwheel icon (ext_conf_template.txt)
        $_extConfig = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$extensionKey]);
        $rtePresets = $_extConfig['rtePresets'];
    }

    // own rte ckeditor config
    $GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets'][$extensionKey] = $rtePresets;
});
