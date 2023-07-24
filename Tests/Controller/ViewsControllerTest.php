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

use Symfony\Component\Routing\RouterInterface;
use WBW\Bundle\BootstrapBundle\Provider\JavascriptProvider;
use WBW\Bundle\BootstrapBundle\Tests\AbstractWebTestCase;
use WBW\Bundle\BootstrapBundle\WBWBootstrapBundle;

/**
 * Views controller test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Tests\Controller
 */
class ViewsControllerTest extends AbstractWebTestCase {

    /**
     * {@inheritDoc}
     */
    public static function setUpBeforeClass(): void {
        parent::setUpBeforeClass();

        static::$kernel->getContainer()->set("swiftmailer.mailer", null);
    }

    /**
     * Test Resources/views/assets/_javascripts.html.twig
     *
     * @return void
     */
    public function testAssetsJavascriptsAction(): void {

        $client = $this->client;

        $client->request("GET", "/assets/javascripts");
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertEquals("text/html; charset=UTF-8", $client->getResponse()->headers->get("Content-Type"));

        /** @var RouterInterface $router */
        $router = static::$kernel->getContainer()->get("router");

        $provider = new JavascriptProvider();
        foreach ($provider->getJavascripts() as $k => $v) {

            $uri = $router->generate("wbw_core_twig_resource", ["name" => $k, "type" => "js"]);

            $client->request("GET", $uri);
            $this->assertEquals(200, $client->getResponse()->getStatusCode(), $v);
            $this->assertEquals("application/javascript", $client->getResponse()->headers->get("Content-Type"), $v);
        }
    }

    /**
     * Test Resources/views/assets/_stylesheets.html.twig
     *
     * @return void
     */
    public function testAssetsStylesheetsAction(): void {

        $client = $this->client;

        $client->request("GET", "/assets/stylesheets");
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertEquals("text/html; charset=UTF-8", $client->getResponse()->headers->get("Content-Type"));
    }

    /**
     * Test Resources/views/layout.html.twig
     *
     * @return void
     */
    public function testLayoutAction(): void {

        $client = $this->client;

        $client->request("GET", "/layout");
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertEquals("text/html; charset=UTF-8", $client->getResponse()->headers->get("Content-Type"));

        // Check the Bootstrap version.
        $this->assertStringContainsString(WBWBootstrapBundle::BOOTSTRAP_VERSION_4 . "/css", $client->getResponse()->getContent());
        $this->assertStringContainsString(WBWBootstrapBundle::BOOTSTRAP_VERSION_4 . "/js", $client->getResponse()->getContent());
    }

    /**
     * Test Resources/views/layout/_flash_bag.html.twig
     *
     * @return void
     */
    public function testLayoutFlashBagAction(): void {

        $client = $this->client;

        $client->request("GET", "/layout/flash-bag");
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertEquals("text/html; charset=UTF-8", $client->getResponse()->headers->get("Content-Type"));

        // Check the response.
        $res = file_get_contents(__DIR__ . "/ViewsControllerTest.testLayoutFlashBagAction.html.txt") . "    ";
        $this->assertEquals($res, $client->getResponse()->getContent());
    }

    /**
     * Test Resources/views/layout/_no_data_to_display.html.twig
     *
     * @return void
     */
    public function testLayoutNoDataDisplayAction(): void {

        $client = $this->client;

        $client->request("GET", "/layout/no-data-to-display");
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertEquals("text/html; charset=UTF-8", $client->getResponse()->headers->get("Content-Type"));
    }

    /**
     * Test Resources/views/layout/_work_in_progress.html.twig
     *
     * @return void
     */
    public function testLayoutWorkInProgressAction(): void {

        $client = $this->client;

        $client->request("GET", "/layout/work-in-progress");
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertEquals("text/html; charset=UTF-8", $client->getResponse()->headers->get("Content-Type"));
    }
}
