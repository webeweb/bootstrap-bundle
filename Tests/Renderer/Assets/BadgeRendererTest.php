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

use WBW\Bundle\BootstrapBundle\Assets\BadgeInterface;
use WBW\Bundle\BootstrapBundle\Factory\BadgeFactory;
use WBW\Bundle\BootstrapBundle\Renderer\Assets\BadgeRenderer;
use WBW\Bundle\BootstrapBundle\Tests\AbstractTestCase;

/**
 * Badge renderer test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Tests\Renderer\Assets
 */
class BadgeRendererTest extends AbstractTestCase {

    /**
     * Badge.
     *
     * @var BadgeInterface
     */
    private $badge;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set a Badge mock.
        $this->badge = BadgeFactory::parseDangerBadge([
            "content" => "content",
            "pill"    => true,
            "class"   => "class",
        ]);
    }

    /**
     * Tests renderContent()
     *
     * @return void
     */
    public function testRenderContent(): void {

        $res = BadgeRenderer::renderContent($this->badge);
        $this->assertEquals("content", $res);
    }

    /**
     * Tests renderPill()
     *
     * @return void
     */
    public function testRenderPill(): void {

        $res = BadgeRenderer::renderPill($this->badge);
        $this->assertEquals("badge-pill", $res);
    }

    /**
     * Tests renderType()
     *
     * @return void
     */
    public function testRenderType(): void {

        $res = BadgeRenderer::renderType($this->badge);
        $this->assertEquals("badge-danger", $res);
    }
}
