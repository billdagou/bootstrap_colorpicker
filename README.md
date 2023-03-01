# TYPO3 Extension: Bootstrap Colorpicker

EXT:bootstrap_colorpicker allows you to use [Bootstrap Colorpicker](https://itsjavi.com/bootstrap-colorpicker/) in your extensions.

**The extension version only matches the Bootstrap library version, it doesn't mean anything else.**

## How to use it
You can load the libraries in your Fluid template easily.

    <bscp:css />
    <bscp:js />

Or load your own libraries.

    <bscp:css href="..." />
    <bscp:js src="..." />

For more options please refer to &lt;f:asset.css&gt; and &lt;f:asset.script&gt;.

To use other Bootstrap Colorpicker source, you can register it in `ext_localconf.php` or `AdditionalConfiguration.php`.

    \Dagou\BootstrapColorpicker\Utility\ExtensionUtility::registerSource(\Vendor\Extension\Source::class);