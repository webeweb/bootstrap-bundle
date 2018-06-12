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

use WBW\Bundle\BootstrapBundle\Controller\WikiController;
use WBW\Bundle\BootstrapBundle\Tests\Cases\AbstractBootstrapWebTestCase;

/**
 * Wiki controller test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Controller
 * @final
 */
final class WikiControllerTest extends AbstractBootstrapWebTestCase {

    /**
     * Tests the indexAction() method.
     *
     * @return void
     */
    public function testIndexAction() {

        // Get the wiki pages.
        $wikiPages = WikiController::getWikiPages();

        // Handle each wiki page.
        foreach ($wikiPages as $current) {

            // Set the URL.
            $url = implode("/", ["wiki", $current->getCategory(), $current->getPackage(), $current->getPage()]);

            // Create a client.
            $client = static::createClient();

            // Make a GET request.
            $client->request("GET", $url);
            $this->assertEquals(200, $client->getResponse()->getStatusCode());
        }

        // Create a client.
        $client = static::createClient();

        // Make a GET request.
        $client->request("GET", "/wiki/category/package/page");
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

}
