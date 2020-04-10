<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Controller;

use WBW\Bundle\BootstrapBundle\Tests\AbstractWebTestCase;
use WBW\Bundle\BootstrapBundle\WBWBootstrapInterface;

/**
 * Layout controller test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Controller
 */
class LayoutControllerTest extends AbstractWebTestCase {

    /**
     * Tests the blankAction() method.
     *
     * @return void
     */
    public function testBlankAction() {

        $client = $this->client;

        $client->request("GET", "/blank");
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertEquals("text/html; charset=UTF-8", $client->getResponse()->headers->get("Content-Type"));
    }

    /**
     * Tests the flashbagAction() method.
     *
     * @return void
     */
    public function testFlashbagAction() {

        $client = $this->client;

        $client->request("GET", "/flashbag");
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertEquals("text/html; charset=UTF-8", $client->getResponse()->headers->get("Content-Type"));

        // Check the response.
        $res = file_get_contents(__DIR__ . "/testFlashbagAction.html.txt") . "    ";
        $this->assertEquals($res, $client->getResponse()->getContent());
    }

    /**
     * Tests the javascriptsAction() method.
     *
     * @return void
     */
    public function testJavascriptsAction() {

        $client = $this->client;

        $client->request("GET", "/javascripts");
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertEquals("text/html; charset=UTF-8", $client->getResponse()->headers->get("Content-Type"));
    }

    /**
     * Tests the layout3Action() method.
     *
     * @return void
     */
    public function testLayout3Action() {

        $client = $this->client;

        $client->request("GET", "/layout3");
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertEquals("text/html; charset=UTF-8", $client->getResponse()->headers->get("Content-Type"));

        // Check the Bootstrap version.
        //$this->assertContains(WBWBootstrapInterface::BOOTSTRAP_VERSION_3 . "/css", $client->getResponse()->getContent());
        //$this->assertContains(WBWBootstrapInterface::BOOTSTRAP_VERSION_3 . "/js", $client->getResponse()->getContent());
    }

    /**
     * Tests the layout4Action() method.
     *
     * @return void
     */
    public function testLayout4Action() {

        $client = $this->client;

        $client->request("GET", "/layout4");
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertEquals("text/html; charset=UTF-8", $client->getResponse()->headers->get("Content-Type"));

        // Check the Bootstrap version.
        $this->assertContains(WBWBootstrapInterface::BOOTSTRAP_VERSION_4 . "/css", $client->getResponse()->getContent());
        $this->assertContains(WBWBootstrapInterface::BOOTSTRAP_VERSION_4 . "/js", $client->getResponse()->getContent());
    }

    /**
     * Tests the layoutAction() method.
     *
     * @return void
     */
    public function testLayoutAction() {

        $client = $this->client;

        $client->request("GET", "/layout");
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertEquals("text/html; charset=UTF-8", $client->getResponse()->headers->get("Content-Type"));

        // Check the Bootstrap version.
        $this->assertContains(WBWBootstrapInterface::BOOTSTRAP_VERSION_4 . "/css", $client->getResponse()->getContent());
        $this->assertContains(WBWBootstrapInterface::BOOTSTRAP_VERSION_4 . "/js", $client->getResponse()->getContent());
    }

    /**
     * Tests the stylesheetsAction() method.
     *
     * @return void
     */
    public function testStylesheetsAction() {

        $client = $this->client;

        $client->request("GET", "/stylesheets");
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertEquals("text/html; charset=UTF-8", $client->getResponse()->headers->get("Content-Type"));
    }

    /**
     * Tests the twigConsoleAction() method.
     *
     * @return void
     */
    public function testTwigConsoleAction() {

        $client = $this->client;

        $client->request("GET", "/twig-console");
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertEquals("text/html; charset=UTF-8", $client->getResponse()->headers->get("Content-Type"));
    }

    /**
     * Tests the workInProgressAction() method.
     *
     * @return void
     */
    public function testWorkInProgressAction() {

        $client = $this->client;

        $client->request("GET", "/work-in-progress");
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertEquals("text/html; charset=UTF-8", $client->getResponse()->headers->get("Content-Type"));
    }
}
