<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Provider;

use PHPUnit_Framework_TestCase;
use Twig_Environment;
use Twig_LoaderInterface;
use WBW\Bundle\BootstrapBundle\Provider\Application\ApplicationProviderInterface;
use WBW\Bundle\BootstrapBundle\Provider\Breadcrumbs\BreadcrumbsProviderInterface;
use WBW\Bundle\BootstrapBundle\Provider\DropDown\DropDownHookProviderInterface;
use WBW\Bundle\BootstrapBundle\Provider\DropDown\DropDownNotificationsProviderInterface;
use WBW\Bundle\BootstrapBundle\Provider\DropDown\DropDownTasksProviderInterface;
use WBW\Bundle\BootstrapBundle\Provider\Footer\FooterProviderInterface;
use WBW\Bundle\BootstrapBundle\Provider\Navigation\NavigationProviderInterface;
use WBW\Bundle\BootstrapBundle\Provider\ProvidersManager;
use WBW\Bundle\BootstrapBundle\Provider\Search\SearchProviderInterface;
use WBW\Bundle\BootstrapBundle\Provider\User\UserInfoProviderInterface;

/**
 * Providers manager test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Provider
 * @final
 */
final class ProvidersManagerTest extends PHPUnit_Framework_TestCase {

    /**
     * Twig environment.
     *
     * @var Twig_Environment
     */
    private $twigEnvironment;

    /**
     * Twig globals.
     *
     * @var array
     */
    private $twigGlobals = [];

    /**
     * {@inheritdoc}
     */
    protected function setUp() {

        $twigLoader = $this->getMockBuilder(Twig_LoaderInterface::class)->getMock();

        $this->twigEnvironment = $this->getMockBuilder(Twig_Environment::class)->setConstructorArgs([$twigLoader, []])->getMock();
        $this->twigEnvironment->expects($this->any())
            ->method("addGlobal")
            ->willReturnCallback(function($name, $value) {
                $this->twigGlobals[$name] = $value;
            });
        $this->twigEnvironment->expects($this->any())
            ->method("getGlobals")
            ->willReturnCallback(function() {
                return $this->twigGlobals;
            });
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj = new ProvidersManager($this->twigEnvironment);

        $this->assertEquals(null, $obj->getApplicationProvider());
        $this->assertEquals(null, $obj->getBreadcrumbsProvider());
        $this->assertEquals(null, $obj->getDropDownHookProvider());
        $this->assertEquals(null, $obj->getDropDownNotificationsProvider());
        $this->assertEquals(null, $obj->getDropDownTasksProvider());
        $this->assertEquals(null, $obj->getFooterProvider());
        $this->assertEquals(null, $obj->getNavigationProvider());
        $this->assertEquals(null, $obj->getSearchProvider());
        $this->assertEquals(null, $obj->getUserInfoProvider());
    }

    /**
     * Tests the register() method.
     *
     * @return void
     * @depends testConstructor
     */
    public function testRegister() {

        $obj = new ProvidersManager($this->twigEnvironment);
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
     * @depends testConstructor
     */
    public function testSetApplicationProvider() {

        // Set the mocks.
        $provider = $this->getMockBuilder(ApplicationProviderInterface::class)->getMock();

        $obj = new ProvidersManager($this->twigEnvironment);

        $obj->setApplicationProvider($provider);
        $this->assertEquals($provider, $obj->getApplicationProvider());
    }

    /**
     * Tests the setBreadcrumbsProvider() method.
     *
     * @return void
     * @depends testConstructor
     */
    public function testSetBreadcrumbsProvider() {

        // Set the mocks.
        $provider = $this->getMockBuilder(BreadcrumbsProviderInterface::class)->getMock();

        $obj = new ProvidersManager($this->twigEnvironment);

        $obj->setBreadcrumbsProvider($provider);
        $this->assertEquals($provider, $obj->getBreadcrumbsProvider());
    }

    /**
     * Tests the setDropDownHookProvider() method.
     *
     * @return void
     * @depends testConstructor
     */
    public function testSetDropDownHookProvider() {

        // Set the mocks.
        $provider = $this->getMockBuilder(DropDownHookProviderInterface::class)->getMock();

        $obj = new ProvidersManager($this->twigEnvironment);

        $obj->setDropDownHookProvider($provider);
        $this->assertEquals($provider, $obj->getDropDownHookProvider());
    }

    /**
     * Tests the setDropDownNotificationsProvider() method.
     *
     * @return void
     * @depends testConstructor
     */
    public function testSetDropDownNotificationsProvider() {

        // Set the mocks.
        $provider = $this->getMockBuilder(DropDownNotificationsProviderInterface::class)->getMock();

        $obj = new ProvidersManager($this->twigEnvironment);

        $obj->setDropDownNotificationsProvider($provider);
        $this->assertEquals($provider, $obj->getDropDownNotificationsProvider());
    }

    /**
     * Tests the setDropDownTasksProvider() method.
     *
     * @return void
     * @depends testConstructor
     */
    public function testSetDropDownTasksProvider() {

        // Set the mocks.
        $provider = $this->getMockBuilder(DropDownTasksProviderInterface::class)->getMock();

        $obj = new ProvidersManager($this->twigEnvironment);

        $obj->setDropDownTasksProvider($provider);
        $this->assertEquals($provider, $obj->getDropDownTasksProvider());
    }

    /**
     * Tests the setFooterProvider() method.
     *
     * @return void
     * @depends testConstructor
     */
    public function testSetFooterProvider() {

        // Set the mocks.
        $provider = $this->getMockBuilder(FooterProviderInterface::class)->getMock();

        $obj = new ProvidersManager($this->twigEnvironment);

        $obj->setFooterProvider($provider);
        $this->assertEquals($provider, $obj->getFooterProvider());
    }

    /**
     * Tests the setNavigationProvider() method.
     *
     * @return void
     * @depends testConstructor
     */
    public function testSetNavigationProvider() {

        // Set the mocks.
        $provider = $this->getMockBuilder(NavigationProviderInterface::class)->getMock();

        $obj = new ProvidersManager($this->twigEnvironment);

        $obj->setNavigationProvider($provider);
        $this->assertEquals($provider, $obj->getNavigationProvider());
    }

    /**
     * Tests the setSearchProvider() method.
     *
     * @return void
     * @depends testConstructor
     */
    public function testSetSearchProvider() {

        // Set the mocks.
        $provider = $this->getMockBuilder(SearchProviderInterface::class)->getMock();

        $obj = new ProvidersManager($this->twigEnvironment);

        $obj->setSearchProvider($provider);
        $this->assertEquals($provider, $obj->getSearchProvider());
    }

    /**
     * Tests the setUserInfoProvider() method.
     *
     * @return void
     * @depends testConstructor
     */
    public function testSetUserInfoProvider() {

        // Set the mocks.
        $provider = $this->getMockBuilder(UserInfoProviderInterface::class)->getMock();

        $obj = new ProvidersManager($this->twigEnvironment);

        $obj->setUserInfoProvider($provider);
        $this->assertEquals($provider, $obj->getUserInfoProvider());
    }

}
