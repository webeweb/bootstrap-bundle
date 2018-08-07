<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Exception;

use Symfony\Component\Security\Core\User\UserInterface;
use WBW\Library\Core\Helper\IO\HTTPInterface;

/**
 * Bad user role exception.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Exception
 */
class BadUserRoleException extends AbstractBootstrapException {

    /**
     * Redirect.
     *
     * @var string
     */
    private $redirect;

    /**
     * Roles.
     *
     * @var array
     */
    private $roles;

    /**
     * Route.
     *
     * @var string
     */
    private $route;

    /**
     * User.
     *
     * @var UserInterface
     */
    private $user;

    /**
     * Constructor.
     *
     * @param UserInterface $user The user.
     * @param array $roles The roles.
     * @param string $route The route.
     * @param string $redirect The redirect.
     */
    public function __construct(UserInterface $user, array $roles, $route, $redirect) {
        parent::__construct(sprintf("User \"%s\" is not allowed to access to \"%s\" with roles [%s]", $user->getUsername(), $route, implode(",", $roles)), HTTPInterface::HTTP_STATUS_FORBIDDEN);
        $this->setRedirect($redirect);
        $this->setRoles($roles);
        $this->setRoute($route);
        $this->setUser($user);
    }

    /**
     * Get the redirect.
     *
     * @return string Returns the redirect.
     */
    public function getRedirect() {
        return $this->redirect;
    }

    /**
     * Get the roles.
     *
     * @return array Returns the roles.
     */
    public function getRoles() {
        return $this->roles;
    }

    /**
     * Get the route.
     *
     * @return string Returns the route.
     */
    public function getRoute() {
        return $this->route;
    }

    /**
     * Get the user.
     *
     * @return UserInterface Returns the user.
     */
    public function getUser() {
        return $this->user;
    }

    /**
     * Set the redirect.
     *
     * @param string $redirect The redirect.
     * @return BadUserRoleException Returns this bad user role exception.
     */
    protected function setRedirect($redirect) {
        $this->redirect = $redirect;
        return $this;
    }

    /**
     * Set the roles;
     *
     * @param array $roles The roles.
     * @return BadUserRoleException Returns this bad user role exception.
     */
    public function setRoles(array $roles) {
        $this->roles = $roles;
        return $this;
    }

    /**
     * Set the route.
     *
     * @param string $route The route.
     * @return BadUserRoleException Returns this bad user role exception.
     */
    protected function setRoute($route) {
        $this->route = $route;
        return $this;
    }

    /**
     * Set the user.
     *
     * @param UserInterface $user The user.
     * @return BadUserRoleException Returns this bad user role exception.
     */
    protected function setUser(UserInterface $user) {
        $this->user = $user;
        return $this;
    }

}
