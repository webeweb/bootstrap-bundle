<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Model\Navigation\Predefined;

use WBW\Bundle\BootstrapBundle\Navigation\NavigationInterface;
use WBW\Bundle\BootstrapBundle\Navigation\Predefined\BreadcrumbNodeNewUserAction;
use WBW\Bundle\BootstrapBundle\Tests\AbstractFrameworkTestCase;

/**
 * Breadcrumb node "New user" action test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Model\Navigation\Predefined
 * @final
 */
final class BreadcrumbNodeNewUserActionTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new BreadcrumbNodeNewUserAction("route");

        $this->assertEquals("navigation.node.action.new", $obj->getId());
        $this->assertEquals("g:plus", $obj->getIcon());
        $this->assertEquals(NavigationInterface::NAVIGATION_MATCHER_URL, $obj->getMatcher());
        $this->assertEquals("route", $obj->getRoute());
    }

}
