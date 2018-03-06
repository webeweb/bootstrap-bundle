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
use WBW\Bundle\BootstrapBundle\Navigation\Node\NavigationNodeSettings;

/**
 * Navigation node "Settings" test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Navigation\Node
 * @final
 */
final class NavigationNodeSettingsTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj = new NavigationNodeSettings("route");

        $this->assertEquals("navigation.node.settings", $obj->getId());
        $this->assertEquals("cog", $obj->getIcon());
        $this->assertEquals("route", $obj->getRoute());
    }

}
