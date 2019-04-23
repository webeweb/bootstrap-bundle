<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\CSS;

use Twig\Node\Node;
use Twig\TwigFilter;
use Twig\TwigFunction;
use WBW\Bundle\BootstrapBundle\Tests\AbstractTestCase;
use WBW\Bundle\BootstrapBundle\Twig\Extension\CSS\ButtonTwigExtension;

/**
 * Button Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\CSS
 */
class ButtonTwigExtensionTest extends AbstractTestCase {

    /**
     * Tests the bootstrapButtonDangerFunction() method.
     *
     * @return void
     */
    public function testBootstrapButtonDangerFunction() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content", "title" => "title", "size" => "lg", "block" => true, "active" => true, "disabled" => true, "icon" => "fa:home"];
        $res = '<button class="btn btn-danger btn-block btn-lg active" title="title" type="button" data-toggle="tooltip" data-placement="top" disabled="disabled"><i class="fa fa-home"></i> content</button>';
        $this->assertEquals($res, $obj->bootstrapButtonDangerFunction($arg));
    }

    /**
     * Tests the bootstrapButtonDangerFunction() method.
     *
     * @return void
     */
    public function testBootstrapButtonDangerFunctionWithoutArguments() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<button class="btn btn-danger" type="button"></button>';
        $this->assertEquals($res, $obj->bootstrapButtonDangerFunction($arg));
    }

    /**
     * Tests the bootstrapButtonDefaultFunction() method.
     *
     * @return void
     */
    public function testBootstrapButtonDefaultFunction() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content", "title" => "title", "size" => "lg", "block" => true, "active" => true, "disabled" => true, "icon" => "fa:home"];
        $res = '<button class="btn btn-default btn-block btn-lg active" title="title" type="button" data-toggle="tooltip" data-placement="top" disabled="disabled"><i class="fa fa-home"></i> content</button>';
        $this->assertEquals($res, $obj->bootstrapButtonDefaultFunction($arg));
    }

    /**
     * Tests the bootstrapButtonDefaultFunction() method.
     *
     * @return void
     */
    public function testBootstrapButtonDefaultFunctionWithoutArguments() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<button class="btn btn-default" type="button"></button>';
        $this->assertEquals($res, $obj->bootstrapButtonDefaultFunction($arg));
    }

    /**
     * Tests the bootstrapButtonInfoFunction() method.
     *
     * @return void
     */
    public function testBootstrapButtonInfoFunction() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content", "title" => "title", "size" => "lg", "block" => true, "active" => true, "disabled" => true, "icon" => "fa:home"];
        $res = '<button class="btn btn-info btn-block btn-lg active" title="title" type="button" data-toggle="tooltip" data-placement="top" disabled="disabled"><i class="fa fa-home"></i> content</button>';
        $this->assertEquals($res, $obj->bootstrapButtonInfoFunction($arg));
    }

    /**
     * Tests the bootstrapButtonInfoFunction() method.
     *
     * @return void
     */
    public function testBootstrapButtonInfoFunctionWithoutArguments() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<button class="btn btn-info" type="button"></button>';
        $this->assertEquals($res, $obj->bootstrapButtonInfoFunction($arg));
    }

    /**
     * Tests the bootstrapButtonLinkFilter() method.
     *
     * @return void
     */
    public function testBootstrapButtonLinkFilter() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = ["disabled" => true];
        $res = '<a class="disabled btn btn-danger" href="https://github.com/" target="_blank"></a>';
        $this->assertEquals($res, $obj->bootstrapButtonLinkFilter($obj->bootstrapButtonDangerFunction($arg), "https://github.com/", "_blank"));
    }

    /**
     * Tests the bootstrapButtonLinkFilter() method.
     *
     * @return void
     */
    public function testBootstrapButtonLinkFilterWithoutArguments() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<a class="btn btn-danger" href="javascript:void(0);"></a>';
        $this->assertEquals($res, $obj->bootstrapButtonLinkFilter($obj->bootstrapButtonDangerFunction($arg)));
    }

    /**
     * Tests the bootstrapButtonLinkFunction() method.
     *
     * @return void
     */
    public function testBootstrapButtonLinkFunction() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content", "title" => "title", "size" => "lg", "block" => true, "active" => true, "disabled" => true, "icon" => "fa:home"];
        $res = '<button class="btn btn-link btn-block btn-lg active" title="title" type="button" data-toggle="tooltip" data-placement="top" disabled="disabled"><i class="fa fa-home"></i> content</button>';
        $this->assertEquals($res, $obj->bootstrapButtonLinkFunction($arg));
    }

    /**
     * Tests the bootstrapButtonPrimaryFunction() method.
     *
     * @return void
     */
    public function testBootstrapButtonPrimaryFunction() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content", "title" => "title", "size" => "lg", "block" => true, "active" => true, "disabled" => true, "icon" => "fa:home"];
        $res = '<button class="btn btn-primary btn-block btn-lg active" title="title" type="button" data-toggle="tooltip" data-placement="top" disabled="disabled"><i class="fa fa-home"></i> content</button>';
        $this->assertEquals($res, $obj->bootstrapButtonPrimaryFunction($arg));
    }

    /**
     * Tests the bootstrapButtonPrimaryFunction() method.
     *
     * @return void
     */
    public function testBootstrapButtonPrimaryFunctionWithoutArguments() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<button class="btn btn-primary" type="button"></button>';
        $this->assertEquals($res, $obj->bootstrapButtonPrimaryFunction($arg));
    }

    /**
     * Tests the bootstrapButtonSubmitFilter() method.
     *
     * @return void
     */
    public function testBootstrapButtonSubmitFilter() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<button class="btn btn-danger" type="submit"></button>';
        $this->assertEquals($res, $obj->bootstrapButtonSubmitFilter($obj->bootstrapButtonDangerFunction($arg)));
    }

    /**
     * Tests the bootstrapButtonSuccessFunction() method.
     *
     * @return void
     */
    public function testBootstrapButtonSuccessFunction() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content", "title" => "title", "size" => "lg", "block" => true, "active" => true, "disabled" => true, "icon" => "fa:home"];
        $res = '<button class="btn btn-success btn-block btn-lg active" title="title" type="button" data-toggle="tooltip" data-placement="top" disabled="disabled"><i class="fa fa-home"></i> content</button>';
        $this->assertEquals($res, $obj->bootstrapButtonSuccessFunction($arg));
    }

    /**
     * Tests the bootstrapButtonSuccessFunction() method.
     *
     * @return void
     */
    public function testBootstrapButtonSuccessFunctionWithoutArguments() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<button class="btn btn-success" type="button"></button>';
        $this->assertEquals($res, $obj->bootstrapButtonSuccessFunction($arg));
    }

    /**
     * Tests the bootstrapButtonWarningFunction() method.
     *
     * @return void
     */
    public function testBootstrapButtonWarningFunction() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content", "title" => "title", "size" => "lg", "block" => true, "active" => true, "disabled" => true, "icon" => "fa:home"];
        $res = '<button class="btn btn-warning btn-block btn-lg active" title="title" type="button" data-toggle="tooltip" data-placement="top" disabled="disabled"><i class="fa fa-home"></i> content</button>';
        $this->assertEquals($res, $obj->bootstrapButtonWarningFunction($arg));
    }

    /**
     * Tests the bootstrapButtonWarningFunction() method.
     *
     * @return void
     */
    public function testBootstrapButtonWarningFunctionWithoutArguments() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<button class="btn btn-warning" type="button"></button>';
        $this->assertEquals($res, $obj->bootstrapButtonWarningFunction($arg));
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $this->assertEquals("wbw.bootstrap.twig.extension.css.button", ButtonTwigExtension::SERVICE_NAME);
        $this->assertSame($this->twigEnvironment, $obj->getTwigEnvironment());
    }

    /**
     * Tests the getFilters() method.
     *
     * @return void
     */
    public function testGetFilters() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $res = $obj->getFilters();
        $this->assertCount(4, $res);

        $this->assertInstanceOf(TwigFilter::class, $res[0]);
        $this->assertEquals("bootstrapButtonLink", $res[0]->getName());
        $this->assertEquals([$obj, "bootstrapButtonLinkFilter"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFilter::class, $res[1]);
        $this->assertEquals("bsButtonLink", $res[1]->getName());
        $this->assertEquals([$obj, "bootstrapButtonLinkFilter"], $res[1]->getCallable());
        $this->assertEquals(["html"], $res[1]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFilter::class, $res[2]);
        $this->assertEquals("bootstrapButtonSubmit", $res[2]->getName());
        $this->assertEquals([$obj, "bootstrapButtonSubmitFilter"], $res[2]->getCallable());
        $this->assertEquals(["html"], $res[2]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFilter::class, $res[3]);
        $this->assertEquals("bsButtonSubmit", $res[3]->getName());
        $this->assertEquals([$obj, "bootstrapButtonSubmitFilter"], $res[3]->getCallable());
        $this->assertEquals(["html"], $res[3]->getSafe(new Node()));
    }

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $res = $obj->getFunctions();
        $this->assertCount(14, $res);

        $this->assertInstanceOf(TwigFunction::class, $res[0]);
        $this->assertEquals("bootstrapButtonDanger", $res[0]->getName());
        $this->assertEquals([$obj, "bootstrapButtonDangerFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[1]);
        $this->assertEquals("bsButtonDanger", $res[1]->getName());
        $this->assertEquals([$obj, "bootstrapButtonDangerFunction"], $res[1]->getCallable());
        $this->assertEquals(["html"], $res[1]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[2]);
        $this->assertEquals("bootstrapButtonDefault", $res[2]->getName());
        $this->assertEquals([$obj, "bootstrapButtonDefaultFunction"], $res[2]->getCallable());
        $this->assertEquals(["html"], $res[2]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[3]);
        $this->assertEquals("bsButtonDefault", $res[3]->getName());
        $this->assertEquals([$obj, "bootstrapButtonDefaultFunction"], $res[3]->getCallable());
        $this->assertEquals(["html"], $res[3]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[4]);
        $this->assertEquals("bootstrapButtonInfo", $res[4]->getName());
        $this->assertEquals([$obj, "bootstrapButtonInfoFunction"], $res[4]->getCallable());
        $this->assertEquals(["html"], $res[4]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[5]);
        $this->assertEquals("bsButtonInfo", $res[5]->getName());
        $this->assertEquals([$obj, "bootstrapButtonInfoFunction"], $res[5]->getCallable());
        $this->assertEquals(["html"], $res[5]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[6]);
        $this->assertEquals("bootstrapButtonLink", $res[6]->getName());
        $this->assertEquals([$obj, "bootstrapButtonLinkFunction"], $res[6]->getCallable());
        $this->assertEquals(["html"], $res[6]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[7]);
        $this->assertEquals("bsButtonLink", $res[7]->getName());
        $this->assertEquals([$obj, "bootstrapButtonLinkFunction"], $res[7]->getCallable());
        $this->assertEquals(["html"], $res[7]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[8]);
        $this->assertEquals("bootstrapButtonPrimary", $res[8]->getName());
        $this->assertEquals([$obj, "bootstrapButtonPrimaryFunction"], $res[8]->getCallable());
        $this->assertEquals(["html"], $res[8]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[9]);
        $this->assertEquals("bsButtonPrimary", $res[9]->getName());
        $this->assertEquals([$obj, "bootstrapButtonPrimaryFunction"], $res[9]->getCallable());
        $this->assertEquals(["html"], $res[9]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[10]);
        $this->assertEquals("bootstrapButtonSuccess", $res[10]->getName());
        $this->assertEquals([$obj, "bootstrapButtonSuccessFunction"], $res[10]->getCallable());
        $this->assertEquals(["html"], $res[10]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[11]);
        $this->assertEquals("bsButtonSuccess", $res[11]->getName());
        $this->assertEquals([$obj, "bootstrapButtonSuccessFunction"], $res[11]->getCallable());
        $this->assertEquals(["html"], $res[11]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[12]);
        $this->assertEquals("bootstrapButtonWarning", $res[12]->getName());
        $this->assertEquals([$obj, "bootstrapButtonWarningFunction"], $res[12]->getCallable());
        $this->assertEquals(["html"], $res[12]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[13]);
        $this->assertEquals("bsButtonWarning", $res[13]->getName());
        $this->assertEquals([$obj, "bootstrapButtonWarningFunction"], $res[13]->getCallable());
        $this->assertEquals(["html"], $res[13]->getSafe(new Node()));
    }
}
