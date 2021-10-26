<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\Component;

use Twig\Node\Node;
use Twig\TwigFilter;
use Twig\TwigFunction;
use WBW\Bundle\BootstrapBundle\Tests\AbstractTestCase;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Component\BadgeTwigExtension;

/**
 * Badge Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\Component
 */
class BadgeTwigExtensionTest extends AbstractTestCase {

    /**
     * Tests the bootstrapBadgeDangerFunction() method.
     *
     * @return void
     */
    public function testBootstrapBadgeDangerFunction(): void {

        $obj = new BadgeTwigExtension($this->twigEnvironment);
        $obj->setVersion(4);

        $arg = ["content" => "content", "pill" => true];
        $res = '<span class="badge badge-danger badge-pill">content</span>';

        $this->assertEquals($res, $obj->bootstrapBadgeDangerFunction($arg));
    }

    /**
     * Tests the bootstrapBadgeDarkFunction() method.
     *
     * @return void
     */
    public function testBootstrapBadgeDarkFunction(): void {

        $obj = new BadgeTwigExtension($this->twigEnvironment);
        $obj->setVersion(4);

        $arg = ["content" => "content", "pill" => true];
        $res = '<span class="badge badge-dark badge-pill">content</span>';

        $this->assertEquals($res, $obj->bootstrapBadgeDarkFunction($arg));
    }

    /**
     * Tests the bootstrapBadgeFunction() method.
     *
     * @return void
     */
    public function testBootstrapBadgeFunction(): void {

        $obj = new BadgeTwigExtension($this->twigEnvironment);
        $obj->setVersion(4);

        $arg = ["content" => "content", "pill" => true];
        $res = '<span class="badge badge-pill">content</span>';

        $this->assertEquals($res, $obj->bootstrapBadgeFunction($arg));
    }

    /**
     * Tests the bootstrapBadgeFunction() method.
     *
     * @return void
     */
    public function testBootstrapBadgeFunctionWithoutArguments(): void {

        $obj = new BadgeTwigExtension($this->twigEnvironment);
        $obj->setVersion(4);

        $arg = [];
        $res = '<span class="badge"></span>';

        $this->assertEquals($res, $obj->bootstrapBadgeFunction($arg));
    }

    /**
     * Tests the bootstrapBadgeInfoFunction() method.
     *
     * @return void
     */
    public function testBootstrapBadgeInfoFunction(): void {

        $obj = new BadgeTwigExtension($this->twigEnvironment);
        $obj->setVersion(4);

        $arg = ["content" => "content", "pill" => true];
        $res = '<span class="badge badge-info badge-pill">content</span>';

        $this->assertEquals($res, $obj->bootstrapBadgeInfoFunction($arg));
    }

    /**
     * Tests the bootstrapBadgeLightFunction() method.
     *
     * @return void
     */
    public function testBootstrapBadgeLightFunction(): void {

        $obj = new BadgeTwigExtension($this->twigEnvironment);
        $obj->setVersion(4);

        $arg = ["content" => "content", "pill" => true];
        $res = '<span class="badge badge-light badge-pill">content</span>';

        $this->assertEquals($res, $obj->bootstrapBadgeLightFunction($arg));
    }

    /**
     * Tests the bootstrapBadgeLinkFilter() method.
     *
     * @return void
     */
    public function testBootstrapBadgeLinkFilter(): void {

        $obj = new BadgeTwigExtension($this->twigEnvironment);
        $obj->setVersion(4);

        $arg = [];
        $res = '<a href="https://github.com/" target="_blank" class="badge badge-danger"></a>';

        $this->assertEquals($res, $obj->bootstrapBadgeLinkFilter($obj->bootstrapBadgeDangerFunction($arg), "https://github.com/", "_blank"));
    }

