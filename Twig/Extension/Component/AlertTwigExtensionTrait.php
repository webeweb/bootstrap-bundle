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
 * Alert Twig extension trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\Component
 */
trait AlertTwigExtensionTrait {

    /**
     * Alert Twig extension.
     *
     * @var AlertTwigExtension|null
     */
    private $alertTwigExtension;

    /**
     * Get the alert Twig extension.
     *
     * @return AlertTwigExtension|null Returns the alert Twig extension.
     */
    public function getAlertTwigExtension(): ?AlertTwigExtension {
        return $this->alertTwigExtension;
    }

    /**
     * Set the alert Twig extension.
     *
     * @param AlertTwigExtension|null $alertTwigExtension The alert Twig extension.
     * @return self Returns this instance.
     */
    protected function setAlertTwigExtension(?AlertTwigExtension $alertTwigExtension): self {
        $this->alertTwigExtension = $alertTwigExtension;
        return $this;
    }
}
