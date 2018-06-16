<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Twig\Extension\Plugin;

use Twig_SimpleFilter;
use Twig_SimpleFunction;
use WBW\Bundle\BootstrapBundle\Twig\Extension\IconRendererTwigExtensionInterface;
use WBW\Library\Core\Utility\Argument\ArrayUtility;
use WBW\Library\Core\Utility\Argument\StringUtility;

/**
 * Material Design Iconic Font plugin Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\Plugin
 */
class MaterialDesignIconicFontPluginTwigExtension extends AbstractPluginTwigExtension implements IconRendererTwigExtensionInterface {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.bundle.bootstrapbundle.twig.extension.plugin.materialdesigniconicfont";

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Get the Twig filters.
     *
     * @return Twig_SimpleFilter[] Returns the Twig filters.
     */
    public function getFilters() {
        return [
            new Twig_SimpleFilter("materialDesignIconicFontList", [$this, "materialDesignIconicFontListFilter"], ["is_safe" => ["html"]]),
            new Twig_SimpleFilter("materialDesignIconicFontListIcon", [$this, "materialDesignIconicFontListIconFilter"], ["is_safe" => ["html"]]),
        ];
    }

    /**
     * Get the Twig functions.
     *
     * @return array Returns the Twig functions.
     */
    public function getFunctions() {
        return [
            new Twig_SimpleFunction("materialDesignIconicFontIcon", [$this, "materialDesignIconicFontIconFunction"], ["is_safe" => ["html"]]),
        ];
    }

    /**
     * Displays a Font Awesome.
     *
     * @param array $args The arguments.
     * @return Returns a Font Awesome.
     */
    public function materialDesignIconicFontIconFunction(array $args = []) {
        return $this->materialDesignIconicFontIcon(ArrayUtility::get($args, "name", "home"), ArrayUtility::get($args, "size"), ArrayUtility::get($args, "fixedWidth", false), ArrayUtility::get($args, "border", false), ArrayUtility::get($args, "pull"), ArrayUtility::get($args, "spin"), ArrayUtility::get($args, "rotate"), ArrayUtility::get($args, "flip"), ArrayUtility::get($args, "style"));
    }

    /**
     * Displays a Material Design Iconic Font list.
     *
     * @param array|string $items The list items.
     * @return string Returns the Material Design Iconic Font list.
     */
    public function materialDesignIconicFontListFilter($items) {

        // Initialize the template.
        $template = "<ul class=\"zmdi-hc-ul\">%innerHTML%</ul>";

        // Initialize the parameters.
        $innerHTML = true === is_array($items) ? implode("\n", $items) : $items;

        // Return the HTML.
        return StringUtility::replace($template, ["%innerHTML%"], [$innerHTML]);
    }

    /**
     * Displays a Material Design Iconic Font list icon.
     *
     * @param string $icon The Material Design Iconic Fonticon.
     * @param string $content The content.
     * @return string Returns the Material Design Iconic Font list icon.
     */
    public function materialDesignIconicFontListIconFilter($icon, $content) {

        // Initialize the template.
        $template = "<li>%glyphicon%%innerHTML%</li>";

        // Initialize the parameters.
        $glyphicon = null !== $icon ? StringUtility::replace($icon, ["class=\"zmdi"], ["class=\"zmdi-hc-li zmdi"]) : "";
        $innerHTML = null !== $content ? $content : "";

        // Return the HTML.
        return StringUtility::replace($template, ["%glyphicon%", "%innerHTML%"], [$glyphicon, $innerHTML]);
    }

    /**
     * {@inheritdoc}
     */
    public function renderIcon($name, $style) {
        return $this->materialDesignIconicFontIconFunction(["name" => $name, "style" => $style]);
    }

}
