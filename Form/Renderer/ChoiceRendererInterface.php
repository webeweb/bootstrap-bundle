<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Form\Renderer;

/**
 * Choice renderer interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Form\Renderer
 */
interface ChoiceRendererInterface {

    /**
     * Get the choice label.
     *
     * @return string Returns the choice label.
     */
    public function getChoiceLabel();
}
