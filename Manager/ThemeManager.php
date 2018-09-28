<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Manager;

use WBW\Bundle\BootstrapBundle\Provider\Theme\ApplicationThemeProviderInterface;
use WBW\Bundle\BootstrapBundle\Provider\Theme\BreadcrumbsThemeProviderInterface;
use WBW\Bundle\BootstrapBundle\Provider\Theme\FooterThemeProviderInterface;
use WBW\Bundle\BootstrapBundle\Provider\Theme\HookDropDownThemeProviderInterface;
use WBW\Bundle\BootstrapBundle\Provider\Theme\NavigationThemeProviderInterface;
use WBW\Bundle\BootstrapBundle\Provider\Theme\NotificationsDropDownThemeProviderInterface;
use WBW\Bundle\BootstrapBundle\Provider\Theme\SearchThemeProviderInterface;
use WBW\Bundle\BootstrapBundle\Provider\Theme\TasksDropDownThemeProviderInterface;
use WBW\Bundle\BootstrapBundle\Provider\Theme\UserInfoThemeProviderInterface;
use WBW\Library\Core\Argument\ObjectHelper;

/**
 * Theme manager.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Manager
 */
class ThemeManager extends AbstractThemeManager {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.bootstrap.manager.theme";

    /**
     * Get the application theme provider.
     *
     * @return ApplicationThemeProviderInterface Returns the application theme provider.
     */
    public function getApplicationThemeProvider() {
        return $this->getProvider(ApplicationThemeProviderInterface::class);
    }

    /**
     * Get the breadcrumbs theme provider.
     *
     * @return BreadcrumbsThemeProviderInterface Returns the breadcrumbs theme provider.
     */
    public function getBreadcrumbsThemeProvider() {
        return $this->getProvider(BreadcrumbsThemeProviderInterface::class);
    }

    /**
     * Get the footer theme provider.
     *
     * @return FooterThemeProviderInterface Returns the footer theme provider.
     */
    public function getFooterThemeProvider() {
        return $this->getProvider(FooterThemeProviderInterface::class);
    }

    /**
     * Get the hook drop down theme provider.
     *
     * @return HookDropDownThemeProviderInterface Returns the hook drop down theme provider.
     */
    public function getHookDropDownThemeProvider() {
        return $this->getProvider(HookDropDownThemeProviderInterface::class);
    }

    /**
     * Get the navigation theme provider.
     *
     * @return NavigationThemeProviderInterface Returns the navigation theme provider.
     */
    public function getNavigationThemeProvider() {
        return $this->getProvider(NavigationThemeProviderInterface::class);
    }

    /**
     * Get the notifications drop down theme provider.
     *
     * @return NotificationsDropDownThemeProviderInterface Returns the Notifications drop down theme provider.
     */
    public function getNotificationsDropDownThemeProvider() {
        return $this->getProvider(NotificationsDropDownThemeProviderInterface::class);
    }

    /**
     * Get the search theme provider.
     *
     * @return SearchThemeProviderInterface Returns the search theme provider.
     */
    public function getSearchThemeProvider() {
        return $this->getProvider(SearchThemeProviderInterface::class);
    }

    /**
     * Get the tasks drop down theme provider.
     *
     * @return TasksDropDownThemeProviderInterface Returns the tasks drop down theme provider.
     */
    public function getTasksDropDownThemeProvider() {
        return $this->getProvider(TasksDropDownThemeProviderInterface::class);
    }

    /**
     * Get the user info theme provider.
     *
     * @return UserInfoThemeProviderInterface Returns the user info theme provider.
     */
    public function getUserInfoThemeProvider() {
        return $this->getProvider(UserInfoThemeProviderInterface::class);
    }

