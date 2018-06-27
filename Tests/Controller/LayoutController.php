<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use WBW\Bundle\BootstrapBundle\Controller\AbstractBootstrapController;

/**
 * Layout controller.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Controller
 * @final
 */
final class LayoutController extends AbstractBootstrapController {

    /**
     * Displays a blank page.
     *
     * @param Request $request The request.
     * @return Response Returns the response.
     */
    public function blankAction(Request $request) {

        // Return the response.
        return $this->render("@Bootstrap/layout/blank.html.twig");
    }

    /**
     * Displays an email.
     *
     * @param Request $request The request.
     * @return Response Returns the response.
     */
    public function emailAction(Request $request) {

        // Return the response.
        return $this->render("@Bootstrap/email.html.twig");
    }

    /**
     * Displays a flashbag page.
     *
     * @param Request $request The request.
     * @return Response Returns the response.
     */
    public function flashbagAction(Request $request) {

        // Notifiy
        $this->notifyDanger("Danger");
        $this->notifyInfo("Info");
        $this->notifySuccess("Success");
        $this->notifyWarning("Warning");

        // Return th response.
        return $this->render("@Bootstrap/include/flashbag.html.twig");
    }

    /**
     * Redirect.
     *
     * @param Request $request The request.
     * @return Response Returns the response.
     */
    public function redirectAction(Request $request) {

        //
        $this->hasRolesOrRedirect(["ROLE_GITHUB"], false, "/blank");

        // Return the response.
        return $this->render("@Bootstrap/layout/blank.html.twig");
    }

}
