<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Assets;

use WBW\Bundle\BootstrapBundle\WBWBootstrapInterface;
use WBW\Library\Symfony\Assets\AlertInterface as BaseAlertInterface;

/**
 * Alert interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Assets
 */
interface AlertInterface extends BaseAlertInterface {

    /**
     * Alert type "dark".
     *
     * @var string
     */
    const ALERT_TYPE_DARK = WBWBootstrapInterface::BOOTSTRAP_TYPE_DARK;

    /**
     * Alert type "light".
     *
     * @var string
     */
    const ALERT_TYPE_LIGHT = WBWBootstrapInterface::BOOTSTRAP_TYPE_LIGHT;

    /**
     * Alert type "primary".
     *
     * @var string
     */
    const ALERT_TYPE_PRIMARY = WBWBootstrapInterface::BOOTSTRAP_TYPE_PRIMARY;

    /**
     * Alert type "secondary".
     *
     * @var string
     */
    const ALERT_TYPE_SECONDARY = WBWBootstrapInterface::BOOTSTRAP_TYPE_SECONDARY;

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
     * Set the content.
     *
     * @param string|null $content The content.
     * @return AlertInterface Returns this alert.
     */
    public function setContent(?string $content);

    /**
     * Set the dismissible.
     *
     * @param bool|null $dismissible The dismissible.
     * @return AlertInterface Returns this alert.
     */
    public function setDismissible(?bool $dismissible): AlertInterface;
}
