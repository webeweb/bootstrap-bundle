<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Factory;

use WBW\Bundle\BootstrapBundle\Factory\FOSUserNavigationFactory;
use WBW\Bundle\BootstrapBundle\Tests\AbstractTestCase;
use WBW\Library\Symfony\Assets\Navigation\BreadcrumbNode;
use WBW\Library\Symfony\Assets\NavigationNodeInterface;

/**
 * FOS user navigation factory test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Tests\Factory
 */
class FOSUserNavigationFactoryTest extends AbstractTestCase {

    /**
     * Tests newGlyphiconBreadcrumbNodes()
     *
     * @return void
     */
    public function testNewGlyphiconBreadcrumbNodes(): void {

        $res = FOSUserNavigationFactory::newGlyphiconBreadcrumbNodes();
        $this->assertCount(3, $res);

        $this->assertInstanceOf(BreadcrumbNode::class, $res[0]);
        $this->assertEquals("label.edit_profile", $res[0]->getLabel());
        $this->assertEquals("g:user", $res[0]->getIcon());
        $this->assertEquals("fos_user_profile_edit", $res[0]->getUri());
        $this->assertEquals(NavigationNodeInterface::MATCHER_ROUTER, $res[0]->getMatcher());

        $this->assertInstanceOf(BreadcrumbNode::class, $res[1]);
        $this->assertEquals("label.show_profile", $res[1]->getLabel());
        $this->assertEquals("g:user", $res[1]->getIcon());
        $this->assertEquals("fos_user_profile_show", $res[1]->getUri());
        $this->assertEquals(NavigationNodeInterface::MATCHER_ROUTER, $res[1]->getMatcher());

        $this->assertInstanceOf(BreadcrumbNode::class, $res[2]);
        $this->assertEquals("label.change_password", $res[2]->getLabel());
        $this->assertEquals("g:lock", $res[2]->getIcon());
        $this->assertEquals("fos_user_change_password", $res[2]->getUri());
        $this->assertEquals(NavigationNodeInterface::MATCHER_ROUTER, $res[2]->getMatcher());
    }
}
