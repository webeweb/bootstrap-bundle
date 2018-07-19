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
use WBW\Bundle\BootstrapBundle\Manager\ProvidersManager;
use WBW\Bundle\BootstrapBundle\Tests\Cases\AbstractBootstrapFrameworkTestCase;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Component\AlertTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Component\BadgeTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Component\BreadcrumbTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Component\ButtonGroupTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Component\DropdownTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Component\GlyphiconTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Component\LabelTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Component\NavComponentTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Component\ProgressBarTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\CSS\ButtonTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\CSS\CodeTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\CSS\GridTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\CSS\ImageTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\CSS\TypographyTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Plugin\FontAwesomePluginTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Plugin\JQueryInputMaskPluginTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Plugin\MaterialDesignIconicFontPluginTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Plugin\MeteoconsPluginTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Utility\FormButtonUtilityTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Utility\RoleLabelUtilityTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Utility\TableButtonUtilityTwigExtension;

/**
 * Bootstrap extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\DependencyInjection
 * @final
 */
final class BootstrapExtensionTest extends AbstractBootstrapFrameworkTestCase {

    /**
     * {@inheritdoc}
     */
    protected function setUp() {
        parent::setUp();
    }

    /**
     * Tests the load() method.
     *
     * @return void
     */
    public function testLoad() {

        $obj = new BootstrapExtension();

        $obj->load([], $this->containerBuilder);

        // Services
        $this->assertInstanceOf(KernelEventListener::class, $this->containerBuilder->get(KernelEventListener::SERVICE_NAME));
        $this->assertInstanceOf(NotificationEventListener::class, $this->containerBuilder->get(NotificationEventListener::SERVICE_NAME));
        $this->assertInstanceOf(ProvidersManager::class, $this->containerBuilder->get(ProvidersManager::SERVICE_NAME));

        // CSS
        $this->assertInstanceOf(ButtonTwigExtension::class, $this->containerBuilder->get(ButtonTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(CodeTwigExtension::class, $this->containerBuilder->get(CodeTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(GridTwigExtension::class, $this->containerBuilder->get(GridTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(ImageTwigExtension::class, $this->containerBuilder->get(ImageTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(TypographyTwigExtension::class, $this->containerBuilder->get(TypographyTwigExtension::SERVICE_NAME));

        // Component
        $this->assertInstanceOf(AlertTwigExtension::class, $this->containerBuilder->get(AlertTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(BadgeTwigExtension::class, $this->containerBuilder->get(BadgeTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(BreadcrumbTwigExtension::class, $this->containerBuilder->get(BreadcrumbTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(ButtonGroupTwigExtension::class, $this->containerBuilder->get(ButtonGroupTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(DropdownTwigExtension::class, $this->containerBuilder->get(DropdownTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(GlyphiconTwigExtension::class, $this->containerBuilder->get(GlyphiconTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(LabelTwigExtension::class, $this->containerBuilder->get(LabelTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(NavComponentTwigExtension::class, $this->containerBuilder->get(NavComponentTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(ProgressBarTwigExtension::class, $this->containerBuilder->get(ProgressBarTwigExtension::SERVICE_NAME));

        // Plugin
        $this->assertInstanceOf(FontAwesomePluginTwigExtension::class, $this->containerBuilder->get(FontAwesomePluginTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(JQueryInputMaskPluginTwigExtension::class, $this->containerBuilder->get(JQueryInputMaskPluginTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(MaterialDesignIconicFontPluginTwigExtension::class, $this->containerBuilder->get(MaterialDesignIconicFontPluginTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(MeteoconsPluginTwigExtension::class, $this->containerBuilder->get(MeteoconsPluginTwigExtension::SERVICE_NAME));

        // Utility
        $this->assertInstanceOf(FormButtonUtilityTwigExtension::class, $this->containerBuilder->get(FormButtonUtilityTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(RoleLabelUtilityTwigExtension::class, $this->containerBuilder->get(RoleLabelUtilityTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(TableButtonUtilityTwigExtension::class, $this->containerBuilder->get(TableButtonUtilityTwigExtension::SERVICE_NAME));
    }

}
