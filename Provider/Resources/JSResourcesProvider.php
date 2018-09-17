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
 * JS resources provider.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Provider\Resources
 */
class JSResourcesProvider extends AbstractResourcesProvider implements JSResourcesProviderInterface {

    /**
     * {@inheritdoc}
     */
    public function getResources() {

        // Initialize the output.
        $output = [];

        // jQuery
        $output[] = "/jquery-3.2.1/jquery-3.2.1.min.js";
        // Bootstrap
        $output[] = "/bootstrap-3.3.7/js/bootstrap.min.js";
        // Bootstrap Colorpicker plug-in
        $output[] = "/bootstrap-colorpicker-2.5.1/js/bootstrap-colorpicker.min.js";
        // Bootstrap Datepicker plug-in
        $output[] = "/bootstrap-datepicker-1.7.1/js/bootstrap-datepicker.min.js";
        // Bootstrap Daterangepicker plug-in
        $output[] = "/moment-2.20.1/moment-with-locales.min.js";
        $output[] = "/bootstrap-daterangepicker-2.1.27/daterangepicker.js";
        // Bootstrap Markdown plug-in
        $output[] = "/bootstrap-markdown-2.10.0/js/bootstrap-markdown.js";
        // Bootstrap Notify plug-in
        $output[] = "/bootstrap-notify-3.1.3/bootstrap-notify.min.js";
        // Bootstrap Select plug-in
        $output[] = "/bootstrap-select-1.12.4/js/bootstrap-select.min.js";
        // Bootstrap Slider plug-in
        $output[] = "/bootstrap-slider-10.0.0/bootstrap-slider.min.js";
        // Bootstrap Tagsinput plug-in
        $output[] = "/bootstrap-tagsinput-0.8.0/bootstrap-tagsinput.min.js";
        // Bootstrap Timepicker plug-in
        $output[] = "/bootstrap-timepicker-0.5.2/js/bootstrap-timepicker.min.js";
        // Bootstrap WYSIWIG plug-in
        $output[] = "/wysihtml-0.4.15/wysihtml5x-toolbar.min.js";
        $output[] = "/handlebars-1.3.0/handlebars.runtime.js";
        $output[] = "/bootstrap-wysiwyg-0.3.3/bootstrap3-wysihtml5.min.js";
        // jQuery InputMask plug-in
        $output[] = "/jquery-inputmask-3.3.11/min/jquery.inputmask.bundle.min.js";
        // jQuery Select2 plug-in
        $output[] = "/jquery-select2-4.0.5/js/select2.min.js";
        // Material Design Hierarchical Display
        $output[] = "/material-design-hierarchical-display-1.0.1/jquery.zmd.hierarchical-display.min.js";
        // SweetAlert
        $output[] = "/sweetalert-2.1.0/sweetalert.min.js";
        // waitMe
        $output[] = "/waitme-1.19/waitMe.min.js";

        // Return the ouput.
        return $output;
    }

}
