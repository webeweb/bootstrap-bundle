<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\Component;

use PHPUnit_Framework_TestCase;
use Twig_Node;
use Twig_SimpleFilter;
use Twig_SimpleFunction;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Component\ButtonComponentTwigExtension;

/**
 * Button component Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\Component
 * @final
 */
final class ButtonComponentTwigExtensionTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the getFilters() method.
     *
     * @return void
     */
    public function testGetFilters() {

        $obj = new ButtonComponentTwigExtension();

        $res = $obj->getFilters();

        $this->assertCount(2, $res);

        $this->assertInstanceOf(Twig_SimpleFilter::class, $res[0]);
        $this->assertEquals('bootstrapButtonLink', $res[0]->getName());
        $this->assertEquals([$obj, 'bootstrapButtonLinkFilter'], $res[0]->getCallable());
        $this->assertEquals(['html'], $res[0]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFilter::class, $res[1]);
        $this->assertEquals('bootstrapButtonSubmit', $res[1]->getName());
        $this->assertEquals([$obj, 'bootstrapButtonSubmitFilter'], $res[1]->getCallable());
        $this->assertEquals(['html'], $res[1]->getSafe(new Twig_Node()));
    }

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions() {

        $obj = new ButtonComponentTwigExtension();

        $res = $obj->getFunctions();

        $this->assertCount(7, $res);

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[0]);
        $this->assertEquals('bootstrapButtonDanger', $res[0]->getName());
        $this->assertEquals([$obj, 'bootstrapButtonDangerFunction'], $res[0]->getCallable());
        $this->assertEquals(['html'], $res[0]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[1]);
        $this->assertEquals('bootstrapButtonDefault', $res[1]->getName());
        $this->assertEquals([$obj, 'bootstrapButtonDefaultFunction'], $res[1]->getCallable());
        $this->assertEquals(['html'], $res[1]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[2]);
        $this->assertEquals('bootstrapButtonInfo', $res[2]->getName());
        $this->assertEquals([$obj, 'bootstrapButtonInfoFunction'], $res[2]->getCallable());
        $this->assertEquals(['html'], $res[2]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[3]);
        $this->assertEquals('bootstrapButtonLink', $res[3]->getName());
        $this->assertEquals([$obj, 'bootstrapButtonLinkFunction'], $res[3]->getCallable());
        $this->assertEquals(['html'], $res[3]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[4]);
        $this->assertEquals('bootstrapButtonPrimary', $res[4]->getName());
        $this->assertEquals([$obj, 'bootstrapButtonPrimaryFunction'], $res[4]->getCallable());
        $this->assertEquals(['html'], $res[4]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[5]);
        $this->assertEquals('bootstrapButtonSuccess', $res[5]->getName());
        $this->assertEquals([$obj, 'bootstrapButtonSuccessFunction'], $res[5]->getCallable());
        $this->assertEquals(['html'], $res[5]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[6]);
        $this->assertEquals('bootstrapButtonWarning', $res[6]->getName());
        $this->assertEquals([$obj, 'bootstrapButtonWarningFunction'], $res[6]->getCallable());
        $this->assertEquals(['html'], $res[6]->getSafe(new Twig_Node()));
    }

    /**
     * Tests the bootstrapButtonDangerFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testBootstrapButtonDangerFunction() {

        $obj  = new ButtonComponentTwigExtension();
        $arg0 = [];
        $res0 = '<button class="btn btn-danger" type="button"></button>';
        $this->assertEquals($res0, $obj->bootstrapButtonDangerFunction($arg0));

        $arg1 = ['content' => 'content'];
        $res1 = '<button class="btn btn-danger" type="button">content</button>';
        $this->assertEquals($res1, $obj->bootstrapButtonDangerFunction($arg1));

        $arg2 = ['title' => 'title'];
        $res2 = '<button class="btn btn-danger" title="title" type="button" data-toggle="tooltip" data-placement="top"></button>';
        $this->assertEquals($res2, $obj->bootstrapButtonDangerFunction($arg2));

        $arg3 = ['size' => 'lg'];
        $res3 = '<button class="btn btn-danger btn-lg" type="button"></button>';
        $this->assertEquals($res3, $obj->bootstrapButtonDangerFunction($arg3));

        $arg4 = ['block' => true];
        $res4 = '<button class="btn btn-danger btn-block" type="button"></button>';
        $this->assertEquals($res4, $obj->bootstrapButtonDangerFunction($arg4));

        $arg5 = ['active' => true];
        $res5 = '<button class="btn btn-danger active" type="button"></button>';
        $this->assertEquals($res5, $obj->bootstrapButtonDangerFunction($arg5));

        $arg6 = ['disable' => true];
        $res6 = '<button class="btn btn-danger" type="button" disabled="disabled"></button>';
        $this->assertEquals($res6, $obj->bootstrapButtonDangerFunction($arg6));

        $arg7 = ['icon' => 'home'];
        $res7 = '<button class="btn btn-danger" type="button"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></button>';
        $this->assertEquals($res7, $obj->bootstrapButtonDangerFunction($arg7));

        $arg9 = ['content' => 'content', 'title' => 'title', 'size' => 'lg', 'block' => true, 'active' => true, 'disable' => true, 'icon' => 'home', 'color' => 'black'];
        $res9 = '<button class="btn btn-danger btn-block btn-lg active" title="title" type="button" data-toggle="tooltip" data-placement="top" disabled="disabled"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> content</button>';
        $this->assertEquals($res9, $obj->bootstrapButtonDangerFunction($arg9));
    }

    /**
     * Tests the bootstrapButtonDefaultFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testBootstrapButtonDefaultFunction() {

        $obj = new ButtonComponentTwigExtension();

        $arg0 = [];
        $res0 = '<button class="btn btn-default" type="button"></button>';
        $this->assertEquals($res0, $obj->bootstrapButtonDefaultFunction($arg0));
    }

    /**
     * Tests the bootstrapButtonInfoFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testBootstrapButtonInfoFunction() {

        $obj = new ButtonComponentTwigExtension();

        $arg0 = [];
        $res0 = '<button class="btn btn-info" type="button"></button>';
        $this->assertEquals($res0, $obj->bootstrapButtonInfoFunction($arg0));
    }

    /**
     * Tests the bootstrapButtonLinkFilter() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testBootstrapButtonLinkFilter() {

        $obj = new ButtonComponentTwigExtension();

        $arg0 = [];
        $res0 = '<a class="btn btn-danger" href="javascript: void(0);"></a>';
        $this->assertEquals($res0, $obj->bootstrapButtonLinkFilter($obj->bootstrapButtonDangerFunction($arg0)));

        $arg1 = [];
        $res1 = '<a class="btn btn-danger" href="https://github.com/"></a>';
        $this->assertEquals($res1, $obj->bootstrapButtonLinkFilter($obj->bootstrapButtonDangerFunction($arg1), 'https://github.com/'));

        $arg9 = [];
        $res9 = '<a class="btn btn-danger" href="https://github.com/" target="_blank"></a>';
        $this->assertEquals($res9, $obj->bootstrapButtonLinkFilter($obj->bootstrapButtonDangerFunction($arg9), 'https://github.com/', '_blank'));
    }

    /**
     * Tests the bootstrapButtonLinkFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testBootstrapButtonLinkFunction() {

        $obj = new ButtonComponentTwigExtension();

        $arg0 = [];
        $res0 = '<button class="btn btn-link" type="button"></button>';
        $this->assertEquals($res0, $obj->bootstrapButtonLinkFunction($arg0));
    }

    /**
     * Tests the bootstrapButtonPrimaryFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testBootstrapButtonPrimaryFunction() {

        $obj = new ButtonComponentTwigExtension();

        $arg0 = [];
        $res0 = '<button class="btn btn-primary" type="button"></button>';
        $this->assertEquals($res0, $obj->bootstrapButtonPrimaryFunction($arg0));
    }

    /**
     * Tests the bootstrapButtonSubmitFilter() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testBootstrapButtonSubmitFilter() {

        $obj = new ButtonComponentTwigExtension();

        $arg0 = [];
        $res0 = '<button class="btn btn-danger" type="submit"></button>';
        $this->assertEquals($res0, $obj->bootstrapButtonSubmitFilter($obj->bootstrapButtonDangerFunction($arg0)));
    }

    /**
     * Tests the bootstrapButtonSuccessFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testBootstrapButtonSuccessFunction() {

        $obj = new ButtonComponentTwigExtension();

        $arg0 = [];
        $res0 = '<button class="btn btn-success" type="button"></button>';
        $this->assertEquals($res0, $obj->bootstrapButtonSuccessFunction($arg0));
    }

    /**
     * Tests the bootstrapButtonSuccessFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testBootstrapButtonWarningFunction() {

        $obj = new ButtonComponentTwigExtension();

        $arg0 = [];
        $res0 = '<button class="btn btn-warning" type="button"></button>';
        $this->assertEquals($res0, $obj->bootstrapButtonWarningFunction($arg0));
    }

}
