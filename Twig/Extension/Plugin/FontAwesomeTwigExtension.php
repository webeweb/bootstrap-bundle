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
use WBW\Library\Core\Argument\ArrayHelper;

/**
 * Font Awesome Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\Plugin
 */
class FontAwesomeTwigExtension extends AbstractFontAwesomeTwigExtension implements IconRendererTwigExtensionInterface {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.bootstrap.twig.extension.plugin.fontawesome";

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
     * @return Returns the Font Awesome icon.
     */
    public function fontAwesomeIconFunction(array $args = []) {
        return $this->fontAwesomeIcon(ArrayHelper::get($args, "font"), ArrayHelper::get($args, "name", "home"), ArrayHelper::get($args, "size"), ArrayHelper::get($args, "fixedWidth", false), ArrayHelper::get($args, "bordered", false), ArrayHelper::get($args, "pull"), ArrayHelper::get($args, "animated"), ArrayHelper::get($args, "style"));
    }

    /**
     * Displays a Font Awesome list.
     *
     * @param array|string $items The items.
     * @return string Returns the Font Awesome list.
     */
    public function fontAwesomeListFilter($items) {
        return $this->fontAwesomeList($items);
    }

    /**
     * Displays a Font Awesome list icon.
     *
     * @param string $icon The icon.
     * @param string $content The content.
     * @return string Returns the Font Awesome list icon.
     */
    public function fontAwesomeListIconFilter($icon, $content) {
        return $this->fontAwesomeListIcon($icon, $content);
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

    /**
     * {@inheritdoc}
     */
    public function renderIcon($name, $style) {
        return $this->fontAwesomeIconFunction(["name" => $name, "style" => $style]);
    }

}
