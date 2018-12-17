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
     * @var AlertTwigExtension
     */
    private $alertTwigExtension;

    /**
     * Get the alert Twig extention.
     *
     * @return AlertTwigExtension Returns the alert Twig extension.
     */
    public function getAlertTwigExtension() {
        return $this->alertTwigExtension;
    }

    /**
     * Set the alert Twig extension.
     *
     * @param AlertTwigExtension $alertTwigExtension The alert Twig extension.
     */
    protected function setAlertTwigExtension(AlertTwigExtension $alertTwigExtension = null) {
        $this->alertTwigExtension = $alertTwigExtension;
        return $this;
    }

}
