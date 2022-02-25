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
 * Grid Twig extension trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\CSS
 */
trait GridTwigExtensionTrait {

    /**
     * Grid Twig extension.
     *
     * @var GridTwigExtension|null
     */
    private $gridTwigExtension;

    /**
     * Get the grid Twig extension.
     *
     * @return GridTwigExtension|null Returns the grid Twig extension.
     */
    public function getGridTwigExtension(): ?GridTwigExtension {
        return $this->gridTwigExtension;
    }

    /**
     * Set the grid Twig extension.
     *
     * @param GridTwigExtension|null $gridTwigExtension The grid Twig extension.
     * @return self Returns this instance.
     */
    protected function setGridTwigExtension(?GridTwigExtension $gridTwigExtension): self {
        $this->gridTwigExtension = $gridTwigExtension;
        return $this;
    }
}
