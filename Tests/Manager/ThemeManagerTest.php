<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Manager;

use WBW\Bundle\BootstrapBundle\Manager\ThemeManager;
use WBW\Bundle\BootstrapBundle\Provider\Theme\ApplicationProviderInterface;
use WBW\Bundle\BootstrapBundle\Provider\Theme\BreadcrumbsProviderInterface;
use WBW\Bundle\BootstrapBundle\Provider\Theme\DropDownHookProviderInterface;
use WBW\Bundle\BootstrapBundle\Provider\Theme\DropDownNotificationsProviderInterface;
use WBW\Bundle\BootstrapBundle\Provider\Theme\DropDownTasksProviderInterface;
use WBW\Bundle\BootstrapBundle\Provider\Theme\FooterProviderInterface;
use WBW\Bundle\BootstrapBundle\Provider\Theme\NavigationProviderInterface;
use WBW\Bundle\BootstrapBundle\Provider\Theme\SearchProviderInterface;
use WBW\Bundle\BootstrapBundle\Provider\Theme\UserInfoProviderInterface;
use WBW\Bundle\BootstrapBundle\Tests\Cases\AbstractBootstrapFrameworkTestCase;

/**
 * Theme manager test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Manager
 * @final
 */
final class ThemeManagerTest extends AbstractBootstrapFrameworkTestCase {

    /**
     * {@inheritdoc}
     */
    protected function setUp() {
        parent::setUp();
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new ThemeManager($this->twigEnvironment);

        $this->assertNull($obj->getApplicationProvider());
        $this->assertNull($obj->getBreadcrumbsProvider());
        $this->assertNull($obj->getDropDownHookProvider());
        $this->assertNull($obj->getDropDownNotificationsProvider());
        $this->assertNull($obj->getDropDownTasksProvider());
        $this->assertNull($obj->getFooterProvider());
        $this->assertNull($obj->getNavigationProvider());
        $this->assertNull($obj->getSearchProvider());
        $this->assertNull($obj->getUserInfoProvider());
    }

    /**
     * Tests the register() method.
     *
     * @return void
     * @depends testConstruct
     */
    public function testRegister() {

        $obj = new ThemeManager($this->twigEnvironment);
        $obj->setApplicationProvider($this->getMockBuilder(ApplicationProviderInterface::class)->getMock());
        $obj->setBreadcrumbsProvider($this->getMockBuilder(BreadcrumbsProviderInterface::class)->getMock());
        $obj->setDropDownHookProvider($this->getMockBuilder(DropDownHookProviderInterface::class)->getMock());
        $obj->setDropDownNotificationsProvider($this->getMockBuilder(DropDownNotificationsProviderInterface::class)->getMock());
        $obj->setDropDownTasksProvider($this->getMockBuilder(DropDownTasksProviderInterface::class)->getMock());
        $obj->setFooterProvider($this->getMockBuilder(FooterProviderInterface::class)->getMock());
        $obj->setNavigationProvider($this->getMockBuilder(NavigationProviderInterface::class)->getMock());
        $obj->setSearchProvider($this->getMockBuilder(SearchProviderInterface::class)->getMock());
        $obj->setUserInfoProvider($this->getMockBuilder(UserInfoProviderInterface::class)->getMock());

        $obj->register();

        $res = $this->twigEnvironment->getGlobals();

        $this->assertCount(9, $res);

        $this->assertArrayHasKey("ApplicationProvider", $res);
        $this->assertInstanceOf(ApplicationProviderInterface::class, $res["ApplicationProvider"]);

        $this->assertArrayHasKey("BreadcrumbsProvider", $res);
        $this->assertInstanceOf(BreadcrumbsProviderInterface::class, $res["BreadcrumbsProvider"]);

        $this->assertArrayHasKey("DropDownHookProvider", $res);
        $this->assertInstanceOf(DropDownHookProviderInterface::class, $res["DropDownHookProvider"]);

        $this->assertArrayHasKey("DropDownNotificationsProvider", $res);
        $this->assertInstanceOf(DropDownNotificationsProviderInterface::class, $res["DropDownNotificationsProvider"]);

        $this->assertArrayHasKey("DropDownTasksProvider", $res);
        $this->assertInstanceOf(DropDownTasksProviderInterface::class, $res["DropDownTasksProvider"]);

        $this->assertArrayHasKey("FooterProvider", $res);
        $this->assertInstanceOf(FooterProviderInterface::class, $res["FooterProvider"]);

        $this->assertArrayHasKey("NavigationProvider", $res);
        $this->assertInstanceOf(NavigationProviderInterface::class, $res["NavigationProvider"]);

        $this->assertArrayHasKey("SearchProvider", $res);
        $this->assertInstanceOf(SearchProviderInterface::class, $res["SearchProvider"]);

        $this->assertArrayHasKey("UserInfoProvider", $res);
        $this->assertInstanceOf(UserInfoProviderInterface::class, $res["UserInfoProvider"]);
    }

