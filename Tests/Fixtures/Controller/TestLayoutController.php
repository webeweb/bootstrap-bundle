<?php

/**
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

        // Return the response.
        return $this->render("@Bootstrap/layout/blank.html.twig");
    }

    /**
     * Displays a flashbag page.
     *
     * @return Response Returns the response.
     */
    public function flashbagAction() {

        // Notifiy
        $this->notifyDanger("Danger");
        $this->notifyInfo("Info");
        $this->notifySuccess("Success");
        $this->notifyWarning("Warning");

        // Return th response.
        return $this->render("@Bootstrap/layout/flashbag.html.twig");
    }

    /**
     * Displays a layout page.
     *
     * @return Response Returns the response.
     */
    public function layoutAction() {

        // Return the response.
        return $this->render("@Bootstrap/layout.html.twig");
    }

    /**
     * Displays a layout3 page.
     *
     * @return Response Returns the response.
     */
    public function layout3Action() {

        // Return the response.
        return $this->render("@Bootstrap/layout3.html.twig");
    }

    /**
     * Displays a layout4 page.
     *
     * @return Response Returns the response.
     */
    public function layout4Action() {

        // Return the response.
        return $this->render("@Bootstrap/layout4.html.twig");
    }

    /**
     * Displays a work in progress page.
     *
     * @return Response Returns the response.
     */
    public function twigConsoleAction() {

        // Return the response.
        return $this->render("@Bootstrap/layout/twig-console.html.twig");
    }

    /**
     * Displays a work in progress page.
     *
     * @return Response Returns the response.
     */
    public function workInProgressAction() {

        // Return the response.
        return $this->render("@Bootstrap/layout/work-in-progress.html.twig");
    }

}
