<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Twig\Extension\Component;

/**
 * Icon Twig extension trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\Component
 */
trait IconTwigExtensionTrait {

    /**
     * Icon Twig extension.
     *
     * @var IconTwigExtension|null
     */
    private $iconTwigExtension;

    /**
     * Get the icon Twig extension.
     *
     * @return IconTwigExtension Returns the icon Twig extension.
     */
    public function getIconTwigExtension(): ?IconTwigExtension {
        return $this->iconTwigExtension;
    }

    /**
     * Set the icon Twig extension.
     *
     * @param IconTwigExtension|null $iconTwigExtension The icon Twig extension.
     * @return self Returns this instance.
     */
    protected function setIconTwigExtension(?IconTwigExtension $iconTwigExtension): self {
        $this->iconTwigExtension = $iconTwigExtension;
        return $this;
    }
}
