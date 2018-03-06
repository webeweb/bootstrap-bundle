<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Provider;

use Twig_Environment;
use WBW\Bundle\BootstrapBundle\Provider\Application\ApplicationProviderInterface;
use WBW\Bundle\BootstrapBundle\Provider\Breadcrumbs\BreadcrumbsProviderInterface;
use WBW\Bundle\BootstrapBundle\Provider\DropDown\DropDownHookProviderInterface;
use WBW\Bundle\BootstrapBundle\Provider\DropDown\DropDownNotificationsProviderInterface;
use WBW\Bundle\BootstrapBundle\Provider\DropDown\DropDownTasksProviderInterface;
use WBW\Bundle\BootstrapBundle\Provider\Footer\FooterProviderInterface;
use WBW\Bundle\BootstrapBundle\Provider\Navigation\NavigationProviderInterface;
use WBW\Bundle\BootstrapBundle\Provider\Search\SearchProviderInterface;
use WBW\Bundle\BootstrapBundle\Provider\User\UserInfoProviderInterface;

/**
 * Providers manager.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Provider
 * @final
 */
final class ProvidersManager {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.bundle.bootstrapbundle.provider.manager";

    /**
     * Application provider.
     *
     * @var ApplicationProviderInterface
     */
    private $applicationProvider;

    /**
     * Breadcrumbs provider.
     *
     * @var BreadcrumbsProviderInterface
     */
    private $breadcrumbsProvider;

    /**
     * Drop down hook provider.
     *
     * @var DropDownHookProviderInterface
     */
    private $dropDownHookProvider;

    /**
     * Drop down notifications provider.
     *
     * @var DropDownNotificationsProviderInterface
     */
    private $dropDownNotificationsProvider;

    /**
     * Drop down tasks provider.
     *
     * @var DropDownTasksProviderInterface
     */
    private $dropDownTasksProvider;

    /**
     * Footer provider.
     *
     * @var FooterProviderInterface
     */
    private $footerProvider;

    /**
     * Navigation provider.
     *
     * @var NavigationProviderInterface
     */
    private $navigationProvider;

    /**
     * Search provider.
     *
     * @var SearchProviderInterface
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
     * @var UserInfoProviderInterface
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
     * @return ApplicationProviderInterface Returns the application provider.
     */
    public function getApplicationProvider() {
        return $this->applicationProvider;
    }

    /**
     * Get the breadcrumbs provider.
     *
     * @return BreadcrumbsProviderInterface Returns the breadcrumbs provider.
     */
    public function getBreadcrumbsProvider() {
        return $this->breadcrumbsProvider;
    }

    /**
     * Get the drop down hook provider.
     *
     * @return DropDownHookProviderInterface Returns the drop down hook provider.
     */
    public function getDropDownHookProvider() {
        return $this->dropDownHookProvider;
    }

    /**
     * Get the drop down notifications provider.
     *
     * @return DropDownNotificationsProviderInterface Returns the drop down notifications provider.
     */
    public function getDropDownNotificationsProvider() {
        return $this->dropDownNotificationsProvider;
    }

    /**
     * Get the drop down tasks provider.
     *
     * @return DropDownTasksProviderInterface Returns the drop down tasks provider.
     */
    public function getDropDownTasksProvider() {
        return $this->dropDownTasksProvider;
    }

    /**
     * Get the footer provider.
     *
     * @return FooterProviderInterface Returns the footer provider.
     */
    public function getFooterProvider() {
        return $this->footerProvider;
    }

    /**
     * Get the navigation provider.
     *
     * @return NavigationProviderInterface Returns the navigation provider.
     */
    public function getNavigationProvider() {
        return $this->navigationProvider;
    }

    /**
     * Get the search provider.
     *
     * @return SearchProviderInterface Returns the search provider.
     */
    public function getSearchProvider() {
        return $this->searchProvider;
    }

    /**
     * Get the user info provider.
     *
     * @return UserInfoProviderInterface Returns the user info provider.
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
     * @param ApplicationProviderInterface $applicationProvider The application provider.
     * @return ProvidersManager Returns the providers manager.
     */
    public function setApplicationProvider(ApplicationProviderInterface $applicationProvider) {
        $this->applicationProvider = $applicationProvider;
        return $this;
    }

    /**
     * Set the breadcrumbs provider.
     *
     * @param BreadcrumbsProviderInterface $breadcrumbsProvider The breadcrumbs provider.
     * @return ProvidersManager Returns the providers manager.
     */
    public function setBreadcrumbsProvider(BreadcrumbsProviderInterface $breadcrumbsProvider) {
        $this->breadcrumbsProvider = $breadcrumbsProvider;
        return $this;
    }

    /**
     * Set the drop down hook provider.
     *
     * @param DropDownHookProviderInterface $dropDownHookProvider The drop down hook provider.
     * @return ProvidersManager Returns the providers manager.
     */
    public function setDropDownHookProvider(DropDownHookProviderInterface $dropDownHookProvider) {
        $this->dropDownHookProvider = $dropDownHookProvider;
        return $this;
    }

    /**
     * Set the drop down notifications provider.
     *
     * @param DropDownNotificationsProviderInterface $dropDownNotificationsProvider The drop down notifications provider.
     * @return ProvidersManager Returns the providers manager.
     */
    public function setDropDownNotificationsProvider(DropDownNotificationsProviderInterface $dropDownNotificationsProvider) {
        $this->dropDownNotificationsProvider = $dropDownNotificationsProvider;
        return $this;
    }

    /**
     * Set the drop down tasks provider.
     *
     * @param DropDownTasksProviderInterface $dropDownTasksProvider The drop down task provider.
     * @return ProvidersManager Returns the providers manager.
     */
    public function setDropDownTasksProvider(DropDownTasksProviderInterface $dropDownTasksProvider) {
        $this->dropDownTasksProvider = $dropDownTasksProvider;
        return $this;
    }

    /**
     * Set the footer provider.
     *
     * @param FooterProviderInterface $footerProvider The footer priovider.
     * @return ProvidersManager Returns the providers manager.
     */
    public function setFooterProvider(FooterProviderInterface $footerProvider) {
        $this->footerProvider = $footerProvider;
        return $this;
    }

    /**
     * Set the navigation provider.
     *
     * @param NavigationProviderInterface $navigationProvider The navigation provider.
     * @return ProvidersManager Returns the providers manager.
     */
    public function setNavigationProvider(NavigationProviderInterface $navigationProvider) {
        $this->navigationProvider = $navigationProvider;
        return $this;
    }

    /**
     * Set the search provider.
     *
     * @param SearchProviderInterface $searchProvider The search provider.
     * @return ProvidersManager Returns the providers manager.
     */
    public function setSearchProvider(SearchProviderInterface $searchProvider) {
        $this->searchProvider = $searchProvider;
        return $this;
    }

    /**
     * Set the user info provider.
     *
     * @param UserInfoProviderInterface $userInfoProvider The user info provider.
     * @return ProvidersManager Returns the providers manager.
     */
    public function setUserInfoProvider(UserInfoProviderInterface $userInfoProvider) {
        $this->userInfoProvider = $userInfoProvider;
        return $this;
    }

}
