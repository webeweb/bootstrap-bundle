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
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Tests\Controller
 */
class LayoutControllerTest extends AbstractWebTestCase {

    /**
     * {@inheritdoc}
     */
    public static function setUpBeforeClass(): void {
        parent::setUpBeforeClass();

        static::$kernel->getContainer()->set("swiftmailer.mailer", null);
    }

    /**
     * Tests flashbagAction()
     *
     * @return void
     */
    public function testFlashbagAction(): void {

        $client = $this->client;

        $client->request("GET", "/flashbag");
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertEquals("text/html; charset=UTF-8", $client->getResponse()->headers->get("Content-Type"));

        // Check the response.
        $res = file_get_contents(__DIR__ . "/LayoutControllerTest.testFlashbagAction.html.txt") . "    ";
        $this->assertEquals($res, $client->getResponse()->getContent());
    }

    /**
     * Tests layoutAction()
     *
     * @return void
     */
    public function testLayoutAction(): void {

        $client = $this->client;

        $client->request("GET", "/layout");
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertEquals("text/html; charset=UTF-8", $client->getResponse()->headers->get("Content-Type"));

        // Check the Bootstrap version.
        $this->assertStringContainsString(WBWBootstrapInterface::BOOTSTRAP_VERSION_4 . "/css", $client->getResponse()->getContent());
        $this->assertStringContainsString(WBWBootstrapInterface::BOOTSTRAP_VERSION_4 . "/js", $client->getResponse()->getContent());
    }

    /**
     * Tests noDataDisplayAction()
     *
     * @return void
     */
    public function testNoDataDisplayAction(): void {

        $client = $this->client;

        $client->request("GET", "/no-data-display");
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertEquals("text/html; charset=UTF-8", $client->getResponse()->headers->get("Content-Type"));
    }

    /**
     * Tests workInProgressAction()
     *
     * @return void
     */
    public function testWorkInProgressAction(): void {

        $client = $this->client;

        $client->request("GET", "/work-in-progress");
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertEquals("text/html; charset=UTF-8", $client->getResponse()->headers->get("Content-Type"));
    }
}
