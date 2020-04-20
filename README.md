# TYPO3 Extension: Bootstrap Colorpicker

EXT:bootstrap_colorpicker allows you to use [Bootstrap Colorpicker](https://itsjavi.com/bootstrap-colorpicker/) in your extensions.

**The extension version only matches the Bootstrap library version, it doesn't mean anything else.**

## How to use it
You can load the libraries in your Fluid template easily.

    <bscp:loadCss />
    <bscp:loadJs />

You can also load your own libraries.

    <bscp:loadCss css="..." />
    <bscp:loadJs js="..." />
    
Or, load the javascript library on top.

    <bscp:loadJs footer="false" />
    
To use the CDN resource, please set `$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['bootstrap_colorpicker']['CDN']` in `ext_localconf.php` or `AdditionalConfiguration.php`.

    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['bootstrap_colorpicker']['CDN'] = \Vender\Extension\CDN\Provider::class;