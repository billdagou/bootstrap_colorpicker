<?php
namespace Dagou\BootstrapColorpicker\ViewHelpers;

use Dagou\BootstrapColorpicker\Interfaces\Source;
use Dagou\BootstrapColorpicker\Source\Local;
use Dagou\BootstrapColorpicker\Utility\ExtensionUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;

class CssViewHelper extends \TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper {
    public function initializeArguments(): void {
        parent::initializeArguments();

        $this->overrideArgument(
            'identifier',
            'string',
            'Use this identifier within templates to only inject your CSS once, even though it is added multiple times.',
            FALSE,
            'bootstrap_colorpicker'
        );
    }

    /**
     * @return string
     */
    public function render(): string {
        if (!$this->arguments['href']) {
            if (is_subclass_of(($className = ExtensionUtility::getSource()), Source::class)) {
                $source = GeneralUtility::makeInstance($className);
            } else {
                $source = GeneralUtility::makeInstance(Local::class);
            }

            $this->tag->addAttribute('href', $source->getCss());
        }

        return parent::render();
    }
}