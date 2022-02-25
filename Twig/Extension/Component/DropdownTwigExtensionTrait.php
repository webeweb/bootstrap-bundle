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
 * Dropdown Twig extension trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\Component
 */
trait DropdownTwigExtensionTrait {

    /**
     * Dropdown Twig extension.
     *
     * @var DropdownTwigExtension|null
     */
    private $dropdownTwigExtension;

    /**
     * Get the dropdown Twig extension.
     *
     * @return DropdownTwigExtension|null Returns the dropdown Twig extension.
     */
    public function getDropdownTwigExtension(): ?DropdownTwigExtension {
        return $this->dropdownTwigExtension;
    }

    /**
     * Set the dropdown Twig extension.
     *
     * @param DropdownTwigExtension|null $dropdownTwigExtension The dropdown Twig extension.
     * @return self Returns this instance.
     */
    protected function setDropdownTwigExtension(?DropdownTwigExtension $dropdownTwigExtension): self {
        $this->dropdownTwigExtension = $dropdownTwigExtension;
        return $this;
    }
}