    /**
     * {@inheritdoc}
     */
    protected function initIndex() {
        return [
            ObjectHelper::getShortName(ApplicationThemeProviderInterface::class)           => null,
            ObjectHelper::getShortName(BreadcrumbsThemeProviderInterface::class)           => null,
            ObjectHelper::getShortName(FooterThemeProviderInterface::class)                => null,
            ObjectHelper::getShortName(HookDropDownThemeProviderInterface::class)          => null,
            ObjectHelper::getShortName(NavigationThemeProviderInterface::class)            => null,
            ObjectHelper::getShortName(NotificationsDropDownThemeProviderInterface::class) => null,
            ObjectHelper::getShortName(SearchThemeProviderInterface::class)                => null,
            ObjectHelper::getShortName(TasksDropDownThemeProviderInterface::class)         => null,
            ObjectHelper::getShortName(UserInfoThemeProviderInterface::class)              => null,
        ];
    }

    /**
     * Set the application theme provider.
     *
     * @param ApplicationThemeProviderInterface $provider The application theme provider.
     * @return ManagerInterface Returns this manager.
     */
    public function setApplicationThemeProvider(ApplicationThemeProviderInterface $provider) {
        $this->setProvider(ApplicationThemeProviderInterface::class, $provider);
        return $this;
    }

    /**
     * Set the breadcrumbs theme provider.
     *
     * @param BreadcrumbsThemeProviderInterface $provider The breadcrumbs theme provider.
     * @return ManagerInterface Returns this manager.
     */
    public function setBreadcrumbsThemeProvider(BreadcrumbsThemeProviderInterface $provider) {
        $this->setProvider(BreadcrumbsThemeProviderInterface::class, $provider);
        return $this;
    }

    /**
     * Set the footer theme provider.
     *
     * @param FooterThemeProviderInterface $provider The footer theme provider.
     * @return ManagerInterface Returns this manager.
     */
    public function setFooterThemeProvider(FooterThemeProviderInterface $provider) {
        $this->setProvider(FooterThemeProviderInterface::class, $provider);
        return $this;
    }

    /**
     * Set the hook drop down theme provider.
     *
     * @param HookDropDownThemeProviderInterface $provider The hook drop down theme provider.
     * @return ManagerInterface Returns this manager.
     */
    public function setHookDropDownThemeProvider(HookDropDownThemeProviderInterface $provider) {
        $this->setProvider(HookDropDownThemeProviderInterface::class, $provider);
        return $this;
    }

    /**
     * Set the navigation theme provider.
     *
     * @param NavigationThemeProviderInterface $provider The navigation theme provider.
     * @return ManagerInterface Returns this manager.
     */
    public function setNavigationThemeProvider(NavigationThemeProviderInterface $provider) {
        $this->setProvider(NavigationThemeProviderInterface::class, $provider);
        return $this;
    }

    /**
     * Set the notifications drop down theme provider.
     *
     * @param NotificationsDropDownThemeProviderInterface $provider The notifications drop down theme provider.
     * @return ManagerInterface Returns this manager.
     */
    public function setNotificationsDropDownThemeProvider(NotificationsDropDownThemeProviderInterface $provider) {
        $this->setProvider(NotificationsDropDownThemeProviderInterface::class, $provider);
        return $this;
    }

    /**
     * Set the search theme provider.
     *
     * @param SearchThemeProviderInterface $provider The search theme provider.
     * @return ManagerInterface Returns this manager.
     */
    public function setSearchThemeProvider(SearchThemeProviderInterface $provider) {
        $this->setProvider(SearchThemeProviderInterface::class, $provider);
        return $this;
    }

    /**
     * Set the tasks drop down theme provider.
     *
     * @param TasksDropDownThemeProviderInterface $provider The tasks drop down theme provider.
     * @return ManagerInterface Returns this manager.
     */
    public function setTasksDropDownThemeProvider(TasksDropDownThemeProviderInterface $provider) {
        $this->setProvider(TasksDropDownThemeProviderInterface::class, $provider);
        return $this;
    }

    /**
     * Set the user info theme provider.
     *
     * @param UserInfoThemeProviderInterface $provider The user info theme provider.
     * @return ManagerInterface Returns this manager.
     */
    public function setUserInfoThemeProvider(UserInfoThemeProviderInterface $provider) {
        $this->setProvider(UserInfoThemeProviderInterface::class, $provider);
        return $this;
    }

}
