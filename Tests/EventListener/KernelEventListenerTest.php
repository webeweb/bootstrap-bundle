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

use Exception;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpKernel\Event\GetResponseForExceptionEvent;
use Symfony\Component\HttpKernel\HttpKernelInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use WBW\Bundle\BootstrapBundle\EventListener\KernelEventListener;
use WBW\Bundle\BootstrapBundle\Exception\BadUserRoleException;
use WBW\Bundle\BootstrapBundle\Manager\ThemeManager;
use WBW\Bundle\BootstrapBundle\Tests\AbstractFrameworkTestCase;

/**
 * Kernel event listener test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\EventListener
 * @final
 */
final class KernelEventListenerTest extends AbstractFrameworkTestCase {

    /**
     * Providers manager.
     *
     * @var ProviderManager
     */
    private $providersManager;

    /**
     * {@inheritdoc}
     */
    protected function setUp() {
        parent::setUp();

        // Set a Provider manager mock.
        $this->providersManager = new ThemeManager($this->twigEnvironment);
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new KernelEventListener($this->tokenStorage, $this->providersManager);

        $this->assertNotNull($obj->getRequest());
        $this->assertNull($obj->getUser());
    }

    /**
     * Tests the getUser() method.
     *
     * @return void
     * @depends testConstruct
     */
    public function testGetUser() {

        $obj = new KernelEventListener($this->tokenStorage, $this->providersManager);

        $this->user = null;
        $this->assertNull($obj->getUser());

        $this->user = $this->getMockBuilder(UserInterface::class)->getMock();
        $this->assertSame($this->user, $obj->getUser());
    }

    /**
     * Tests the onKernelException() method.
     *
     * @return void
     */
    public function testOnKernelException() {

        $obj = new KernelEventListener($this->tokenStorage, $this->providersManager);

        $arg = new GetResponseForExceptionEvent($this->kernel, new Request(), "GET", new Exception());
        $this->assertSame($arg, $obj->onKernelException($arg));
    }

    /**
     * Tests the onKernelException() method.
     *
     * @return void
     */
    public function testOnKernelExceptionWithBadUserRoleException() {

        $obj = new KernelEventListener($this->tokenStorage, $this->providersManager);

        // Set an User modk.
        $this->user = $this->getMockBuilder(UserInterface::class)->getMock();

        $arg = new GetResponseForExceptionEvent($this->kernel, new Request(), "GET", new BadUserRoleException($this->user, [], "route", "/"));
        $this->assertSame($arg, $obj->onKernelException($arg));
    }

    /**
     * Tests the onKernelRequest() method.
     *
     * @return void
     * @depends testConstruct
     */
    public function testOnKernelRequest() {

        $obj = new KernelEventListener($this->tokenStorage, $this->providersManager);

        $obj->onKernelRequest(new GetResponseEvent($this->kernel, new Request(), HttpKernelInterface::MASTER_REQUEST));
        $this->assertInstanceOf(Request::class, $obj->getRequest());
    }

}
