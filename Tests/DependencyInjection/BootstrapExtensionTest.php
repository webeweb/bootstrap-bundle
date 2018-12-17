<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\DependencyInjection;

use WBW\Bundle\BootstrapBundle\DependencyInjection\BootstrapExtension;
use WBW\Bundle\BootstrapBundle\Tests\AbstractTestCase;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Component\AlertTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Component\BadgeTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Component\BreadcrumbTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Component\ButtonGroupTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Component\DropdownTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Component\GlyphiconTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Component\LabelTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Component\NavTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Component\ProgressBarTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\CSS\ButtonTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\CSS\CodeTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\CSS\GridTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\CSS\ImageTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\CSS\TypographyTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\RendererTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Utility\FormButtonTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Utility\RoleLabelTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Utility\TableButtonTwigExtension;

/**
 * Bootstrap extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\DependencyInjection
 */
class BootstrapExtensionTest extends AbstractTestCase {

    /**
     * Tests the load() method.
     *
     * @return void
     */
    public function testLoad() {

        $obj = new BootstrapExtension();

        $obj->load([], $this->containerBuilder);

        // CSS Twig extensions
        $this->assertInstanceOf(ButtonTwigExtension::class, $this->containerBuilder->get(ButtonTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(CodeTwigExtension::class, $this->containerBuilder->get(CodeTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(GridTwigExtension::class, $this->containerBuilder->get(GridTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(ImageTwigExtension::class, $this->containerBuilder->get(ImageTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(TypographyTwigExtension::class, $this->containerBuilder->get(TypographyTwigExtension::SERVICE_NAME));

        // Component Twig extensions
        $this->assertInstanceOf(AlertTwigExtension::class, $this->containerBuilder->get(AlertTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(BadgeTwigExtension::class, $this->containerBuilder->get(BadgeTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(BreadcrumbTwigExtension::class, $this->containerBuilder->get(BreadcrumbTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(ButtonGroupTwigExtension::class, $this->containerBuilder->get(ButtonGroupTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(DropdownTwigExtension::class, $this->containerBuilder->get(DropdownTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(GlyphiconTwigExtension::class, $this->containerBuilder->get(GlyphiconTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(LabelTwigExtension::class, $this->containerBuilder->get(LabelTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(NavTwigExtension::class, $this->containerBuilder->get(NavTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(ProgressBarTwigExtension::class, $this->containerBuilder->get(ProgressBarTwigExtension::SERVICE_NAME));

        // Utility Twig extensions
        $this->assertInstanceOf(FormButtonTwigExtension::class, $this->containerBuilder->get(FormButtonTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(RoleLabelTwigExtension::class, $this->containerBuilder->get(RoleLabelTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(TableButtonTwigExtension::class, $this->containerBuilder->get(TableButtonTwigExtension::SERVICE_NAME));

        // Renderer Twig extensions
        $this->assertInstanceOf(RendererTwigExtension::class, $this->containerBuilder->get(RendererTwigExtension::SERVICE_NAME));
    }

}
