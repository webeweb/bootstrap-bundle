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
use WBW\Library\Core\Utility\Argument\ArrayUtility;
use WBW\Library\Core\Utility\Argument\StringUtility;

/**
 * Font Awesome plugin Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\Plugin
 */
class FontAwesomePluginTwigExtension extends AbstractPluginTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.bundle.bootstrapbundle.twig.extension.plugin.fontawesome";

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Displays a Font Awesome icon.
     *
     * @param array $args The arguments.
     * @return Returns a Font Awesome icon.
     */
    public function fontAwesomeIconFunction(array $args = []) {
        return $this->fontAwesomeIcon(ArrayUtility::get($args, "style"), ArrayUtility::get($args, "name", "home"), ArrayUtility::get($args, "size"), ArrayUtility::get($args, "fixedWidth", false), ArrayUtility::get($args, "bordered", false), ArrayUtility::get($args, "pull"), ArrayUtility::get($args, "animated"));
    }

    /**
     * Displays a Font Awesome list.
     *
     * @param array|string $items The list items.
     * @return string Returns the Font Awesome list.
     */
    public function fontAwesomeListFilter($items) {

        // Initialize the template.
        $template = "<ul class=\"fa-ul\">%innerHTML%</ul>";

        // Initialize the parameters.
        $innerHTML = true === is_array($items) ? implode("\n", $items) : $items;

        // Return the HTML.
        return StringUtility::replace($template, ["%innerHTML%"], [$innerHTML]);
    }

    /**
     * Displays a Font Awesome list icon.
     *
     * @param string $icon The Font Awesome icon.
     * @param string $content The content.
     * @return string Returns the Font Awesome list icon.
     */
    public function fontAwesomeListIconFilter($icon, $content) {

        // Initialize the template.
        $template = "<li><span class=\"fa-li\">%glyphicon%</span>%innerHTML%</li>";

        // Initialize the parameters.
        $glyphicon = null !== $icon ? $icon : "";
        $innerHTML = null !== $content ? $content : "";

        // Return the HTML.
        return StringUtility::replace($template, ["%glyphicon%", "%innerHTML%"], [$glyphicon, $innerHTML]);
    }

    /**
     * Get the Twig filters.
     *
     * @return Twig_SimpleFilter[] Returns the Twig filters.
     */
    public function getFilters() {
        return [
            new Twig_SimpleFilter("fontAwesomeList", [$this, "fontAwesomeListFilter"], ["is_safe" => ["html"]]),
            new Twig_SimpleFilter("fontAwesomeListIcon", [$this, "fontAwesomeListIconFilter"], ["is_safe" => ["html"]]),
        ];
    }

    /**
     * Get the Twig functions.
     *
     * @return array Returns the Twig functions.
     */
    public function getFunctions() {
        return [
            new Twig_SimpleFunction("fontAwesomeIcon", [$this, "fontAwesomeIconFunction"], ["is_safe" => ["html"]]),
        ];
    }

}
