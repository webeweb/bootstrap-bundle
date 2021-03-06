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
use WBW\Bundle\CoreBundle\Navigation\NavigationTree;
use WBW\Bundle\CoreBundle\Tests\Fixtures\TestFixtures;

/**
 * Breadcrumb Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
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
     * Tests the bootstrapBreadcrumbsFunction() method.
     *
     * @return void
     */
    public function testBootstrapBreadcrumbsFunction(): void {

        $obj = new BreadcrumbTwigExtension($this->twigEnvironment, $this->translator);

        $res = file_get_contents(__DIR__ . "/BreadcrumbTwigExtensionTest.testBootstrapBreadcrumbsFunction.html.txt");
        $this->assertEquals($res, $obj->bootstrapBreadcrumbsFunction([], $this->tree, Request::create("https://github.com/webeweb/bootstrap-bundle")) . "\n");
    }

    /**
     * Tests the getFilters() method.
     *
     * @return void
     */
    public function testGetFilters(): void {

        $obj = new BreadcrumbTwigExtension($this->twigEnvironment, $this->translator);

        $res = $obj->getFilters();
        $this->assertCount(0, $res);
    }

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions(): void {

        $obj = new BreadcrumbTwigExtension($this->twigEnvironment, $this->translator);

        $res = $obj->getFunctions();
        $this->assertCount(2, $res);

        $this->assertInstanceOf(TwigFunction::class, $res[0]);
        $this->assertEquals("bootstrapBreadcrumbs", $res[0]->getName());
        $this->assertEquals([$obj, "bootstrapBreadcrumbsFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[1]);
        $this->assertEquals("bsBreadcrumbs", $res[1]->getName());
        $this->assertEquals([$obj, "bootstrapBreadcrumbsFunction"], $res[1]->getCallable());
        $this->assertEquals(["html"], $res[1]->getSafe(new Node()));
    }

    /**
     * Tests the __construct() method.
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
