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
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\Utility
 */
trait RoleLabelTwigExtensionTrait {

    /**
     * Role label Twig extension.
     *
     * @var RoleLabelTwigExtension
     */
    private $roleLabelTwigExtension;

    /**
     * Get the role label Twig extention.
     *
     * @return RoleLabelTwigExtension Returns the role label Twig extension.
     */
    public function getRoleLabelTwigExtension() {
        return $this->roleLabelTwigExtension;
    }

    /**
     * Set the role label Twig extension.
     *
     * @param RoleLabelTwigExtension $roleLabelTwigExtension The role label Twig extension.
     */
    protected function setRoleLabelTwigExtension(RoleLabelTwigExtension $roleLabelTwigExtension = null) {
        $this->roleLabelTwigExtension = $roleLabelTwigExtension;
        return $this;
    }

}
