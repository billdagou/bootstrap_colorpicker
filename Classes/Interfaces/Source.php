<?php
namespace Dagou\BootstrapColorpicker\Interfaces;

interface Source {
    /**
     * @return string
     */
    public function getCss(): string;

    /**
     * @return string
     */
    public function getJs(): string;
}