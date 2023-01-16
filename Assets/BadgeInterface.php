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

use WBW\Bundle\BootstrapBundle\WBWBootstrapBundle;
use WBW\Library\Symfony\Assets\BadgeInterface as BaseBadgeInterface;

/**
 * Badge interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Assets
 */
interface BadgeInterface extends BaseBadgeInterface {

    /**
     * Badge type "dark".
     *
     * @var string
     */
    const BADGE_TYPE_DARK = WBWBootstrapBundle::BOOTSTRAP_TYPE_DARK;

    /**
     * Badge type "light".
     *
     * @var string
     */
    const BADGE_TYPE_LIGHT = WBWBootstrapBundle::BOOTSTRAP_TYPE_LIGHT;

    /**
     * Badge type "primary".
     *
     * @var string
     */
    const BADGE_TYPE_PRIMARY = WBWBootstrapBundle::BOOTSTRAP_TYPE_PRIMARY;

    /**
     * Badge type "secondary".
     *
     * @var string
     */
    const BADGE_TYPE_SECONDARY = WBWBootstrapBundle::BOOTSTRAP_TYPE_SECONDARY;

    /**
     * Get the pill.
     *
     * @return bool|null Returns the pill.
     */
    public function getPill(): ?bool;

    /**
     * Get the prefix.
     *
     * @return string|null Returns the prefix.
     */
    public function getPrefix(): ?string;

    /**
     * Set the pill.
     *
     * @param bool|null $pill The pill.
     * @return BadgeInterface Returns this badge.
     */
    public function setPill(?bool $pill): BadgeInterface;
}
