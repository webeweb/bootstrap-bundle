<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Asset\Navigation\Glyphicon;

use WBW\Bundle\BootstrapBundle\Asset\Navigation\Glyphicon\NavigationNodeActionImport;
use WBW\Bundle\BootstrapBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Navigation\NavigationInterface;

/**
 * Navigation node action "Import" test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Asset\Navigation\Glyphicon
 */
class NavigationNodeActionImportTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new NavigationNodeActionImport("route");

        $this->assertEquals("navigation.node.action.import", $obj->getLabel());
        $this->assertEquals("g:save", $obj->getIcon());
        $this->assertEquals(NavigationInterface::NAVIGATION_MATCHER_URL, $obj->getMatcher());
        $this->assertEquals("route", $obj->getUri());
    }
}
