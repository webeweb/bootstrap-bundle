<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Fixtures\Twig\Extension\Component;

use WBW\Bundle\BootstrapBundle\Twig\Extension\Component\ButtonGroupTwigExtensionTrait;

/**
 * Test button group Twig extension trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Fixtures\Twig\Extension\Component
 */
class TestButtonGroupTwigExtensionTrait {

    use ButtonGroupTwigExtensionTrait {
        setButtonGroupTwigExtension as public;
    }
}
