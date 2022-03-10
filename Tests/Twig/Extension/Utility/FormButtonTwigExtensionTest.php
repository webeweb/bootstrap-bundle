<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\Utility;

use Twig\Node\Node;
use Twig\TwigFunction;
use WBW\Bundle\BootstrapBundle\Tests\AbstractTestCase;
use WBW\Bundle\BootstrapBundle\Twig\Extension\CSS\ButtonTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Utility\FormButtonTwigExtension;

/**
 * Form button utility Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb>
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
     * {@inheritDoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set a Button Twig extension mock.
        $this->buttonTwigExtension = new ButtonTwigExtension($this->twigEnvironment);
    }

    /**
     * Tests bootstrapFormButtonCancelFunction()
     *
     * @return void
     */
    public function testBootstrapFormButtonCancelFunction(): void {

        $obj = new FormButtonTwigExtension($this->twigEnvironment, $this->translator, $this->buttonTwigExtension);

        $arg = ["href" => "https://github.com/"];
        $res = '<a class="btn btn-default" title="label.cancel" href="https://github.com/" data-toggle="tooltip" data-placement="top"><i class="fa fa-times"></i> label.cancel</a>';

        $this->assertEquals($res, $obj->bootstrapFormButtonCancelFunction($arg));
    }

    /**
     * Tests bootstrapFormButtonDefaultFunction()
     *
     * @return void
     */
    public function testBootstrapFormButtonDefaultFunction(): void {

        $cnl = '<a class="btn btn-default" title="label.cancel" href="https://github.com/" data-toggle="tooltip" data-placement="top"><i class="fa fa-times"></i> label.cancel</a>';
        $sbt = '<button class="btn btn-primary" title="label.submit" type="submit" data-toggle="tooltip" data-placement="top"><i class="fa fa-check"></i> label.submit</button>';

        $obj = new FormButtonTwigExtension($this->twigEnvironment, $this->translator, $this->buttonTwigExtension);

        $arg = ["cancel_href" => "https://github.com/"];
        $res = implode(" ", [$cnl, $sbt]);

        $this->assertEquals($res, $obj->bootstrapFormButtonDefaultFunction($arg));
    }

    /**
     * Tests bootstrapFormButtonSubmitFunction()
     *
     * @return void
     */
    public function testBootstrapFormButtonSubmitFunction(): void {

        $obj = new FormButtonTwigExtension($this->twigEnvironment, $this->translator, $this->buttonTwigExtension);

        $res = '<button class="btn btn-primary" title="label.submit" type="submit" data-toggle="tooltip" data-placement="top"><i class="fa fa-check"></i> label.submit</button>';

        $this->assertEquals($res, $obj->bootstrapFormButtonSubmitFunction());
    }

    /**
     * Tests getFunctions()
     *
     * @return void
     */
    public function testGetFunctions(): void {

        $obj = new FormButtonTwigExtension($this->twigEnvironment, $this->translator, $this->buttonTwigExtension);

        $res = $obj->getFunctions();
        $this->assertCount(6, $res);

        $i = -1;

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bootstrapFormButtonCancel", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapFormButtonCancelFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bsFormButtonCancel", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapFormButtonCancelFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bootstrapFormButtonDefault", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapFormButtonDefaultFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bsFormButtonDefault", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapFormButtonDefaultFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bootstrapFormButtonSubmit", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapFormButtonSubmitFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bsFormButtonSubmit", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapFormButtonSubmitFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw.bootstrap.twig.extension.utility.form_button", FormButtonTwigExtension::SERVICE_NAME);

        $obj = new FormButtonTwigExtension($this->twigEnvironment, $this->translator, $this->buttonTwigExtension);

        $this->assertSame($this->twigEnvironment, $obj->getTwigEnvironment());
        $this->assertSame($this->translator, $obj->getTranslator());
        $this->assertSame($this->buttonTwigExtension, $obj->getButtonTwigExtension());
    }
}
