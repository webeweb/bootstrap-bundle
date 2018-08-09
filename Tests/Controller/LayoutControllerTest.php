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

use WBW\Bundle\BootstrapBundle\Tests\Cases\AbstractBootstrapWebTestCase;

/**
 * Layout controller test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Controller
 * @final
 */
final class LayoutControllerTest extends AbstractBootstrapWebTestCase {

    /**
     * Tests the blankAction() method.
     *
     * @return void
     */
    public function testBlankAction() {

        // Create a client.
        $client = static::createClient();

        // Make a GET request.
        $client->request("GET", "/blank");
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    /**
     * Tests the emailAction() method.
     *
     * @return void
     */
    public function testEmailAction() {

        // Create a client.
        $client = static::createClient();

        // Make a GET request.
        $client->request("GET", "/email");
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    /**
     * Tests the flashbagAction() method.
     *
     * @return void
     */
    public function testFlashbagAction() {

        $res = <<< 'EOTXT'
            <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            Danger
        </div>
                <div class="alert alert-info alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            Info
        </div>
                <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            Success
        </div>
                <div class="alert alert-warning alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            Warning
        </div>
    
EOTXT;

        // Create a client.
        $client = static::createClient();

        // Make a GET request.
        $client->request("GET", "/flashbag");
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertEquals($res, $client->getResponse()->getContent());
    }

    /**
     * Tests the getRouterAction() method.
     *
     * @return void
     */
    public function testGetRouterAction() {

        // Create a client.
        $client = static::createClient();

        // Make a GET request.
        $client->request("GET", "/get/router");
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    /**
     * Tests the getTranslatorAction() method.
     *
     * @return void
     */
    public function testGetTranslatorAction() {

        // Create a client.
        $client = static::createClient();

        // Make a GET request.
        $client->request("GET", "/get/translator");
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    /**
     * Tests the redirectAction() method.
     *
     * @return void
     */
    public function testRedirectAction() {

        // Create a client.
        $client = static::createClient();

        // Make a GET request.
        $client->request("GET", "/redirect");
        $this->assertEquals(302, $client->getResponse()->getStatusCode());
        $this->assertEquals("/blank", $client->getResponse()->headers->get("location"));
    }

}
