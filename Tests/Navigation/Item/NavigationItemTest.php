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

        $obj = new NavigationItem("id");

        $this->assertEquals("id", $obj->getId());

        $this->assertEquals(null, $obj->getFirstNode());
        $this->assertEquals(null, $obj->getLastNode());
        $this->assertEquals([], $obj->getNodes());
        $this->assertEquals(null, $obj->getParent());

        $this->assertEquals("javascript: void(0);", $obj->getHref());
        $this->assertEquals(null, $obj->getIcon());
    }

    /**
     * Tests the addNode() method.
     *
     * @return void.
     */
    public function testAddNode() {

        $obj = new NavigationItem("id");
        $add = new NavigationItem("id2");

        $obj->addNode($add);
        $this->assertEquals([$add], $obj->getNodes());
    }

    /**
     * Tests the clearNode() method.
     *
     * @return void.
     */
    public function testClearNode() {

        $obj = new NavigationItem("id");
        $add = new NavigationItem("id2");

        $obj->addNode($add);
        $this->assertEquals([$add], $obj->getNodes());

        $obj->clearNodes();
        $this->assertEquals([], $obj->getNodes());
    }

    /**
     * Tests the getFirstNode() method.
     *
     * @return void.
     */
    public function testGetFirstNode() {

        $obj = new NavigationItem("id");
        $add = new NavigationItem("id2");

        $obj->addNode($add);
        $this->assertEquals($add, $obj->getFirstNode());
    }

    /**
     * Tests the getLastNode() method.
     *
     * @return void.
     */
    public function testGetLastNode() {

        $obj = new NavigationItem("id");
        $add = new NavigationItem("id2");

        $obj->addNode($add);
        $this->assertEquals($add, $obj->getLastNode());
    }

    /**
     * Tests the getNodeAt() method.
     *
     * @return void.
     */
    public function testGetNodeAt() {

        $obj = new NavigationItem("id");
        $add = new NavigationItem("id2");

        $obj->addNode($add);
        $this->assertEquals(null, $obj->getNodeAt(-1));
        $this->assertEquals($add, $obj->getNodeAt(0));
        $this->assertEquals(null, $obj->getNodeAt(1));
    }

    /**
     * Tests the getNodeById() method.
     *
     * @return void.
     */
    public function testGetNodeById() {

        $obj  = new NavigationItem("id");
        $add1 = new NavigationItem("id2");
        $add2 = new NavigationItem("id3");

        $obj->addNode($add1);
        $add1->addNode($add2);
        $this->assertEquals(null, $obj->getNodeById("exception"));
        $this->assertEquals($add1, $obj->getNodeById("id2"));
        $this->assertEquals(null, $obj->getNodeById("id3"));
        $this->assertEquals($add2, $obj->getNodeById("id3", true));
    }

    /**
     * Tests the removeNode() method.
     *
     * @return void.
     */
    public function testRemoveNode() {

        $obj = new NavigationItem("id");
        $add = new NavigationItem("id2");

        $obj->addNode($add);
        $this->assertEquals([$add], $obj->getNodes());

        $obj->removeNode($add);
        $this->assertEquals([], $obj->getNodes());
    }

    /**
     * Tests the toArray() method.
     *
     * @return void.
     */
    public function testToArray() {

        $obj = new NavigationItem("id");

        $res1 = ["span" => "id", "href" => "javascript: void(0);"];
        $this->assertEquals($res1, $obj->toArray());

        $obj->setHref("href");
        $res2 = ["span" => "id", "href" => "href"];
        $this->assertEquals($res2, $obj->toArray());

        $obj->setIcon("icon");
        $res3 = ["span" => "id", "href" => "href", "icon" => "icon"];
        $this->assertEquals($res3, $obj->toArray());

        $obj->addNode(new NavigationNode("id1"));
        $obj->addNode(new NavigationItem("id2"));
        $res4 = ["span" => "id", "href" => "href", "icon" => "icon", "subitems" => [["span" => "id2", "href" => "javascript: void(0);"]]];
        $this->assertEquals($res4, $obj->toArray());
    }

}
