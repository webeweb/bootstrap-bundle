<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Alert;

use WBW\Bundle\BootstrapBundle\BootstrapInterface;

/**
 * Alert interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Alert
 */
interface AlertInterface {

    /**
     * Alert type "danger".
     *
     * @var string
     */
    const ALERT_TYPE_DANGER = BootstrapInterface::BOOTSTRAP_DANGER;

    /**
     * Alert type "dark".
     *
     * @var string
     */
    const ALERT_TYPE_DARK = BootstrapInterface::BOOTSTRAP_DARK;

    /**
     * Alert type "info".
     *
     * @var string
     */
    const ALERT_TYPE_INFO = BootstrapInterface::BOOTSTRAP_INFO;

    /**
     * Alert type "light".
     *
     * @var string
     */
    const ALERT_TYPE_LIGHT = BootstrapInterface::BOOTSTRAP_LIGHT;

    /**
     * Alert type "primary".
     *
     * @var string
     */
    const ALERT_TYPE_PRIMARY = BootstrapInterface::BOOTSTRAP_PRIMARY;

    /**
     * Alert type "secondary".
     *
     * @var string
     */
    const ALERT_TYPE_SECONDARY = BootstrapInterface::BOOTSTRAP_SECONDARY;

    /**
     * Alert type "success".
     *
     * @var string
     */
    const ALERT_TYPE_SUCCESS = BootstrapInterface::BOOTSTRAP_SUCCESS;

    /**
     * Alert type "warning".
     *
     * @var string
     */
    const ALERT_TYPE_WARNING = BootstrapInterface::BOOTSTRAP_WARNING;

    /**
     * Get the content.
     *
     * @return string Returns the content.
     */
    public function getContent();

    /**
     * Get the dismissible.
     *
     * @return bool Returns the dismissible.
     */
    public function getDismissible();

    /**
     * Get the prefix.
     *
     * @return string Returns the prefix.
     */
    public function getPrefix();

    /**
     * Get the type.
     *
     * @return string Returns the type.
     */
    public function getType();

    /**
     * Set the content.
     *
     * @param string $content The content.
     * @return AlertInterface Returns this alert.
     */
    public function setContent($content);

    /**
     * Set the dismissible.
     *
     * @param bool $dismissible The dismissible.
     * @return AlertInterface Returns this alert.
     */
    public function setDismissible($dismissible);

    /**
     * Set the type.
     *
     * @param string $class The type.
     * @return AlertInterface Returns this alert.
     */
    public function setType($class);
}
