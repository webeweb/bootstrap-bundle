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
     * Tests the activeNodes() method.
     *
     * @return void
     */
    public function testActiveNodes() {

        $obj = new NavigationTree("tree");

        /*
         * Build a navigation tree like this :
         *
         * GitHub
         * |- AdminBSB Material Design bundle
         * |- Bootstrap bundle
         * |- EDM bundle
         * |- Highcharts bundle
         * |- jQuery DataTables bundle
         * |- jQuery QueryBuilder bundle
         * |- SyntaxHighlighter bundle
         */
        $obj->addNode(new NavigationNode("GitHub"));
        $obj->getLastNode()->addNode(new NavigationNode("AdminBSB Material Design bundle", null, "https://github.com/webeweb/adminbsb-material-design-bundle"));
        $obj->getLastNode()->addNode(new NavigationNode("Bootstrap bundle", null, "https://github.com/webeweb/bootstrap-bundle"));
        $obj->getLastNode()->addNode(new NavigationNode("EDM bundle", null, "https://github.com/webeweb/edm-bundle"));
        $obj->getLastNode()->addNode(new NavigationNode("Highcharts bundle", null, "https://github.com/webeweb/highcharts-bundle"));
        $obj->getLastNode()->addNode(new NavigationNode("jQuery DataTables bundle", null, "https://github.com/webeweb/jquery-datatables-bundle"));
        $obj->getLastNode()->addNode(new NavigationNode("jQuery QueryBuilder bundle", null, "https://github.com/webeweb/jquery-querybuilder-bundle"));
        $obj->getLastNode()->addNode(new NavigationNode("SyntaxHighlighter bundle", null, "https://github.com/webeweb/syntaxhighlighter-bundle"));
        $obj->getLastNode()->addNode(new NavigationItem("Core library", null, "https://github.com/webeweb/core-library"));

        // Mark the node "Bootstrap bundle" as active.
        $obj->activeNodes("https://github.com/webeweb/bootstrap-bundle", $obj->getNodes());

        $this->assertTrue($obj->getNodeAt(0)->getActive());

        $this->assertFalse($obj->getNodeAt(0)->getNodeAt(0)->getActive());
        $this->assertTrue($obj->getNodeAt(0)->getNodeAt(1)->getActive());
        $this->assertFalse($obj->getNodeAt(0)->getNodeAt(2)->getActive());
        $this->assertFalse($obj->getNodeAt(0)->getNodeAt(3)->getActive());
        $this->assertFalse($obj->getNodeAt(0)->getNodeAt(4)->getActive());
        $this->assertFalse($obj->getNodeAt(0)->getNodeAt(5)->getActive());
        $this->assertFalse($obj->getNodeAt(0)->getNodeAt(6)->getActive());
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
