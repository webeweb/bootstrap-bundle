<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Twig\Extension\Component;

use WBW\Bundle\BootstrapBundle\Badge\BadgeInterface;
use WBW\Bundle\BootstrapBundle\Badge\BadgeRenderer;
use WBW\Bundle\BootstrapBundle\Twig\Extension\AbstractTwigExtension;

/**
 * Badge Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\Component
 * @abstract
 */
abstract class AbstractBadgeTwigExtension extends AbstractTwigExtension {

    /**
     * Displays a Bootstrap badge.
     *
     * @param BadgeInterface $badge The badge.
     * @return string Returns the Bootstrap badge.
     */
    protected function bootstrapBadge(BadgeInterface $badge) {

        $attributes = [];

        $attributes["class"]   = ["badge"];
        $attributes["class"][] = BadgeRenderer::renderType($badge);
        $attributes["class"][] = BadgeRenderer::renderPill($badge);

        $innerHTML = BadgeRenderer::renderContent($badge);

        return static::coreHTMLElement("span", $innerHTML, $attributes);
    }
}
