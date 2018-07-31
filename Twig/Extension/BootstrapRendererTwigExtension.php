<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Twig\Extension;

use Twig_SimpleFilter;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Component\GlyphiconTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Plugin\FontAwesomeTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Plugin\MaterialDesignIconicFontTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Plugin\MeteoconsTwigExtension;

/**
 * Bootstrap renderer Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension
 */
class BootstrapRendererTwigExtension extends AbstractBootstrapTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.bootstrapbundle.twig.extension.renderer";

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Displays a Bootstrap script.
     *
     * @param string $content The content.
     */
    public function bootstrapScriptFilter($content) {

        // Initialize the attributes.
        $attributes = [];

        $attributes["type"] = "text/javascript";

        // Initialize the parameters.
        $innerHTML = null !== $content ? "\n" . $content . "\n" : "";

        // Return the HTML.
        return self::bootstrapHTMLElement("script", $innerHTML, $attributes);
    }

    /**
     * Get the Twig filters.
     *
     * @return Twig_SimpleFilter[] Returns the Twig filters.
     */
    public function getFilters() {
        return [
            new Twig_SimpleFilter("bootstrapScript", [$this, "bootstrapScriptFilter"], ["is_safe" => ["html"]]),
        ];
    }

    /**
     * Render an icon.
     *
     * @param string $name The icon name.
     * @param string $style The icon style.
     * @return string Returns a rendered icon.
     */
    public static function renderIcon($name, $style = null) {

        // Determines the handler.
        $handler = explode(":", $name);

        // Get and check the parse count.
        $parseNb = count($handler);
        if ($parseNb < 1 || 2 < $parseNb) {
            return "";
        }
        if (1 === count($handler)) {
            $handler = ["g", $name];
        }

        // Initialize the output.
        $output = "";

        // Swith into handler.
        switch ($handler[0]) {

            case "b": // Bootstrap
            case "g": // Glyphicon
                $output = (new GlyphiconTwigExtension())->renderIcon($handler[1], $style);
                break;

            case "fa": // Font Awesome
                $output = (new FontAwesomeTwigExtension())->renderIcon($handler[1], $style);
                break;

            case "mc": // Meteocons
                $output = (new MeteoconsTwigExtension())->renderIcon($handler[1], $style);
                break;

            case "zmdi": // Material Design Iconic Font
                $output = (new MaterialDesignIconicFontTwigExtension())->renderIcon($handler[1], $style);
                break;
        }

        // Return the output.
        return $output;
    }

}
