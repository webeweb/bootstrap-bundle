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

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\Security\Core\User\UserInterface;
use WBW\Bundle\BootstrapBundle\EventListener\KernelEventListener;
use WBW\Bundle\BootstrapBundle\Manager\ProvidersManager;
use WBW\Bundle\BootstrapBundle\Tests\AbstractBootstrapFrameworkTestCase;

/**
 * Kernel event listener test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\EventListener
 * @final
 */
final class KernelEventListenerTest extends AbstractBootstrapFrameworkTestCase {

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
        $this->providersManager = new ProvidersManager($this->twigEnvironment);
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj = new KernelEventListener($this->tokenStorage, $this->providersManager);

        $this->assertNotNull($obj->getRequest());
        $this->assertNull($obj->getUser());
    }

    /**
     * Tests the getUser() method.
     *
     * @return void
     * @depends testConstructor
     */
    public function testGetUser() {

        $obj = new KernelEventListener($this->tokenStorage, $this->providersManager);

        $this->user = null;
        $this->assertNull($obj->getUser());

        $this->user = $this->getMockBuilder(UserInterface::class)->getMock();
        $this->assertSame($this->user, $obj->getUser());
    }

    /**
     * Tests the onKernelRequest() method.
     *
     * @return void
     * @depends testConstructor
     */
    public function testOnKernelRequest() {

        $obj = new KernelEventListener($this->tokenStorage, $this->providersManager);

        $obj->onKernelRequest(new GetResponseEvent($this->kernel, new Request(), "GET"));
        $this->assertInstanceOf(Request::class, $obj->getRequest());
    }

}
