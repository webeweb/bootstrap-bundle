<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Twig\Extension;

use Twig_Node;
use Twig_SimpleFilter;
use WBW\Bundle\BootstrapBundle\Tests\AbstractFrameworkTestCase;
use WBW\Bundle\BootstrapBundle\Twig\Extension\BootstrapRendererTwigExtension;

/**
 * Bootstrap renderer Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Twig\Extension
 * @final
 */
final class BootstrapRendererTwigExtensionTest extends AbstractFrameworkTestCase {

    /**
     * Tests the getFilters() method.
     *
     * @return void
     */
    public function testGetFilters() {

        $obj = new BootstrapRendererTwigExtension();

        $res = $obj->getFilters();

        $this->assertCount(1, $res);

        $this->assertInstanceOf(Twig_SimpleFilter::class, $res[0]);
        $this->assertEquals("bootstrapScript", $res[0]->getName());
        $this->assertEquals([$obj, "bootstrapScriptFilter"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()));
    }

    /**
     * Tests the bootstrapScriptFilter() method.
     *
     * @return void
     */
    public function testBootstrapScriptFilter() {

        $obj = new BootstrapRendererTwigExtension();

        $res = <<<'EOT'
<script type="text/javascript">
content
</script>
EOT;
        $this->assertEquals($res, $obj->bootstrapScriptFilter("content"));
    }

    /**
     * Tests the renderIcon() method.
     *
     * @return void
     */
    public function testRenderIcon() {

        $res0 = "";
        $this->assertEquals($res0, BootstrapRendererTwigExtension::renderIcon("::"));

        $res1 = '<i class="zmdi zmdi-home"></i>';
        $this->assertEquals($res1, BootstrapRendererTwigExtension::renderIcon("zmdi:home"));

        $res2 = '<i class="meteocons" data-meteocons="A"></i>';
        $this->assertEquals($res2, BootstrapRendererTwigExtension::renderIcon("mc:A"));

        $res3 = '<i class="fa fa-home"></i>';
        $this->assertEquals($res3, BootstrapRendererTwigExtension::renderIcon("fa:home"));

        $res4 = '<span class="glyphicon glyphicon-home" aria-hidden="true"></span>';
        $this->assertEquals($res4, BootstrapRendererTwigExtension::renderIcon("g:home"));

        $res5 = '<span class="glyphicon glyphicon-home" aria-hidden="true"></span>';
        $this->assertEquals($res5, BootstrapRendererTwigExtension::renderIcon("b:home"));

        $res9 = '<span class="glyphicon glyphicon-home" aria-hidden="true"></span>';
        $this->assertEquals($res9, BootstrapRendererTwigExtension::renderIcon("home"));
    }

}
