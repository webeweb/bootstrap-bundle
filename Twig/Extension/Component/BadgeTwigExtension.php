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

use Twig\TwigFilter;
use Twig\TwigFunction;
use WBW\Bundle\BootstrapBundle\Asset\Badge\BadgeFactory;
use WBW\Library\Types\Helper\StringHelper;

/**
 * Badge component Twig extension.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\Component
 * @link https://getbootstrap.com/docs/3.3/components/#badges
 */
class BadgeTwigExtension extends AbstractBadgeTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "wbw.bootstrap.twig.extension.component.badge";

    /**
     * Displays a Bootstrap badge "danger".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap badge "danger".
     */
    public function bootstrapBadgeDangerFunction(array $args = []): string {
        return $this->bootstrapBadge(BadgeFactory::parseDangerBadge($args));
    }

    /**
     * Displays a Bootstrap badge "dark".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap badge "dark".
     */
    public function bootstrapBadgeDarkFunction(array $args = []): string {
        return $this->bootstrapBadge(BadgeFactory::parseDarkBadge($args));
    }

    /**
     * Displays a Bootstrap badge.
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap badge.
     */
    public function bootstrapBadgeFunction(array $args = []): string {
        return $this->bootstrapBadge(BadgeFactory::parseDefaultBadge($args));
    }

    /**
     * Displays a Bootstrap badge "info".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap badge "info".
     */
    public function bootstrapBadgeInfoFunction(array $args = []): string {
        return $this->bootstrapBadge(BadgeFactory::parseInfoBadge($args));
    }

    /**
     * Displays a Bootstrap badge "light".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap badge "light".
     */
    public function bootstrapBadgeLightFunction(array $args = []): string {
        return $this->bootstrapBadge(BadgeFactory::parseLightBadge($args));
    }

    /**
     * Transforms a Bootstrap badge into an anchor.
     *
     * @param string $button The button.
     * @param string $href The href attribute.
     * @param string|null $target The target attribute.
     * @return string Returns the Bootstrap badge transformed into an anchor.
     */
    public function bootstrapBadgeLinkFilter(string $button, string $href = self::DEFAULT_HREF, string $target = null): string {

        $searches = ["<span", "</span>", "class="];
        $replaces = ["<a", "</a>", StringHelper::parseArray(["href" => $href, "target" => $target]) . " class="];

        return str_replace($searches, $replaces, $button);
    }

    /**
     * Displays a Bootstrap badge "primary".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap badge "primary".
     */
    public function bootstrapBadgePrimaryFunction(array $args = []): string {
        return $this->bootstrapBadge(BadgeFactory::parsePrimaryBadge($args));
    }

    /**
     * Displays a Bootstrap badge "secondary".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap badge "secondary".
     */
    public function bootstrapBadgeSecondaryFunction(array $args = []): string {
        return $this->bootstrapBadge(BadgeFactory::parseSecondaryBadge($args));
    }

    /**
     * Displays a Bootstrap badge "success".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap badge "success".
     */
    public function bootstrapBadgeSuccessFunction(array $args = []): string {
        return $this->bootstrapBadge(BadgeFactory::parseSuccessBadge($args));
    }

    /**
     * Displays a Bootstrap badge "warning".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap badge "warning".
     */
    public function bootstrapBadgeWarningFunction(array $args = []): string {
        return $this->bootstrapBadge(BadgeFactory::parseWarningBadge($args));
    }

    /**
     * Get the Twig filters.
     *
     * @return TwigFilter[] Returns the Twig filters.
     */
    public function getFilters(): array {
        return [
            new TwigFilter("bootstrapBadgeLink", [$this, "bootstrapBadgeLinkFilter"], ["is_safe" => ["html"]]),
            new TwigFilter("bsBadgeLink", [$this, "bootstrapBadgeLinkFilter"], ["is_safe" => ["html"]]),
        ];
    }

    /**
     * Get the Twig functions.
     *
     * @return TwigFunction[] Returns the Twig functions.
     */
    public function getFunctions(): array {
        if (3 === $this->getVersion()) {
            return $this->getFunctions3();
        }
        return $this->getFunctions4();
    }

    /**
     * Get the Twig functions.
     *
     * @return TwigFunction[] Returns the Twig functions.
     */
    public function getFunctions3(): array {
        return [
            new TwigFunction("bootstrapBadge", [$this, "bootstrapBadgeFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("bsBadge", [$this, "bootstrapBadgeFunction"], ["is_safe" => ["html"]]),
        ];
    }

    /**
     * Get the Twig functions.
     *
     * @return TwigFunction[] Returns the Twig functions.
     */
    public function getFunctions4(): array {
        return [
            new TwigFunction("bootstrapBadgeDanger", [$this, "bootstrapBadgeDangerFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("bsBadgeDanger", [$this, "bootstrapBadgeDangerFunction"], ["is_safe" => ["html"]]),

            new TwigFunction("bootstrapBadgeDark", [$this, "bootstrapBadgeDarkFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("bsBadgeDark", [$this, "bootstrapBadgeDarkFunction"], ["is_safe" => ["html"]]),

            new TwigFunction("bootstrapBadgeInfo", [$this, "bootstrapBadgeInfoFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("bsBadgeInfo", [$this, "bootstrapBadgeInfoFunction"], ["is_safe" => ["html"]]),

            new TwigFunction("bootstrapBadgeLight", [$this, "bootstrapBadgeLightFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("bsBadgeLight", [$this, "bootstrapBadgeLightFunction"], ["is_safe" => ["html"]]),

            new TwigFunction("bootstrapBadgePrimary", [$this, "bootstrapBadgePrimaryFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("bsBadgePrimary", [$this, "bootstrapBadgePrimaryFunction"], ["is_safe" => ["html"]]),

            new TwigFunction("bootstrapBadgeSecondary", [$this, "bootstrapBadgeSecondaryFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("bsBadgeSecondary", [$this, "bootstrapBadgeSecondaryFunction"], ["is_safe" => ["html"]]),

            new TwigFunction("bootstrapBadgeSuccess", [$this, "bootstrapBadgeSuccessFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("bsBadgeSuccess", [$this, "bootstrapBadgeSuccessFunction"], ["is_safe" => ["html"]]),

            new TwigFunction("bootstrapBadgeWarning", [$this, "bootstrapBadgeWarningFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("bsBadgeWarning", [$this, "bootstrapBadgeWarningFunction"], ["is_safe" => ["html"]]),
        ];
    }
}
