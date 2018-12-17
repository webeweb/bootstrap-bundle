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
 * Image Twig extension trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\CSS
 */
trait ImageTwigExtensionTrait {

    /**
     * Image Twig extension.
     *
     * @var ImageTwigExtension
     */
    private $imageTwigExtension;

    /**
     * Get the image Twig extention.
     *
     * @return ImageTwigExtension Returns the image Twig extension.
     */
    public function getImageTwigExtension() {
        return $this->imageTwigExtension;
    }

    /**
     * Set the image Twig extension.
     *
     * @param ImageTwigExtension $imageTwigExtension The image Twig extension.
     */
    protected function setImageTwigExtension(ImageTwigExtension $imageTwigExtension = null) {
        $this->imageTwigExtension = $imageTwigExtension;
        return $this;
    }

}
