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
use WBW\Bundle\BootstrapBundle\Controller\AbstractController;

/**
 * Test layout controller.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Fixtures\Controller
 */
class TestLayoutController extends AbstractController {

    /**
     * Displays a blank page.
     *
     * @return Response Returns the response.
     */
    public function blankAction() {
        return $this->render("@WBWBootstrap/layout/blank.html.twig");
    }

    /**
     * Displays a flashbag page.
     *
     * @return Response Returns the response.
     */
    public function flashbagAction() {

        $this->notifyDanger("Danger");
        $this->notifyInfo("Info");
        $this->notifySuccess("Success");
        $this->notifyWarning("Warning");

        return $this->render("@WBWBootstrap/layout/flashbag.html.twig");
    }

    /**
     * Displays a layout3 page.
     *
     * @return Response Returns the response.
     */
    public function layout3Action() {
        return $this->render("@WBWBootstrap/layout3.html.twig");
    }

    /**
     * Displays a layout4 page.
     *
     * @return Response Returns the response.
     */
    public function layout4Action() {
        return $this->render("@WBWBootstrap/layout4.html.twig");
    }

    /**
     * Displays a layout page.
     *
     * @return Response Returns the response.
     */
    public function layoutAction() {
        return $this->render("@WBWBootstrap/layout.html.twig");
    }

    /**
     * Displays a work in progress page.
     *
     * @return Response Returns the response.
     */
    public function twigConsoleAction() {
        return $this->render("@WBWBootstrap/layout/twig-console.html.twig");
    }

    /**
     * Displays a work in progress page.
     *
     * @return Response Returns the response.
     */
    public function workInProgressAction() {
        return $this->render("@WBWBootstrap/layout/work-in-progress.html.twig");
    }
}
