<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\Component;

use Twig\Node\Node;
use Twig\TwigFilter;
use Twig\TwigFunction;
use WBW\Bundle\BootstrapBundle\Tests\AbstractTestCase;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Component\ProgressBarTwigExtension;

/**
 * Progress bar Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\Component
 */
class ProgressBarTwigExtensionTest extends AbstractTestCase {

    /**
     * Tests bootstrapMultipleBars()
     *
     * @return void
     */
    public function testBootstrapMultipleBars(): void {

        $obj = new ProgressBarTwigExtension($this->twigEnvironment);

        $arg = [
            $obj->bootstrapProgressBarBasicFunction([]),
            $obj->bootstrapProgressBarBasicFunction([]),
        ];
        $res = '<div class="progress"><div class="progress-bar" style="width: 50%;" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">50%</span></div><div class="progress-bar" style="width: 50%;" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">50%</span></div></div>';

        $this->assertEquals($res, $obj->bootstrapMultipleBars($arg));
    }

    /**
     * Tests bootstrapProgressBarBasicFunction()
     *
     * @return void
     */
    public function testBootstrapProgressBarBasicFunction(): void {

        $obj = new ProgressBarTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content", "value" => 75, "min" => 1, "max" => 150, "striped" => true, "animated" => true];
        $res = '<div class="progress"><div class="progress-bar progress-bar-striped active" style="width: 75%;" role="progressbar" aria-valuenow="75" aria-valuemin="1" aria-valuemax="150">content</div></div>';

        $this->assertEquals($res, $obj->bootstrapProgressBarBasicFunction($arg));
    }

    /**
     * Tests bootstrapProgressBarBasicFunction()
     *
     * @return void
     */
    public function testBootstrapProgressBarBasicFunctionWithoutArguments(): void {

        $obj = new ProgressBarTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<div class="progress"><div class="progress-bar" style="width: 50%;" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">50%</span></div></div>';

        $this->assertEquals($res, $obj->bootstrapProgressBarBasicFunction($arg));
    }

    /**
     * Tests bootstrapProgressBarDangerFunction()
     *
     * @return void
     */
    public function testBootstrapProgressBarDangerFunction(): void {

        $obj = new ProgressBarTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content", "value" => 75, "min" => 1, "max" => 150, "striped" => true, "animated" => true];
        $res = '<div class="progress"><div class="progress-bar bg-danger progress-bar-striped active" style="width: 75%;" role="progressbar" aria-valuenow="75" aria-valuemin="1" aria-valuemax="150">content</div></div>';

        $this->assertEquals($res, $obj->bootstrapProgressBarDangerFunction($arg));
    }

    /**
     * Tests bootstrapProgressBarDangerFunction()
     *
     * @return void
     */
    public function testBootstrapProgressBarDangerFunctionWithBootstrap3(): void {

        $obj = new ProgressBarTwigExtension($this->twigEnvironment);
        $obj->setVersion(3);

        $arg = ["content" => "content", "value" => 75, "min" => 1, "max" => 150, "striped" => true, "animated" => true];
        $res = '<div class="progress"><div class="progress-bar progress-bar-danger progress-bar-striped active" style="width: 75%;" role="progressbar" aria-valuenow="75" aria-valuemin="1" aria-valuemax="150">content</div></div>';

        $this->assertEquals($res, $obj->bootstrapProgressBarDangerFunction($arg));
    }

    /**
     * Tests bootstrapProgressBarDangerFunction()
     *
     * @return void
     */
    public function testBootstrapProgressBarDangerFunctionWithoutArguments(): void {

        $obj = new ProgressBarTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<div class="progress"><div class="progress-bar bg-danger" style="width: 50%;" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">50%</span></div></div>';

        $this->assertEquals($res, $obj->bootstrapProgressBarDangerFunction($arg));
    }

    /**
     * Tests bootstrapProgressBarInfoFunction()
     *
     * @return void
     */
    public function testBootstrapProgressBarInfoFunction(): void {

        $obj = new ProgressBarTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content", "value" => 75, "min" => 1, "max" => 150, "striped" => true, "animated" => true];
        $res = '<div class="progress"><div class="progress-bar bg-info progress-bar-striped active" style="width: 75%;" role="progressbar" aria-valuenow="75" aria-valuemin="1" aria-valuemax="150">content</div></div>';

        $this->assertEquals($res, $obj->bootstrapProgressBarInfoFunction($arg));
    }

    /**
     * Tests bootstrapProgressBarInfoFunction()
     *
     * @return void
     */
    public function testBootstrapProgressBarInfoFunctionWithBootstrap3(): void {

        $obj = new ProgressBarTwigExtension($this->twigEnvironment);
        $obj->setVersion(3);

        $arg = ["content" => "content", "value" => 75, "min" => 1, "max" => 150, "striped" => true, "animated" => true];
        $res = '<div class="progress"><div class="progress-bar progress-bar-info progress-bar-striped active" style="width: 75%;" role="progressbar" aria-valuenow="75" aria-valuemin="1" aria-valuemax="150">content</div></div>';

        $this->assertEquals($res, $obj->bootstrapProgressBarInfoFunction($arg));
    }

    /**
     * Tests bootstrapProgressBarInfoFunction()
     *
     * @return void
     */
    public function testBootstrapProgressBarInfoFunctionWithoutArguments(): void {

        $obj = new ProgressBarTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<div class="progress"><div class="progress-bar bg-info" style="width: 50%;" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">50%</span></div></div>';

        $this->assertEquals($res, $obj->bootstrapProgressBarInfoFunction($arg));
    }

