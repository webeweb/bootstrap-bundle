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

use WBW\Bundle\BootstrapBundle\Assets\AlertInterface;
use WBW\Bundle\BootstrapBundle\Factory\AlertFactory;
use WBW\Bundle\BootstrapBundle\Renderer\Assets\AlertRenderer;
use WBW\Bundle\BootstrapBundle\Tests\AbstractTestCase;

/**
 * Alert renderer test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Tests\Renderer\Assets
 */
class AlertRendererTest extends AbstractTestCase {

    /**
     * Alert.
     *
     * @var AlertInterface
     */
    private $alert;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set a Alert mock.
        $this->alert = AlertFactory::parseDangerAlert([
            "content"     => "content",
            "dismissible" => true,
            "class"       => "class",
        ]);
    }

    /**
     * Test renderContent()
     *
     * @return void
     */
    public function testRenderContent(): void {

        $res = AlertRenderer::renderContent($this->alert);
        $this->assertEquals("content", $res);
    }

    /**
     * Test renderDismissible()
     *
     * @return void
     */
    public function testRenderDismissible(): void {

        $res = AlertRenderer::renderDismissible($this->alert);
        $this->assertEquals("alert-dismissible", $res);
    }

    /**
     * Test renderType()
     *
     * @return void
     */
    public function testRenderType(): void {

        $res = AlertRenderer::renderType($this->alert);
        $this->assertEquals("alert-danger", $res);
    }
}
