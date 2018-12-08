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

}
