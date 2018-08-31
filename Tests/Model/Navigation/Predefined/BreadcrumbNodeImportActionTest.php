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

use WBW\Bundle\BootstrapBundle\Model\Navigation\NavigationInterface;
use WBW\Bundle\BootstrapBundle\Model\Navigation\Predefined\BreadcrumbNodeImportAction;
use WBW\Bundle\BootstrapBundle\Tests\Cases\AbstractBootstrapFrameworkTestCase;

/**
 * Breadcrumb node "Import" action test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Model\Navigation\Predefined
 * @final
 */
final class BreadcrumbNodeImportActionTest extends AbstractBootstrapFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new BreadcrumbNodeImportAction("route");

        $this->assertEquals("navigation.node.action.import", $obj->getId());
        $this->assertEquals("g:save", $obj->getIcon());
        $this->assertEquals(NavigationInterface::NAVIGATION_MATCHER_URL, $obj->getMatcher());
        $this->assertEquals("route", $obj->getRoute());
    }

}
