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

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpKernel\Event\GetResponseForExceptionEvent;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use WBW\Bundle\BootstrapBundle\Exception\BadUserRoleException;
use WBW\Bundle\BootstrapBundle\Manager\ThemeManager;

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
    const SERVICE_NAME = "webeweb.bootstrap.eventlistener.kernel";

    /**
     * Theme manager.
     *
     * @var ThemeManager
     */
    private $themeManager;

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
     * @param TokenStorageInterface $tokenStorage The token storage service.
     * @param ThemeManager $providersManager The providers manager service.
     */
    public function __construct(TokenStorageInterface $tokenStorage, ThemeManager $providersManager) {
        $this->setThemeManager($providersManager);
        $this->setTokenStorage($tokenStorage);
    }

    /**
     * Get the theme manager.
     *
     * @return ThemeManager Returns the theme manager.
     */
    public function getThemeManager() {
        return $this->themeManager;
    }

    /**
     * Get the request.
     *
     * @return Request Returns the request.
     */
    public function getRequest() {
        return static::$request;
    }

    /**
     * Get the token storage.
     *
     * @return TokenStorageInterface Returns the token storage.
     */
    public function getTokenStorage() {
        return $this->tokenStorage;
    }

    /**
     * Get the current user.
     *
     * @return UserInterface Returns the current user in case of success, null otherwise.
     */
    public function getUser() {
        $token = null;
        if (null === $this->user) {
            $token = $this->getTokenStorage()->getToken();
        }
        if (null !== $token) {
            $this->user = $token->getUser();
        }
        if (true === ($this->user instanceof UserInterface)) {
            return $this->user;
        }
        return null;
    }

    /**
     * On kernel exception.
     *
     * @param GetResponseForExceptionEvent $event The event.
     * @return Event Returns the event.
     */
    public function onKernelException(GetResponseForExceptionEvent $event) {

        // Get the exception.
        $ex = $event->getException();

        // Check the exception.
        if (true === ($ex instanceOf BadUserRoleException) && null !== $ex->getRedirect()) {

            // Set the response.
            $event->setResponse(new RedirectResponse($ex->getRedirect()));
        }

        // Return the event.
        return $event;
    }

    /**
     * On kernel request.
     *
     * @param GetResponseEvent $event The event.
     * @return void
     */
    public function onKernelRequest(GetResponseEvent $event) {

        // Initialize the request.
        $this->setRequest($event->getRequest());

        // Register the providers.
        $this->getThemeManager()->addGlobal();
    }

    /**
     * Set the providers manager.
     *
     * @param ThemeManager $themeManager The theme manager.
     * @return KernelEventListener Returns this kernel event listener.
     */
    protected function setThemeManager(ThemeManager $themeManager) {
        $this->themeManager = $themeManager;
        return $this;
    }

    /**
     * Set the request.
     *
     * @param Request $request The request.
     * @return KernelEventListener Returns this kernel event listener.
     */
    protected function setRequest(Request $request) {
        self::$request = $request;
        return $this;
    }

    /**
     * Set the token storage.
     *
     * @param TokenStorageInterface $tokenStorage The token storage.
     * @return KernelEventListener Returns this kernel event listener.
     */
    protected function setTokenStorage(TokenStorageInterface $tokenStorage) {
        $this->tokenStorage = $tokenStorage;
        return $this;
    }

}
