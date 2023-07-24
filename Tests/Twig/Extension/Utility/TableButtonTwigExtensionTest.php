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

use Twig\Extension\ExtensionInterface;
use Twig\Node\Node;
use Twig\TwigFunction;
use WBW\Bundle\BootstrapBundle\Tests\AbstractTestCase;
use WBW\Bundle\BootstrapBundle\Twig\Extension\CSS\ButtonTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Utility\TableButtonTwigExtension;

/**
 * Table button utility Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\Utility
 */
class TableButtonTwigExtensionTest extends AbstractTestCase {

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

        // Set a Button Twig extension.
        $this->buttonTwigExtension = new ButtonTwigExtension($this->twigEnvironment);
    }

    /**
     * Test bootstrapRowButtonDefaultFunction()
     *
     * @return void
     */
    public function testBootstrapRowButtonDefaultFunction(): void {

        $edt = '<a class="btn btn-default" title="label.edit" href="https://github.com/" data-toggle="tooltip" data-placement="top"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>';
        $dlt = '<a class="btn btn-danger" title="label.delete" href="https://github.com/" data-toggle="tooltip" data-placement="top"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>';

        $obj = new TableButtonTwigExtension($this->twigEnvironment, $this->translator, $this->buttonTwigExtension);

        $arg = ["edit_href" => "https://github.com/", "delete_href" => "https://github.com/"];
        $res = implode(" ", [$edt, $dlt]);

        $this->assertEquals($res, $obj->bootstrapRowButtonDefaultFunction($arg));
    }

    /**
     * Test bootstrapRowButtonDeleteFunction()
     *
     * @return void
     */
    public function testBootstrapRowButtonDeleteFunction(): void {

        $obj = new TableButtonTwigExtension($this->twigEnvironment, $this->translator, $this->buttonTwigExtension);

        $arg = ["href" => "https://github.com/"];
        $res = '<a class="btn btn-danger" title="label.delete" href="https://github.com/" data-toggle="tooltip" data-placement="top"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>';

        $this->assertEquals($res, $obj->bootstrapRowButtonDeleteFunction($arg));
    }

    /**
     * Test bootstrapRowButtonEditFunction()
     *
     * @return void
     */
    public function testBootstrapRowButtonEditFunction(): void {

        $obj = new TableButtonTwigExtension($this->twigEnvironment, $this->translator, $this->buttonTwigExtension);

        $arg = ["href" => "https://github.com/"];
        $res = '<a class="btn btn-default" title="label.edit" href="https://github.com/" data-toggle="tooltip" data-placement="top"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>';

        $this->assertEquals($res, $obj->bootstrapRowButtonEditFunction($arg));
    }

    /**
     * Test getFunctions()
     *
     * @return void
     */
    public function testGetFunctions(): void {

        $obj = new TableButtonTwigExtension($this->twigEnvironment, $this->translator, $this->buttonTwigExtension);

        $res = $obj->getFunctions();
        $this->assertCount(3, $res);

        $i = -1;

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bootstrapRowButtonDefault", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapRowButtonDefaultFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bootstrapRowButtonDelete", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapRowButtonDeleteFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bootstrapRowButtonEdit", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapRowButtonEditFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw.bootstrap.twig.extension.utility.table_button", TableButtonTwigExtension::SERVICE_NAME);

        $obj = new TableButtonTwigExtension($this->twigEnvironment, $this->translator, $this->buttonTwigExtension);

        $this->assertInstanceOf(ExtensionInterface::class, $obj);

        $this->assertSame($this->twigEnvironment, $obj->getTwigEnvironment());
        $this->assertSame($this->translator, $obj->getTranslator());
        $this->assertSame($this->buttonTwigExtension, $obj->getButtonTwigExtension());
    }
}
