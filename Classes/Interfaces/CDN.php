<?php
namespace Dagou\BootstrapColorpicker\Interfaces;

interface CDN {
    const VERSION = '3.2.0';

    /**
     * @param string|NULL $css
     */
    public function loadCss(string $css = NULL);

    /**
     * @param string|NULL $js
     * @param bool $footer
     */
    public function loadJs(string $js = NULL, bool $footer = TRUE);
}