    /**
     * Tests the bootstrapBadgePrimaryFunction() method.
     *
     * @return void
     */
    public function testBootstrapBadgePrimaryFunction(): void {

        $obj = new BadgeTwigExtension($this->twigEnvironment);
        $obj->setVersion(4);

        $arg = ["content" => "content", "pill" => true];
        $res = '<span class="badge badge-primary badge-pill">content</span>';

        $this->assertEquals($res, $obj->bootstrapBadgePrimaryFunction($arg));
    }

    /**
     * Tests the bootstrapBadgeSecondaryFunction() method.
     *
     * @return void
     */
    public function testBootstrapBadgeSecondaryFunction(): void {

        $obj = new BadgeTwigExtension($this->twigEnvironment);
        $obj->setVersion(4);

        $arg = ["content" => "content", "pill" => true];
        $res = '<span class="badge badge-secondary badge-pill">content</span>';

        $this->assertEquals($res, $obj->bootstrapBadgeSecondaryFunction($arg));
    }

    /**
     * Tests the bootstrapBadgeSuccessFunction() method.
     *
     * @return void
     */
    public function testBootstrapBadgeSuccessFunction(): void {

        $obj = new BadgeTwigExtension($this->twigEnvironment);
        $obj->setVersion(4);

        $arg = ["content" => "content", "pill" => true];
        $res = '<span class="badge badge-success badge-pill">content</span>';

        $this->assertEquals($res, $obj->bootstrapBadgeSuccessFunction($arg));
    }

    /**
     * Tests the bootstrapBadgeWarningFunction() method.
     *
     * @return void
     */
    public function testBootstrapBadgeWarningFunction(): void {

        $obj = new BadgeTwigExtension($this->twigEnvironment);
        $obj->setVersion(4);

        $arg = ["content" => "content", "pill" => true];
        $res = '<span class="badge badge-warning badge-pill">content</span>';

        $this->assertEquals($res, $obj->bootstrapBadgeWarningFunction($arg));
    }

