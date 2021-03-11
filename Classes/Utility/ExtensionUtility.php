<?php
namespace Dagou\BootstrapColorpicker\Utility;

class ExtensionUtility {
    /**
     * @param string $sourceClassName
     */
    public static function registerSource(string $sourceClassName) {
        $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['bootstrap_colorpicker']['Source'] = $sourceClassName;
    }

    /**
     * @return string
     * @internal
     */
    public static function getSource(): string {
        return $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['bootstrap_colorpicker']['Source'] ?? '';
    }
}