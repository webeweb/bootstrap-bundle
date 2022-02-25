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
 * Breadcrumb Twig extension trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\Component
 */
trait BreadcrumbTwigExtensionTrait {

    /**
     * Breadcrumb Twig extension.
     *
     * @var BreadcrumbTwigExtension|null
     */
    private $breadcrumbTwigExtension;

    /**
     * Get the breadcrumb Twig extension.
     *
     * @return BreadcrumbTwigExtension|null Returns the breadcrumb Twig extension.
     */
    public function getBreadcrumbTwigExtension(): ?BreadcrumbTwigExtension {
        return $this->breadcrumbTwigExtension;
    }

    /**
     * Set the breadcrumb Twig extension.
     *
     * @param BreadcrumbTwigExtension|null $breadcrumbTwigExtension The breadcrumb Twig extension.
     * @return self Returns this instance.
     */
    protected function setBreadcrumbTwigExtension(?BreadcrumbTwigExtension $breadcrumbTwigExtension): self {
        $this->breadcrumbTwigExtension = $breadcrumbTwigExtension;
        return $this;
    }
}
