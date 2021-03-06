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
     * Tests the bootstrapMultipleBars() method.
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
     * Tests the bootstrapProgressBarBasicFunction() method.
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
     * Tests the bootstrapProgressBarBasicFunction() method.
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
     * Tests the bootstrapProgressBarDangerFunction() method.
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
     * Tests the bootstrapProgressBarDangerFunction() method.
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
     * Tests the bootstrapProgressBarDangerFunction() method.
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
     * Tests the bootstrapProgressBarInfoFunction() method.
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
     * Tests the bootstrapProgressBarInfoFunction() method.
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
     * Tests the bootstrapProgressBarInfoFunction() method.
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
     * Tests the bootstrapProgressBarSuccessFunction() method.
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
     * Tests the bootstrapProgressBarSuccessFunction() method.
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
     * Tests the bootstrapProgressBarSuccessFunction() method.
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
     * Tests the bootstrapProgressBarWarningFunction() method.
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
     * Tests the bootstrapProgressBarWarningFunction() method.
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
     * Tests the bootstrapProgressBarWarningFunction() method.
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
     * Tests the getFilters() method.
     *
     * @return void
     */
    public function testGetFilters(): void {

        $obj = new ProgressBarTwigExtension($this->twigEnvironment);

        $res = $obj->getFilters();
        $this->assertCount(2, $res);

        $this->assertInstanceOf(TwigFilter::class, $res[0]);
        $this->assertEquals("bootstrapMultipleBars", $res[0]->getName());
        $this->assertEquals([$obj, "bootstrapMultipleBars"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFilter::class, $res[1]);
        $this->assertEquals("bsMultipleBars", $res[1]->getName());
        $this->assertEquals([$obj, "bootstrapMultipleBars"], $res[1]->getCallable());
        $this->assertEquals(["html"], $res[1]->getSafe(new Node()));
    }

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions(): void {

        $obj = new ProgressBarTwigExtension($this->twigEnvironment);

        $res = $obj->getFunctions();
        $this->assertCount(12, $res);

        $this->assertInstanceOf(TwigFunction::class, $res[0]);
        $this->assertEquals("bootstrapProgressBarBasic", $res[0]->getName());
        $this->assertEquals([$obj, "bootstrapProgressBarBasicFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[1]);
        $this->assertEquals("bsProgressBarBasic", $res[1]->getName());
        $this->assertEquals([$obj, "bootstrapProgressBarBasicFunction"], $res[1]->getCallable());
        $this->assertEquals(["html"], $res[1]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[2]);
        $this->assertEquals("bootstrapProgressBarDanger", $res[2]->getName());
        $this->assertEquals([$obj, "bootstrapProgressBarDangerFunction"], $res[2]->getCallable());
        $this->assertEquals(["html"], $res[2]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[3]);
        $this->assertEquals("bsProgressBarDanger", $res[3]->getName());
        $this->assertEquals([$obj, "bootstrapProgressBarDangerFunction"], $res[3]->getCallable());
        $this->assertEquals(["html"], $res[3]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[4]);
        $this->assertEquals("bootstrapProgressBarInfo", $res[4]->getName());
        $this->assertEquals([$obj, "bootstrapProgressBarInfoFunction"], $res[4]->getCallable());
        $this->assertEquals(["html"], $res[4]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[5]);
        $this->assertEquals("bsProgressBarInfo", $res[5]->getName());
        $this->assertEquals([$obj, "bootstrapProgressBarInfoFunction"], $res[5]->getCallable());
        $this->assertEquals(["html"], $res[5]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[6]);
        $this->assertEquals("bootstrapProgressBarSuccess", $res[6]->getName());
        $this->assertEquals([$obj, "bootstrapProgressBarSuccessFunction"], $res[6]->getCallable());
        $this->assertEquals(["html"], $res[6]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[7]);
        $this->assertEquals("bsProgressBarSuccess", $res[7]->getName());
        $this->assertEquals([$obj, "bootstrapProgressBarSuccessFunction"], $res[7]->getCallable());
        $this->assertEquals(["html"], $res[7]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[8]);
        $this->assertEquals("bootstrapProgressBarWarning", $res[8]->getName());
        $this->assertEquals([$obj, "bootstrapProgressBarWarningFunction"], $res[8]->getCallable());
        $this->assertEquals(["html"], $res[8]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[9]);
        $this->assertEquals("bsProgressBarWarning", $res[9]->getName());
        $this->assertEquals([$obj, "bootstrapProgressBarWarningFunction"], $res[9]->getCallable());
        $this->assertEquals(["html"], $res[9]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[10]);
        $this->assertEquals("bootstrapMultipleBars", $res[10]->getName());
        $this->assertEquals([$obj, "bootstrapMultipleBars"], $res[10]->getCallable());
        $this->assertEquals(["html"], $res[10]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[11]);
        $this->assertEquals("bsMultipleBars", $res[11]->getName());
        $this->assertEquals([$obj, "bootstrapMultipleBars"], $res[11]->getCallable());
        $this->assertEquals(["html"], $res[11]->getSafe(new Node()));
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw.bootstrap.twig.extension.component.progress_bar", ProgressBarTwigExtension::SERVICE_NAME);

        $obj = new ProgressBarTwigExtension($this->twigEnvironment);

        $this->assertSame($this->twigEnvironment, $obj->getTwigEnvironment());
    }
}
