<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Model\Navigation;

use WBW\Bundle\BootstrapBundle\Navigation\NavigationInterface;
use WBW\Bundle\BootstrapBundle\Navigation\NavigationTree;
use WBW\Bundle\BootstrapBundle\Tests\AbstractFrameworkTestCase;

/**
 * Navigation tree test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Model\Navigation
 * @final
 */
final class NavigationTreeTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new NavigationTree("tree");

        $this->assertFalse($obj->getActive());
        $this->assertFalse($obj->getEnable());
        $this->assertNull($obj->getIcon());
        $this->assertEquals(NavigationInterface::NAVIGATION_HREF_DEFAULT, $obj->getRoute());
        $this->assertTrue($obj->getVisible());
    }

}
