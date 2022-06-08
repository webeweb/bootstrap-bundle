<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Twig\Extension;

use Twig\Environment;
use Twig\TwigFilter;
use Twig\TwigFunction;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Component\GlyphiconTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Component\IconTwigExtension;
use WBW\Bundle\CoreBundle\Twig\Extension\AssetsTwigExtension as BaseTwigExtension;

/**
 * Assets Twig extension.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension
 */
class AssetsTwigExtension extends BaseTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "wbw.bootstrap.twig.extension.assets";

    /**
     * Displays an icon.
     *
     * @param string|null $name The name.
     * @param string|null $style The style.
     * @return string|null Returns the icon.
     */
    public function bootstrapRenderIconFunction(?string $name, string $style = null): ?string {
        return static::renderIcon($this->getTwigEnvironment(), $name, $style);
    }

    /**
     * Get the Twig filters.
     *
     * @return TwigFilter[] Returns the Twig filters.
     */
    public function getFilters(): array {
        return [];
    }

    /**
     * Get the Twig functions.
     *
     * @return TwigFunction[] Returns the Twig functions.
     */
    public function getFunctions(): array {
        return [
            new TwigFunction("bootstrapRenderIcon", [$this, "coreRenderIconFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("bsRenderIcon", [$this, "coreRenderIconFunction"], ["is_safe" => ["html"]]),
        ];
    }

    /**
     * {@inheritdoc}
     */
    public static function renderIcon(Environment $twigEnvironment, ?string $name, string $style = null): ?string {

        $handler = explode(":", $name);
        if (1 === count($handler)) {
            array_unshift($handler, "g");
        }
        if (2 !== count($handler) || null === $name) {
            return null;
        }

        switch ($handler[0]) {

            case "bi": // Bootstrap icons
                $output = (new IconTwigExtension($twigEnvironment))->renderIcon($handler[1], $style);
                break;

            case "b": // Bootstrap
            case "g": // Glyphicon
                $output = (new GlyphiconTwigExtension($twigEnvironment))->renderIcon($handler[1], $style);
                break;

            default:
                $output = parent::renderIcon($twigEnvironment, $name, $style);
                break;
        }

        return $output;
    }
}
