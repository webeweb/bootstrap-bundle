<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Fixtures\Twig\Extension\CSS;

use WBW\Bundle\BootstrapBundle\Twig\Extension\CSS\GridTwigExtensionTrait;

/**
 * Test grid Twig extension trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Fixtures\Twig\Extension\CSS
 */
class TestGridTwigExtensionTrait {

    use GridTwigExtensionTrait {
        setGridTwigExtension as public;
    }
}
