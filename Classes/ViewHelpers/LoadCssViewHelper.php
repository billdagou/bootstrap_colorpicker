<?php
namespace Dagou\BootstrapColorpicker\ViewHelpers;

class LoadCssViewHelper extends AbstractLoadViewHelper {
    public function initializeArguments() {
        $this->registerArgument('css', 'string', 'Bootstrap Colorpicker .CSS file path.');
    }

    public function render() {
        $cdn = $this->getCDN((bool)$this->arguments['css']);

        $cdn->loadCss($this->arguments['css']);
    }
}