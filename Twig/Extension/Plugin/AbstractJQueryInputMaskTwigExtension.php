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

use WBW\Bundle\BootstrapBundle\Twig\Extension\AbstractBootstrapTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\BootstrapRendererTwigExtension;
use WBW\Library\Core\Helper\Argument\StringHelper;

/**
 * Abstract jQuery input mask Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\Plugin
 * @abstract
 */
abstract class AbstractJQueryInputMaskTwigExtension extends AbstractBootstrapTwigExtension {

    /**
     * Renderer.
     *
     * @var BootstrapRendererTwigExtension
     */
    private $renderer;

    /**
     * Constructor.
     *
     * @param BootstrapRendererTwigExtension $renderer The renderer.
     */
    protected function __construct(BootstrapRendererTwigExtension $renderer) {
        parent::__construct();
        $this->setRenderer($renderer);
    }

    /**
     * Get the renderer.
     *
     * @return BootstrapRendererTwigExtension Returns the renderer.
     */
    public function getRenderer() {
        return $this->renderer;
    }

    /**
     * Displays a jQuery input mask.
     *
     * @param string $selector The selector.
     * @param string $mask The mask.
     * @param array $options The options.
     * @param bool $scriptTag Script tag ?
     * @return string Returns the jQuery input mask.
     */
    protected function jQueryInputMask($selector, $mask, array $options, $scriptTag) {

        // Initialize the template.
        $template = "$('%selector%').inputmask(\"%mask%\",%arguments%);";

        // Initialize the parameters.
        $innerHTML = StringHelper::replace($template, ["%selector%", "%mask%", "%arguments%"], [$selector, $mask, json_encode($options)]);

        // Return the HTML
        if (true === $scriptTag) {
            return $this->getRenderer()->bootstrapScriptFilter($innerHTML);
        }
        return $innerHTML;
    }

    /**
     * Set the renderer.
     *
     * @param BootstrapRendererTwigExtension $renderer The renderer.
     * @return AbstractJQueryInputMaskTwigExtension Returns this jQuery Twig extension.
     */
    protected function setRenderer(BootstrapRendererTwigExtension $renderer) {
        $this->renderer = $renderer;
        return $this;
    }

}
