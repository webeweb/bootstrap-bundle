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

use WBW\Bundle\BootstrapBundle\BootstrapBundle;
use WBW\Bundle\BootstrapBundle\Tests\AbstractWebTestCase;

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

        // Create a client.
        $client = static::createClient();

        // Make a GET request.
        $client->request("GET", "/blank");
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    /**
     * Tests the flashbagAction() method.
     *
     * @return void
     */
    public function testFlashbagAction() {

        $res = <<< EOT
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
    
EOT;

        // Create a client.
        $client = static::createClient();

        // Make a GET request.
        $client->request("GET", "/flashbag");
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertEquals($res, $client->getResponse()->getContent());
    }

    /**
     * Tests the layoutAction() method.
     *
     * @return void
     */
    public function testLayoutAction() {

        // Create a client.
        $client = static::createClient();

        // Make a GET request.
        $client->request("GET", "/layout");
        $this->assertEquals(200, $client->getResponse()->getStatusCode());

        // Check the Bootstrap version.
        $this->assertContains(BootstrapBundle::BOOTSTRAP_VERSION_3 . "/css", $client->getResponse()->getContent());
        $this->assertContains(BootstrapBundle::BOOTSTRAP_VERSION_3 . "/js", $client->getResponse()->getContent());
    }

    /**
     * Tests the layout3Action() method.
     *
     * @return void
     */
    public function testLayout3Action() {

        // Create a client.
        $client = static::createClient();

        // Make a GET request.
        $client->request("GET", "/layout3");
        $this->assertEquals(200, $client->getResponse()->getStatusCode());

        // Check the Bootstrap version.
        $this->assertContains(BootstrapBundle::BOOTSTRAP_VERSION_3 . "/css", $client->getResponse()->getContent());
        $this->assertContains(BootstrapBundle::BOOTSTRAP_VERSION_3 . "/js", $client->getResponse()->getContent());
    }

    /**
     * Tests the layout4Action() method.
     *
     * @return void
     */
    public function testLayout4Action() {

        // Create a client.
        $client = static::createClient();

        // Make a GET request.
        $client->request("GET", "/layout4");
        $this->assertEquals(200, $client->getResponse()->getStatusCode());

        // Check the Bootstrap version.
        $this->assertContains(BootstrapBundle::BOOTSTRAP_VERSION_4 . "/css", $client->getResponse()->getContent());
        $this->assertContains(BootstrapBundle::BOOTSTRAP_VERSION_4 . "/js", $client->getResponse()->getContent());
    }

    /**
     * Tests the twigConsoleAction() method.
     *
     * @return void
     */
    public function testTwigConsoleAction() {

        // Create a client.
        $client = static::createClient();

        // Make a GET request.
        $client->request("GET", "/twig-console");
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    /**
     * Tests the workInProgressAction() method.
     *
     * @return void
     */
    public function testWorkInProgressAction() {

        // Create a client.
        $client = static::createClient();

        // Make a GET request.
        $client->request("GET", "/work-in-progress");
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

}
