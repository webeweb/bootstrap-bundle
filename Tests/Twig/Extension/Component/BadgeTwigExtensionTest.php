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

use Twig\Extension\ExtensionInterface;
use Twig\Node\Node;
use Twig\TwigFilter;
use Twig\TwigFunction;
use WBW\Bundle\BootstrapBundle\Tests\AbstractTestCase;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Component\BadgeTwigExtension;

/**
 * Badge Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\Component
 */
class BadgeTwigExtensionTest extends AbstractTestCase {

    /**
     * Tests bootstrapBadgeDangerFunction()
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
     * Tests bootstrapBadgeDarkFunction()
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
     * Tests bootstrapBadgeFunction()
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
     * Tests bootstrapBadgeFunction()
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
     * Tests bootstrapBadgeInfoFunction()
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
     * Tests bootstrapBadgeLightFunction()
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
     * Tests bootstrapBadgeLinkFilter()
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
     * Tests bootstrapBadgePrimaryFunction()
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
     * Tests bootstrapBadgeSecondaryFunction()
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
     * Tests bootstrapBadgeSuccessFunction()
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
     * Tests bootstrapBadgeWarningFunction()
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
     * Tests getFilters()
     *
     * @return void
     */
    public function testGetFilters(): void {

        $obj = new BadgeTwigExtension($this->twigEnvironment);

        $res = $obj->getFilters();
        $this->assertCount(2, $res);

        $i = -1;

        $this->assertInstanceOf(TwigFilter::class, $res[++$i]);
        $this->assertEquals("bootstrapBadgeLink", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapBadgeLinkFilter"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFilter::class, $res[++$i]);
        $this->assertEquals("bsBadgeLink", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapBadgeLinkFilter"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));
    }

    /**
     * Tests getFunctions()
     *
     * @return void
     */
    public function testGetFunctions(): void {

        $obj = new BadgeTwigExtension($this->twigEnvironment);

        $res = $obj->getFunctions();
        $this->assertCount(16, $res);

        $i = -1;

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bootstrapBadgeDanger", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapBadgeDangerFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bsBadgeDanger", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapBadgeDangerFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bootstrapBadgeDark", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapBadgeDarkFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bsBadgeDark", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapBadgeDarkFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bootstrapBadgeInfo", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapBadgeInfoFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bsBadgeInfo", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapBadgeInfoFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bootstrapBadgeLight", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapBadgeLightFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bsBadgeLight", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapBadgeLightFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bootstrapBadgePrimary", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapBadgePrimaryFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bsBadgePrimary", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapBadgePrimaryFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bootstrapBadgeSecondary", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapBadgeSecondaryFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bsBadgeSecondary", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapBadgeSecondaryFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bootstrapBadgeSuccess", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapBadgeSuccessFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bsBadgeSuccess", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapBadgeSuccessFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bootstrapBadgeWarning", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapBadgeWarningFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bsBadgeWarning", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapBadgeWarningFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));
    }

    /**
     * Tests getFunctions()
     *
     * @return void
     */
    public function testGetFunctionsWithBootstrap3(): void {

        $obj = new BadgeTwigExtension($this->twigEnvironment);
        $obj->setVersion(3);

        $res = $obj->getFunctions();
        $this->assertCount(2, $res);

        $i = -1;

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bootstrapBadge", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapBadgeFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bsBadge", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapBadgeFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw.bootstrap.twig.extension.component.badge", BadgeTwigExtension::SERVICE_NAME);

        $obj = new BadgeTwigExtension($this->twigEnvironment);

        $this->assertInstanceOf(ExtensionInterface::class, $obj);

        $this->assertSame($this->twigEnvironment, $obj->getTwigEnvironment());
    }
}
