<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Provider;

/**
 * Bootstrap theme provider interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Provider
 */
interface BootstrapThemeProviderInterface extends BootstrapProviderInterface {

    /**
     * Get the view.
     *
     * @return string Returns the view.
     */
    public function getView();
}
