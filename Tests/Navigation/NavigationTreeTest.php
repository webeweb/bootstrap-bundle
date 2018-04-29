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

use PHPUnit_Framework_TestCase;
use WBW\Bundle\BootstrapBundle\Navigation\NavigationItem;
use WBW\Bundle\BootstrapBundle\Navigation\NavigationNode;
use WBW\Bundle\BootstrapBundle\Navigation\NavigationTree;

/**
 * Navigation tree test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Navigation
 * @final
 */
final class NavigationTreeTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the getBreadcrumbs() method.
     *
     * @return void
     */
    public function testGetBreadcrumbs() {

        $obj = new NavigationTree();

        $obj->addNode(new NavigationNode("main level"));
        $obj->getLastNode()->setActive(true);
        $obj->getLastNode()->addNode(new NavigationNode("sub-level1"));
        $obj->getLastNode()->getLastNode()->setActive(true);
        $obj->getLastNode()->addNode(new NavigationItem("sub-level2"));

        $res = $obj->getBreadcrumbs();
        $this->assertCount(2, $res);
    }

}
