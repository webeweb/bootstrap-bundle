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

/**
 * Glyphicon Twig extension trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\Component
 */
trait GlyphiconTwigExtensionTrait {

    /**
     * Glyphicon Twig extension.
     *
     * @var GlyphiconTwigExtension
     */
    private $glyphiconTwigExtension;

    /**
     * Get the glyphicon Twig extention.
     *
     * @return GlyphiconTwigExtension Returns the glyphicon Twig extension.
     */
    public function getGlyphiconTwigExtension() {
        return $this->glyphiconTwigExtension;
    }

    /**
     * Set the glyphicon Twig extension.
     *
     * @param GlyphiconTwigExtension $glyphiconTwigExtension The glyphicon Twig extension.
     */
    protected function setGlyphiconTwigExtension(GlyphiconTwigExtension $glyphiconTwigExtension = null) {
        $this->glyphiconTwigExtension = $glyphiconTwigExtension;
        return $this;
    }

}
