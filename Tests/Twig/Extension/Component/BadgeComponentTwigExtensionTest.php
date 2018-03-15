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

use PHPUnit_Framework_TestCase;
use Twig_Node;
use Twig_SimpleFunction;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Component\BadgeComponentTwigExtension;

/**
 * Badge component Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\Component
 * @final
 */
final class BadgeComponentTwigExtensionTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions() {

        $obj = new BadgeComponentTwigExtension();

        $res = $obj->getFunctions();

        $this->assertCount(1, $res);

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[0]);
        $this->assertEquals('bootstrapBadge', $res[0]->getName());
        $this->assertEquals([$obj, 'bootstrapBadgeFunction'], $res[0]->getCallable());
        $this->assertEquals(['html'], $res[0]->getSafe(new Twig_Node()));
    }

    /**
     * Tests the bootstrapBadgeFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testBootstrapBadgeFunction() {

        $obj = new BadgeComponentTwigExtension();

        $arg0 = [];
        $res0 = '<span class="badge"></span>';
        $this->assertEquals($res0, $obj->bootstrapBadgeFunction($arg0));

        $arg9 = ['content' => 'content'];
        $res9 = '<span class="badge">content</span>';
        $this->assertEquals($res9, $obj->bootstrapBadgeFunction($arg9));
    }

}
