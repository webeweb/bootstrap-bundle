<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Navigation\Item;

use PHPUnit_Framework_TestCase;
use WBW\Bundle\BootstrapBundle\Navigation\Item\NavigationItem;
use WBW\Bundle\BootstrapBundle\Navigation\NavigationInterface;
use WBW\Bundle\BootstrapBundle\Navigation\Node\NavigationNode;

/**
 * Navigation item test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Navigation\Item
 * @final
 */
final class NavigationItemTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj = new NavigationItem('id');

        $this->assertEquals(NavigationInterface::DEFAULT_HREF, $obj->getHref());
        $this->assertEquals(null, $obj->getIcon());
    }

    /**
     * Tests the setHref() method.
     *
     * @return void
     */
    public function testSetHref() {

        $obj = new NavigationItem('id');
        $obj->setHref('href');

        $this->assertEquals('href', $obj->getHref());
    }

    /**
     * Tests the setIcon() method.
     *
     * @return void
     */
    public function testSetIcon() {

        $obj = new NavigationItem('id');
        $obj->setIcon('icon');

        $this->assertEquals('icon', $obj->getIcon());
    }

    /**
     * Tests the toArray() method.
     *
     * @return void.
     */
    public function testToArray() {

        $obj = new NavigationItem('id');

        $res1 = ['span' => 'id', 'href' => 'javascript: void(0);'];
        $this->assertEquals($res1, $obj->toArray());

        $obj->setHref('href');
        $res2 = ['span' => 'id', 'href' => 'href'];
        $this->assertEquals($res2, $obj->toArray());

        $obj->setIcon('icon');
        $res3 = ['span' => 'id', 'href' => 'href', 'icon' => 'icon'];
        $this->assertEquals($res3, $obj->toArray());

        $obj->addNode(new NavigationNode('id1'));
        $obj->addNode(new NavigationItem('id2'));
        $res4 = ['span' => 'id', 'href' => 'href', 'icon' => 'icon', 'subitems' => [['span' => 'id2', 'href' => 'javascript: void(0);']]];
        $this->assertEquals($res4, $obj->toArray());
    }

}
