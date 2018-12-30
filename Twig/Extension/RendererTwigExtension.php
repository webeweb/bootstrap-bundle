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

use Twig_Environment;
use Twig_SimpleFilter;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Component\GlyphiconTwigExtension;
use WBW\Bundle\CoreBundle\Twig\Extension\RendererTwigExtension as BaseTwigExtension;

/**
 * Renderer Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension
 */
class RendererTwigExtension extends BaseTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.bootstrap.twig.extension.renderer";

    /**
     * Constructor.
     *
     * @param Twig_Environment $twigEnvironment The twig environment.
     */
    public function __construct(Twig_Environment $twigEnvironment) {
        parent::__construct($twigEnvironment);
    }

    /**
     * Get the Twig filters.
     *
     * @return Twig_SimpleFilter[] Returns the Twig filters.
     */
    public function getFilters() {
        return [];
    }

    /**
     * Render an icon.
     *
     * @param Twig_Environment $twigEnvironment The twig environment.
     * @param string $name The icon name.
     * @param string $style The icon style.
     * @return string Returns a rendered icon.
     */
    public static function renderIcon(Twig_Environment $twigEnvironment, $name, $style = null) {

        // Determines the handler.
        $handler = explode(":", $name);
        if (1 === count($handler)) {
            array_unshift($handler, "g");
        }
        if (2 !== count($handler)) {
            return "";
        }

        // Swith into handler.
        switch ($handler[0]) {

            case "b": // Bootstrap
            case "g": // Glyphicon
                $output = (new GlyphiconTwigExtension($twigEnvironment))->renderIcon($handler[1], $style);
                break;

            default:
                $output = parent::renderIcon($twigEnvironment, $name, $style);
                break;
        }

        // Return the output.
        return $output;
    }

}
