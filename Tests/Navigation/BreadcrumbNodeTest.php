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
use WBW\Bundle\BootstrapBundle\Navigation\BreadcrumbNode;

/**
 * Breadcrumb node test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Navigation
 * @final
 */
final class BreadcrumbNodeTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj = new BreadcrumbNode("id");

        $this->assertFalse($obj->getActive());
        $this->assertFalse($obj->getEnable());
        $this->assertNull($obj->getIcon());
        $this->assertNull($obj->getRoute());
        $this->assertNull($obj->getUrl());
        $this->assertFalse($obj->getVisible());

        $obj->setActive(true);
        $obj->setEnable(true);
        $obj->setIcon("icon");
        $obj->setRoute("route");
        $obj->setUrl("url");

        $this->assertTrue($obj->getActive());
        $this->assertTrue($obj->getEnable());
        $this->assertEquals("icon", $obj->getIcon());
        $this->assertEquals("route", $obj->getRoute());
        $this->assertEquals("url", $obj->getUrl());
    }

}
