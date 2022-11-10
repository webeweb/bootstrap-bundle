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
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Tests\Fixtures\Controller
 */
class TestLayoutController extends AbstractController {

    /**
     * Displays a flash bag template.
     *
     * @return Response Returns the response.
     */
    public function flashBagAction(): Response {

        $this->notifyDanger("Danger");
        $this->notifyInfo("Info");
        $this->notifySuccess("Success");
        $this->notifyWarning("Warning");

        return $this->render("@WBWBootstrap/layout/_flash_bag.html.twig");
    }

    /**
     * Displays a layout page.
     *
     * @return Response Returns the response.
     */
    public function layoutAction(): Response {
        return $this->render("@WBWBootstrap/layout.html.twig");
    }

    /**
     * Displays a no data to display template.
     *
     * @return Response Returns the response.
     */
    public function noDataToDisplayAction(): Response {
        return $this->render("@WBWBootstrap/layout/_no_data_to_display.html.twig");
    }

    /**
     * Displays a work in progress template.
     *
     * @return Response Returns the response.
     */
    public function workInProgressAction(): Response {
        return $this->render("@WBWBootstrap/layout/_work_in_progress.html.twig");
    }
}
