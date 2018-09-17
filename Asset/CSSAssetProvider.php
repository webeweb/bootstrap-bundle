<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Asset;

use WBW\Bundle\BootstrapBundle\Asset\AbstractAssetProvider;
use WBW\Bundle\BootstrapBundle\Provider\Asset\CSSAssetProviderInterface;

/**
 * CSS asset provider.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Asset
 */
class CSSAssetProvider extends AbstractAssetProvider implements CSSAssetProviderInterface {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.bootstrap.asset.css";

    /**
     * {@inheritdoc}
     */
    public function getResources() {

        // Initialize the resources.
        $resources = [];

        // Animate.css
        $resources[] = "/animate.css-3.5.2/animate.min.css";
        // Bootstrap
        $resources[] = "/bootstrap-3.3.7/css/bootstrap.min.css";
        // Bootstrap Colorpicker plug-in
        $resources[] = "/bootstrap-colorpicker-2.5.1/css/bootstrap-colorpicker.min.css";
        // Bootstrap Datepicker plug-in
        $resources[] = "/bootstrap-datepicker-1.7.1/css/bootstrap-datepicker.min.css";
        // Bootstrap Daterangepicker plugin
        $resources[] = "/bootstrap-daterangepicker-2.1.27/daterangepicker.css";
        // Bootstrap Markdown plug-in
        $resources[] = "/bootstrap-markdown-2.10.0/css/bootstrap-markdown.min.css";
        // Bootstrap Select plug-in
        $resources[] = "/bootstrap-select-1.12.4/css/bootstrap-select.min.css";
        // Bootstrap Slider plug-in
        $resources[] = "/bootstrap-slider-10.0.0/css/bootstrap-slider.min.css";
        // Bootstrap Social plug-in
        $resources[] = "/bootstrap-social-5.1.1/bootstrap-social.css";
        // Bootstrap Tagsinput plug-in
        $resources[] = "/bootstrap-tagsinput-0.8.0/bootstrap-tagsinput.css";
        // Bootstrap Timepicker plug-in
        $resources[] = "/bootstrap-timepicker-0.5.2/css/bootstrap-timepicker.min.css";
        // Bootstrap WYSIWIG plug-in
        $resources[] = "/bootstrap-wysiwyg-0.3.3/bootstrap3-wysihtml5.min.css";
        // Font Awesome
        $resources[] = "/fontawesome-5.0.10/css/fontawesome-all.min.css";
        // jQuery Select2 plug-in
        $resources[] = "/jquery-select2-4.0.5/css/select2.min.css";
        // Material Design Color Palette
        $resources[] = "/material-design-color-palette-1.1.0/material-design-color-palette.min.css";
        // Material Design Hierarchical Display
        $resources[] = "/material-design-hierarchical-display-1.0.1/zmd.hierarchical-display.min.css";
        // Material Design Iconic Font
        $resources[] = "/material-design-iconic-font-2.2.0/css/material-design-iconic-font.min.css";
        // Meteocons
        $resources[] = "/meteocons/stylesheet.css";
        // waitMe
        $resources[] = "/waitme-1.19/waitMe.min.css";

        // Return the resources.
        return $resources;
    }

}
