<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Asset\Badge;

/**
 * Badge renderer.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Asset\Badge
 */
class BadgeRenderer {

    /**
     * Render a content.
     *
     * @param BadgeInterface $badge The badge.
     * @return string Returns the rendered block.
     */
    public static function renderContent(BadgeInterface $badge): string {
        return null !== $badge->getContent() ? $badge->getContent() : "";
    }

    /**
     * Render a pill.
     *
     * @param BadgeInterface $badge The badge.
     * @return string|null Returns the rendered pill.
     */
    public static function renderPill(BadgeInterface $badge): ?string {
        return true === $badge->getPill() ? "badge-pill" : null;
    }

    /**
     * Render a type.
     *
     * @param BadgeInterface $badge The badge.
     * @return string|null Returns the rendered type.
     */
    public static function renderType(BadgeInterface $badge): ?string {
        return null !== $badge->getType() ? $badge->getPrefix() . $badge->getType() : null;
    }
}
