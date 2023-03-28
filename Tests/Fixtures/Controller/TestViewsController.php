<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Fixtures\Controller;

use Symfony\Component\HttpFoundation\Response;
use Throwable;
use WBW\Bundle\BootstrapBundle\Controller\AbstractController;

/**
 * Test views controller.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Tests\Fixtures\Controller
 */
class TestViewsController extends AbstractController {

    /**
     * Render assets/_javascripts.html.twig
     *
     * @return Response Returns the response.
     */
    public function assetsJavascriptsAction(): Response {
        return $this->render("@WBWBootstrap/assets/_javascripts.html.twig");
    }

    /**
     * Render assets/_stylesheets.html.twig
     *
     * @return Response Returns the response.
     */
    public function assetsStylesheetsAction(): Response {
        return $this->render("@WBWBootstrap/assets/_stylesheets.html.twig");
    }

    /**
     * Render layout.html.twig
     *
     * @return Response Returns the response.
     */
    public function layoutAction(): Response {
        return $this->render("@WBWBootstrap/layout.html.twig");
    }

    /**
     * Render layout/_flash_bag.html.twig
     *
     * @return Response Returns the response.
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function layoutFlashBagAction(): Response {

        $this->notifyDanger("Danger");
        $this->notifyInfo("Info");
        $this->notifySuccess("Success");
        $this->notifyWarning("Warning");

        return $this->render("@WBWBootstrap/layout/_flash_bag.html.twig");
    }

    /**
     * Render layout/_no_data_to_display.html.twig
     *
     * @return Response Returns the response.
     */
    public function layoutNoDataToDisplayAction(): Response {
        return $this->render("@WBWBootstrap/layout/_no_data_to_display.html.twig");
    }

    /**
     * Render layout/_work_in_progress.html.twig
     *
     * @return Response Returns the response.
     */
    public function layoutWorkInProgressAction(): Response {
        return $this->render("@WBWBootstrap/layout/_work_in_progress.html.twig");
    }
}
