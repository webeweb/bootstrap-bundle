<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Navigation\Node;

use PHPUnit_Framework_TestCase;
use WBW\Bundle\BootstrapBundle\Navigation\Node\NavigationNodeUserGroup;

/**
 * Navigation node "User group" test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Navigation\Node
 * @final
 */
final class NavigationNodeUserGroupTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj = new NavigationNodeUserGroup("route");

        $this->assertEquals("navigation.node.usersGroup", $obj->getId());
        $this->assertEquals("user", $obj->getIcon());
        $this->assertEquals("route", $obj->getRoute());
    }

}
