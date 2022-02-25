<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Asset\Alert;

use WBW\Bundle\BootstrapBundle\WBWBootstrapInterface;

/**
 * Alert interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Asset\Alert
 */
interface AlertInterface {

    /**
     * Alert type "danger".
     *
     * @var string
     */
    const ALERT_TYPE_DANGER = WBWBootstrapInterface::BOOTSTRAP_DANGER;

    /**
     * Alert type "dark".
     *
     * @var string
     */
    const ALERT_TYPE_DARK = WBWBootstrapInterface::BOOTSTRAP_DARK;

    /**
     * Alert type "info".
     *
     * @var string
     */
    const ALERT_TYPE_INFO = WBWBootstrapInterface::BOOTSTRAP_INFO;

    /**
     * Alert type "light".
     *
     * @var string
     */
    const ALERT_TYPE_LIGHT = WBWBootstrapInterface::BOOTSTRAP_LIGHT;

    /**
     * Alert type "primary".
     *
     * @var string
     */
    const ALERT_TYPE_PRIMARY = WBWBootstrapInterface::BOOTSTRAP_PRIMARY;

    /**
     * Alert type "secondary".
     *
     * @var string
     */
    const ALERT_TYPE_SECONDARY = WBWBootstrapInterface::BOOTSTRAP_SECONDARY;

    /**
     * Alert type "success".
     *
     * @var string
     */
    const ALERT_TYPE_SUCCESS = WBWBootstrapInterface::BOOTSTRAP_SUCCESS;

    /**
     * Alert type "warning".
     *
     * @var string
     */
    const ALERT_TYPE_WARNING = WBWBootstrapInterface::BOOTSTRAP_WARNING;

    /**
     * Get the content.
     *
     * @return string|null Returns the content.
     */
    public function getContent(): ?string;

    /**
     * Get the dismissible.
     *
     * @return bool|null Returns the dismissible.
     */
    public function getDismissible(): ?bool;

    /**
     * Get the prefix.
     *
     * @return string|null Returns the prefix.
     */
    public function getPrefix(): ?string;

    /**
     * Get the type.
     *
     * @return string|null Returns the type.
     */
    public function getType(): ?string;

    /**
     * Set the content.
     *
     * @param string|null $content The content.
     * @return AlertInterface Returns this alert.
     */
    public function setContent(?string $content): AlertInterface;

    /**
     * Set the dismissible.
     *
     * @param bool|null $dismissible The dismissible.
     * @return AlertInterface Returns this alert.
     */
    public function setDismissible(?bool $dismissible): AlertInterface;

    /**
     * Set the type.
     *
     * @param string|null $type The type.
     * @return AlertInterface Returns this alert.
     */
    public function setType(?string $type): AlertInterface;
}
