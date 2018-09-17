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

use Symfony\Component\HttpFoundation\Request;
use WBW\Bundle\BootstrapBundle\Navigation\NavigationTreeHelper;
use WBW\Bundle\BootstrapBundle\Tests\AbstractBootstrapFrameworkTestCase;
use WBW\Bundle\BootstrapBundle\Tests\Fixtures\App\TestFixtures;

/**
 * Navigation tree helper test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Navigation
 * @final
 */
final class NavigationTreeHelperTest extends AbstractBootstrapFrameworkTestCase {

    /**
     * Navigation tree
     *
     * @var NavigationTree
     */
    private $tree;

    /**
     * {@inheritdoc}
     */
    protected function setUp() {
        parent::setUp();

        // Set up a Navigation tree mock.
        $this->tree = TestFixtures::getNavigationTree();
    }

    /**
     * Tests the activeTree() method.
     *
     * @return void
     */
    public function testActiveTree() {

        NavigationTreeHelper::activeTree($this->tree, Request::create("https://github.com/webeweb/bootstrap-bundle"));

        $this->assertTrue($this->tree->getNodeAt(0)->getActive());

        $this->assertFalse($this->tree->getNodeAt(0)->getNodeAt(0)->getActive());
        $this->assertTrue($this->tree->getNodeAt(0)->getNodeAt(1)->getActive());
        $this->assertFalse($this->tree->getNodeAt(0)->getNodeAt(2)->getActive());
        $this->assertFalse($this->tree->getNodeAt(0)->getNodeAt(3)->getActive());
        $this->assertFalse($this->tree->getNodeAt(0)->getNodeAt(4)->getActive());
        $this->assertFalse($this->tree->getNodeAt(0)->getNodeAt(5)->getActive());
        $this->assertFalse($this->tree->getNodeAt(0)->getNodeAt(6)->getActive());
        $this->assertFalse($this->tree->getNodeAt(0)->getNodeAt(7)->getActive());
        $this->assertFalse($this->tree->getNodeAt(0)->getNodeAt(8)->getActive());
        $this->assertFalse($this->tree->getNodeAt(0)->getNodeAt(9)->getActive());
        $this->assertFalse($this->tree->getNodeAt(0)->getNodeAt(10)->getActive());
        /* $this->assertFalse($this->tree->getNodeAt(0)->getNodeAt(11)->getActive()); */
        $this->assertFalse($this->tree->getNodeAt(0)->getNodeAt(12)->getActive());
        $this->assertFalse($this->tree->getNodeAt(0)->getNodeAt(13)->getActive());
    }

    /**
     * Tests the getBreadcrumbs() method.
     *
     * @return void
     * @depends testActiveTree
     */
    public function testGetBreadcrumbs() {

        NavigationTreeHelper::activeTree($this->tree, Request::create("https://github.com/webeweb/bootstrap-bundle"));

        $res = NavigationTreeHelper::getBreadcrumbs($this->tree);

        $this->assertCount(2, $res);

        $this->assertEquals("GitHub", $res[0]->getId());
        $this->assertEquals("Bootstrap bundle", $res[1]->getId());
    }

}
