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
use WBW\Bundle\BootstrapBundle\Tests\Fixtures\Renderer\Strings\TestRightAlignedTextRendererTrait;

/**
 * Right-aligned text renderer trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Tests\Renderer\Strings
 */
class RightAlignedTextRendererTraitTest extends AbstractTestCase {

    /**
     * Test renderRightAlignedText()
     *
     * @return void
     */
    public function testRenderRightAlignedText(): void {

        $obj = new TestRightAlignedTextRendererTrait();

        $this->assertNull($obj->renderRightAlignedText(null));
        $this->assertNull($obj->renderRightAlignedText(""));
        $this->assertEquals('<span class="text-right">content</span>', $obj->renderRightAlignedText("content"));
    }
}
