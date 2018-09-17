<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Provider\Resources;

/**
 * CSS resources provider.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Provider\Resources
 */
class CSSResourcesProvider extends AbstractResourcesProvider implements CSSResourcesProviderInterface {

    /**
     * {@inheritdoc}
     */
    public function getResources() {

        // Initialize the output.
        $output = [];

        // Animate.css
        $output[] = "/animate.css-3.5.2/animate.min.css";
        // Bootstrap
        $output[] = "/bootstrap-3.3.7/css/bootstrap.min.css";
        // Bootstrap Colorpicker plug-in
        $output[] = "/bootstrap-colorpicker-2.5.1/css/bootstrap-colorpicker.min.css";
        // Bootstrap Datepicker plug-in
        $output[] = "/bootstrap-datepicker-1.7.1/css/bootstrap-datepicker.min.css";
        // Bootstrap Daterangepicker plugin
        $output[] = "/bootstrap-daterangepicker-2.1.27/daterangepicker.css";
        // Bootstrap Markdown plug-in
        $output[] = "/bootstrap-markdown-2.10.0/css/bootstrap-markdown.min.css";
        // Bootstrap Select plug-in
        $output[] = "/bootstrap-select-1.12.4/css/bootstrap-select.min.css";
        // Bootstrap Slider plug-in
        $output[] = "/bootstrap-slider-10.0.0/css/bootstrap-slider.min.css";
        // Bootstrap Social plug-in
        $output[] = "/bootstrap-social-5.1.1/bootstrap-social.css";
        // Bootstrap Tagsinput plug-in
        $output[] = "/bootstrap-tagsinput-0.8.0/bootstrap-tagsinput.css";
        // Bootstrap Timepicker plug-in
        $output[] = "/bootstrap-timepicker-0.5.2/css/bootstrap-timepicker.min.css";
        // Bootstrap WYSIWIG plug-in
        $output[] = "/bootstrap-wysiwyg-0.3.3/bootstrap3-wysihtml5.min.css";
        // Font Awesome
        $output[] = "/fontawesome-5.0.10/css/fontawesome-all.min.css";
        // jQuery Select2 plug-in
        $output[] = "/jquery-select2-4.0.5/css/select2.min.css";
        // Material Design Color Palette
        $output[] = "/material-design-color-palette-1.1.0/material-design-color-palette.min.css";
        // Material Design Hierarchical Display
        $output[] = "/material-design-hierarchical-display-1.0.1/zmd.hierarchical-display.min.css";
        // Material Design Iconic Font
        $output[] = "/material-design-iconic-font-2.2.0/css/material-design-iconic-font.min.css";
        // Meteocons
        $output[] = "/meteocons/stylesheet.css";
        // waitMe
        $output[] = "/waitme-1.19/waitMe.min.css";

        // Return the ouput.
        return $output;
    }

}
