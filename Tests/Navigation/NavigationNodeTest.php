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

use WBW\Bundle\BootstrapBundle\Navigation\NavigationItem;
use WBW\Bundle\BootstrapBundle\Navigation\NavigationNode;
use WBW\Bundle\BootstrapBundle\Tests\Cases\AbstractBootstrapFrameworkTestCase;

/**
 * Navigation node test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Navigation
 * @final
 */
final class NavigationNodeTest extends AbstractBootstrapFrameworkTestCase {

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
        $this->assertTrue($obj->getVisible());
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

    /**
     * Tests the setActive() method.
     *
     * @return void
     */
    public function testSetActive() {

        $obj = new NavigationNode("id");

        $obj->setActive(true);
        $this->assertTrue($obj->getActive());
    }

    /**
     * Tests the setEnable() method.
     *
     * @return void
     */
    public function testSetEnable() {

        $obj = new NavigationNode("id");

        $obj->setEnable(true);
        $this->assertTrue($obj->getEnable());
    }

    /**
     * Tests the setIcon() method.
     *
     * @return void
     */
    public function testSetIcon() {

        $obj = new NavigationNode("id");

        $obj->setIcon("icon");
        $this->assertEquals("icon", $obj->getIcon());
    }

    /**
     * Tests the setRoute() method.
     *
     * @return void
     */
    public function testSetRoute() {

        $obj = new NavigationNode("id");

        $obj->setRoute("route");
        $this->assertEquals("route", $obj->getRoute());
    }

    /**
     * Tests the setTarget() method.
     *
     * @return void
     */
    public function testSetTarget() {

        $obj = new NavigationNode("id");

        $obj->setTarget("_blank");
        $this->assertEquals("_blank", $obj->getTarget());
    }

}
