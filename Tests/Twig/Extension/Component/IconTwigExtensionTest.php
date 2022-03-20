<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\Component;

use Twig\Node\Node;
use Twig\TwigFunction;
use WBW\Bundle\BootstrapBundle\Tests\AbstractTestCase;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Component\IconTwigExtension;

/**
 * Icon Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\Component
 */
class IconTwigExtensionTest extends AbstractTestCase {

    /**
     * Tests bootstrapIconFunction()
     *
     * @return void
     */
    public function testBootstrapIconFunction(): void {

        $obj = new IconTwigExtension($this->twigEnvironment);

        $arg = ["name" => "asterisk"];
        $res = '<i class="bi bi-asterisk"></i>';

        $this->assertEquals($res, $obj->bootstrapIconFunction($arg));
    }

    /**
     * Tests bootstrapIconFunction()
     *
     * @return void
     */
    public function testBootstrapIconFunctionWithoutArguments(): void {

        $obj = new IconTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<i class="bi bi-house"></i>';

        $this->assertEquals($res, $obj->bootstrapIconFunction($arg));
    }

    /**
     * Tests getFilters()
     *
     * @return void
     */
    public function testGetFilters(): void {

        $obj = new IconTwigExtension($this->twigEnvironment);

        $res = $obj->getFilters();
        $this->assertCount(0, $res);
    }

    /**
     * Tests getFunctions()
     *
     * @return void
     */
    public function testGetFunctions(): void {

        $obj = new IconTwigExtension($this->twigEnvironment);

        $res = $obj->getFunctions();
        $this->assertCount(2, $res);

        $i = -1;

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bootstrapIcon", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapIconFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bsIcon", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapIconFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw.bootstrap.twig.extension.component.icon", IconTwigExtension::SERVICE_NAME);

        $obj = new IconTwigExtension($this->twigEnvironment);

        $this->assertSame($this->twigEnvironment, $obj->getTwigEnvironment());
    }
}
