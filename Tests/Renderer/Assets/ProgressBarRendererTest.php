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

use WBW\Bundle\BootstrapBundle\Assets\ProgressBarInterface;
use WBW\Bundle\BootstrapBundle\Factory\ProgressBarFactory;
use WBW\Bundle\BootstrapBundle\Renderer\Assets\ProgressBarRenderer;
use WBW\Bundle\BootstrapBundle\Tests\AbstractTestCase;

/**
 * Progress bar renderer test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Tests\Renderer\Assets
 */
class ProgressBarRendererTest extends AbstractTestCase {

    /**
     * ProgressBar.
     *
     * @var ProgressBarInterface
     */
    private $progressBar;

    /**
     * {@inheritDoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set a Progress bar mock.
        $this->progressBar = ProgressBarFactory::parseDangerProgressBar([
            "content"  => "content",
            "value"    => 25,
            "min"      => 0,
            "max"      => 1000,
            "animated" => true,
            "striped"  => true,
        ]);
    }

    /**
     * Test renderAnimated()
     *
     * @return void
     */
    public function testRenderAnimated(): void {

        $res = ProgressBarRenderer::renderAnimated($this->progressBar);
        $this->assertEquals("active", $res);
    }

    /**
     * Test renderContent()
     *
     * @return void
     */
    public function testRenderContent(): void {

        $res = ProgressBarRenderer::renderContent($this->progressBar, "default");
        $this->assertEquals("content", $res);
    }

    /**
     * Test renderStriped()
     *
     * @return void
     */
    public function testRenderStriped(): void {

        $res = ProgressBarRenderer::renderStriped($this->progressBar);
        $this->assertEquals("progress-bar-striped", $res);
    }

    /**
     * Test renderStyle()
     *
     * @return void
     */
    public function testRenderStyle(): void {

        $res = ProgressBarRenderer::renderStyle($this->progressBar);
        $this->assertEquals("width: 25%;", $res);
    }

    /**
     * Test renderType()
     *
     * @return void
     */
    public function testRenderType(): void {

        $res = ProgressBarRenderer::renderType($this->progressBar);
        $this->assertEquals("progress-bar-danger", $res);
    }
}
