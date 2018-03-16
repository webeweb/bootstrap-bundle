<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\EventListener;

use PHPUnit_Framework_TestCase;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpKernel\HttpKernelInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Twig_Environment;
use Twig_LoaderInterface;
use WBW\Bundle\BootstrapBundle\EventListener\KernelEventListener;
use WBW\Bundle\BootstrapBundle\Provider\ProvidersManager;

/**
 * Kernel event listener test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\EventListener
 * @final
 */
final class KernelEventListenerTest extends PHPUnit_Framework_TestCase {

    /**
     * Providers manager.
     *
     * @var ProviderManager
     */
    private $providersManager;

    /**
     * Token storage.
     *
     * @var TokenStorageInterface
     */
    private $tokenStorage;

    /**
     * Twig globals.
     *
     * @var array
     */
    private $twigGlobals = [];

    /**
     * User.
     *
     * @var UserInterface
     */
    private $user;

    /**
     * {@inheritdoc}
     */
    protected function setUp() {

        $twigLoader = $this->getMockBuilder(Twig_LoaderInterface::class)->getMock();

        $twigEnvironment = $this->getMockBuilder(Twig_Environment::class)->setConstructorArgs([$twigLoader, []])->getMock();
        $twigEnvironment->expects($this->any())->method("addGlobal")->willReturnCallback(function($name, $value) {
            $this->twigGlobals[$name] = $value;
        });
        $twigEnvironment->expects($this->any())->method("getGlobals")->willReturnCallback(function() {
            return $this->twigGlobals;
        });

        $this->providersManager = new ProvidersManager($twigEnvironment);

        $token = $this->getMockBuilder(TokenInterface::class)->getMock();
        $token->expects($this->any())->method("getUser")->willReturnCallback(function() {
            return $this->user;
        });

        $this->tokenStorage = $this->getMockBuilder(TokenStorageInterface::class)->getMock();
        $this->tokenStorage->expects($this->any())->method("getToken")->willReturn($token);
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj = new KernelEventListener($this->tokenStorage, $this->providersManager);

        $this->assertEquals(null, $obj->getRequest());
        $this->assertEquals(null, $obj->getUser());
    }

    /**
     * Tests the getUser() method.
     *
     * @return void.
     * @depends testConstructor
     */
    public function testGetUser() {

        $obj = new KernelEventListener($this->tokenStorage, $this->providersManager);

        $this->user = null;
        $this->assertNull(null, $obj->getUser());

        $this->user = $this->getMockBuilder(UserInterface::class)->getMock();
        $this->assertNotNull($obj->getUser());
    }

    /**
     * Tests the onKernelRequest() method.
     *
     * @return void
     * @depends testConstructor
     */
    public function testOnKernelRequest() {

        // Set the mocks.
        $httpKernel = $this->getMockBuilder(HttpKernelInterface::class)->getMock();

        $obj = new KernelEventListener($this->tokenStorage, $this->providersManager);

        $obj->onKernelRequest(new GetResponseEvent($httpKernel, new Request(), "GET"));
        $this->assertInstanceOf(Request::class, $obj->getRequest());
    }

}
