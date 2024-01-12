# TYPO3 Extension: Bootstrap Colorpicker

EXT:bootstrap_colorpicker allows you to use [Bootstrap Colorpicker](https://itsjavi.com/bootstrap-colorpicker/) in your extensions.

**The extension version only matches the Bootstrap Colorpicker library version, it doesn't mean anything else.**

## How to use it
You can load the libraries in your Fluid template easily.

    <f:asset.css identifier="bootstrap_colorpicker" href="{bscp:uri.css()}" />
    <f:asset.script identifier="bootstrap_colorpicker" src="{bscp:uri.js()}" />

To use other Bootstrap Colorpicker source, you can register it in `ext_localconf.php` or `AdditionalConfiguration.php`.

    \Dagou\BootstrapColorpicker\Utility\ExtensionUtility::registerSource(\Vendor\Extension\Source::class);