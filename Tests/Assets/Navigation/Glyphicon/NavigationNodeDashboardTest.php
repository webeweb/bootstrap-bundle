<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Assets\Navigation\Glyphicon;

use WBW\Bundle\BootstrapBundle\Assets\Navigation\Glyphicon\NavigationNodeDashboard;
use WBW\Bundle\BootstrapBundle\Tests\AbstractTestCase;
use WBW\Library\Symfony\Assets\NavigationNodeInterface;

/**
 * Navigation node "dashboard" test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Tests\Assets\Navigation\Glyphicon
 */
class NavigationNodeDashboardTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new NavigationNodeDashboard("route");

        $this->assertEquals("navigation.node.dashboard", $obj->getLabel());
        $this->assertEquals("g:dashboard", $obj->getIcon());
        $this->assertEquals(NavigationNodeInterface::MATCHER_URL, $obj->getMatcher());
        $this->assertEquals("route", $obj->getUri());
    }
}
