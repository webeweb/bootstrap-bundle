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

use Twig\TwigFunction;
use WBW\Bundle\CoreBundle\Renderer\IconRendererInterface;
use WBW\Library\Types\Helper\ArrayHelper;

/**
 * Glyphicon Twig extension.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\Component
 * @link https://getbootstrap.com/docs/3.3/components/#glyphicons
 */
class GlyphiconTwigExtension extends AbstractGlyphiconTwigExtension implements IconRendererInterface {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "wbw.bootstrap.twig.extension.component.glyphicon";

    /**
     * Displays a Bootstrap glyphicon.
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap glyphicon.
     */
    public function bootstrapGlyphiconFunction(array $args = []): string {
        return $this->bootstrapGlyphicon(ArrayHelper::get($args, "name", "home"), ArrayHelper::get($args, "style"));
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
        return [];
    }

    /**
     * Get the Twig functions.
     *
     * @return TwigFunction[] Returns the Twig functions.
     */
    protected function getFunctions3(): array {
        return [
            new TwigFunction("bootstrapGlyphicon", [$this, "bootstrapGlyphiconFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("bsGlyphicon", [$this, "bootstrapGlyphiconFunction"], ["is_safe" => ["html"]]),
        ];
    }

    /**
     * {@inheritDoc}
     */
    public function renderIcon(?string $name, ?string $style): string {
        return $this->bootstrapGlyphiconFunction(["name" => $name, "style" => $style]);
    }
}
