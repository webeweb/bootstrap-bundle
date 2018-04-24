<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\EventListener;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use WBW\Bundle\BootstrapBundle\Provider\ProvidersManager;

/**
 * Kernel event listener.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\EventListener
 */
class KernelEventListener {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.bundle.bootstrapbundle.eventlistener.kernel";

    /**
     * Providers manager.
     *
     * @var ProvidersManager
     */
    private $providersManager;

    /**
     * Request.
     *
     * @var Request
     */
    private static $request;

    /**
     * Token storage.
     *
     * @var TokenStorageInterface
     */
    private $tokenStorage;

    /**
     * User.
     *
     * @var UserInterface
     */
    private $user;

    /**
     * Constructor.
     *
     * @param type $tokenStorage The token storage service.
     * @param ProvidersManager The providers manager service.
     */
    public function __construct(TokenStorageInterface $tokenStorage, ProvidersManager $providersManager) {
        $this->providersManager = $providersManager;
        $this->tokenStorage     = $tokenStorage;
    }

    /**
     * Get the request.
     *
     * @return Request Returns the request.
     */
    public function getRequest() {
        return self::$request;
    }

    /**
     * Get the current user.
     *
     * @return UserInterface Returns the current user in case of success, null otherwise.
     */
    public function getUser() {
        if (null === $this->user) {
            $token = $this->tokenStorage->getToken();
            if (null !== $token) {
                $this->user = $token->getUser();
            }
        }
        if (true === ($this->user instanceof UserInterface)) {
            return $this->user;
        }
        return null;
    }

    /**
     * On kernel request.
     *
     * @param GetResponseEvent $event The event.
     * @return void
     */
    public function onKernelRequest(GetResponseEvent $event) {

        // Initialize the request.
        self::$request = $event->getRequest();

        // Register the providers.
        $this->providersManager->register();
    }

}
