<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Badge;

use WBW\Bundle\BootstrapBundle\Badge\BadgeFactory;
use WBW\Bundle\BootstrapBundle\Badge\BadgeInterface;
use WBW\Bundle\BootstrapBundle\Badge\BadgeRenderer;
use WBW\Bundle\BootstrapBundle\Tests\AbstractTestCase;

/**
 * Badge renderer test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Badge
 */
class BadgeRendererTest extends AbstractTestCase {

    /**
     * Badge.
     *
     * @var BadgeInterface
     */
    private $badge;

    /**
     * {@inheritDoc}
     */
    protected function setUp() {
        parent::setUp();

        // Set a Badge mock.
        $this->badge = BadgeFactory::parseDangerBadge([
            "content" => "content",
            "pill"    => true,
            "class"   => "class",
        ]);
    }

    /**
     * Tests the renderContent() method.
     *
     * @return void
     */
    public function testRenderContent() {

        $res = BadgeRenderer::renderContent($this->badge);
        $this->assertEquals("content", $res);
    }

    /**
     * Tests the renderPill() method.
     *
     * @return void
     */
    public function testRenderPill() {

        $res = BadgeRenderer::renderPill($this->badge);
        $this->assertEquals("badge-pill", $res);
    }

    /**
     * Tests the renderType() method.
     *
     * @return void
     */
    public function testRenderType() {

        $res = BadgeRenderer::renderType($this->badge);
        $this->assertEquals("badge-danger", $res);
    }
}
