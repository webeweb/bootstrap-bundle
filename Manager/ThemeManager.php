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

use Twig_Environment;
use WBW\Bundle\BootstrapBundle\Provider\Theme\ApplicationThemeProviderInterface;
use WBW\Bundle\BootstrapBundle\Provider\Theme\BreadcrumbsThemeProviderInterface;
use WBW\Bundle\BootstrapBundle\Provider\Theme\DropDownHookThemeProviderInterface;
use WBW\Bundle\BootstrapBundle\Provider\Theme\DropDownNotificationsThemeProviderInterface;
use WBW\Bundle\BootstrapBundle\Provider\Theme\DropDownTasksThemeProviderInterface;
use WBW\Bundle\BootstrapBundle\Provider\Theme\FooterThemeProviderInterface;
use WBW\Bundle\BootstrapBundle\Provider\Theme\NavigationThemeProviderInterface;
use WBW\Bundle\BootstrapBundle\Provider\Theme\SearchThemeProviderInterface;
use WBW\Bundle\BootstrapBundle\Provider\Theme\UserInfoThemeProviderInterface;

/**
 * Theme manager.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Manager
 */
class ThemeManager {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.bootstrap.manager.theme";

    /**
     * Application provider.
     *
     * @var ApplicationThemeProviderInterface
     */
    private $applicationProvider;

    /**
     * Breadcrumbs provider.
     *
     * @var BreadcrumbsThemeProviderInterface
     */
    private $breadcrumbsProvider;

    /**
     * Drop down hook provider.
     *
     * @var DropDownHookThemeProviderInterface
     */
    private $dropDownHookProvider;

    /**
     * Drop down notifications provider.
     *
     * @var DropDownNotificationsThemeProviderInterface
     */
    private $dropDownNotificationsProvider;

    /**
     * Drop down tasks provider.
     *
     * @var DropDownTasksThemeProviderInterface
     */
    private $dropDownTasksProvider;

    /**
     * Footer provider.
     *
     * @var FooterThemeProviderInterface
     */
    private $footerProvider;

    /**
     * Navigation provider.
     *
     * @var NavigationThemeProviderInterface
     */
    private $navigationProvider;

    /**
     * Search provider.
     *
     * @var SearchThemeProviderInterface
     */
    private $searchProvider;

    /**
     * Twig service.
     *
     * @var Twig_Environment
     */
    private $twig;

    /**
     * User info provider.
     *
     * @var UserInfoThemeProviderInterface
     */
    private $userInfoProvider;

    /**
     * Constructor.
     *
     * @param Twig_Environment $twig The Twig service.
     */
    public function __construct(Twig_Environment $twig) {
        $this->twig = $twig;
    }

    /**
     * Get the application provider.
     *
     * @return ApplicationThemeProviderInterface Returns the application provider.
     */
    public function getApplicationProvider() {
        return $this->applicationProvider;
    }

    /**
     * Get the breadcrumbs provider.
     *
     * @return BreadcrumbsThemeProviderInterface Returns the breadcrumbs provider.
     */
    public function getBreadcrumbsProvider() {
        return $this->breadcrumbsProvider;
    }

    /**
     * Get the drop down hook provider.
     *
     * @return DropDownHookThemeProviderInterface Returns the drop down hook provider.
     */
    public function getDropDownHookProvider() {
        return $this->dropDownHookProvider;
    }

    /**
     * Get the drop down notifications provider.
     *
     * @return DropDownNotificationsThemeProviderInterface Returns the drop down notifications provider.
     */
    public function getDropDownNotificationsProvider() {
        return $this->dropDownNotificationsProvider;
    }

    /**
     * Get the drop down tasks provider.
     *
     * @return DropDownTasksThemeProviderInterface Returns the drop down tasks provider.
     */
    public function getDropDownTasksProvider() {
        return $this->dropDownTasksProvider;
    }

    /**
     * Get the footer provider.
     *
     * @return FooterThemeProviderInterface Returns the footer provider.
     */
    public function getFooterProvider() {
        return $this->footerProvider;
    }

    /**
     * Get the navigation provider.
     *
     * @return NavigationThemeProviderInterface Returns the navigation provider.
     */
    public function getNavigationProvider() {
        return $this->navigationProvider;
    }

    /**
     * Get the search provider.
     *
     * @return SearchThemeProviderInterface Returns the search provider.
     */
    public function getSearchProvider() {
        return $this->searchProvider;
    }

