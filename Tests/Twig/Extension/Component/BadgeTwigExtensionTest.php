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
     * Tests the bootstrapBadgeFunction() method.
     *
     * @return void
     */
    public function testBootstrapBadgeFunction() {

        $obj = new BadgeTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content"];
        $res = '<span class="badge">content</span>';
        $this->assertEquals($res, $obj->bootstrapBadgeFunction($arg));
    }

    /**
     * Tests the bootstrapBadgeFunction() method.
     *
     * @return void
     */
    public function testBootstrapBadgeFunctionWithoutArguments() {

        $obj = new BadgeTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<span class="badge"></span>';
        $this->assertEquals($res, $obj->bootstrapBadgeFunction($arg));
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $this->assertEquals("wbw.bootstrap.twig.extension.component.badge", BadgeTwigExtension::SERVICE_NAME);

        $obj = new BadgeTwigExtension($this->twigEnvironment);

        $this->assertSame($this->twigEnvironment, $obj->getTwigEnvironment());
    }

    /**
     * Tests the getFilters() method.
     *
     * @return void
     */
    public function testGetFilters() {

        $obj = new BadgeTwigExtension($this->twigEnvironment);

        $res = $obj->getFilters();
        $this->assertCount(0, $res);
    }

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions() {

        $obj = new BadgeTwigExtension($this->twigEnvironment);

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
}
