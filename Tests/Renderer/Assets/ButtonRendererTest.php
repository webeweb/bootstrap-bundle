<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Renderer\Assets;

use WBW\Bundle\BootstrapBundle\Assets\ButtonInterface;
use WBW\Bundle\BootstrapBundle\Factory\ButtonFactory;
use WBW\Bundle\BootstrapBundle\Renderer\Assets\ButtonRenderer;
use WBW\Bundle\BootstrapBundle\Tests\AbstractTestCase;

/**
 * Button renderer test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Tests\Renderer\Assets
 */
class ButtonRendererTest extends AbstractTestCase {

    /**
     * Button.
     *
     * @var ButtonInterface
     */
    private $button;

    /**
     * {@inheritDoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set a Button mock.
        $this->button = ButtonFactory::parseDangerButton([
            "content"  => "content",
            "title"    => "title",
            "size"     => "lg",
            "block"    => true,
            "active"   => true,
            "disabled" => true,
            "class"    => "class",
        ]);
    }

    /**
     * Test renderActive()
     *
     * @return void
     */
    public function testRenderActive(): void {

        $res = ButtonRenderer::renderActive($this->button);
        $this->assertEquals("active", $res);
    }

    /**
     * Test renderBlock()
     *
     * @return void
     */
    public function testRenderBlock(): void {

        $res = ButtonRenderer::renderBlock($this->button);
        $this->assertEquals("btn-block", $res);
    }

    /**
     * Test renderContent()
     *
     * @return void
     */
    public function testRenderContent(): void {

        $res = ButtonRenderer::renderContent($this->button);
        $this->assertEquals("content", $res);
    }

    /**
     * Test renderDataPlacement()
     *
     * @return void
     */
    public function testRenderDataPlacement(): void {

        $res = ButtonRenderer::renderDataPlacement($this->button);
        $this->assertEquals("top", $res);
    }

    /**
     * Test renderDataToggle()
     *
     * @return void
     */
    public function testRenderDataToggle(): void {

        $res = ButtonRenderer::renderDataToggle($this->button);
        $this->assertEquals("tooltip", $res);
    }

    /**
     * Test renderDisabled()
     *
     * @return void
     */
    public function testRenderDisabled(): void {

        $res = ButtonRenderer::renderDisabled($this->button);
        $this->assertEquals("disabled", $res);
    }

    /**
     * Test renderSize()
     *
     * @return void
     */
    public function testRenderSize(): void {

        $res = ButtonRenderer::renderSize($this->button);
        $this->assertEquals("btn-lg", $res);
    }

    /**
     * Test renderTitle()
     *
     * @return void
     */
    public function testRenderTitle(): void {

        $res = ButtonRenderer::renderTitle($this->button);
        $this->assertEquals("title", $res);
    }

    /**
     * Test renderType()
     *
     * @return void
     */
    public function testRenderType(): void {

        $res = ButtonRenderer::renderType($this->button);
        $this->assertEquals("btn-danger", $res);

        // Set a Button mock.
        $button = ButtonFactory::parseDangerButton(["outline" => true]);

        $this->assertEquals("btn-outline-danger", ButtonRenderer::renderType($button));
    }
}
