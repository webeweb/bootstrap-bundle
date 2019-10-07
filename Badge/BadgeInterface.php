<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Badge;

use WBW\Bundle\BootstrapBundle\BootstrapInterface;

/**
 * Badge interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Badge
 */
interface BadgeInterface {

    /**
     * Badge type "danger".
     *
     * @var string
     */
    const BADGE_TYPE_DANGER = BootstrapInterface::BOOTSTRAP_DANGER;

    /**
     * Badge type "dark".
     *
     * @var string
     */
    const BADGE_TYPE_DARK = BootstrapInterface::BOOTSTRAP_DARK;

    /**
     * Badge type "info".
     *
     * @var string
     */
    const BADGE_TYPE_INFO = BootstrapInterface::BOOTSTRAP_INFO;

    /**
     * Badge type "light".
     *
     * @var string
     */
    const BADGE_TYPE_LIGHT = BootstrapInterface::BOOTSTRAP_LIGHT;

    /**
     * Badge type "primary".
     *
     * @var string
     */
    const BADGE_TYPE_PRIMARY = BootstrapInterface::BOOTSTRAP_PRIMARY;

    /**
     * Badge type "secondary".
     *
     * @var string
     */
    const BADGE_TYPE_SECONDARY = BootstrapInterface::BOOTSTRAP_SECONDARY;

    /**
     * Badge type "success".
     *
     * @var string
     */
    const BADGE_TYPE_SUCCESS = BootstrapInterface::BOOTSTRAP_SUCCESS;

    /**
     * Badge type "warning".
     *
     * @var string
     */
    const BADGE_TYPE_WARNING = BootstrapInterface::BOOTSTRAP_WARNING;

    /**
     * Get the content.
     *
     * @return string Returns the content.
     */
    public function getContent();

    /**
     * Get the pill.
     *
     * @return bool Returns the pill.
     */
    public function getPill();

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
     * @return BadgeInterface Returns this badge.
     */
    public function setContent($content);

    /**
     * Set the pill.
     *
     * @param bool $pill The pill.
     * @return BadgeInterface Returns this badge.
     */
    public function setPill($pill);

    /**
     * Set the type.
     *
     * @param string $class The type.
     * @return BadgeInterface Returns this badge.
     */
    public function setType($class);
}