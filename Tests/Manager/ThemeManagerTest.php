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
use WBW\Bundle\BootstrapBundle\Provider\Theme\ApplicationThemeProviderInterface;
use WBW\Bundle\BootstrapBundle\Provider\Theme\BreadcrumbsThemeProviderInterface;
use WBW\Bundle\BootstrapBundle\Provider\Theme\DropDownHookThemeProviderInterface;
use WBW\Bundle\BootstrapBundle\Provider\Theme\DropDownNotificationsThemeProviderInterface;
use WBW\Bundle\BootstrapBundle\Provider\Theme\DropDownTasksThemeProviderInterface;
use WBW\Bundle\BootstrapBundle\Provider\Theme\FooterThemeProviderInterface;
use WBW\Bundle\BootstrapBundle\Provider\Theme\NavigationThemeProviderInterface;
use WBW\Bundle\BootstrapBundle\Provider\Theme\SearchThemeProviderInterface;
use WBW\Bundle\BootstrapBundle\Provider\Theme\UserInfoThemeProviderInterface;
use WBW\Bundle\BootstrapBundle\Tests\AbstractBootstrapFrameworkTestCase;

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
        $obj->setApplicationProvider($this->getMockBuilder(ApplicationThemeProviderInterface::class)->getMock());
        $obj->setBreadcrumbsProvider($this->getMockBuilder(BreadcrumbsThemeProviderInterface::class)->getMock());
        $obj->setDropDownHookProvider($this->getMockBuilder(DropDownHookThemeProviderInterface::class)->getMock());
        $obj->setDropDownNotificationsProvider($this->getMockBuilder(DropDownNotificationsThemeProviderInterface::class)->getMock());
        $obj->setDropDownTasksProvider($this->getMockBuilder(DropDownTasksThemeProviderInterface::class)->getMock());
        $obj->setFooterProvider($this->getMockBuilder(FooterThemeProviderInterface::class)->getMock());
        $obj->setNavigationProvider($this->getMockBuilder(NavigationThemeProviderInterface::class)->getMock());
        $obj->setSearchProvider($this->getMockBuilder(SearchThemeProviderInterface::class)->getMock());
        $obj->setUserInfoProvider($this->getMockBuilder(UserInfoThemeProviderInterface::class)->getMock());

        $obj->register();

        $res = $this->twigEnvironment->getGlobals();

        $this->assertCount(9, $res);

        $this->assertArrayHasKey("ApplicationProvider", $res);
        $this->assertInstanceOf(ApplicationThemeProviderInterface::class, $res["ApplicationProvider"]);

        $this->assertArrayHasKey("BreadcrumbsProvider", $res);
        $this->assertInstanceOf(BreadcrumbsThemeProviderInterface::class, $res["BreadcrumbsProvider"]);

        $this->assertArrayHasKey("DropDownHookProvider", $res);
        $this->assertInstanceOf(DropDownHookThemeProviderInterface::class, $res["DropDownHookProvider"]);

        $this->assertArrayHasKey("DropDownNotificationsProvider", $res);
        $this->assertInstanceOf(DropDownNotificationsThemeProviderInterface::class, $res["DropDownNotificationsProvider"]);

        $this->assertArrayHasKey("DropDownTasksProvider", $res);
        $this->assertInstanceOf(DropDownTasksThemeProviderInterface::class, $res["DropDownTasksProvider"]);

        $this->assertArrayHasKey("FooterProvider", $res);
        $this->assertInstanceOf(FooterThemeProviderInterface::class, $res["FooterProvider"]);

        $this->assertArrayHasKey("NavigationProvider", $res);
        $this->assertInstanceOf(NavigationThemeProviderInterface::class, $res["NavigationProvider"]);

        $this->assertArrayHasKey("SearchProvider", $res);
        $this->assertInstanceOf(SearchThemeProviderInterface::class, $res["SearchProvider"]);

        $this->assertArrayHasKey("UserInfoProvider", $res);
        $this->assertInstanceOf(UserInfoThemeProviderInterface::class, $res["UserInfoProvider"]);
    }

    /**
     * Tests the setApplicationProvider() method.
     *
     * @return void
     * @depends testConstruct
     */
    public function testSetApplicationProvider() {

        // Set the mocks.
        $provider = $this->getMockBuilder(ApplicationThemeProviderInterface::class)->getMock();

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
        $provider = $this->getMockBuilder(BreadcrumbsThemeProviderInterface::class)->getMock();

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
        $provider = $this->getMockBuilder(DropDownHookThemeProviderInterface::class)->getMock();

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
        $provider = $this->getMockBuilder(DropDownNotificationsThemeProviderInterface::class)->getMock();

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
        $provider = $this->getMockBuilder(DropDownTasksThemeProviderInterface::class)->getMock();

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
        $provider = $this->getMockBuilder(FooterThemeProviderInterface::class)->getMock();

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
        $provider = $this->getMockBuilder(NavigationThemeProviderInterface::class)->getMock();

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
        $provider = $this->getMockBuilder(SearchThemeProviderInterface::class)->getMock();

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
        $provider = $this->getMockBuilder(UserInfoThemeProviderInterface::class)->getMock();

        $obj = new ThemeManager($this->twigEnvironment);

        $obj->setUserInfoProvider($provider);
        $this->assertSame($provider, $obj->getUserInfoProvider());
    }

}
