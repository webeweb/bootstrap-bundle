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
     * Tests the indexAction() method.
     *
     * @return void
     */
    public function testIndexAction() {

        // Create a client.
        $client = static::createClient();

        // Make a GET request.
        $client->request("GET", "/");
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

}
