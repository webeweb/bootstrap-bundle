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

use Symfony\Component\HttpFoundation\Request;
use Twig_Node;
use Twig_SimpleFunction;
use WBW\Bundle\BootstrapBundle\Tests\AbstractFrameworkTestCase;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Component\BreadcrumbTwigExtension;
use WBW\Bundle\CoreBundle\Navigation\NavigationTree;
use WBW\Bundle\CoreBundle\Tests\Fixtures\TestFixtures;

/**
 * Breadcrumb Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\Component
 */
class BreadcrumbTwigExtensionTest extends AbstractFrameworkTestCase {

    /**
     * Navigation tree
     *
     * @var NavigationTree
     */
    private $tree;

    /**
     * {@inheritdoc}
     */
    protected function setUp() {
        parent::setUp();

        // Set the Translator mock.
        $this->translator->expects($this->any())->method("trans")->willReturnCallback(function($id, array $parameters = [], $domain = null, $locale = null) {
            return $id;
        });

        // Set up a Navigation tree mock.
        $this->tree = TestFixtures::getNavigationTree();
    }

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions() {

        $obj = new BreadcrumbTwigExtension($this->twigEnvironment, $this->translator);

        $res = $obj->getFunctions();
        $this->assertCount(1, $res);

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[0]);
        $this->assertEquals("bootstrapBreadcrumbs", $res[0]->getName());
        $this->assertEquals([$obj, "bootstrapBreadcrumbsFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()));
    }

    /**
     * Tests the bootstrapBreadcrumbsFunction() method.
     *
     * @return void
     */
    public function testBootstrapBreadcrumbsFunction() {

        $obj = new BreadcrumbTwigExtension($this->twigEnvironment, $this->translator);

        $res = <<<'EOT'
<ol class="breadcrumb">
<li><a href="javascript:void(0);">GitHub</a></li>
<li class="active">Bootstrap bundle</li>
</ol>
EOT;
        $this->assertEquals($res, $obj->bootstrapBreadcrumbsFunction([], $this->tree, Request::create("https://github.com/webeweb/bootstrap-bundle")));
    }

}
