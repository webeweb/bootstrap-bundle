<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\CSS;

use Twig_Node;
use Twig_SimpleFilter;
use Twig_SimpleFunction;
use WBW\Bundle\BootstrapBundle\Tests\AbstractFrameworkTestCase;
use WBW\Bundle\BootstrapBundle\Twig\Extension\CSS\ButtonTwigExtension;

/**
 * Button Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\CSS
 */
class ButtonTwigExtensionTest extends AbstractFrameworkTestCase {

    /**
     * Tests the getFilters() method.
     *
     * @return void
     */
    public function testGetFilters() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $res = $obj->getFilters();
        $this->assertCount(2, $res);

        $this->assertInstanceOf(Twig_SimpleFilter::class, $res[0]);
        $this->assertEquals("bootstrapButtonLink", $res[0]->getName());
        $this->assertEquals([$obj, "bootstrapButtonLinkFilter"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFilter::class, $res[1]);
        $this->assertEquals("bootstrapButtonSubmit", $res[1]->getName());
        $this->assertEquals([$obj, "bootstrapButtonSubmitFilter"], $res[1]->getCallable());
        $this->assertEquals(["html"], $res[1]->getSafe(new Twig_Node()));
    }

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $res = $obj->getFunctions();
        $this->assertCount(7, $res);

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[0]);
        $this->assertEquals("bootstrapButtonDanger", $res[0]->getName());
        $this->assertEquals([$obj, "bootstrapButtonDangerFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[1]);
        $this->assertEquals("bootstrapButtonDefault", $res[1]->getName());
        $this->assertEquals([$obj, "bootstrapButtonDefaultFunction"], $res[1]->getCallable());
        $this->assertEquals(["html"], $res[1]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[2]);
        $this->assertEquals("bootstrapButtonInfo", $res[2]->getName());
        $this->assertEquals([$obj, "bootstrapButtonInfoFunction"], $res[2]->getCallable());
        $this->assertEquals(["html"], $res[2]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[3]);
        $this->assertEquals("bootstrapButtonLink", $res[3]->getName());
        $this->assertEquals([$obj, "bootstrapButtonLinkFunction"], $res[3]->getCallable());
        $this->assertEquals(["html"], $res[3]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[4]);
        $this->assertEquals("bootstrapButtonPrimary", $res[4]->getName());
        $this->assertEquals([$obj, "bootstrapButtonPrimaryFunction"], $res[4]->getCallable());
        $this->assertEquals(["html"], $res[4]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[5]);
        $this->assertEquals("bootstrapButtonSuccess", $res[5]->getName());
        $this->assertEquals([$obj, "bootstrapButtonSuccessFunction"], $res[5]->getCallable());
        $this->assertEquals(["html"], $res[5]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[6]);
        $this->assertEquals("bootstrapButtonWarning", $res[6]->getName());
        $this->assertEquals([$obj, "bootstrapButtonWarningFunction"], $res[6]->getCallable());
        $this->assertEquals(["html"], $res[6]->getSafe(new Twig_Node()));
    }

    /**
     * Tests the bootstrapButtonDangerFunction() method.
     *
     * @return void
     */
    public function testBootstrapButtonDangerFunction() {

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

        $arg = ["content" => "content", "title" => "title", "size" => "lg", "block" => true, "active" => true, "disable" => true, "icon" => "home", "color" => "black"];
        $res = '<button class="btn btn-default btn-block btn-lg active" title="title" type="button" data-toggle="tooltip" data-placement="top" disabled="disabled"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> content</button>';
        $this->assertEquals($res, $obj->bootstrapButtonDefaultFunction($arg));
    }

    /**
     * Tests the bootstrapButtonDefaultFunction() method.
     *
     * @return void
     */
    public function testBootstrapButtonDefaultFunctionWithActive() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = ["active" => true];
        $res = '<button class="btn btn-default active" type="button"></button>';
        $this->assertEquals($res, $obj->bootstrapButtonDefaultFunction($arg));
    }

    /**
     * Tests the bootstrapButtonDefaultFunction() method.
     *
     * @return void
     */
    public function testBootstrapButtonDefaultFunctionWithBlock() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = ["block" => true];
        $res = '<button class="btn btn-default btn-block" type="button"></button>';
        $this->assertEquals($res, $obj->bootstrapButtonDefaultFunction($arg));
    }

    /**
     * Tests the bootstrapButtonDefaultFunction() method.
     *
     * @return void
     */
    public function testBootstrapButtonDefaultFunctionWithContent() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content"];
        $res = '<button class="btn btn-default" type="button">content</button>';
        $this->assertEquals($res, $obj->bootstrapButtonDefaultFunction($arg));
    }

    /**
     * Tests the bootstrapButtonDefaultFunction() method.
     *
     * @return void
     */
    public function testBootstrapButtonDefaultFunctionWithDisable() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = ["disable" => true];
        $res = '<button class="btn btn-default" type="button" disabled="disabled"></button>';
        $this->assertEquals($res, $obj->bootstrapButtonDefaultFunction($arg));
    }

    /**
     * Tests the bootstrapButtonDefaultFunction() method.
     *
     * @return void
     */
    public function testBootstrapButtonDefaultFunctionWithIcon() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = ["icon" => "home"];
        $res = '<button class="btn btn-default" type="button"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></button>';
        $this->assertEquals($res, $obj->bootstrapButtonDefaultFunction($arg));
    }

    /**
     * Tests the bootstrapButtonDefaultFunction() method.
     *
     * @return void
     */
    public function testBootstrapButtonDefaultFunctionWithIconFontAwesome() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = ["icon" => "fa:home"];
        $res = '<button class="btn btn-default" type="button"><i class="fa fa-home"></i></button>';
        $this->assertEquals($res, $obj->bootstrapButtonDefaultFunction($arg));
    }

    /**
     * Tests the bootstrapButtonDefaultFunction() method.
     *
     * @return void
     */
    public function testBootstrapButtonDefaultFunctionWithIconMaterialDesignIconicFont() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = ["icon" => "zmdi:home"];
        $res = '<button class="btn btn-default" type="button"><i class="zmdi zmdi-home"></i></button>';
        $this->assertEquals($res, $obj->bootstrapButtonDefaultFunction($arg));
    }

    /**
     * Tests the bootstrapButtonDefaultFunction() method.
     *
     * @return void
     */
    public function testBootstrapButtonDefaultFunctionWithSize() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = ["size" => "lg"];
        $res = '<button class="btn btn-default btn-lg" type="button"></button>';
        $this->assertEquals($res, $obj->bootstrapButtonDefaultFunction($arg));
    }

    /**
     * Tests the bootstrapButtonDefaultFunction() method.
     *
     * @return void
     */
    public function testBootstrapButtonDefaultFunctionWithTitle() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = ["title" => "title"];
        $res = '<button class="btn btn-default" title="title" type="button" data-toggle="tooltip" data-placement="top"></button>';
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

        $arg = [];
        $res = '<a class="btn btn-danger" href="javascript:void(0);"></a>';
        $this->assertEquals($res, $obj->bootstrapButtonLinkFilter($obj->bootstrapButtonDangerFunction($arg)));
    }

    /**
     * Tests the bootstrapButtonLinkFilter() method.
     *
     * @return void
     */
    public function testBootstrapButtonLinkFilterWithHref() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<a class="btn btn-danger" href="https://github.com/"></a>';
        $this->assertEquals($res, $obj->bootstrapButtonLinkFilter($obj->bootstrapButtonDangerFunction($arg), "https://github.com/"));
    }

    /**
     * Tests the bootstrapButtonLinkFilter() method.
     *
     * @return void
     */
    public function testBootstrapButtonLinkFilterWithTarget() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<a class="btn btn-danger" href="https://github.com/" target="_blank"></a>';
        $this->assertEquals($res, $obj->bootstrapButtonLinkFilter($obj->bootstrapButtonDangerFunction($arg), "https://github.com/", "_blank"));
    }

    /**
     * Tests the bootstrapButtonLinkFunction() method.
     *
     * @return void
     */
    public function testBootstrapButtonLinkFunction() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<button class="btn btn-link" type="button"></button>';
        $this->assertEquals($res, $obj->bootstrapButtonLinkFunction($arg));
    }

    /**
     * Tests the bootstrapButtonPrimaryFunction() method.
     *
     * @return void
     */
    public function testBootstrapButtonPrimaryFunction() {

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

        $arg = [];
        $res = '<button class="btn btn-success" type="button"></button>';
        $this->assertEquals($res, $obj->bootstrapButtonSuccessFunction($arg));
    }

    /**
     * Tests the bootstrapButtonSuccessFunction() method.
     *
     * @return void
     */
    public function testBootstrapButtonWarningFunction() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<button class="btn btn-warning" type="button"></button>';
        $this->assertEquals($res, $obj->bootstrapButtonWarningFunction($arg));
    }

}
