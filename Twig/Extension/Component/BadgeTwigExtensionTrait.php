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
 * Badge Twig extension trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\Component
 */
trait BadgeTwigExtensionTrait {

    /**
     * Badge Twig extension.
     *
     * @var BadgeTwigExtension|null
     */
    private $badgeTwigExtension;

    /**
     * Get the badge Twig extension.
     *
     * @return BadgeTwigExtension|null Returns the badge Twig extension.
     */
    public function getBadgeTwigExtension(): ?BadgeTwigExtension {
        return $this->badgeTwigExtension;
    }

    /**
     * Set the badge Twig extension.
     *
     * @param BadgeTwigExtension|null $badgeTwigExtension The badge Twig extension.
     * @return self Returns this instance.
     */
    protected function setBadgeTwigExtension(?BadgeTwigExtension $badgeTwigExtension): self {
        $this->badgeTwigExtension = $badgeTwigExtension;
        return $this;
    }
}