    /**
     * Tests the setApplicationProvider() method.
     *
     * @return void
     * @depends testConstruct
     */
    public function testSetApplicationProvider() {

        // Set the mocks.
        $provider = $this->getMockBuilder(ApplicationProviderInterface::class)->getMock();

        $obj = new ThemeManager($this->twigEnvironment);

        $obj->setApplicationProvider($provider);
        $this->assertSame($provider, $obj->getApplicationProvider());
    }

    /**
     * Tests the setBreadcrumbsProvider() method.
     *
     * @return void
     * @depends testConstruct
     */
    public function testSetBreadcrumbsProvider() {

        // Set the mocks.
        $provider = $this->getMockBuilder(BreadcrumbsProviderInterface::class)->getMock();

        $obj = new ThemeManager($this->twigEnvironment);

        $obj->setBreadcrumbsProvider($provider);
        $this->assertSame($provider, $obj->getBreadcrumbsProvider());
    }

    /**
     * Tests the setDropDownHookProvider() method.
     *
     * @return void
     * @depends testConstruct
     */
    public function testSetDropDownHookProvider() {

        // Set the mocks.
        $provider = $this->getMockBuilder(DropDownHookProviderInterface::class)->getMock();

        $obj = new ThemeManager($this->twigEnvironment);

        $obj->setDropDownHookProvider($provider);
        $this->assertSame($provider, $obj->getDropDownHookProvider());
    }

    /**
     * Tests the setDropDownNotificationsProvider() method.
     *
     * @return void
     * @depends testConstruct
     */
    public function testSetDropDownNotificationsProvider() {

        // Set the mocks.
        $provider = $this->getMockBuilder(DropDownNotificationsProviderInterface::class)->getMock();

        $obj = new ThemeManager($this->twigEnvironment);

        $obj->setDropDownNotificationsProvider($provider);
        $this->assertSame($provider, $obj->getDropDownNotificationsProvider());
    }

    /**
     * Tests the setDropDownTasksProvider() method.
     *
     * @return void
     * @depends testConstruct
     */
    public function testSetDropDownTasksProvider() {

        // Set the mocks.
        $provider = $this->getMockBuilder(DropDownTasksProviderInterface::class)->getMock();

        $obj = new ThemeManager($this->twigEnvironment);

        $obj->setDropDownTasksProvider($provider);
        $this->assertSame($provider, $obj->getDropDownTasksProvider());
    }

    /**
     * Tests the setFooterProvider() method.
     *
     * @return void
     * @depends testConstruct
     */
    public function testSetFooterProvider() {

        // Set the mocks.
        $provider = $this->getMockBuilder(FooterProviderInterface::class)->getMock();

        $obj = new ThemeManager($this->twigEnvironment);

        $obj->setFooterProvider($provider);
        $this->assertSame($provider, $obj->getFooterProvider());
    }

    /**
     * Tests the setNavigationProvider() method.
     *
     * @return void
     * @depends testConstruct
     */
    public function testSetNavigationProvider() {

        // Set the mocks.
        $provider = $this->getMockBuilder(NavigationProviderInterface::class)->getMock();

        $obj = new ThemeManager($this->twigEnvironment);

        $obj->setNavigationProvider($provider);
        $this->assertSame($provider, $obj->getNavigationProvider());
    }

    /**
     * Tests the setSearchProvider() method.
     *
     * @return void
     * @depends testConstruct
     */
    public function testSetSearchProvider() {

        // Set the mocks.
        $provider = $this->getMockBuilder(SearchProviderInterface::class)->getMock();

        $obj = new ThemeManager($this->twigEnvironment);

        $obj->setSearchProvider($provider);
        $this->assertSame($provider, $obj->getSearchProvider());
    }

    /**
     * Tests the setUserInfoProvider() method.
     *
     * @return void
     * @depends testConstruct
     */
    public function testSetUserInfoProvider() {

        // Set the mocks.
        $provider = $this->getMockBuilder(UserInfoProviderInterface::class)->getMock();

        $obj = new ThemeManager($this->twigEnvironment);

        $obj->setUserInfoProvider($provider);
        $this->assertSame($provider, $obj->getUserInfoProvider());
    }

}
