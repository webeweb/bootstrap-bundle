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
 * JS asset provider.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Asset
 */
class JSAssetProvider extends AbstractAssetProvider implements JSAssetProviderInterface {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.bootstrap.asset.js";

    /**
     * {@inheritdoc}
     */
    public function getFilenames() {

        // Initialize the filenames.
        $filenames = [];

        // jQuery
        $filenames[] = "/jquery-3.2.1/jquery-3.2.1.min.js";
        // Bootstrap
        $filenames[] = "/bootstrap-3.3.7/js/bootstrap.min.js";
        // Bootstrap Colorpicker plug-in
        $filenames[] = "/bootstrap-colorpicker-2.5.1/js/bootstrap-colorpicker.min.js";
        // Bootstrap Datepicker plug-in
        $filenames[] = "/bootstrap-datepicker-1.7.1/js/bootstrap-datepicker.min.js";
        // Bootstrap Daterangepicker plug-in
        $filenames[] = "/moment-2.20.1/moment-with-locales.min.js";
        $filenames[] = "/bootstrap-daterangepicker-2.1.27/daterangepicker.js";
        // Bootstrap Markdown plug-in
        $filenames[] = "/bootstrap-markdown-2.10.0/js/bootstrap-markdown.js";
        // Bootstrap Notify plug-in
        $filenames[] = "/bootstrap-notify-3.1.3/bootstrap-notify.min.js";
        // Bootstrap Select plug-in
        $filenames[] = "/bootstrap-select-1.12.4/js/bootstrap-select.min.js";
        // Bootstrap Slider plug-in
        $filenames[] = "/bootstrap-slider-10.0.0/bootstrap-slider.min.js";
        // Bootstrap Tagsinput plug-in
        $filenames[] = "/bootstrap-tagsinput-0.8.0/bootstrap-tagsinput.min.js";
        // Bootstrap Timepicker plug-in
        $filenames[] = "/bootstrap-timepicker-0.5.2/js/bootstrap-timepicker.min.js";
        // Bootstrap WYSIWIG plug-in
        $filenames[] = "/wysihtml-0.4.15/wysihtml5x-toolbar.min.js";
        $filenames[] = "/handlebars-1.3.0/handlebars.runtime.js";
        $filenames[] = "/bootstrap-wysiwyg-0.3.3/bootstrap3-wysihtml5.min.js";
        // jQuery InputMask plug-in
        $filenames[] = "/jquery-inputmask-3.3.11/min/jquery.inputmask.bundle.min.js";
        // jQuery Select2 plug-in
        $filenames[] = "/jquery-select2-4.0.5/js/select2.min.js";
        // Material Design Hierarchical Display
        $filenames[] = "/material-design-hierarchical-display-1.0.1/jquery.zmd.hierarchical-display.min.js";
        // SweetAlert
        $filenames[] = "/sweetalert-2.1.0/sweetalert.min.js";
        // waitMe
        $filenames[] = "/waitme-1.19/waitMe.min.js";

        // Return the filenames.
        return $filenames;
    }

}
