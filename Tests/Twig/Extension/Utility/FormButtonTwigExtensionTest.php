<?php

/**
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
use WBW\Bundle\BootstrapBundle\Tests\AbstractFrameworkTestCase;
use WBW\Bundle\BootstrapBundle\Twig\Extension\CSS\ButtonTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Utility\FormButtonTwigExtension;

/**
 * Form button utility Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\Form
 * @final
 */
final class FormButtonTwigExtensionTest extends AbstractFrameworkTestCase {

    /**
     * {@inheritdoc}
     */
    protected function setUp() {
        parent::setUp();

        // Set the Translator mock.
        $this->translator->expects($this->any())->method("trans")->willReturnCallback(function($id, array $parameters = [], $domain = null, $locale = null) {
            return $id;
        });
    }

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions() {

        $obj = new FormButtonTwigExtension($this->translator, new ButtonTwigExtension());

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

    /**
     * Tests the bootstrapFormButtonCancelFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testBootstrapFormButtonCancelFunction() {

        $obj = new FormButtonTwigExtension($this->translator, new ButtonTwigExtension());

        $arg = ["href" => "https://github.com/"];
        $res = '<a class="btn btn-default" title="label.cancel" href="https://github.com/" data-toggle="tooltip" data-placement="top"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> label.cancel</a>';
        $this->assertEquals($res, $obj->bootstrapFormButtonCancelFunction($arg));
    }

    /**
     * Tests the bootstrapFormButtonDefaultFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testBootstrapFormButtonDefaultFunction() {

        $obj = new FormButtonTwigExtension($this->translator, new ButtonTwigExtension());

        $cnl = '<a class="btn btn-default" title="label.cancel" href="https://github.com/" data-toggle="tooltip" data-placement="top"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> label.cancel</a>';
        $sbt = '<button class="btn btn-primary" title="label.submit" type="submit" data-toggle="tooltip" data-placement="top"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> label.submit</button>';

        $arg = ["cancel_href" => "https://github.com/"];
        $res = $cnl . " " . $sbt;
        $this->assertEquals($res, $obj->bootstrapFormButtonDefaultFunction($arg));
    }

    /**
     * Tests the bootstrapFormButtonSubmitFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testBootstrapFormButtonSubmitFunction() {

        $obj = new FormButtonTwigExtension($this->translator, new ButtonTwigExtension());

        $res = '<button class="btn btn-primary" title="label.submit" type="submit" data-toggle="tooltip" data-placement="top"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> label.submit</button>';
        $this->assertEquals($res, $obj->bootstrapFormButtonSubmitFunction());
    }

}
