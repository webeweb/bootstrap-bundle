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
 * Label Twig extension trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\Component
 */
trait LabelTwigExtensionTrait {

    /**
     * Label Twig extension.
     *
     * @var LabelTwigExtension|null
     */
    private $labelTwigExtension;

    /**
     * Get the label Twig extension.
     *
     * @return LabelTwigExtension|null Returns the label Twig extension.
     */
    public function getLabelTwigExtension(): ?LabelTwigExtension {
        return $this->labelTwigExtension;
    }

    /**
     * Set the label Twig extension.
     *
     * @param LabelTwigExtension|null $labelTwigExtension The label Twig extension.
     * @return self Returns this instance.
     */
    protected function setLabelTwigExtension(?LabelTwigExtension $labelTwigExtension): self {
        $this->labelTwigExtension = $labelTwigExtension;
        return $this;
    }
}
