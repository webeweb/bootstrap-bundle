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
 * Nav Twig extension trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\Component
 */
trait NavTwigExtensionTrait {

    /**
     * Nav Twig extension.
     *
     * @var NavTwigExtension|null
     */
    private $navTwigExtension;

    /**
     * Get the nav Twig extension.
     *
     * @return NavTwigExtension|null Returns the nav Twig extension.
     */
    public function getNavTwigExtension(): ?NavTwigExtension {
        return $this->navTwigExtension;
    }

    /**
     * Set the nav Twig extension.
     *
     * @param NavTwigExtension|null $navTwigExtension The nav Twig extension.
     * @return self Returns this instance.
     */
    protected function setNavTwigExtension(?NavTwigExtension $navTwigExtension): self {
        $this->navTwigExtension = $navTwigExtension;
        return $this;
    }
}
