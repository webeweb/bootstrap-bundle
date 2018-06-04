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
use WBW\Bundle\BootstrapBundle\Tests\AbstractBootstrapFrameworkTestCase;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Form\ButtonFormTwigExtension;

/**
 * Button form Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\Form
 * @final
 */
final class ButtonFormTwigExtensionTest extends AbstractBootstrapFrameworkTestCase {

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

        $obj = new ButtonFormTwigExtension($this->translator);

        $res = $obj->getFunctions();

        $this->assertCount(3, $res);

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[0]);
        $this->assertEquals("bootstrapCancelFormButton", $res[0]->getName());
        $this->assertEquals([$obj, "bootstrapCancelFormButtonFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[1]);
        $this->assertEquals("bootstrapDefaultFormButtons", $res[1]->getName());
        $this->assertEquals([$obj, "bootstrapDefaultFormButtonsFunction"], $res[1]->getCallable());
        $this->assertEquals(["html"], $res[1]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[2]);
        $this->assertEquals("bootstrapSubmitFormButton", $res[2]->getName());
        $this->assertEquals([$obj, "bootstrapSubmitFormButtonFunction"], $res[2]->getCallable());
        $this->assertEquals(["html"], $res[2]->getSafe(new Twig_Node()));
    }

    /**
     * Tests the bootstrapCancelFormButtonFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testBootstrapCancelFormButtonFunction() {

        $obj = new ButtonFormTwigExtension($this->translator);

        $arg = ["href" => "https://github.com/"];
        $res = '<a class="btn btn-default" title="label.cancel" href="https://github.com/" data-toggle="tooltip" data-placement="top"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> label.cancel</a>';
        $this->assertEquals($res, $obj->bootstrapCancelFormButtonFunction($arg));
    }

    /**
     * Tests the bootstrapDefaultFormButtonsFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testBootstrapDefaultFormButtonsFunction() {

        $obj = new ButtonFormTwigExtension($this->translator);

        $cnl = '<a class="btn btn-default" title="label.cancel" href="https://github.com/" data-toggle="tooltip" data-placement="top"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> label.cancel</a>';
        $sbt = '<button class="btn btn-primary" title="label.submit" type="submit" data-toggle="tooltip" data-placement="top"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> label.submit</button>';

        $arg = ["cancel_href" => "https://github.com/"];
        $res = $cnl . " " . $sbt;
        $this->assertEquals($res, $obj->bootstrapDefaultFormButtonsFunction($arg));
    }

    /**
     * Tests the bootstrapSubmitFormButtonFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testBootstrapSubmitFormButtonFunction() {

        $obj = new ButtonFormTwigExtension($this->translator);

        $res = '<button class="btn btn-primary" title="label.submit" type="submit" data-toggle="tooltip" data-placement="top"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> label.submit</button>';
        $this->assertEquals($res, $obj->bootstrapSubmitFormButtonFunction());
    }

}
