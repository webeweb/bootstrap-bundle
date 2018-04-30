<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Twig\Extension\Font;

use WBW\Bundle\BootstrapBundle\Twig\Extension\AbstractBootstrapTwigExtension;

/**
 * Abstract font Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\Font
 * @abstract
 */
abstract class AbstractFontTwigExtension extends AbstractBootstrapTwigExtension {

    /**
     * Constructor.
     */
    protected function __construct() {
        parent::__construct();
    }

}
