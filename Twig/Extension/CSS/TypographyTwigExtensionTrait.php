<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Twig\Extension\CSS;

/**
 * Typography Twig extension trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\CSS
 */
trait TypographyTwigExtensionTrait {

    /**
     * Typography Twig extension.
     *
     * @var TypographyTwigExtension|null
     */
    private $typographyTwigExtension;

    /**
     * Get the typography Twig extension.
     *
     * @return TypographyTwigExtension|null Returns the typography Twig extension.
     */
    public function getTypographyTwigExtension(): ?TypographyTwigExtension {
        return $this->typographyTwigExtension;
    }

    /**
     * Set the typography Twig extension.
     *
     * @param TypographyTwigExtension|null $typographyTwigExtension The typography Twig extension.
     * @return self Returns this instance.
     */
    protected function setTypographyTwigExtension(?TypographyTwigExtension $typographyTwigExtension): self {
        $this->typographyTwigExtension = $typographyTwigExtension;
        return $this;
    }
}
