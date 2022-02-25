<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Twig\Extension\Utility;

/**
 * Form button Twig extension trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\Utility
 */
trait RoleLabelTwigExtensionTrait {

    /**
     * Role label Twig extension.
     *
     * @var RoleLabelTwigExtension|null
     */
    private $roleLabelTwigExtension;

    /**
     * Get the role label Twig extension.
     *
     * @return RoleLabelTwigExtension|null Returns the role label Twig extension.
     */
    public function getRoleLabelTwigExtension(): ?RoleLabelTwigExtension {
        return $this->roleLabelTwigExtension;
    }

    /**
     * Set the role label Twig extension.
     *
     * @param RoleLabelTwigExtension|null $roleLabelTwigExtension The role label Twig extension.
     * @return self Returns this instance.
     */
    protected function setRoleLabelTwigExtension(?RoleLabelTwigExtension $roleLabelTwigExtension): self {
        $this->roleLabelTwigExtension = $roleLabelTwigExtension;
        return $this;
    }
}
