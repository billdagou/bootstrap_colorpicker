<?php
namespace Dagou\BootstrapColorpicker\CDN;

use Dagou\BootstrapColorpicker\Traits\Asset;

class Customization extends AbstractCDN {
    use Asset;

    /**
     * @param string|NULL $css
     *
     * @return string
     */
    protected function renderCss(string $css = NULL): string {
        return $this->getAssetPath($css);
    }

    /**
     * @param string|NULL $js
     *
     * @return string
     */
    protected function renderJs(string $js = NULL): string {
        return $this->getAssetPath($js);
    }
}