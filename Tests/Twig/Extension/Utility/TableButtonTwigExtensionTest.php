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
use WBW\Bundle\BootstrapBundle\Twig\Extension\Utility\TableButtonTwigExtension;

/**
 * Table button utility Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\Form
 */
class TableButtonTwigExtensionTest extends AbstractTestCase {

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

        // Set a Button Twig extension.
        $this->buttonTwigExtension = new ButtonTwigExtension($this->twigEnvironment);
    }

    /**
     * Tests the bootstrapRowButtonDefaultFunction() method.
     *
     * @return void
     */
    public function testBootstrapRowButtonDefaultFunction() {

        $obj = new TableButtonTwigExtension($this->twigEnvironment, $this->translator, $this->buttonTwigExtension);

        $edt = '<a class="btn btn-default" title="label.edit" href="https://github.com/" data-toggle="tooltip" data-placement="top"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>';
        $dlt = '<a class="btn btn-danger" title="label.delete" href="https://github.com/" data-toggle="tooltip" data-placement="top"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>';

        $arg = ["edit_href" => "https://github.com/", "delete_href" => "https://github.com/"];
        $res = implode(" ", [$edt, $dlt]);
        $this->assertEquals($res, $obj->bootstrapRowButtonDefaultFunction($arg));
    }

    /**
     * Tests the bootstrapRowButtonDeleteFunction() method.
     *
     * @return void
     */
    public function testBootstrapRowButtonDeleteFunction() {

        $obj = new TableButtonTwigExtension($this->twigEnvironment, $this->translator, $this->buttonTwigExtension);

        $arg = ["href" => "https://github.com/"];
        $res = '<a class="btn btn-danger" title="label.delete" href="https://github.com/" data-toggle="tooltip" data-placement="top"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>';
        $this->assertEquals($res, $obj->bootstrapRowButtonDeleteFunction($arg));
    }

    /**
     * Tests the bootstrapRowButtonEditFunction() method.
     *
     * @return void
     */
    public function testBootstrapRowButtonEditFunction() {

        $obj = new TableButtonTwigExtension($this->twigEnvironment, $this->translator, $this->buttonTwigExtension);

        $arg = ["href" => "https://github.com/"];
        $res = '<a class="btn btn-default" title="label.edit" href="https://github.com/" data-toggle="tooltip" data-placement="top"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>';
        $this->assertEquals($res, $obj->bootstrapRowButtonEditFunction($arg));
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new TableButtonTwigExtension($this->twigEnvironment, $this->translator, $this->buttonTwigExtension);

        $this->assertEquals("webeweb.bootstrap.twig.extension.utility.table_button", TableButtonTwigExtension::SERVICE_NAME);
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

        $obj = new TableButtonTwigExtension($this->twigEnvironment, $this->translator, $this->buttonTwigExtension);

        $res = $obj->getFunctions();
        $this->assertCount(3, $res);

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[0]);
        $this->assertEquals("bootstrapRowButtonDefault", $res[0]->getName());
        $this->assertEquals([$obj, "bootstrapRowButtonDefaultFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[1]);
        $this->assertEquals("bootstrapRowButtonDelete", $res[1]->getName());
        $this->assertEquals([$obj, "bootstrapRowButtonDeleteFunction"], $res[1]->getCallable());
        $this->assertEquals(["html"], $res[1]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[2]);
        $this->assertEquals("bootstrapRowButtonEdit", $res[2]->getName());
        $this->assertEquals([$obj, "bootstrapRowButtonEditFunction"], $res[2]->getCallable());
        $this->assertEquals(["html"], $res[2]->getSafe(new Twig_Node()));
    }
}
