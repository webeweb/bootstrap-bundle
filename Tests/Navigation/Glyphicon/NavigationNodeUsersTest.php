<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Navigation\Glyphicon;

use WBW\Bundle\BootstrapBundle\Navigation\Glyphicon\NavigationNodeUsers;
use WBW\Bundle\BootstrapBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Navigation\NavigationInterface;

/**
 * Navigation node "Users" test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Navigation\Glyphicon
 */
class NavigationNodeUsesrTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new NavigationNodeUsers("route");

        $this->assertEquals("navigation.node.users", $obj->getId());
        $this->assertEquals("g:user", $obj->getIcon());
        $this->assertEquals(NavigationInterface::NAVIGATION_MATCHER_URL, $obj->getMatcher());
        $this->assertEquals("route", $obj->getUri());
    }
}
