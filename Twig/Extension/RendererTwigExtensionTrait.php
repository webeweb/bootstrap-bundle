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

/**
 * Renderer Twig extension trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension
 */
trait RendererTwigExtensionTrait {

    /**
     * Renderer Twig extension.
     *
     * @var RendererTwigExtension
     */
    private $rendererTwigExtension;

    /**
     * Get the renderer Twig extension.
     *
     * @return RendererTwigExtension Returns the renderer Twig extension.
     */
    public function getRendererTwigExtension() {
        return $this->rendererTwigExtension;
    }

    /**
     * Set the renderer twig extension.
     *
     * @param RendererTwigExtension $rendererTwigExtension The renderer twig extension.
     */
    protected function setRendererTwigExtension(RendererTwigExtension $rendererTwigExtension = null) {
        $this->rendererTwigExtension = $rendererTwigExtension;
        return $this;
    }
}
