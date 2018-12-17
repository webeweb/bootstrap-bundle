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
trait FormButtonTwigExtensionTrait {

    /**
     * Form button Twig extension.
     *
     * @var FormButtonTwigExtension
     */
    private $formButtonTwigExtension;

    /**
     * Get the form button Twig extention.
     *
     * @return FormButtonTwigExtension Returns the form button Twig extension.
     */
    public function getFormButtonTwigExtension() {
        return $this->formButtonTwigExtension;
    }

    /**
     * Set the form button Twig extension.
     *
     * @param FormButtonTwigExtension $formButtonTwigExtension The form button Twig extension.
     */
    protected function setFormButtonTwigExtension(FormButtonTwigExtension $formButtonTwigExtension = null) {
        $this->formButtonTwigExtension = $formButtonTwigExtension;
        return $this;
    }

}
