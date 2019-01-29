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

use Twig_Environment;
use Twig_SimpleFunction;
use WBW\Bundle\CoreBundle\Renderer\IconRendererInterface;
use WBW\Library\Core\Argument\ArrayHelper;

/**
 * Glyphicon Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\Component
 * @link https://getbootstrap.com/docs/3.3/components/#glyphicons
 */
class GlyphiconTwigExtension extends AbstractGlyphiconTwigExtension implements IconRendererInterface {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.bootstrap.twig.extension.component.glyphicon";

    /**
     * Constructor.
     *
     * @param Twig_Environment $twigEnvironment The Twig environment.
     */
    public function __construct(Twig_Environment $twigEnvironment) {
        parent::__construct($twigEnvironment);
    }

    /**
     * Displays a Bootstrap glyphicon.
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap glyphicon.
     */
    public function bootstrapGlyphiconFunction(array $args = []) {
        return $this->bootstrapGlyphicon(ArrayHelper::get($args, "name", "home"), ArrayHelper::get($args, "style"));
    }

    /**
     * Get the Twig functions.
     *
     * @return Twig_SimpleFunction[] Returns the Twig functions.
     */
    public function getFunctions() {
        return [
            new Twig_SimpleFunction("bootstrapGlyphicon", [$this, "bootstrapGlyphiconFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("bsGlyphicon", [$this, "bootstrapGlyphiconFunction"], ["is_safe" => ["html"]]),
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function renderIcon($name, $style) {
        return $this->bootstrapGlyphiconFunction(["name" => $name, "style" => $style]);
    }
}
