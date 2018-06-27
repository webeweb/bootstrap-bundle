<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Navigation;

use WBW\Bundle\BootstrapBundle\Navigation\NavigationInterface;
use WBW\Bundle\BootstrapBundle\Navigation\NavigationItem;
use WBW\Bundle\BootstrapBundle\Navigation\NavigationNode;
use WBW\Bundle\BootstrapBundle\Navigation\NavigationTree;
use WBW\Bundle\BootstrapBundle\Tests\Cases\AbstractBootstrapFrameworkTestCase;

/**
 * Navigation tree test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Navigation
 * @final
 */
final class NavigationTreeTest extends AbstractBootstrapFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj = new NavigationTree("tree");

        $this->assertFalse($obj->getActive());
        $this->assertFalse($obj->getEnable());
        $this->assertNull($obj->getIcon());
        $this->assertEquals(NavigationInterface::DEFAULT_HREF, $obj->getRoute());
        $this->assertTrue($obj->getVisible());
    }

    /**
     * Tests the getBreadcrumbs() method.
     *
     * @return void
     */
    public function testGetBreadcrumbs() {

        $obj = new NavigationTree("tree");

        $obj->addNode(new NavigationNode("main level"));
        $obj->getLastNode()->setActive(true);
        $obj->getLastNode()->addNode(new NavigationNode("sub-level1"));
        $obj->getLastNode()->getLastNode()->setActive(true);
        $obj->getLastNode()->addNode(new NavigationItem("sub-level2"));

        $res = $obj->getBreadcrumbs();
        $this->assertCount(2, $res);
    }

}
