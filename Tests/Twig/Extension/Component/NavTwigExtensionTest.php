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

use Twig_Node;
use Twig_SimpleFunction;
use WBW\Bundle\BootstrapBundle\Tests\AbstractFrameworkTestCase;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Component\NavTwigExtension;

/**
 * Nav Twig extension text.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\Component
 * @final
 */
final class NavTwigExtensionTest extends AbstractFrameworkTestCase {

    /**
     * Items.
     *
     * @var array
     */
    private $items;

    /**
     * {@inheritdoc}
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
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions() {

        $obj = new NavTwigExtension();

        $res = $obj->getFunctions();

        $this->assertCount(3, $res);

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[0]);
        $this->assertEquals("bootstrapNavsJustified", $res[0]->getName());
        $this->assertEquals([$obj, "bootstrapNavsJustifiedFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[1]);
        $this->assertEquals("bootstrapNavsPills", $res[1]->getName());
        $this->assertEquals([$obj, "bootstrapNavsPillsFunction"], $res[1]->getCallable());
        $this->assertEquals(["html"], $res[1]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[2]);
        $this->assertEquals("bootstrapNavsTabs", $res[2]->getName());
        $this->assertEquals([$obj, "bootstrapNavsTabsFunction"], $res[2]->getCallable());
        $this->assertEquals(["html"], $res[2]->getSafe(new Twig_Node()));
    }

    /**
     * Tests the bootstrapNavsJustifiedFunction() method.
     *
     * @return void
     */
    public function testBootstrapNavsJustified() {

        $obj = new NavTwigExtension();

        $arg = ["items" => $this->items];
        $res = <<< 'EOT'
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

        $obj = new NavTwigExtension();

        $arg0 = ["items" => $this->items];
        $res0 = <<< 'EOT'
<ul class="nav nav-pills">
<li role="presentation"><a href="#">Home</a></li>
<li role="presentation"><a href="#">Profile</a></li>
<li role="presentation"><a href="#">Message</a></li>
</ul>
EOT;

        $this->assertEquals($res0, $obj->bootstrapNavsPills($arg0));

        $arg9 = ["items" => $this->items, "stacked" => true];
        $res9 = <<< 'EOT'
<ul class="nav nav-pills nav-stacked">
<li role="presentation"><a href="#">Home</a></li>
<li role="presentation"><a href="#">Profile</a></li>
<li role="presentation"><a href="#">Message</a></li>
</ul>
EOT;

        $this->assertEquals($res9, $obj->bootstrapNavsPills($arg9));
    }

    /**
     * Tests the bootstrapNavsTabsFunction() method.
     *
     * @return void
     */
    public function testBootstrapNavsTabs() {

        $obj = new NavTwigExtension();

        $arg = ["items" => $this->items];
        $res = <<< 'EOT'
<ul class="nav nav-tabs">
<li role="presentation"><a href="#">Home</a></li>
<li role="presentation"><a href="#">Profile</a></li>
<li role="presentation"><a href="#">Message</a></li>
</ul>
EOT;

        $this->assertEquals($res, $obj->bootstrapNavsTabs($arg));
    }

}
