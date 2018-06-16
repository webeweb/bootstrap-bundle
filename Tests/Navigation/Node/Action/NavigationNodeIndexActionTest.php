<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Navigation\Node\Action;

use PHPUnit_Framework_TestCase;
use WBW\Bundle\BootstrapBundle\Navigation\Node\Action\NavigationNodeIndexAction;

/**
 * Navigation node "Index" action test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Navigation\Node\Action
 * @final
 */
final class NavigationNodeIndexActionTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj = new NavigationNodeIndexAction("route");

        $this->assertEquals("navigation.node.action.index", $obj->getId());
        $this->assertEquals("g:list", $obj->getIcon());
        $this->assertEquals("route", $obj->getRoute());
    }

}
