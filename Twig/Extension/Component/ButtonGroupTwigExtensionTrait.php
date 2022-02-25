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
 * ButtonGroup Twig extension trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\Component
 */
trait ButtonGroupTwigExtensionTrait {

    /**
     * Button group Twig extension.
     *
     * @var ButtonGroupTwigExtension|null
     */
    private $buttonGroupTwigExtension;

    /**
     * Get the button group Twig extension.
     *
     * @return ButtonGroupTwigExtension|null Returns the button group Twig extension.
     */
    public function getButtonGroupTwigExtension(): ?ButtonGroupTwigExtension {
        return $this->buttonGroupTwigExtension;
    }

    /**
     * Set the button group Twig extension.
     *
     * @param ButtonGroupTwigExtension|null $buttonGroupTwigExtension The button group Twig extension.
     * @return self Returns this instance.
     */
    protected function setButtonGroupTwigExtension(?ButtonGroupTwigExtension $buttonGroupTwigExtension): self {
        $this->buttonGroupTwigExtension = $buttonGroupTwigExtension;
        return $this;
    }
}
