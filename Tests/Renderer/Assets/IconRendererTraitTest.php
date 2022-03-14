<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Renderer\Assets;

use WBW\Bundle\BootstrapBundle\Tests\AbstractTestCase;
use WBW\Bundle\BootstrapBundle\Tests\Fixtures\Renderer\Assets\TestIconRendererTrait;

/**
 * Icon renderer trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Tests\Renderer\Assets
 */
class IconRendererTraitTest extends AbstractTestCase {

    /**
     * Tests the renderIcon() methods.
     *
     * @return void
     */
    public function testRenderIcon() {

        $obj = new TestIconRendererTrait();
        $obj->setTwigEnvironment($this->twigEnvironment);

        $this->assertEquals("", $obj->renderIcon(null));
        $this->assertEquals("", $obj->renderIcon(""));
        $this->assertEquals('<i class="fa fa-home"></i>', $obj->renderIcon("fa:home"));
    }
}
