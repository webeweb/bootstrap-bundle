<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Renderer;

use WBW\Bundle\BootstrapBundle\Tests\AbstractTestCase;
use WBW\Bundle\BootstrapBundle\Tests\Fixtures\Renderer\TestCenterAlignedRendererTrait;

/**
 * Center-aligned renderer trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Tests\Renderer
 */
class CenterAlignedRendererTraitTest extends AbstractTestCase {

    /**
     * Tests renderCenterAligned()
     *
     * @return void
     */
    public function testRenderCenterAligned(): void {

        $obj = new TestCenterAlignedRendererTrait();

        $this->assertNull($obj->renderCenterAligned(null));
        $this->assertNull($obj->renderCenterAligned(""));
        $this->assertEquals('<div class="align-center">content</div>', $obj->renderCenterAligned("content"));
    }
}
