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

use Twig\Node\Node;
use Twig\TwigFunction;
use WBW\Bundle\BootstrapBundle\Tests\AbstractTestCase;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Component\ButtonGroupTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\CSS\ButtonTwigExtension;

/**
 * Button group Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
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
     * Tests the bootstrapButtonGroupBasicFunction() method.
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
     * Tests the bootstrapButtonGroupToolbarFunction() method.
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
     * Tests the getFilters() method.
     *
     * @return void
     */
    public function testGetFilters(): void {

        $obj = new ButtonGroupTwigExtension($this->twigEnvironment);

        $res = $obj->getFilters();
        $this->assertCount(0, $res);
    }

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions(): void {

        $obj = new ButtonGroupTwigExtension($this->twigEnvironment);

        $res = $obj->getFunctions();
        $this->assertCount(4, $res);

        $this->assertInstanceOf(TwigFunction::class, $res[0]);
        $this->assertEquals("bootstrapButtonGroupBasic", $res[0]->getName());
        $this->assertEquals([$obj, "bootstrapButtonGroupBasicFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[1]);
        $this->assertEquals("bsButtonGroupBasic", $res[1]->getName());
        $this->assertEquals([$obj, "bootstrapButtonGroupBasicFunction"], $res[1]->getCallable());
        $this->assertEquals(["html"], $res[1]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[2]);
        $this->assertEquals("bootstrapButtonGroupToolbar", $res[2]->getName());
        $this->assertEquals([$obj, "bootstrapButtonGroupToolbarFunction"], $res[2]->getCallable());
        $this->assertEquals(["html"], $res[2]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[3]);
        $this->assertEquals("bsButtonGroupToolbar", $res[3]->getName());
        $this->assertEquals([$obj, "bootstrapButtonGroupToolbarFunction"], $res[3]->getCallable());
        $this->assertEquals(["html"], $res[3]->getSafe(new Node()));
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw.bootstrap.twig.extension.component.button_group", ButtonGroupTwigExtension::SERVICE_NAME);

        $obj = new ButtonGroupTwigExtension($this->twigEnvironment);

        $this->assertSame($this->twigEnvironment, $obj->getTwigEnvironment());
    }
}
