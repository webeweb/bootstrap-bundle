<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Alert;

use WBW\Bundle\BootstrapBundle\Alert\AlertFactory;
use WBW\Bundle\BootstrapBundle\Alert\AlertInterface;
use WBW\Bundle\BootstrapBundle\Alert\AlertRenderer;
use WBW\Bundle\BootstrapBundle\Tests\AbstractTestCase;

/**
 * Alert renderer test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Alert
 */
class AlertRendererTest extends AbstractTestCase {

    /**
     * Alert.
     *
     * @var AlertInterface
     */
    private $alert;

    /**
     * {@inheritDoc}
     */
    protected function setUp() {
        parent::setUp();

        // Set a Alert mock.
        $this->alert = AlertFactory::parseDangerAlert([
            "content"     => "content",
            "dismissible" => true,
            "class"       => "class",
        ]);
    }

    /**
     * Tests the renderContent() method.
     *
     * @return void
     */
    public function testRenderContent() {

        $res = AlertRenderer::renderContent($this->alert);
        $this->assertEquals("content", $res);
    }

    /**
     * Tests the renderDismissible() method.
     *
     * @return void
     */
    public function testRenderDismissible() {

        $res = AlertRenderer::renderDismissible($this->alert);
        $this->assertEquals("alert-dismissible", $res);
    }

    /**
     * Tests the renderType() method.
     *
     * @return void
     */
    public function testRenderType() {

        $res = AlertRenderer::renderType($this->alert);
        $this->assertEquals("alert-danger", $res);
    }
}
