<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Fixtures\Renderer\Strings;

use WBW\Bundle\BootstrapBundle\Renderer\Strings\NoWrapTextRendererTrait;

/**
 * Test no wrap text renderer trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Tests\Fixtures\Renderer\Strings
 */
class TestNoWrapTextRendererTrait {

    use NoWrapTextRendererTrait {
        renderNoWrapText as public;
    }
}