    /**
     * Tests bootstrapProgressBarSuccessFunction()
     *
     * @return void
     */
    public function testBootstrapProgressBarSuccessFunction(): void {

        $obj = new ProgressBarTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content", "value" => 75, "min" => 1, "max" => 150, "striped" => true, "animated" => true];
        $res = '<div class="progress"><div class="progress-bar bg-success progress-bar-striped active" style="width: 75%;" role="progressbar" aria-valuenow="75" aria-valuemin="1" aria-valuemax="150">content</div></div>';

        $this->assertEquals($res, $obj->bootstrapProgressBarSuccessFunction($arg));
    }

    /**
     * Tests bootstrapProgressBarSuccessFunction()
     *
     * @return void
     */
    public function testBootstrapProgressBarSuccessFunctionWithBootstrap3(): void {

        $obj = new ProgressBarTwigExtension($this->twigEnvironment);
        $obj->setVersion(3);

        $arg = ["content" => "content", "value" => 75, "min" => 1, "max" => 150, "striped" => true, "animated" => true];
        $res = '<div class="progress"><div class="progress-bar progress-bar-success progress-bar-striped active" style="width: 75%;" role="progressbar" aria-valuenow="75" aria-valuemin="1" aria-valuemax="150">content</div></div>';

        $this->assertEquals($res, $obj->bootstrapProgressBarSuccessFunction($arg));
    }

    /**
     * Tests bootstrapProgressBarSuccessFunction()
     *
     * @return void
     */
    public function testBootstrapProgressBarSuccessFunctionWithoutArguments(): void {

        $obj = new ProgressBarTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<div class="progress"><div class="progress-bar bg-success" style="width: 50%;" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">50%</span></div></div>';

        $this->assertEquals($res, $obj->bootstrapProgressBarSuccessFunction($arg));
    }

    /**
     * Tests bootstrapProgressBarWarningFunction()
     *
     * @return void
     */
    public function testBootstrapProgressBarWarningFunction(): void {

        $obj = new ProgressBarTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content", "value" => 75, "min" => 1, "max" => 150, "striped" => true, "animated" => true];
        $res = '<div class="progress"><div class="progress-bar bg-warning progress-bar-striped active" style="width: 75%;" role="progressbar" aria-valuenow="75" aria-valuemin="1" aria-valuemax="150">content</div></div>';

        $this->assertEquals($res, $obj->bootstrapProgressBarWarningFunction($arg));
    }

    /**
     * Tests bootstrapProgressBarWarningFunction()
     *
     * @return void
     */
    public function testBootstrapProgressBarWarningFunctionWithBootstrap3(): void {

        $obj = new ProgressBarTwigExtension($this->twigEnvironment);
        $obj->setVersion(3);

        $arg = ["content" => "content", "value" => 75, "min" => 1, "max" => 150, "striped" => true, "animated" => true];
        $res = '<div class="progress"><div class="progress-bar progress-bar-warning progress-bar-striped active" style="width: 75%;" role="progressbar" aria-valuenow="75" aria-valuemin="1" aria-valuemax="150">content</div></div>';

        $this->assertEquals($res, $obj->bootstrapProgressBarWarningFunction($arg));
    }

    /**
     * Tests bootstrapProgressBarWarningFunction()
     *
     * @return void
     */
    public function testBootstrapProgressBarWarningFunctionWithoutArguments(): void {

        $obj = new ProgressBarTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<div class="progress"><div class="progress-bar bg-warning" style="width: 50%;" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">50%</span></div></div>';

        $this->assertEquals($res, $obj->bootstrapProgressBarWarningFunction($arg));
    }

    /**
     * Tests getFilters()
     *
     * @return void
     */
    public function testGetFilters(): void {

        $obj = new ProgressBarTwigExtension($this->twigEnvironment);

        $res = $obj->getFilters();
        $this->assertCount(2, $res);

        $i = -1;

        $this->assertInstanceOf(TwigFilter::class, $res[++$i]);
        $this->assertEquals("bootstrapMultipleBars", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapMultipleBars"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFilter::class, $res[++$i]);
        $this->assertEquals("bsMultipleBars", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapMultipleBars"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));
    }

    /**
     * Tests getFunctions()
     *
     * @return void
     */
    public function testGetFunctions(): void {

        $obj = new ProgressBarTwigExtension($this->twigEnvironment);

        $res = $obj->getFunctions();
        $this->assertCount(12, $res);

        $i = -1;

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bootstrapProgressBarBasic", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapProgressBarBasicFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bsProgressBarBasic", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapProgressBarBasicFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bootstrapProgressBarDanger", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapProgressBarDangerFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bsProgressBarDanger", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapProgressBarDangerFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bootstrapProgressBarInfo", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapProgressBarInfoFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bsProgressBarInfo", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapProgressBarInfoFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bootstrapProgressBarSuccess", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapProgressBarSuccessFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bsProgressBarSuccess", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapProgressBarSuccessFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bootstrapProgressBarWarning", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapProgressBarWarningFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bsProgressBarWarning", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapProgressBarWarningFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bootstrapMultipleBars", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapMultipleBars"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bsMultipleBars", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapMultipleBars"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw.bootstrap.twig.extension.component.progress_bar", ProgressBarTwigExtension::SERVICE_NAME);

        $obj = new ProgressBarTwigExtension($this->twigEnvironment);

        $this->assertSame($this->twigEnvironment, $obj->getTwigEnvironment());
    }
}
