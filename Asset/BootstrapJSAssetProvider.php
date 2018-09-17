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
use WBW\Bundle\BootstrapBundle\Provider\Asset\JSAssetProviderInterface;

/**
 * Bootstrap JS asset provider.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Asset
 */
class BootstrapJSAssetProvider extends AbstractAssetProvider implements JSAssetProviderInterface {

    /**
     * {@inheritdoc}
     */
    public function getResources() {

        // Initialize the resources.
        $resources = [];

        // jQuery
        $resources[] = "/jquery-3.2.1/jquery-3.2.1.min.js";
        // Bootstrap
        $resources[] = "/bootstrap-3.3.7/js/bootstrap.min.js";
        // Bootstrap Colorpicker plug-in
        $resources[] = "/bootstrap-colorpicker-2.5.1/js/bootstrap-colorpicker.min.js";
        // Bootstrap Datepicker plug-in
        $resources[] = "/bootstrap-datepicker-1.7.1/js/bootstrap-datepicker.min.js";
        // Bootstrap Daterangepicker plug-in
        $resources[] = "/moment-2.20.1/moment-with-locales.min.js";
        $resources[] = "/bootstrap-daterangepicker-2.1.27/daterangepicker.js";
        // Bootstrap Markdown plug-in
        $resources[] = "/bootstrap-markdown-2.10.0/js/bootstrap-markdown.js";
        // Bootstrap Notify plug-in
        $resources[] = "/bootstrap-notify-3.1.3/bootstrap-notify.min.js";
        // Bootstrap Select plug-in
        $resources[] = "/bootstrap-select-1.12.4/js/bootstrap-select.min.js";
        // Bootstrap Slider plug-in
        $resources[] = "/bootstrap-slider-10.0.0/bootstrap-slider.min.js";
        // Bootstrap Tagsinput plug-in
        $resources[] = "/bootstrap-tagsinput-0.8.0/bootstrap-tagsinput.min.js";
        // Bootstrap Timepicker plug-in
        $resources[] = "/bootstrap-timepicker-0.5.2/js/bootstrap-timepicker.min.js";
        // Bootstrap WYSIWIG plug-in
        $resources[] = "/wysihtml-0.4.15/wysihtml5x-toolbar.min.js";
        $resources[] = "/handlebars-1.3.0/handlebars.runtime.js";
        $resources[] = "/bootstrap-wysiwyg-0.3.3/bootstrap3-wysihtml5.min.js";
        // jQuery InputMask plug-in
        $resources[] = "/jquery-inputmask-3.3.11/min/jquery.inputmask.bundle.min.js";
        // jQuery Select2 plug-in
        $resources[] = "/jquery-select2-4.0.5/js/select2.min.js";
        // Material Design Hierarchical Display
        $resources[] = "/material-design-hierarchical-display-1.0.1/jquery.zmd.hierarchical-display.min.js";
        // SweetAlert
        $resources[] = "/sweetalert-2.1.0/sweetalert.min.js";
        // waitMe
        $resources[] = "/waitme-1.19/waitMe.min.js";

        // Return the resources.
        return $resources;
    }

}
