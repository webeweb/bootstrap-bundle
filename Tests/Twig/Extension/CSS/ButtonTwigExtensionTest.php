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
    public function testBootstrapButtonDangerFunction(): void {

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
    public function testBootstrapButtonDangerFunctionWithoutArguments(): void {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<button class="btn btn-danger" type="button"></button>';
        $this->assertEquals($res, $obj->bootstrapButtonDangerFunction($arg));
    }

    /**
     * Tests the bootstrapButtonDarkFunction() method.
     *
     * @return void
     */
    public function testBootstrapButtonDarkFunction(): void {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content", "title" => "title", "size" => "lg", "block" => true, "active" => true, "disabled" => true, "icon" => "fa:home"];
        $res = '<button class="btn btn-dark btn-block btn-lg active" title="title" type="button" data-toggle="tooltip" data-placement="top" disabled="disabled"><i class="fa fa-home"></i> content</button>';
        $this->assertEquals($res, $obj->bootstrapButtonDarkFunction($arg));
    }

    /**
     * Tests the bootstrapButtonDarkFunction() method.
     *
     * @return void
     */
    public function testBootstrapButtonDarkFunctionWithoutArguments(): void {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<button class="btn btn-dark" type="button"></button>';
        $this->assertEquals($res, $obj->bootstrapButtonDarkFunction($arg));
    }

    /**
     * Tests the bootstrapButtonDefaultFunction() method.
     *
     * @return void
     */
    public function testBootstrapButtonDefaultFunction(): void {

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
    public function testBootstrapButtonDefaultFunctionWithoutArguments(): void {

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
    public function testBootstrapButtonInfoFunction(): void {

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
    public function testBootstrapButtonInfoFunctionWithoutArguments(): void {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<button class="btn btn-info" type="button"></button>';
        $this->assertEquals($res, $obj->bootstrapButtonInfoFunction($arg));
    }

    /**
     * Tests the bootstrapButtonLightFunction() method.
     *
     * @return void
     */
    public function testBootstrapButtonLightFunction(): void {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content", "title" => "title", "size" => "lg", "block" => true, "active" => true, "disabled" => true, "icon" => "fa:home"];
        $res = '<button class="btn btn-light btn-block btn-lg active" title="title" type="button" data-toggle="tooltip" data-placement="top" disabled="disabled"><i class="fa fa-home"></i> content</button>';
        $this->assertEquals($res, $obj->bootstrapButtonLightFunction($arg));
    }

    /**
     * Tests the bootstrapButtonLightFunction() method.
     *
     * @return void
     */
    public function testBootstrapButtonLightFunctionWithoutArguments(): void {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<button class="btn btn-light" type="button"></button>';
        $this->assertEquals($res, $obj->bootstrapButtonLightFunction($arg));
    }

    /**
     * Tests the bootstrapButtonLinkFilter() method.
     *
     * @return void
     */
    public function testBootstrapButtonLinkFilter(): void {

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
    public function testBootstrapButtonLinkFilterWithoutArguments(): void {

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
    public function testBootstrapButtonLinkFunction(): void {

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
    public function testBootstrapButtonPrimaryFunction(): void {

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
    public function testBootstrapButtonPrimaryFunctionWithoutArguments(): void {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<button class="btn btn-primary" type="button"></button>';
        $this->assertEquals($res, $obj->bootstrapButtonPrimaryFunction($arg));
    }

    /**
     * Tests the bootstrapButtonSecondaryFunction() method.
     *
     * @return void
     */
    public function testBootstrapButtonSecondaryFunction(): void {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content", "title" => "title", "size" => "lg", "block" => true, "active" => true, "disabled" => true, "icon" => "fa:home"];
        $res = '<button class="btn btn-secondary btn-block btn-lg active" title="title" type="button" data-toggle="tooltip" data-placement="top" disabled="disabled"><i class="fa fa-home"></i> content</button>';
        $this->assertEquals($res, $obj->bootstrapButtonSecondaryFunction($arg));
    }

    /**
     * Tests the bootstrapButtonSecondaryFunction() method.
     *
     * @return void
     */
    public function testBootstrapButtonSecondaryFunctionWithoutArguments(): void {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<button class="btn btn-secondary" type="button"></button>';
        $this->assertEquals($res, $obj->bootstrapButtonSecondaryFunction($arg));
    }

    /**
     * Tests the bootstrapButtonSubmitFilter() method.
     *
     * @return void
     */
    public function testBootstrapButtonSubmitFilter(): void {

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
    public function testBootstrapButtonSuccessFunction(): void {

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
    public function testBootstrapButtonSuccessFunctionWithoutArguments(): void {

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
    public function testBootstrapButtonWarningFunction(): void {

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
    public function testBootstrapButtonWarningFunctionWithoutArguments(): void {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<button class="btn btn-warning" type="button"></button>';
        $this->assertEquals($res, $obj->bootstrapButtonWarningFunction($arg));
    }

    /**
     * Tests the getFilters() method.
     *
     * @return void
     */
    public function testGetFilters(): void {

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
    public function testGetFunctions(): void {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $res = $obj->getFunctions();
        $this->assertCount(18, $res);

        $this->assertInstanceOf(TwigFunction::class, $res[0]);
        $this->assertEquals("bootstrapButtonDanger", $res[0]->getName());
        $this->assertEquals([$obj, "bootstrapButtonDangerFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[1]);
        $this->assertEquals("bsButtonDanger", $res[1]->getName());
        $this->assertEquals([$obj, "bootstrapButtonDangerFunction"], $res[1]->getCallable());
        $this->assertEquals(["html"], $res[1]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[2]);
        $this->assertEquals("bootstrapButtonInfo", $res[2]->getName());
        $this->assertEquals([$obj, "bootstrapButtonInfoFunction"], $res[2]->getCallable());
        $this->assertEquals(["html"], $res[2]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[3]);
        $this->assertEquals("bsButtonInfo", $res[3]->getName());
        $this->assertEquals([$obj, "bootstrapButtonInfoFunction"], $res[3]->getCallable());
        $this->assertEquals(["html"], $res[3]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[4]);
        $this->assertEquals("bootstrapButtonLink", $res[4]->getName());
        $this->assertEquals([$obj, "bootstrapButtonLinkFunction"], $res[4]->getCallable());
        $this->assertEquals(["html"], $res[4]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[5]);
        $this->assertEquals("bsButtonLink", $res[5]->getName());
        $this->assertEquals([$obj, "bootstrapButtonLinkFunction"], $res[5]->getCallable());
        $this->assertEquals(["html"], $res[5]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[6]);
        $this->assertEquals("bootstrapButtonPrimary", $res[6]->getName());
        $this->assertEquals([$obj, "bootstrapButtonPrimaryFunction"], $res[6]->getCallable());
        $this->assertEquals(["html"], $res[6]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[7]);
        $this->assertEquals("bsButtonPrimary", $res[7]->getName());
        $this->assertEquals([$obj, "bootstrapButtonPrimaryFunction"], $res[7]->getCallable());
        $this->assertEquals(["html"], $res[7]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[8]);
        $this->assertEquals("bootstrapButtonSuccess", $res[8]->getName());
        $this->assertEquals([$obj, "bootstrapButtonSuccessFunction"], $res[8]->getCallable());
        $this->assertEquals(["html"], $res[8]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[9]);
        $this->assertEquals("bsButtonSuccess", $res[9]->getName());
        $this->assertEquals([$obj, "bootstrapButtonSuccessFunction"], $res[9]->getCallable());
        $this->assertEquals(["html"], $res[9]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[10]);
        $this->assertEquals("bootstrapButtonWarning", $res[10]->getName());
        $this->assertEquals([$obj, "bootstrapButtonWarningFunction"], $res[10]->getCallable());
        $this->assertEquals(["html"], $res[10]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[11]);
        $this->assertEquals("bsButtonWarning", $res[11]->getName());
        $this->assertEquals([$obj, "bootstrapButtonWarningFunction"], $res[11]->getCallable());
        $this->assertEquals(["html"], $res[11]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[12]);
        $this->assertEquals("bootstrapButtonDark", $res[12]->getName());
        $this->assertEquals([$obj, "bootstrapButtonDarkFunction"], $res[12]->getCallable());
        $this->assertEquals(["html"], $res[12]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[13]);
        $this->assertEquals("bsButtonDark", $res[13]->getName());
        $this->assertEquals([$obj, "bootstrapButtonDarkFunction"], $res[13]->getCallable());
        $this->assertEquals(["html"], $res[13]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[14]);
        $this->assertEquals("bootstrapButtonLight", $res[14]->getName());
        $this->assertEquals([$obj, "bootstrapButtonLightFunction"], $res[14]->getCallable());
        $this->assertEquals(["html"], $res[14]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[15]);
        $this->assertEquals("bsButtonLight", $res[15]->getName());
        $this->assertEquals([$obj, "bootstrapButtonLightFunction"], $res[15]->getCallable());
        $this->assertEquals(["html"], $res[15]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[16]);
        $this->assertEquals("bootstrapButtonSecondary", $res[16]->getName());
        $this->assertEquals([$obj, "bootstrapButtonSecondaryFunction"], $res[16]->getCallable());
        $this->assertEquals(["html"], $res[16]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[17]);
        $this->assertEquals("bsButtonSecondary", $res[17]->getName());
        $this->assertEquals([$obj, "bootstrapButtonSecondaryFunction"], $res[17]->getCallable());
        $this->assertEquals(["html"], $res[17]->getSafe(new Node()));
    }

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctionsWithBootstrap3(): void {

        $obj = new ButtonTwigExtension($this->twigEnvironment);
        $obj->setVersion(3);

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

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw.bootstrap.twig.extension.css.button", ButtonTwigExtension::SERVICE_NAME);

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $this->assertSame($this->twigEnvironment, $obj->getTwigEnvironment());
    }
}
