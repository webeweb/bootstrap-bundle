<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\DependencyInjection;

use WBW\Bundle\BootstrapBundle\DependencyInjection\BootstrapExtension;
use WBW\Bundle\BootstrapBundle\EventListener\KernelEventListener;
use WBW\Bundle\BootstrapBundle\EventListener\NotificationEventListener;
use WBW\Bundle\BootstrapBundle\Manager\Asset\CSSAssetManager;
use WBW\Bundle\BootstrapBundle\Manager\Asset\JSAssetManager;
use WBW\Bundle\BootstrapBundle\Manager\ThemeManager;
use WBW\Bundle\BootstrapBundle\Tests\AbstractBootstrapFrameworkTestCase;
use WBW\Bundle\BootstrapBundle\Twig\Extension\BootstrapRendererTwigExtension;
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
use WBW\Bundle\BootstrapBundle\Twig\Extension\Plugin\FontAwesomeTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Plugin\JQueryInputMaskTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Plugin\MaterialDesignIconicFontTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Plugin\MeteoconsTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Utility\FormButtonTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Utility\RoleLabelTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Utility\TableButtonTwigExtension;

/**
 * Bootstrap extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\DependencyInjection
 * @final
 */
final class BootstrapExtensionTest extends AbstractBootstrapFrameworkTestCase {

    /**
     * Tests the load() method.
     *
     * @return void
     */
    public function testLoad() {

        $obj = new BootstrapExtension();

        $obj->load([], $this->containerBuilder);

        // Event listeners
        $this->assertInstanceOf(KernelEventListener::class, $this->containerBuilder->get(KernelEventListener::SERVICE_NAME));
        $this->assertInstanceOf(NotificationEventListener::class, $this->containerBuilder->get(NotificationEventListener::SERVICE_NAME));

        // Manager
        $this->assertInstanceOf(ThemeManager::class, $this->containerBuilder->get(ThemeManager::SERVICE_NAME));

        // Twig extensions CSS
        $this->assertInstanceOf(ButtonTwigExtension::class, $this->containerBuilder->get(ButtonTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(CodeTwigExtension::class, $this->containerBuilder->get(CodeTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(GridTwigExtension::class, $this->containerBuilder->get(GridTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(ImageTwigExtension::class, $this->containerBuilder->get(ImageTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(TypographyTwigExtension::class, $this->containerBuilder->get(TypographyTwigExtension::SERVICE_NAME));

        // Twig extensions Component
        $this->assertInstanceOf(AlertTwigExtension::class, $this->containerBuilder->get(AlertTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(BadgeTwigExtension::class, $this->containerBuilder->get(BadgeTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(BreadcrumbTwigExtension::class, $this->containerBuilder->get(BreadcrumbTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(ButtonGroupTwigExtension::class, $this->containerBuilder->get(ButtonGroupTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(DropdownTwigExtension::class, $this->containerBuilder->get(DropdownTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(GlyphiconTwigExtension::class, $this->containerBuilder->get(GlyphiconTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(LabelTwigExtension::class, $this->containerBuilder->get(LabelTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(NavTwigExtension::class, $this->containerBuilder->get(NavTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(ProgressBarTwigExtension::class, $this->containerBuilder->get(ProgressBarTwigExtension::SERVICE_NAME));

        // Twig extensions Plugin
        $this->assertInstanceOf(FontAwesomeTwigExtension::class, $this->containerBuilder->get(FontAwesomeTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(JQueryInputMaskTwigExtension::class, $this->containerBuilder->get(JQueryInputMaskTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(MaterialDesignIconicFontTwigExtension::class, $this->containerBuilder->get(MaterialDesignIconicFontTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(MeteoconsTwigExtension::class, $this->containerBuilder->get(MeteoconsTwigExtension::SERVICE_NAME));

        // Twig extensions Renderer
        $this->assertInstanceOf(BootstrapRendererTwigExtension::class, $this->containerBuilder->get(BootstrapRendererTwigExtension::SERVICE_NAME));

        // Twig extensions Utility
        $this->assertInstanceOf(FormButtonTwigExtension::class, $this->containerBuilder->get(FormButtonTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(RoleLabelTwigExtension::class, $this->containerBuilder->get(RoleLabelTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(TableButtonTwigExtension::class, $this->containerBuilder->get(TableButtonTwigExtension::SERVICE_NAME));
    }

}
