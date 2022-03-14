<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Fixtures\Renderer\Assets;

use WBW\Bundle\BootstrapBundle\Renderer\Assets\IconRendererTrait;
use WBW\Bundle\CoreBundle\Twig\Environment\TwigEnvironmentTrait;

/**
 * Test icon renderer trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Tests\Fixtures\Renderer\Assets
 */
class TestIconRendererTrait {

    use IconRendererTrait {
        renderIcon as public;
    }
    use TwigEnvironmentTrait {
        setTwigEnvironment as public;
    }
}
