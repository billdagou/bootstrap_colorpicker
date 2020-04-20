<?php
namespace Dagou\BootstrapColorpicker\CDN;

use Dagou\BootstrapColorpicker\Traits\Asset;

class Local extends AbstractCDN {
    use Asset;
    const URL = 'EXT:bootstrap_colorpicker/Resources/Public/';

    /**
     * @param string|NULL $css
     *
     * @return string
     */
    protected function renderCss(string $css = NULL): string {
        return $this->getAssetPath(
            self::URL.'css/'.$this->getCss()
        );
    }

    /**
     * @param string|NULL $js
     *
     * @return string
     */
    protected function renderJs(string $js = NULL): string {
        return $this->getAssetPath(
            self::URL.'js/'.$this->getJs()
        );
    }
}