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

use Symfony\Component\HttpFoundation\Request;
use Twig\Node\Node;
use Twig\TwigFunction;
use WBW\Bundle\BootstrapBundle\Tests\AbstractTestCase;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Component\BreadcrumbTwigExtension;
use WBW\Bundle\CoreBundle\Tests\Fixtures\TestFixtures;
use WBW\Library\Symfony\Assets\Navigation\NavigationTree;

/**
 * Breadcrumb Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\Component
 */
class BreadcrumbTwigExtensionTest extends AbstractTestCase {

    /**
     * Navigation tree
     *
     * @var NavigationTree
     */
    private $tree;

    /**
     * {@inheritDoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set up a Navigation tree mock.
        $this->tree = TestFixtures::getNavigationTree();
    }

    /**
     * Tests bootstrapBreadcrumbsFunction()
     *
     * @return void
     */
    public function testBootstrapBreadcrumbsFunction(): void {

        $obj = new BreadcrumbTwigExtension($this->twigEnvironment, $this->translator);

        $res = file_get_contents(__DIR__ . "/BreadcrumbTwigExtensionTest.testBootstrapBreadcrumbsFunction.html.txt");
        $this->assertEquals($res, $obj->bootstrapBreadcrumbsFunction($this->tree, Request::create("https://github.com/webeweb/bootstrap-bundle")) . "\n");
    }

    /**
     * Tests getFilters()
     *
     * @return void
     */
    public function testGetFilters(): void {

        $obj = new BreadcrumbTwigExtension($this->twigEnvironment, $this->translator);

        $res = $obj->getFilters();
        $this->assertCount(0, $res);
    }

    /**
     * Tests getFunctions()
     *
     * @return void
     */
    public function testGetFunctions(): void {

        $obj = new BreadcrumbTwigExtension($this->twigEnvironment, $this->translator);

        $res = $obj->getFunctions();
        $this->assertCount(2, $res);

        $i = -1;

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bootstrapBreadcrumbs", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapBreadcrumbsFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bsBreadcrumbs", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapBreadcrumbsFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw.bootstrap.twig.extension.component.breadcrumb", BreadcrumbTwigExtension::SERVICE_NAME);

        $obj = new BreadcrumbTwigExtension($this->twigEnvironment, $this->translator);

        $this->assertSame($this->twigEnvironment, $obj->getTwigEnvironment());
        $this->assertSame($this->translator, $obj->getTranslator());
    }
}
