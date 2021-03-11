<?php
namespace Dagou\BootstrapColorpicker\Interfaces;

interface Source {
    const VERSION = '3.2.0';

    /**
     * @return string
     */
    public function getCss(): string;

    /**
     * @return string
     */
    public function getJs(): string;
}