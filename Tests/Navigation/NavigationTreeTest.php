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
     * Tree.
     *
     * @var NavigationTree
     */
    private $tree;

    /**
     * {@inheritdoc}
     */
    protected function setUp() {
        parent::setUp();

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
        $this->tree = new NavigationTree("tree");

        $this->tree->addNode(new NavigationNode("GitHub"));

        $this->tree->getLastNode()->addNode(new NavigationNode("AdminBSB Material Design bundle", null, "https://github.com/webeweb/adminbsb-material-design-bundle"));
        $this->tree->getLastNode()->addNode(new NavigationNode("Bootstrap bundle", null, "https://github.com/webeweb/bootstrap-bundle"));
        $this->tree->getLastNode()->addNode(new NavigationNode("EDM bundle", null, "https://github.com/webeweb/edm-bundle"));
        $this->tree->getLastNode()->addNode(new NavigationNode("Highcharts bundle", null, "https://github.com/webeweb/highcharts-bundle"));
        $this->tree->getLastNode()->addNode(new NavigationNode("jQuery DataTables bundle", null, "https://github.com/webeweb/jquery-datatables-bundle"));
        $this->tree->getLastNode()->addNode(new NavigationNode("jQuery QueryBuilder bundle", null, "https://github.com/webeweb/jquery-querybuilder-bundle"));
        $this->tree->getLastNode()->addNode(new NavigationNode("SyntaxHighlighter bundle", null, "https://github.com/webeweb/syntaxhighlighter-bundle"));
        $this->tree->getLastNode()->addNode(new NavigationItem("Core library", null, "https://github.com/webeweb/core-library"));
    }

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
     * Tests the activeTree() method.
     *
     * @return void
     */
    public function testActiveTree() {

        // Mark the node "Bootstrap bundle" as active.
        $this->tree->activeTree("https://github.com/webeweb/bootstrap-bundle");

        $this->assertTrue($this->tree->getNodeAt(0)->getActive());

        $this->assertFalse($this->tree->getNodeAt(0)->getNodeAt(0)->getActive());
        $this->assertTrue($this->tree->getNodeAt(0)->getNodeAt(1)->getActive());
        $this->assertFalse($this->tree->getNodeAt(0)->getNodeAt(2)->getActive());
        $this->assertFalse($this->tree->getNodeAt(0)->getNodeAt(3)->getActive());
        $this->assertFalse($this->tree->getNodeAt(0)->getNodeAt(4)->getActive());
        $this->assertFalse($this->tree->getNodeAt(0)->getNodeAt(5)->getActive());
        $this->assertFalse($this->tree->getNodeAt(0)->getNodeAt(6)->getActive());
    }

    /**
     * Tests the getBreadcrumbs() method.
     *
     * @return void
     */
    public function testGetBreadcrumbs() {

        // Mark the node "Bootstrap bundle" as active.
        $this->tree->activeTree("https://github.com/webeweb/bootstrap-bundle");

        $res = $this->tree->getBreadcrumbs();
        $this->assertCount(2, $res);
    }

}
