<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Renderer\Strings;

use WBW\Bundle\BootstrapBundle\Tests\AbstractTestCase;
use WBW\Bundle\BootstrapBundle\Tests\Fixtures\Renderer\Strings\TestLeftAlignedTextRendererTrait;

/**
 * Left-aligned text renderer trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Tests\Renderer\Strings
 */
class LeftAlignedTextRendererTraitTest extends AbstractTestCase {

    /**
     * Test renderLeftAlignedText()
     *
     * @return void
     */
    public function testRenderLeftAlignedText(): void {

        $obj = new TestLeftAlignedTextRendererTrait();

        $this->assertNull($obj->renderLeftAlignedText(null));
        $this->assertNull($obj->renderLeftAlignedText(""));
        $this->assertEquals('<span class="text-left">content</span>', $obj->renderLeftAlignedText("content"));
    }
}
