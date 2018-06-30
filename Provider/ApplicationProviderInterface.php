<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Provider;

/**
 * Application provider interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Provider
 */
interface ApplicationProviderInterface {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.bootstrapbundle.provider.application";

    /**
     * Get the description.
     *
     * @return string Returns the description.
     */
    public function getDescription();

    /**
     * Get the home.
     *
     * @return string Returns the home.
     */
    public function getHome();

    /**
     * Get the name.
     *
     * @return string Returns the name.
     */
    public function getName();

    /**
     * Get the route.
     *
     * @return string Returns the route.
     */
    public function getRoute();

    /**
     * Get the title.
     *
     * @return string Returns the title.
     */
    public function getTitle();

    /**
     * Get the version.
     *
     * @return string Returns the version.
     */
    public function getVersion();

    /**
     * Get the year.
     *
     * @return string Returns the year.
     */
    public function getYear();
}
