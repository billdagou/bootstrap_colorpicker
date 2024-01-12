<?php
namespace Dagou\BootstrapColorpicker\Source;

use Dagou\BootstrapColorpicker\Interfaces\Source;
use TYPO3\CMS\Core\SingletonInterface;

abstract class AbstractSource implements Source, SingletonInterface {
    protected const URL = '';
    protected const VERSION = '3.4.0';

    /**
     * @return string
     */
    public function getCss(): string {
        return static::URL.'css/'.$this->getCssBuild();
    }

    /**
     * @return string
     */
    protected function getCssBuild(): string {
        return 'bootstrap-colorpicker.min.css';
    }

    /**
     * @return string
     */
    public function getJs(): string {
        return static::URL.'js/'.$this->getJsBuild();
    }

    /**
     * @return string
     */
    protected function getJsBuild(): string {
        return 'bootstrap-colorpicker.min.js';
    }
}