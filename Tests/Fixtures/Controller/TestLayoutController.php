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
use WBW\Bundle\BootstrapBundle\Controller\AbstractBootstrapController;

/**
 * Test layout controller.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Fixtures\Controller
 * @final
 */
final class TestLayoutController extends AbstractBootstrapController {

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
     * Displays an email.
     *
     * @return Response Returns the response.
     */
    public function emailAction() {

        // Return the response.
        return $this->render("@Bootstrap/email.html.twig");
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
        return $this->render("@Bootstrap/include/flashbag.html.twig");
    }

    /**
     * Get router.
     *
     * @return Response Returns the response.
     */
    public function getRouterAction() {

        // Get the router.
        $this->getRouter();

        // Return the response.
        return $this->render("@Bootstrap/layout/blank.html.twig");
    }

    /**
     * Get session.
     *
     * @return Response Returns the response.
     */
    public function getSessionAction() {

        // Get the session.
        $this->getSession();

        // Return the response.
        return $this->render("@Bootstrap/layout/blank.html.twig");
    }

    /**
     * Get translator.
     *
     * @return Response Returns the response.
     */
    public function getTranslatorAction() {

        // Get the translator.
        $this->getTranslator();

        // Return the response.
        return $this->render("@Bootstrap/layout/blank.html.twig");
    }

    /**
     * Redirect.
     *
     * @return Response Returns the response.
     */
    public function redirectAction() {

        //
        $this->hasRolesOrRedirect(["ROLE_GITHUB"], false, "/blank");

        // Return the response.
        return $this->render("@Bootstrap/layout/blank.html.twig");
    }

}