    /**
     * Tests the getFilters() method.
     *
     * @return void
     */
    public function testGetFilters(): void {

        $obj = new BadgeTwigExtension($this->twigEnvironment);

        $res = $obj->getFilters();
        $this->assertCount(2, $res);

        $this->assertInstanceOf(TwigFilter::class, $res[0]);
        $this->assertEquals("bootstrapBadgeLink", $res[0]->getName());
        $this->assertEquals([$obj, "bootstrapBadgeLinkFilter"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFilter::class, $res[1]);
        $this->assertEquals("bsBadgeLink", $res[1]->getName());
        $this->assertEquals([$obj, "bootstrapBadgeLinkFilter"], $res[1]->getCallable());
        $this->assertEquals(["html"], $res[1]->getSafe(new Node()));
    }

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions(): void {

        $obj = new BadgeTwigExtension($this->twigEnvironment);

        $res = $obj->getFunctions();
        $this->assertCount(16, $res);

        $this->assertInstanceOf(TwigFunction::class, $res[0]);
        $this->assertEquals("bootstrapBadgeDanger", $res[0]->getName());
        $this->assertEquals([$obj, "bootstrapBadgeDangerFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[1]);
        $this->assertEquals("bsBadgeDanger", $res[1]->getName());
        $this->assertEquals([$obj, "bootstrapBadgeDangerFunction"], $res[1]->getCallable());
        $this->assertEquals(["html"], $res[1]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[2]);
        $this->assertEquals("bootstrapBadgeDark", $res[2]->getName());
        $this->assertEquals([$obj, "bootstrapBadgeDarkFunction"], $res[2]->getCallable());
        $this->assertEquals(["html"], $res[2]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[3]);
        $this->assertEquals("bsBadgeDark", $res[3]->getName());
        $this->assertEquals([$obj, "bootstrapBadgeDarkFunction"], $res[3]->getCallable());
        $this->assertEquals(["html"], $res[3]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[4]);
        $this->assertEquals("bootstrapBadgeInfo", $res[4]->getName());
        $this->assertEquals([$obj, "bootstrapBadgeInfoFunction"], $res[4]->getCallable());
        $this->assertEquals(["html"], $res[4]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[5]);
        $this->assertEquals("bsBadgeInfo", $res[5]->getName());
        $this->assertEquals([$obj, "bootstrapBadgeInfoFunction"], $res[5]->getCallable());
        $this->assertEquals(["html"], $res[5]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[6]);
        $this->assertEquals("bootstrapBadgeLight", $res[6]->getName());
        $this->assertEquals([$obj, "bootstrapBadgeLightFunction"], $res[6]->getCallable());
        $this->assertEquals(["html"], $res[6]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[7]);
        $this->assertEquals("bsBadgeLight", $res[7]->getName());
        $this->assertEquals([$obj, "bootstrapBadgeLightFunction"], $res[7]->getCallable());
        $this->assertEquals(["html"], $res[7]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[8]);
        $this->assertEquals("bootstrapBadgePrimary", $res[8]->getName());
        $this->assertEquals([$obj, "bootstrapBadgePrimaryFunction"], $res[8]->getCallable());
        $this->assertEquals(["html"], $res[8]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[9]);
        $this->assertEquals("bsBadgePrimary", $res[9]->getName());
        $this->assertEquals([$obj, "bootstrapBadgePrimaryFunction"], $res[9]->getCallable());
        $this->assertEquals(["html"], $res[9]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[10]);
        $this->assertEquals("bootstrapBadgeSecondary", $res[10]->getName());
        $this->assertEquals([$obj, "bootstrapBadgeSecondaryFunction"], $res[10]->getCallable());
        $this->assertEquals(["html"], $res[10]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[11]);
        $this->assertEquals("bsBadgeSecondary", $res[11]->getName());
        $this->assertEquals([$obj, "bootstrapBadgeSecondaryFunction"], $res[11]->getCallable());
        $this->assertEquals(["html"], $res[11]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[12]);
        $this->assertEquals("bootstrapBadgeSuccess", $res[12]->getName());
        $this->assertEquals([$obj, "bootstrapBadgeSuccessFunction"], $res[12]->getCallable());
        $this->assertEquals(["html"], $res[12]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[13]);
        $this->assertEquals("bsBadgeSuccess", $res[13]->getName());
        $this->assertEquals([$obj, "bootstrapBadgeSuccessFunction"], $res[13]->getCallable());
        $this->assertEquals(["html"], $res[13]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[14]);
        $this->assertEquals("bootstrapBadgeWarning", $res[14]->getName());
        $this->assertEquals([$obj, "bootstrapBadgeWarningFunction"], $res[14]->getCallable());
        $this->assertEquals(["html"], $res[14]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[15]);
        $this->assertEquals("bsBadgeWarning", $res[15]->getName());
        $this->assertEquals([$obj, "bootstrapBadgeWarningFunction"], $res[15]->getCallable());
        $this->assertEquals(["html"], $res[15]->getSafe(new Node()));
    }

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctionsWithBootstrap3(): void {

        $obj = new BadgeTwigExtension($this->twigEnvironment);
        $obj->setVersion(3);

        $res = $obj->getFunctions();
        $this->assertCount(2, $res);

        $this->assertInstanceOf(TwigFunction::class, $res[0]);
        $this->assertEquals("bootstrapBadge", $res[0]->getName());
        $this->assertEquals([$obj, "bootstrapBadgeFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[1]);
        $this->assertEquals("bsBadge", $res[1]->getName());
        $this->assertEquals([$obj, "bootstrapBadgeFunction"], $res[1]->getCallable());
        $this->assertEquals(["html"], $res[1]->getSafe(new Node()));
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw.bootstrap.twig.extension.component.badge", BadgeTwigExtension::SERVICE_NAME);

        $obj = new BadgeTwigExtension($this->twigEnvironment);

        $this->assertSame($this->twigEnvironment, $obj->getTwigEnvironment());
    }
}
