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
use WBW\Bundle\BootstrapBundle\Twig\Extension\Component\NavTwigExtension;

/**
 * Nav Twig extension text.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\Component
 */
class NavTwigExtensionTest extends AbstractTestCase {

    /**
     * Items.
     *
     * @var array
     */
    private $items;

    /**
     * {@inheritDoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set the Items mock.
        $this->items = [];

        $this->items[] = '<a href="#">Home</a>';
        $this->items[] = '<a href="#">Profile</a>';
        $this->items[] = '<a href="#">Message</a>';
    }

    /**
     * Tests bootstrapNavsJustifiedFunction()
     *
     * @return void
     */
    public function testBootstrapNavsJustified(): void {

        $obj = new NavTwigExtension($this->twigEnvironment);

        $arg = ["items" => $this->items];
        $res = file_get_contents(__DIR__ . "/NavTwigExtensionTest.testBootstrapNavsJustified.html.txt");

        $this->assertEquals($res, $obj->bootstrapNavsJustified($arg) . "\n");
    }

    /**
     * Tests bootstrapNavsPillsFunction()
     *
     * @return void
     */
    public function testBootstrapNavsPills(): void {

        $obj = new NavTwigExtension($this->twigEnvironment);

        $arg = ["items" => $this->items, "stacked" => true];
        $res = file_get_contents(__DIR__ . "/NavTwigExtensionTest.testBootstrapNavsPills.html.txt");

        $this->assertEquals($res, $obj->bootstrapNavsPills($arg) . "\n");
    }

    /**
     * Tests bootstrapNavsPillsFunction()
     *
     * @return void
     */
    public function testBootstrapNavsPillsWithItems(): void {

        $obj = new NavTwigExtension($this->twigEnvironment);

        $arg = ["items" => $this->items];
        $res = file_get_contents(__DIR__ . "/NavTwigExtensionTest.testBootstrapNavsPillsWithItems.html.txt");

        $this->assertEquals($res, $obj->bootstrapNavsPills($arg) . "\n");
    }

    /**
     * Tests bootstrapNavsTabsFunction()
     *
     * @return void
     */
    public function testBootstrapNavsTabs(): void {

        $obj = new NavTwigExtension($this->twigEnvironment);

        $arg = ["items" => $this->items];
        $res = file_get_contents(__DIR__ . "/NavTwigExtensionTest.testBootstrapNavsTabs.html.txt");

        $this->assertEquals($res, $obj->bootstrapNavsTabs($arg) . "\n");
    }

    /**
     * Tests getFilters()
     *
     * @return void
     */
    public function testGetFilters(): void {

        $obj = new NavTwigExtension($this->twigEnvironment);

        $res = $obj->getFilters();
        $this->assertCount(0, $res);
    }

    /**
     * Tests getFunctions()
     *
     * @return void
     */
    public function testGetFunctions(): void {

        $obj = new NavTwigExtension($this->twigEnvironment);

        $res = $obj->getFunctions();
        $this->assertCount(6, $res);

        $i = -1;

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bootstrapNavsJustified", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapNavsJustifiedFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bsNavsJustified", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapNavsJustifiedFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bootstrapNavsPills", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapNavsPillsFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bsNavsPills", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapNavsPillsFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bootstrapNavsTabs", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapNavsTabsFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bsNavsTabs", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapNavsTabsFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw.bootstrap.twig.extension.component.nav", NavTwigExtension::SERVICE_NAME);

        $obj = new NavTwigExtension($this->twigEnvironment);

        $this->assertSame($this->twigEnvironment, $obj->getTwigEnvironment());
    }
}
