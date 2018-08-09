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
use WBW\Library\Core\Helper\Argument\ArrayHelper;

/**
 * Material Design Iconic Font Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\Plugin
 */
class MaterialDesignIconicFontTwigExtension extends AbstractMaterialDesignIconicFontTwigExtension implements IconRendererTwigExtensionInterface {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.bootstrap.twig.extension.plugin.materialdesigniconicfont";

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
     * Displays a Material Design Iconic Font icon.
     *
     * @param array $args The arguments.
     * @return Returns the Material Design Iconic Font icon.
     */
    public function materialDesignIconicFontIconFunction(array $args = []) {
        return $this->materialDesignIconicFontIcon(ArrayHelper::get($args, "name", "home"), ArrayHelper::get($args, "size"), ArrayHelper::get($args, "fixedWidth", false), ArrayHelper::get($args, "border", false), ArrayHelper::get($args, "pull"), ArrayHelper::get($args, "spin"), ArrayHelper::get($args, "rotate"), ArrayHelper::get($args, "flip"), ArrayHelper::get($args, "style"));
    }

    /**
     * Displays a Material Design Iconic Font list.
     *
     * @param array|string $items The items.
     * @return string Returns the Material Design Iconic Font list.
     */
    public function materialDesignIconicFontListFilter($items) {
        return $this->materialDesignIconicFontList($items);
    }

    /**
     * Displays a Material Design Iconic Font list icon.
     *
     * @param string $icon The icon.
     * @param string $content The content.
     * @return string Returns the Material Design Iconic Font list icon.
     */
    public function materialDesignIconicFontListIconFilter($icon, $content) {
        return $this->materialDesignIconicFontListIcon($icon, $content);
    }

    /**
     * {@inheritdoc}
     */
    public function renderIcon($name, $style) {
        return $this->materialDesignIconicFontIconFunction(["name" => $name, "style" => $style]);
    }

}
