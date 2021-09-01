<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Asset\Button;

use WBW\Bundle\BootstrapBundle\Asset\Button\ButtonFactory;
use WBW\Bundle\BootstrapBundle\Asset\Button\ButtonInterface;
use WBW\Bundle\BootstrapBundle\Asset\Button\ButtonRenderer;
use WBW\Bundle\BootstrapBundle\Tests\AbstractTestCase;

/**
 * Button renderer test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Asset\Button
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
     * Tests the renderActive() method.
     *
     * @return void
     */
    public function testRenderActive(): void {

        $res = ButtonRenderer::renderActive($this->button);
        $this->assertEquals("active", $res);
    }

    /**
     * Tests the renderBlock() method.
     *
     * @return void
     */
    public function testRenderBlock(): void {

        $res = ButtonRenderer::renderBlock($this->button);
        $this->assertEquals("btn-block", $res);
    }

    /**
     * Tests the renderContent() method.
     *
     * @return void
     */
    public function testRenderContent(): void {

        $res = ButtonRenderer::renderContent($this->button);
        $this->assertEquals("content", $res);
    }

    /**
     * Tests the renderDataPlacement() method.
     *
     * @return void
     */
    public function testRenderDataPlacement(): void {

        $res = ButtonRenderer::renderDataPlacement($this->button);
        $this->assertEquals("top", $res);
    }

    /**
     * Tests the renderDataToggle() method.
     *
     * @return void
     */
    public function testRenderDataToggle(): void {

        $res = ButtonRenderer::renderDataToggle($this->button);
        $this->assertEquals("tooltip", $res);
    }

    /**
     * Tests the renderDisabled() method.
     *
     * @return void
     */
    public function testRenderDisabled(): void {

        $res = ButtonRenderer::renderDisabled($this->button);
        $this->assertEquals("disabled", $res);
    }

    /**
     * Tests the renderSize() method.
     *
     * @return void
     */
    public function testRenderSize(): void {

        $res = ButtonRenderer::renderSize($this->button);
        $this->assertEquals("btn-lg", $res);
    }

    /**
     * Tests the renderTitle() method.
     *
     * @return void
     */
    public function testRenderTitle(): void {

        $res = ButtonRenderer::renderTitle($this->button);
        $this->assertEquals("title", $res);
    }

    /**
     * Tests the renderType() method.
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