    /**
     * Get the user info provider.
     *
     * @return UserInfoThemeProviderInterface Returns the user info provider.
     */
    public function getUserInfoProvider() {
        return $this->userInfoProvider;
    }

    /**
     * Register the providers.
     *
     * @return void
     */
    public function register() {
        $this->twig->addGlobal("ApplicationProvider", $this->applicationProvider);
        $this->twig->addGlobal("BreadcrumbsProvider", $this->breadcrumbsProvider);
        $this->twig->addGlobal("DropDownHookProvider", $this->dropDownHookProvider);
        $this->twig->addGlobal("DropDownNotificationsProvider", $this->dropDownNotificationsProvider);
        $this->twig->addGlobal("DropDownTasksProvider", $this->dropDownTasksProvider);
        $this->twig->addGlobal("FooterProvider", $this->footerProvider);
        $this->twig->addGlobal("NavigationProvider", $this->navigationProvider);
        $this->twig->addGlobal("SearchProvider", $this->searchProvider);
        $this->twig->addGlobal("UserInfoProvider", $this->userInfoProvider);
    }

    /**
     * Set the application provider.
     *
     * @param ApplicationThemeProviderInterface $applicationProvider The application provider.
     * @return ProvidersManager Returns the providers manager.
     */
    public function setApplicationProvider(ApplicationThemeProviderInterface $applicationProvider) {
        $this->applicationProvider = $applicationProvider;
        return $this;
    }

    /**
     * Set the breadcrumbs provider.
     *
     * @param BreadcrumbsThemeProviderInterface $breadcrumbsProvider The breadcrumbs provider.
     * @return ProvidersManager Returns the providers manager.
     */
    public function setBreadcrumbsProvider(BreadcrumbsThemeProviderInterface $breadcrumbsProvider) {
        $this->breadcrumbsProvider = $breadcrumbsProvider;
        return $this;
    }

    /**
     * Set the drop down hook provider.
     *
     * @param DropDownHookThemeProviderInterface $dropDownHookProvider The drop down hook provider.
     * @return ProvidersManager Returns the providers manager.
     */
    public function setDropDownHookProvider(DropDownHookThemeProviderInterface $dropDownHookProvider) {
        $this->dropDownHookProvider = $dropDownHookProvider;
        return $this;
    }

    /**
     * Set the drop down notifications provider.
     *
     * @param DropDownNotificationsThemeProviderInterface $dropDownNotificationsProvider The drop down notifications provider.
     * @return ProvidersManager Returns the providers manager.
     */
    public function setDropDownNotificationsProvider(DropDownNotificationsThemeProviderInterface $dropDownNotificationsProvider) {
        $this->dropDownNotificationsProvider = $dropDownNotificationsProvider;
        return $this;
    }

    /**
     * Set the drop down tasks provider.
     *
     * @param DropDownTasksThemeProviderInterface $dropDownTasksProvider The drop down task provider.
     * @return ProvidersManager Returns the providers manager.
     */
    public function setDropDownTasksProvider(DropDownTasksThemeProviderInterface $dropDownTasksProvider) {
        $this->dropDownTasksProvider = $dropDownTasksProvider;
        return $this;
    }

    /**
     * Set the footer provider.
     *
     * @param FooterThemeProviderInterface $footerProvider The footer priovider.
     * @return ProvidersManager Returns the providers manager.
     */
    public function setFooterProvider(FooterThemeProviderInterface $footerProvider) {
        $this->footerProvider = $footerProvider;
        return $this;
    }

    /**
     * Set the navigation provider.
     *
     * @param NavigationThemeProviderInterface $navigationProvider The navigation provider.
     * @return ProvidersManager Returns the providers manager.
     */
    public function setNavigationProvider(NavigationThemeProviderInterface $navigationProvider) {
        $this->navigationProvider = $navigationProvider;
        return $this;
    }

    /**
     * Set the search provider.
     *
     * @param SearchThemeProviderInterface $searchProvider The search provider.
     * @return ProvidersManager Returns the providers manager.
     */
    public function setSearchProvider(SearchThemeProviderInterface $searchProvider) {
        $this->searchProvider = $searchProvider;
        return $this;
    }

    /**
     * Set the user info provider.
     *
     * @param UserInfoThemeProviderInterface $userInfoProvider The user info provider.
     * @return ProvidersManager Returns the providers manager.
     */
    public function setUserInfoProvider(UserInfoThemeProviderInterface $userInfoProvider) {
        $this->userInfoProvider = $userInfoProvider;
        return $this;
    }

}
