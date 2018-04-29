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

/**
 * Navigation node test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Navigation
 * @final
 */
final class NavigationNodeTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj = new NavigationNode("id");

        $this->assertFalse($obj->getActive());
        $this->assertFalse($obj->getEnable());
        $this->assertNull($obj->getIcon());
        $this->assertNull($obj->getRoute());
        $this->assertNull($obj->getTarget());
        $this->assertNull($obj->getUrl());
        $this->assertTrue($obj->getVisible());

        $obj->setActive(true);
        $obj->setEnable(true);
        $obj->setIcon("icon");
        $obj->setRoute("route");
        $obj->setTarget("_blank");
        $obj->setUrl("url");

        $this->assertTrue($obj->getActive());
        $this->assertTrue($obj->getEnable());
        $this->assertEquals("icon", $obj->getIcon());
        $this->assertEquals("route", $obj->getRoute());
        $this->assertEquals("_blank", $obj->getTarget());
        $this->assertEquals("url", $obj->getUrl());
    }

    /**
     * Tests the isDisplayable() method.
     *
     * @return void
     */
    public function testIsDisplayable() {

        $obj = new NavigationNode("id");

        $obj->addNode(new NavigationItem("id1"));
        $obj->addNode(new NavigationNode("id2"));

        $this->assertFalse($obj->isDisplayable());

        $obj->getLastNode()->setActive(true);
        $obj->getLastNode()->setEnable(true);
        $this->assertTrue($obj->isDisplayable());
    }

}
