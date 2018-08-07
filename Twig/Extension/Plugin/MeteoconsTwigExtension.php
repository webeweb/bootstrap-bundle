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

use Twig_SimpleFunction;
use WBW\Bundle\BootstrapBundle\Twig\Extension\IconRendererTwigExtensionInterface;
use WBW\Library\Core\Helper\Argument\ArrayHelper;

/**
 * Meteocons Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\Plugin
 */
class MeteoconsTwigExtension extends AbstractMeteoconsTwigExtension implements IconRendererTwigExtensionInterface {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.bootstrapbundle.twig.extension.plugin.meteocons";

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Get the Twig functions.
     *
     * @return array Returns the Twig functions.
     */
    public function getFunctions() {
        return [
            new Twig_SimpleFunction("meteoconsIcon", [$this, "meteoconsIconFunction"], ["is_safe" => ["html"]]),
        ];
    }

    /**
     * Displays a Meteocons icon.
     *
     * @param array $args The arguments.
     * @return string Returns a Meteocons icon.
     */
    public function meteoconsIconFunction(array $args = []) {
        return $this->meteoconsIcon(ArrayHelper::get($args, "name", "A"), ArrayHelper::get($args, "style"));
    }

    /**
     * {@inheritdoc}
     */
    public function renderIcon($name, $style) {
        return $this->meteoconsIconFunction(["name" => $name, "style" => $style]);
    }

}
