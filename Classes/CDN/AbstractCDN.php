<?php
namespace Dagou\BootstrapColorpicker\CDN;

use Dagou\BootstrapColorpicker\Interfaces\CDN;
use Dagou\BootstrapColorpicker\Traits\ExtConf;
use Dagou\BootstrapColorpicker\Traits\PageRenderer;
use TYPO3\CMS\Core\SingletonInterface;

abstract class AbstractCDN implements CDN, SingletonInterface {
    use ExtConf, PageRenderer;
    const URL = '';

    /**
     * @param string|NULL $css
     */
    public function loadCss(string $css = NULL) {
        $css = $this->renderCss($css);

        $this->getPageRenderer()->addCssLibrary($css);
    }

    /**
     * @param string|NULL $css
     *
     * @return string
     */
    protected function renderCss(string $css = NULL): string {
        return static::URL.'css/'.$this->getCss();
    }

    /**
     * @return string
     */
    protected function getCss(): string {
        return 'bootstrap-colorpicker.min.css';
    }

    /**
     * @param string|NULL $js
     * @param bool $footer
     */
    public function loadJs(string $js = NULL, bool $footer = TRUE) {
        $js = $this->renderJs($js);

        if ($footer) {
            $this->getPageRenderer()->addJsFooterLibrary('bootstrap-colorpicker', $js);
        } else {
            $this->getPageRenderer()->addJsLibrary('bootstrap-colorpicker', $js);
        }
    }

    /**
     * @param string|NULL $js
     *
     * @return string
     */
    protected function renderJs(string $js = NULL): string {
        return static::URL.'js/'.$this->getJs();
    }

    /**
     * @return string
     */
    protected function getJs(): string {
        return 'bootstrap-colorpicker.min.js';
    }
}