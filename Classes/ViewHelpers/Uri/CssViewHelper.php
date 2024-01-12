<?php
namespace Dagou\BootstrapColorpicker\ViewHelpers\Uri;

use Dagou\BootstrapColorpicker\Interfaces\Source;
use Dagou\BootstrapColorpicker\Source\Local;
use Dagou\BootstrapColorpicker\Utility\ExtensionUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

class CssViewHelper extends AbstractViewHelper {
    /**
     * @return string
     */
    public function render(): string {
        if (is_subclass_of(($className = ExtensionUtility::getSource()), Source::class)) {
            $source = GeneralUtility::makeInstance($className);
        } else {
            $source = GeneralUtility::makeInstance(Local::class);
        }

        return $source->getCss();
    }
}