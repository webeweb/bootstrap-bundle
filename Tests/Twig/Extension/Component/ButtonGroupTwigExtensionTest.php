<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\Component;

use Twig\Extension\ExtensionInterface;
use Twig\Node\Node;
use Twig\TwigFunction;
use WBW\Bundle\BootstrapBundle\Tests\AbstractTestCase;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Component\ButtonGroupTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\CSS\ButtonTwigExtension;

/**
 * Button group Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\Component
 */
class ButtonGroupTwigExtensionTest extends AbstractTestCase {

    /**
     * Delete button.
     *
     * @var string
     */
    private $deleteButton;

    /**
     * Edit button.
     *
     * @var string
     */
    private $editButton;

    /**
     * {@inheritDoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set a Button Twig extension mock.
        $buttonTwigExtension = new ButtonTwigExtension($this->twigEnvironment);

        // Set a Delete button mock.
        $this->deleteButton = $buttonTwigExtension->bootstrapButtonDangerFunction(["content" => "Delete"]);

        // Set an Edit button mock.
        $this->editButton = $buttonTwigExtension->bootstrapButtonDefaultFunction(["content" => "Edit"]);
    }

    /**
     * Test bootstrapButtonGroupBasicFunction()
     *
     * @return void
     */
    public function testBootstrapButtonGroupBasicFunction(): void {

        $obj = new ButtonGroupTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = file_get_contents(__DIR__ . "/ButtonGroupTwigExtensionTest.testBootstrapButtonGroupBasicFunction.html.txt");

        $this->assertEquals($res, $obj->bootstrapButtonGroupBasicFunction($arg, [$this->editButton, $this->deleteButton]) . "\n");
    }

    /**
     * Test bootstrapButtonGroupToolbarFunction()
     *
     * @return void
     */
    public function testBootstrapButtonGroupToolbarFunction(): void {

        $obj = new ButtonGroupTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = file_get_contents(__DIR__ . "/ButtonGroupTwigExtensionTest.testBootstrapButtonGroupToolbarFunction.html.txt");

        $this->assertEquals($res, $obj->bootstrapButtonGroupToolbarFunction($arg, [$this->editButton, $this->deleteButton]) . "\n");
    }

    /**
     * Test getFilters()
     *
     * @return void
     */
    public function testGetFilters(): void {

        $obj = new ButtonGroupTwigExtension($this->twigEnvironment);

        $res = $obj->getFilters();
        $this->assertCount(0, $res);
    }

    /**
     * Test getFunctions()
     *
     * @return void
     */
    public function testGetFunctions(): void {

        $obj = new ButtonGroupTwigExtension($this->twigEnvironment);

        $res = $obj->getFunctions();
        $this->assertCount(4, $res);

        $i = -1;

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bootstrapButtonGroupBasic", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapButtonGroupBasicFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bsButtonGroupBasic", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapButtonGroupBasicFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bootstrapButtonGroupToolbar", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapButtonGroupToolbarFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bsButtonGroupToolbar", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapButtonGroupToolbarFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw.bootstrap.twig.extension.component.button_group", ButtonGroupTwigExtension::SERVICE_NAME);

        $obj = new ButtonGroupTwigExtension($this->twigEnvironment);

        $this->assertInstanceOf(ExtensionInterface::class, $obj);

        $this->assertSame($this->twigEnvironment, $obj->getTwigEnvironment());
    }
}
