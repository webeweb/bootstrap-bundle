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

use Twig_Node;
use Twig_SimpleFunction;
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
     * {@inheritdoc}
     */
    protected function setUp() {
        parent::setUp();

        // Set a Button Twig extension mock.
        $buttonTwigExtension = new ButtonTwigExtension($this->twigEnvironment);

        // Set a Delete button mock.
        $this->deleteButton = $buttonTwigExtension->bootstrapButtonDangerFunction(["content" => "Delete"]);

        // Set an Edit button mock.
        $this->editButton = $buttonTwigExtension->bootstrapButtonDefaultFunction(["content" => "Edit"]);
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new ButtonGroupTwigExtension($this->twigEnvironment);

        $this->assertEquals("webeweb.bootstrap.twig.extension.component.button_group", ButtonGroupTwigExtension::SERVICE_NAME);
        $this->assertSame($this->twigEnvironment, $obj->getTwigEnvironment());
    }

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions() {

        $obj = new ButtonGroupTwigExtension($this->twigEnvironment);

        $res = $obj->getFunctions();
        $this->assertCount(2, $res);

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[0]);
        $this->assertEquals("bootstrapButtonGroupBasic", $res[0]->getName());
        $this->assertEquals([$obj, "bootstrapButtonGroupBasicFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[1]);
        $this->assertEquals("bootstrapButtonGroupToolbar", $res[1]->getName());
        $this->assertEquals([$obj, "bootstrapButtonGroupToolbarFunction"], $res[1]->getCallable());
        $this->assertEquals(["html"], $res[1]->getSafe(new Twig_Node()));
    }

    /**
     * Tests the bootstrapButtoionGroupBasicFunction() method.
     *
     * @return void
     */
    public function testBootstrapButtonGroupBasicFunction() {

        $obj = new ButtonGroupTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = <<< EOT
<div class="btn-group" role="group">
<button class="btn btn-default" type="button">Edit</button>
<button class="btn btn-danger" type="button">Delete</button>
</div>
EOT;
        $this->assertEquals($res, $obj->bootstrapButtonGroupBasicFunction($arg, [$this->editButton, $this->deleteButton]));
    }

    /**
     * Tests the bootstrapButtoionGroupToolbarFunction() method.
     *
     * @return void
     */
    public function testBootstrapButtonGroupToolbarFunction() {

        $obj = new ButtonGroupTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = <<< EOT
<div class="btn-toolbar" role="toolbar">
<button class="btn btn-default" type="button">Edit</button>
<button class="btn btn-danger" type="button">Delete</button>
</div>
EOT;
        $this->assertEquals($res, $obj->bootstrapButtonGroupToolbarFunction($arg, [$this->editButton, $this->deleteButton]));
    }

}
