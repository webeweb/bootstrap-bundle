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
 * Code Twig extension trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\CSS
 */
trait CodeTwigExtensionTrait {

    /**
     * Code Twig extension.
     *
     * @var CodeTwigExtension|null
     */
    private $codeTwigExtension;

    /**
     * Get the code Twig extension.
     *
     * @return CodeTwigExtension|null Returns the code Twig extension.
     */
    public function getCodeTwigExtension(): ?CodeTwigExtension {
        return $this->codeTwigExtension;
    }

    /**
     * Set the code Twig extension.
     *
     * @param CodeTwigExtension|null $codeTwigExtension The code Twig extension.
     * @return self Returns this instance.
     */
    protected function setCodeTwigExtension(?CodeTwigExtension $codeTwigExtension): self {
        $this->codeTwigExtension = $codeTwigExtension;
        return $this;
    }
}
