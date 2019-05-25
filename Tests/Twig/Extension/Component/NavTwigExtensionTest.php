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
 * @author webeweb <https://github.com/webeweb/>
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
    protected function setUp() {
        parent::setUp();

        // Set the Items mock.
        $this->items = [];

        $this->items[] = "<a href=\"#\">Home</a>";
        $this->items[] = "<a href=\"#\">Profile</a>";
        $this->items[] = "<a href=\"#\">Message</a>";
    }

    /**
     * Tests the bootstrapNavsJustifiedFunction() method.
     *
     * @return void
     */
    public function testBootstrapNavsJustified() {

        $obj = new NavTwigExtension($this->twigEnvironment);

        $arg = ["items" => $this->items];
        $res = <<< EOT
<ul class="nav nav-justified">
<li role="presentation"><a href="#">Home</a></li>
<li role="presentation"><a href="#">Profile</a></li>
<li role="presentation"><a href="#">Message</a></li>
</ul>
EOT;
        $this->assertEquals($res, $obj->bootstrapNavsJustified($arg));
    }

    /**
     * Tests the bootstrapNavsPillsFunction() method.
     *
     * @return void
     */
    public function testBootstrapNavsPills() {

        $obj = new NavTwigExtension($this->twigEnvironment);

        $arg = ["items" => $this->items, "stacked" => true];
        $res = <<< EOT
<ul class="nav nav-pills nav-stacked">
<li role="presentation"><a href="#">Home</a></li>
<li role="presentation"><a href="#">Profile</a></li>
<li role="presentation"><a href="#">Message</a></li>
</ul>
EOT;
        $this->assertEquals($res, $obj->bootstrapNavsPills($arg));
    }

    /**
     * Tests the bootstrapNavsPillsFunction() method.
     *
     * @return void
     */
    public function testBootstrapNavsPillsWithItems() {

        $obj = new NavTwigExtension($this->twigEnvironment);

        $arg = ["items" => $this->items];
        $res = <<< EOT
<ul class="nav nav-pills">
<li role="presentation"><a href="#">Home</a></li>
<li role="presentation"><a href="#">Profile</a></li>
<li role="presentation"><a href="#">Message</a></li>
</ul>
EOT;
        $this->assertEquals($res, $obj->bootstrapNavsPills($arg));
    }

    /**
     * Tests the bootstrapNavsTabsFunction() method.
     *
     * @return void
     */
    public function testBootstrapNavsTabs() {

        $obj = new NavTwigExtension($this->twigEnvironment);

        $arg = ["items" => $this->items];
        $res = <<< EOT
<ul class="nav nav-tabs">
<li role="presentation"><a href="#">Home</a></li>
<li role="presentation"><a href="#">Profile</a></li>
<li role="presentation"><a href="#">Message</a></li>
</ul>
EOT;
        $this->assertEquals($res, $obj->bootstrapNavsTabs($arg));
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new NavTwigExtension($this->twigEnvironment);

        $this->assertEquals("wbw.bootstrap.twig.extension.component.nav", NavTwigExtension::SERVICE_NAME);
        $this->assertSame($this->twigEnvironment, $obj->getTwigEnvironment());
    }

    /**
     * Tests the getFilters() method.
     *
     * @return void
     */
    public function testGetFilters() {

        $obj = new NavTwigExtension($this->twigEnvironment);

        $res = $obj->getFilters();
        $this->assertCount(0, $res);
    }

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions() {

        $obj = new NavTwigExtension($this->twigEnvironment);

        $res = $obj->getFunctions();
        $this->assertCount(6, $res);

        $this->assertInstanceOf(TwigFunction::class, $res[0]);
        $this->assertEquals("bootstrapNavsJustified", $res[0]->getName());
        $this->assertEquals([$obj, "bootstrapNavsJustifiedFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[1]);
        $this->assertEquals("bsNavsJustified", $res[1]->getName());
        $this->assertEquals([$obj, "bootstrapNavsJustifiedFunction"], $res[1]->getCallable());
        $this->assertEquals(["html"], $res[1]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[2]);
        $this->assertEquals("bootstrapNavsPills", $res[2]->getName());
        $this->assertEquals([$obj, "bootstrapNavsPillsFunction"], $res[2]->getCallable());
        $this->assertEquals(["html"], $res[2]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[3]);
        $this->assertEquals("bsNavsPills", $res[3]->getName());
        $this->assertEquals([$obj, "bootstrapNavsPillsFunction"], $res[3]->getCallable());
        $this->assertEquals(["html"], $res[3]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[4]);
        $this->assertEquals("bootstrapNavsTabs", $res[4]->getName());
        $this->assertEquals([$obj, "bootstrapNavsTabsFunction"], $res[4]->getCallable());
        $this->assertEquals(["html"], $res[4]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[5]);
        $this->assertEquals("bsNavsTabs", $res[5]->getName());
        $this->assertEquals([$obj, "bootstrapNavsTabsFunction"], $res[5]->getCallable());
        $this->assertEquals(["html"], $res[5]->getSafe(new Node()));
    }
}
