<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\Form;

use Twig_Node;
use Twig_SimpleFunction;
use WBW\Bundle\BootstrapBundle\Tests\AbstractTestCase;
use WBW\Bundle\BootstrapBundle\Twig\Extension\CSS\ButtonTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Utility\FormButtonTwigExtension;

/**
 * Form button utility Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\Form
 */
class FormButtonTwigExtensionTest extends AbstractTestCase {

    /**
     * Button Twig extension.
     *
     * @var ButtonTwigExtension
     */
    private $buttonTwigExtension;

    /**
     * {@inheritdoc}
     */
    protected function setUp() {
        parent::setUp();

        // Set a Button Twig extension mock.
        $this->buttonTwigExtension = new ButtonTwigExtension($this->twigEnvironment);
    }

    /**
     * Tests the bootstrapFormButtonCancelFunction() method.
     *
     * @return void
     */
    public function testBootstrapFormButtonCancelFunction() {

        $obj = new FormButtonTwigExtension($this->twigEnvironment, $this->translator, $this->buttonTwigExtension);

        $arg = ["href" => "https://github.com/"];
        $res = '<a class="btn btn-default" title="label.cancel" href="https://github.com/" data-toggle="tooltip" data-placement="top"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> label.cancel</a>';
        $this->assertEquals($res, $obj->bootstrapFormButtonCancelFunction($arg));
    }

    /**
     * Tests the bootstrapFormButtonDefaultFunction() method.
     *
     * @return void
     */
    public function testBootstrapFormButtonDefaultFunction() {

        $obj = new FormButtonTwigExtension($this->twigEnvironment, $this->translator, $this->buttonTwigExtension);

        $cnl = '<a class="btn btn-default" title="label.cancel" href="https://github.com/" data-toggle="tooltip" data-placement="top"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> label.cancel</a>';
        $sbt = '<button class="btn btn-primary" title="label.submit" type="submit" data-toggle="tooltip" data-placement="top"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> label.submit</button>';

        $arg = ["cancel_href" => "https://github.com/"];
        $res = implode(" ", [$cnl, $sbt]);
        $this->assertEquals($res, $obj->bootstrapFormButtonDefaultFunction($arg));
    }

    /**
     * Tests the bootstrapFormButtonSubmitFunction() method.
     *
     * @return void
     */
    public function testBootstrapFormButtonSubmitFunction() {

        $obj = new FormButtonTwigExtension($this->twigEnvironment, $this->translator, $this->buttonTwigExtension);

        $res = '<button class="btn btn-primary" title="label.submit" type="submit" data-toggle="tooltip" data-placement="top"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> label.submit</button>';
        $this->assertEquals($res, $obj->bootstrapFormButtonSubmitFunction());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new FormButtonTwigExtension($this->twigEnvironment, $this->translator, $this->buttonTwigExtension);

        $this->assertEquals("webeweb.bootstrap.twig.extension.utility.form_button", FormButtonTwigExtension::SERVICE_NAME);
        $this->assertSame($this->twigEnvironment, $obj->getTwigEnvironment());
        $this->assertSame($this->translator, $obj->getTranslator());
        $this->assertSame($this->buttonTwigExtension, $obj->getButtonTwigExtension());
    }

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions() {

        $obj = new FormButtonTwigExtension($this->twigEnvironment, $this->translator, $this->buttonTwigExtension);

        $res = $obj->getFunctions();
        $this->assertCount(3, $res);

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[0]);
        $this->assertEquals("bootstrapFormButtonCancel", $res[0]->getName());
        $this->assertEquals([$obj, "bootstrapFormButtonCancelFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[1]);
        $this->assertEquals("bootstrapFormButtonDefault", $res[1]->getName());
        $this->assertEquals([$obj, "bootstrapFormButtonDefaultFunction"], $res[1]->getCallable());
        $this->assertEquals(["html"], $res[1]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[2]);
        $this->assertEquals("bootstrapFormButtonSubmit", $res[2]->getName());
        $this->assertEquals([$obj, "bootstrapFormButtonSubmitFunction"], $res[2]->getCallable());
        $this->assertEquals(["html"], $res[2]->getSafe(new Twig_Node()));
    }

}
